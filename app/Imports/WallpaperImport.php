<?php

namespace App\Imports;

use App\Models\Wallpaper;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class WallpaperImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Wallpaper($row);
    }

    public function rules(): array
    {
        return [
            'title' => 'required',
            'category' => 'required',
            'type' => 'required',
            'download_url' => 'required',
        ];
    }
}
