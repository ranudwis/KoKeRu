<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;
use App\Models\User;
use App\Exports\ReportExport;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Dompdf\Dompdf;

class ReportController extends Controller
{
    private $reportDate;
    private $now;
    private $status;
    private $filename;

    public function __construct()
    {
        $this->reportDate = new Carbon();
        $this->now = new Carbon();
        $this->status = 'semua';
    }

    public function index(Request $request)
    {
        $rooms = $this->queryRooms($request);

        return view('manager.report', [
            'reportDate' => $this->reportDate,
            'now' => $this->now,
            'status' => $this->status,
            'rooms' => $rooms,
        ]);
    }

    public function pdf(Request $request)
    {
        $rooms = $this->queryRooms($request);
        $manager = User::where('tipe_akun', 'manager')->first();

        $view = view('manager.pdfreport', [
            'reportDate' => $this->reportDate,
            'now' => $this->now,
            'status' => $this->status,
            'rooms' => $rooms,
            'manager' => $manager
        ])->render();

        $dompdf = new Dompdf();
        $dompdf->getOptions()->setChroot(public_path());
        $dompdf->loadHtml($view);

        $dompdf->setPaper('A4');
        $dompdf->render();

        $dompdf->stream($this->filename);
    }

    public function excel(Request $request)
    {
        $rooms = $this->queryRooms($request);
        $export = new ReportExport($this->reportDate, $rooms);

        return Excel::download($export, $this->filename . '.xlsx');
    }

    private function queryRooms(Request $request)
    {
        if ($request->has('date') && $request->has('status')) {
            $this->reportDate = new Carbon($request->date);
            $this->status = $request->status;
        }

        $rooms = Ruang::with('cs')
            ->withCount([
                'laporan' => $this->reportDateQuery(),
            ]);

        if ($this->status == 'belum') {
            $rooms = $rooms->whereDoesntHave('laporan', $this->reportDateQuery());
        } elseif ($this->status == 'sudah') {
            $rooms = $rooms->whereHas('laporan', $this->reportDateQuery());
        }

        $rooms = $rooms->get();
        $this->filename = 'Laporan ' . $this->reportDate->isoFormat('DD MMMM YYYY');

        return $rooms;
    }

    private function reportDateQuery()
    {
        return function ($query) {
            $query->where('created_at', $this->reportDate);
        };
    }
}
