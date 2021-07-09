<?php

namespace App\Http\Controllers;

use App\Models\FreeResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use Response;
use DB;

class FreeResourceController extends Controller
{
    public function index(){
        $fonts = FreeResource::all(['id', 'title', 'img', 'download_url']);
        $bgs = [
            [
                'title' => 'something',
                'img' => 'path',
                'download_url' => 'path'
            ],[
                'title' => 'something',
                'img' => 'path',
                'download_url' => 'path'
            ]
        ];
        return view('pages.free-resource', compact('fonts', 'bgs'));
    }

    public function getDownload(){
        $freeResource = FreeResource::all();
        $file = public_path().'/'.$freeResource[0]->download_url;
        return Response::download($file);
    }
}
