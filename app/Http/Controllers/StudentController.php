<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $lists = Student::all();
        return view('pages.persons', compact('lists'));
    }

    public function show($sid){
        $list = Student::where([
            'student_id' => $sid
        ])->with([
            'project'
        ])->first();
        return view('pages.person-detail', compact('list'));
    }
}
