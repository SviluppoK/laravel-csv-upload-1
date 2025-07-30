<?php

namespace App\Imports;

use App\Models\CsvData;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CsvDataImport implements ToModel, WithHeadingRow, WithBatchInserts, WithChunkReading
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

    public function batchSize(): int
        {
            return 5000;
        }

        public function chunkSize(): int
        {
            return 5000;
        }
    
}
