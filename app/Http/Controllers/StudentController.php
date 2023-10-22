<?php

namespace App\Http\Controllers;

use App\Imports\StudentImport;
use App\Exports\StudentExport;
use App\Models\Student;
use Illuminate\Http\Request;

use PDO;
use Excel;
use CSV;
use PDF;


class StudentController extends Controller
{
    //student index function
    public function index()
    {
        // return view('Fruits.index');
        $students = Student::all();
        // return 'hi';
        return view('index', compact("students"));
    }

    // file import function
    public function import()
    {
        return view('import');
    }

    public function SaveImport(Request $request)
    {
        // Check if a file was uploaded
        if ($request->hasFile('file')) {
            // Store the uploaded file temporarily
            $path = $request->file('file')->store('temp-import-file', 'public');

            // Import the file
            Excel::import(new StudentImport, storage_path("app/public/$path"));

            // Return a response
            return 'Data imported';
        } else {
            return 'No file uploaded.';
        }
    }

    // file export function
    public function exportCSV()
    {
        return CSV::download(new StudentExport, 'student-record.csv');
    }

    // pdf export function
    public function exportPDf()
    {
        $students = Student::all();
        $pdf = PDF::loadview('index', compact('students'));
        return $pdf->download('student-list.pdf');
    }
    // student create function
    public function create()
    {
        // return 'hi';
        return view('welcome');
    }

    // student store function
    public function store(Request $request)
    {


        // Validation
        $validatedData = $request->validate([
            'name' => 'required|string|max:60',
            'email' => 'required|string|max:60',
            'address' => 'nullable|string|max:60',

        ]);
        Student::create($validatedData);

        return redirect()->back()->withSuccess('Data successfully save');
    }
}
