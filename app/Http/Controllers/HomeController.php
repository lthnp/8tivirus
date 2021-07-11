<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        try {
//            return view('pages.coming-soon');
            $count = Project::all()->count();
            $rand = mt_rand(0, $count-1);
            $list = Project::where(['id'=>$rand])->first();
            return view('pages.home', compact('list'));
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function contact(){
        return view('pages.contacts');
    }

    public function insider(){
        return view('pages.insider');
    }

}
