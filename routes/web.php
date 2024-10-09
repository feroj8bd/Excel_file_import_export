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
//route for  index
Route::get('/student', [StudentController::class, 'index'])->name('student.index');

//route for  create
Route::post('/student-store', [StudentController::class, 'store'])->name('student.store');
Route::get('/student-create', [StudentController::class, 'create'])->name('student.create');

//route for  import
Route::get('/student-import', [StudentController::class, 'import'])->name('student.import');

//route for  SaveImport
Route::post('/student-import', [StudentController::class, 'SaveImport'])->name('save.import');

//route for exportCSV
Route::get('/student-export', [StudentController::class, 'exportCSV'])->name('file.export');

//route for exportPDf
Route::get('/student-export-pdf', [StudentController::class, 'exportPDf'])->name('export-pdf.file');