<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;
use Carbon\Carbon;

class ReportController extends Controller
{
    private $reportDate;
    private $now;
    private $status;

    public function index(Request $request)
    {
        $rooms = $this->queryRooms($request);

        return view('manager/report', [
            'reportDate' => $this->reportDate,
            'now' => $this->now,
            'status' => $this->status,
            'rooms' => $rooms,
        ]);
    }

    public function pdf(Request $request)
    {
        $rooms = $this->queryRooms($request);

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
