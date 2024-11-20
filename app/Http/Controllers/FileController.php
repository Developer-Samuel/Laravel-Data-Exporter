<?php

namespace App\Http\Controllers;

use App\Services\ExportService;

class FileController extends Controller
{
    public function generateXLSX()
    {
        return ExportService::generateXlsx();
    }
    public function generateCSV()
    {
        return ExportService::generateCsv();
    }
    public function generateXML()
    {
        return ExportService::generateXml();
    }
    public function generateTXT()
    {
        return ExportService::generateTxt();
    }
}
