<?php

namespace App\Http\Controllers;

use App\Models\FreeResource;
use App\Models\Wallpaper;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use File;
use Response;
use DB;

class FreeResourceController extends Controller
{
    public function index(Request $request){
        $p = $request->get('p', 'font');
        $type = $request->get('type', '1');
        $fonts = FreeResource::with(['student'])->get();
        $wallpapers1 = Wallpaper::where([
            'category' => 1,
            'device' => $type
        ])->get();
        $wallpapers2 = Wallpaper::where([
            'category' => 2,
            'device' => $type
        ])->get();
        return view('pages.free-resource', compact('fonts', 'wallpapers1', 'wallpapers2', 'p', 'type'));
    }

    public function getDownload(Request $request){
        $file = public_path().'/'.$request->get('url');
        return Response::download($file);
    }
}
