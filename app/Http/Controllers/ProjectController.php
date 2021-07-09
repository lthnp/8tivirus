<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentRequest;
use App\Models\Comment;
use App\Models\LogNoComment;
use App\Models\Project;
use Illuminate\Http\Request;

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
        if(!empty($list->react)){
            $react = 1;
        } else {
            $react = 0;
        }
        return view('pages.project-details', compact('list', 'react'));
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
            return redirect(url()->previous().'#react');
        } else {
            return redirect(url()->previous().'#comment-form');
        }
    }

    public function noComment($code){
        $req['project_id'] = $code;
        $req['ip'] = $this->data['ip'];
        $req['browser'] = $this->data['browser'];
        $req['device'] = $this->data['device'];
        $req['os'] = $this->data['os'];
        if(LogNoComment::all()->count()){
            $comment = LogNoComment::where([
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
            LogNoComment::create($req);
            return redirect(url()->previous().'#react');
        } else {
            return redirect(url()->previous().'#react');
        }
    }

}
