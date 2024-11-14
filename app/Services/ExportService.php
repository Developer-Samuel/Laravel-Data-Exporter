<?php

namespace App\Services;

use Maatwebsite\Excel\Facades\Excel;
use App\Exports\DataExportXLSX;
use App\Exports\DataExportXML;
use App\Exports\DataExportCSV;
use App\Exports\DataExportTXT;

class ExportService
{
    public static function generateXlsx()
    {
        $data = DataService::prepareData();
        return Excel::download(new DataExportXLSX($data), 'data_export.xlsx');
    }

    public static function generateCsv()
    {
        $data = DataService::prepareData();
        $export = new DataExportCSV($data);
        $content = $export->generateCSV();

        return response($content, 200)
            ->header('Content-Type', 'text/csv')
            ->header('Content-Disposition', 'attachment; filename="data_export.csv"');
    }

    public static function generateXml()
    {
        $data = DataService::prepareData();
        $export = new DataExportXML($data);
        $content = $export->generateXML();

        return response($content, 200)
            ->header('Content-Type', 'application/xml')
            ->header('Content-Disposition', 'attachment; filename="data_export.xml"');
    }

    public static function generateTxt()
    {
        $data = DataService::prepareData();
        $export = new DataExportTXT($data);
        $content = $export->generateTXT();

        return response($content, 200)
            ->header('Content-Type', 'text/plain')
            ->header('Content-Disposition', 'attachment; filename="data_export.txt"');
    }
}
