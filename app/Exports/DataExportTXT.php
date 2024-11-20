<?php

namespace App\Exports;

class DataExportTXT
{
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function generateTXT()
    {
        $content = implode(': ', $this->data[0]) . "\n";

        foreach (array_slice($this->data, 1) as $row) {
            $content .= implode(', ', $row) . "\n";
        }

        return (string) $content;
    }
}
