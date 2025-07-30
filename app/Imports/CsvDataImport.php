<?php

namespace App\Imports;

use App\Models\CsvData;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CsvDataImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    
    public function model(array $row)
    {
        return new CsvData([
            'colonna1' => $row['colonna1'],
            'colonna2' => $row['colonna2'],
            
        ]);
    }
    
}
