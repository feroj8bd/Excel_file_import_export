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
        $students = Student::all();
        return view('index', compact('students'));
    }

    // file import function
    public function import()
    {
        return view('import');
    }

    public function SaveImport(Request $request)
    {
        // Validate that the file is an Excel or CSV file
        $request->validate([
            'file' => 'required|mimes:xlsx,csv',
        ]);

        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('temp-import-file', 'public');
            // dd(storage_path("app/public/$path"));

            Excel::import(new StudentImport, storage_path("app/public/$path"));

            return redirect()->back()->with('success', 'Data imported successfully');
        } else {
            return redirect()->back()->with('error', 'No file uploaded.');
        }
    }



    // file export function
    public function exportCSV()
    {
        return Excel::download(new StudentExport, 'student-record.csv');
    }

    // pdf export function
    public function exportPDF()
    {
        $students = Student::all();
        $pdf = PDF::loadView('index', compact('students'));
        return $pdf->download('student-list.pdf');
    }
    // student create function
    public function create()
    {
        // return 'hi';
        return view('create');
    }


    // student store function
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:60',
            'email' => 'required|string|max:60',
            'address' => 'nullable|string',
        ]);

        Student::create($validatedData);
        return redirect()->back()->with('success', 'Data successfully saved');
    }
}