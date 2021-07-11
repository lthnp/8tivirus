<?php

namespace App\Imports;

use App\Models\ProjectDetail;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProjectDetailImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new ProjectDetail($row);
    }

    public function rules(): array
    {
        return [
            'code' => 'required',
            'func1' => 'required',
            'func1_start' => 'required',
            'func1_stop' => 'required',
            'func2' => 'required',
            'func2_start' => 'required',
            'func2_stop' => 'required',
            'func3' => 'required',
            'func3_start' => 'required',
            'func3_stop' => 'required',
            'bs_code' => 'required',
            'bs_code_description' => 'required',
            'bs_design' => 'required',
            'bs_design_description' => 'required',
            'git' => 'required',
            'pinterest' => 'required',
        ];
    }
}
