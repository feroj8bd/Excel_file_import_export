<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

use log;

class StudentImport implements ToModel, WithHeadingRow, WithValidation
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Student([
            'name'    => $row['name'],
            'email'   => $row['email'],
            'address' => $row['address'],
        ]);
    }

    /**
     * Validation rules
     */
    public function rules(): array
    {
        return [
            '*.name' => 'required|string',
            '*.email' => 'required|email',
            '*.address' => 'nullable|string',
        ];
    }
}