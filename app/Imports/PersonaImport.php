<?php

namespace App\Imports;

use App\Models\Persona;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PersonaImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Persona($row);
    }

    public function rules(): array
    {
        return [
            'code' => 'required',
            'job' => 'required',
            'age' => 'required',
            'background' => 'required',
            'identity1' => 'required',
            'identity1_score' => 'required',
            'identity2' => 'required',
            'identity2_score' => 'required',
            'identity3' => 'required',
            'identity3_score' => 'required',
            'identity4' => 'required',
            'identity4_score' => 'required',
            'img' => 'required'
        ];
    }
}
