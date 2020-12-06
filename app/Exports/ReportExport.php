<?php

namespace App\Exports;

use App\Models\Ruang;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use Carbon\Carbon;

class ReportExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithStyles
{
    private $rooms;
    private $reportDate;
    private $now;

    public function __construct($reportDate, $rooms)
    {
        $this->reportDate = $reportDate;
        $this->rooms = $rooms;
        $this->now = new Carbon();
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return $this->rooms;
    }

    public function map($room): array
    {
        return [
            $room->nama,
            $room->getNamaCs(),
            $room->getStatusString()
        ];
    }

    public function headings(): array
    {
        return [
            [
                ' ',
                'Laporan Harian Kebersian dan Kerapihan Ruangan Gedung Bersama Maju',
                ' ',
            ], [
                ' ',
                'Hari ' . $this->reportDate->isoFormat('dddd') . ' Tanggal ' . $this->reportDate->isoFormat('DD MMMM YYYY'),
                ' ',
            ], [
                ' ',
                'Tanggal Cetak ' . $this->now->isoFormat('DD MMMM YYYY') . ' Jam ' . $this->now->isoFormat('HH:mm') . ' WIB',
                ' ',
            ], [
                'Ruang',
                'Nama CS',
                'Status',
            ]
        ];
    }

    public function styles($sheet)
    {
        $centerAlignment = [
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ]
        ];

        $titleStyles = [
            'font' => [
                'bold' => true
            ],
        ] + $centerAlignment;

        return [
            1 => $titleStyles,
            2 => $titleStyles,
            3 => $centerAlignment,
            4 => $titleStyles,
        ];
    }
}
