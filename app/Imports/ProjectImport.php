<?php

namespace App\Imports;

use App\Models\Project;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ProjectImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Project($row);
    }

    public function rules(): array
    {
        return [
            'code' => 'required',
            'name' => 'required',
            'name_th' => 'required',
            'nickname' => 'required',
            'description' => 'required',
            'advisor' => 'required',
            'img' => 'required',
            'dev_img' => 'required',
            'design_img' => 'required',
            'portrait_vdo_url' => 'required',
//            'showreel_url' => 'required',
            'demo_url' => 'required',
            'category' => 'required',
            'type' => 'required',
        ];
    }
}
