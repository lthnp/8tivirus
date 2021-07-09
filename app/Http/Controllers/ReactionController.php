<?php

namespace App\Http\Controllers;

use App\Http\Requests\ReactionRequest;
use App\Models\Comment;
use App\Models\Reaction;

class ReactionController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function store(ReactionRequest $request){
        $request->validated();

        $req = $request->all();
        $req['ip'] = $this->data['ip'];
        $req['browser'] = $this->data['browser'];
        $req['device'] = $this->data['device'];
        $req['os'] = $this->data['os'];

        if(Reaction::all()->count()){
            $reaction = Reaction::where([
                'project_id' => $req['project_id'],
                'ip' => $req['ip'],
                'browser' => $req['browser'],
                'device' => $req['device'],
                'os' => $req['os'],
            ])->first();
        } else {
            $reaction = '';
        }

        if(empty($reaction)){
            Reaction::create($req);
            return redirect(url()->previous().'#react')->with('react', 2);
            return redirect()->back()->with('react', 2);
        } else if($req['react'] != $reaction->react) {
            Reaction::find($reaction->id)->update($req);
            return redirect(url()->previous().'#react')->with('react', 1);
            return redirect()->back()->with('react', 1);
        } else {
            return redirect()->route('react.destroy', $reaction->id);
        }
    }

    public function destroy($id){
        $list = Reaction::find($id)->delete();
        return redirect(url()->previous().'#react');
    }
}
