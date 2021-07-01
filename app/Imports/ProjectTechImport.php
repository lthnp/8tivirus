<?php

namespace App\Imports;

use App\Models\ProjectTech;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProjectTechImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new ProjectTech($row);
    }

    public function rules(): array
    {
        return [
            'code' => 'required',
            'type' => 'required',
            'tech' => 'required'
        ];
    }
}
