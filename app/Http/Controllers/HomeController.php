<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        try {
            return view('pages.coming-soon');
            return view('pages.home');
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
