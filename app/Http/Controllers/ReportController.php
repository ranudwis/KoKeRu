<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;
use App\Models\User;
use Carbon\Carbon;
use Dompdf\Dompdf;

class ReportController extends Controller
{
    private $reportDate;
    private $now;
    private $status;

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

        $filename = 'Laporan ' . $this->reportDate->isoFormat('DD MMMM YYYY')        ;

        $dompdf->stream($filename);
    }

    private function queryRooms(Request $request)
    {
        $this->reportDate = new Carbon();
        $this->now = new Carbon();
        $this->status = 'semua';

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

        return $rooms;
    }

    private function reportDateQuery()
    {
        return function ($query) {
            $query->where('created_at', $this->reportDate);
        };
    }
}
