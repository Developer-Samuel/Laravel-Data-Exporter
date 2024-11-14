<?php

namespace App\Exports;

use League\Csv\Writer;

class DataExportCSV
{
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function generateCSV()
    {
        $content = Writer::createFromFileObject(new \SplTempFileObject());
        $content->insertOne($this->data[0]);

        $content->insertAll(array_slice($this->data, 1));

        return (string) $content;
    }
}
