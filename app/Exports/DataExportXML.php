<?php

namespace App\Exports;

use Spatie\ArrayToXml\ArrayToXml;

class DataExportXML
{
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function generateXML(): string
    {
        $xml = ['Users' => []];

        foreach (array_slice($this->data, 1) as $row) {
            $users = [
                'ID' => $row[0],
                'FirstName' => $row[1],
                'LastName' => $row[2],
                'Username' => $row[3],
                'Email' => $row[4],
                'Gender' => $row[5],
            ];
            $xml['Users']['User'][] = $users;
        }

        return ArrayToXml::convert($xml, [
            'rootElementName' => 'root',
            '_attributes' => ['version' => '1.0', 'encoding' => 'UTF-8'],
        ]);
    }
}
