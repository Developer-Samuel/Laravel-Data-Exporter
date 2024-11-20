<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class DataExportXLSX implements FromCollection, WithHeadings, WithStyles
{
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function collection()
    {
        return collect(array_slice($this->data, 1));
    }

    public function headings(): array
    {
        return $this->data[0];
    }

    public function styles(Worksheet $sheet)
    {
        $lastRow = count($this->data);
        $sheet->getStyle('A1:F' . $lastRow)->getAlignment()->setHorizontal(Alignment::HORIZONTAL_CENTER);
        $sheet->getStyle('A1:F' . $lastRow)->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);

        $sheet->getStyle('A1:F1')->getFont()->setBold(true);
        $sheet->getStyle('A1:F1')->getFont()->setSize(14);

        $sheet->getColumnDimension('E')->setWidth(40);
        $sheet->getColumnDimension('F')->setWidth(15);

        foreach (range('B', 'D') as $columnID) {
            $sheet->getColumnDimension($columnID)->setWidth(25);

            $sheet->getStyle($columnID)->getAlignment()->setIndent(1);
            $sheet->getStyle($columnID)->getAlignment()->setVertical(Alignment::VERTICAL_CENTER);
        }
    }
}
