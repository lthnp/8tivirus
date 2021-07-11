<?php

namespace App\Imports;

use App\Models\FreeResource;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class FreeResourceImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new FreeResource($row);
    }

    public function rules(): array
    {
        return [
            'sid' => 'required',
            'title' => 'required',
            'img' => 'required',
            'download_url' => 'required',
        ];
    }
}
