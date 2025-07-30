<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CsvImportController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/import', [CsvImportController::class, 'import_form']);
Route::post('import', [CsvImportController::class, 'import']);

