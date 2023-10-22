<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student', [StudentController::class, 'index'])->name('student.index');


Route::post('/student-store', [StudentController::class, 'store'])->name('student.store');

Route::get('/student-import', [StudentController::class, 'import'])->name('student.import');

Route::post('/student-import', [StudentController::class, 'SaveImport'])->name('save.import');


Route::get('/student-export', [StudentController::class, 'exportCSV'])->name('file.export');

Route::get('/student-export-pdf', [StudentController::class, 'exportPDf'])->name('export-pdf.file');
