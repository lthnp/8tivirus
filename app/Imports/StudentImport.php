<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class StudentImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Student($row);
    }

    public function rules(): array
    {
        return [
            'code' => 'required',
            'student_id' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'nickname' => 'required',
            'firstname_th' => 'required',
            'lastname_th' => 'required',
            'nickname_th' => 'required',
            'email' => 'required',
            'fb' => 'required',
            'portfolio' => 'required',
            'img' => 'required',
            'img_art' => 'required',
            'art_url' => 'required',
            'role' => 'required',
            'interview_url' => 'required'
        ];
    }
}
