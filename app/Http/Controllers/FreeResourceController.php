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
    public function index(Request $request){
        $p = $request->get('p', 'font');
        $fonts = FreeResource::with(['student'])->get();
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
        return view('pages.free-resource', compact('fonts', 'bgs', 'p'));
    }

    public function getDownload(Request $request){
        $file = public_path().'/'.$request->get('url');
        return Response::download($file);
    }
}
