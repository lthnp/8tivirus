<?php

namespace App\Http\Controllers;

use App\Helpers\UserSystemInfoHelper;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        try {
            return view('pages.home');
        } catch (\Exception $e) {
            return $e;
        }
    }

    public function supporter(){
    }
}
