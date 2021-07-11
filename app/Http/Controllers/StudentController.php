<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $lists = Student::all();
        return view('pages.all-person', compact('lists'));
    }

    public function show($sid){
        $list = Student::where([
            'sid' => $sid
        ])->with([
            'project',
            'resources'
        ])->first();
        $count = Student::all()->count();
        $randID = [];
        while (count($randID) < 3) {
            $rand = mt_rand(1, $count);
            if(empty($randID)){
                array_push($randID, $rand);
            } else {
                if(!in_array($rand, $randID) && $rand != $list->id){
                    array_push($randID, $rand);
                }
            }

        }

        $randomLists = Student::where('id', $randID[0])->orWhere('id', $randID[1])->orWhere('id', $randID[2])->get();

        return view('pages.person-details', compact('list', 'randomLists'));
    }
}
