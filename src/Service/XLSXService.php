<?php

use PhpOffice\PhpSpreadsheet\IOFactory;

class XLSXService
{

    private static function loadFile()
    {
        $filePath = __DIR__ . "/../../private/ranking.xlsx";
        return IOFactory::load($filePath);
    }

    public static function readHeadersFromFile(){
        $spreadsheet = self::loadFile();
        $sheet = $spreadsheet->getActiveSheet();
        $headers = ['A' => null, 'B' => null, 'C' => null, 'D' => null, 'E' => null];
        foreach ($headers as $column => $columnData) {
            $headers[$column] = $sheet->getCell($column . '2')->getValue();
        }
        return $headers;
    }

    public static function readDataFromFile()
    {
        $spreadsheet = self::loadFile();
        $sheet = $spreadsheet->getActiveSheet();

        $startColumn = 'A';
        $startRow = 3;
        $endColumn = $sheet->getHighestColumn();
        $endRow = $sheet->getHighestRow();
        $data = [];


        for ($row = $startRow; $row <= $endRow; $row++) {
            for ($col = $startColumn; $col <= $endColumn; $col++) {
                $cellValue = $sheet->getCell($col . $row)->getValue();
                $data[$row][$col] = $cellValue;
            }
        }
        usort($data, function ($a, $b) {
            return $b['B'] <=> $a['B'];
        });
    
        return $data;
    }
}
