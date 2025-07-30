<?php

namespace App\Http\Controllers;

use App\Imports\CsvDataImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class CsvImportController extends Controller
{
    public function import_form()
    {
        return view('upload');
    }


    public function import(Request $request)
    {
        Excel::import(new CsvDataImport, $request->file('file'));

        return back()->with('success', 'File importato con successo!');
    }
}
