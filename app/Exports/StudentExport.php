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
    // import excel file data
    public function collection()
    {
        return collect(Student::getAllStudent());
    }

    //export excel file data
    public function headings(): array
    {
        return ['Id', 'Name', 'Email', 'Address'];
    }
}
