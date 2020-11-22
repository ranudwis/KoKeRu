<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ruang;
use Carbon\Carbon;

class ReportController extends Controller
{
    public function index(Request $request)
    {
        $reportDate = new Carbon();
        $now = new Carbon();
        $status = 'semua';

        if ($request->has('date') && $request->has('status')) {
            $reportDate = new Carbon($request->date);
            $status = $request->status;
        }

        $rooms = Ruang::with('cs')
            ->withCount([
                'laporan' => $this->reportDateQuery($reportDate),
            ]);

        if ($status == 'belum') {
            $rooms = $rooms->whereDoesntHave('laporan', $this->reportDateQuery($reportDate));
        } elseif ($status == 'sudah') {
            $rooms = $rooms->whereHas('laporan', $this->reportDateQuery($reportDate));
        }

        $rooms = $rooms->get();

        return view('manager/report', compact('reportDate', 'now', 'status', 'rooms'));
    }

    private function reportDateQuery($reportDate)
    {
        return function ($query) use ($reportDate) {
            $query->where('created_at', $reportDate);
        };
    }
}
