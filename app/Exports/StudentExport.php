<?php

namespace App\Exports;


use App\Models\Student;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class StudentExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // Get all students for export
        return collect(Student::getAllStudent());
    }

    public function headings(): array
    {
        return ['Id', 'Name', 'Email', 'Address'];
    }
}