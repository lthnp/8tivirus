<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class LookingController extends Controller
{
    public function index(Request $request){
        $type = $request->get('type', 1);
        if($type == 2){
            $lists = Project::where('type', 2)
                ->with(['students'])->get();
        } else if($type == 3){
            $lists = Project::where('type', 3)
                ->with(['students'])->get();
        } else {
            $lists = Project::where('type', 1)
                ->with(['students'])->get();
        }
        return view('pages.lookingfor', compact('lists', 'type'));
    }
}
