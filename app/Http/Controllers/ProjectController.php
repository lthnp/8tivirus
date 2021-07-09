<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\Project;

class ProjectController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index(){
        $lists = Project::with([
            'students',
        ])->get();
        return view('pages.test', compact('lists'));
    }

    public function show($code){
        $list = Project::where(['code' => $code])
            ->with([
                'detail',
                'techs',
                'screenshots',
                'persona',
                'students',
                'reaction' => function($query){
                    $query->where($this->data);
                    $query->first();
                },
                'comment' => function($query){
                    $query->where($this->data);
                    $query->first();
                },
            ])
            ->first();
        return view('pages.test-details', compact('list'));
    }

    public function comment(CommentRequest $request){
        $request->validated();

        $req = $request->all();
        $req['ip'] = $this->data['ip'];
        $req['browser'] = $this->data['browser'];
        $req['device'] = $this->data['device'];
        $req['os'] = $this->data['os'];
        if(Comment::all()->count()){
            $comment = Comment::where([
                'project_id' => $req['project_id'],
                'ip' => $req['ip'],
                'browser' => $req['browser'],
                'device' => $req['device'],
                'os' => $req['os'],
            ])->first();
        } else {
            $comment = '';
        }

        if(empty($comment)){
            Comment::create($req);
            return redirect()->back()->with('success', '');
        } else {
            return redirect()->back();
        }
    }

}
