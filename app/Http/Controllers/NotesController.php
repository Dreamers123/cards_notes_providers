<?php

namespace App\Http\Controllers;
use App\Notes;
use App\Card;
use App\User;
use Illuminate\Http\Request;
use Auth;

class NotesController extends Controller
{
    public function store(Request $request,Card $cards)  //,User $user
    {

        $this->validate($request,[
            'body'=>'required|min:10'
        ]);
        $note=new Notes($request->all());
        $note->user_id=Auth::user()->id;
        $note->body=$request->body;
        $cards->notes()->save($note);
       // $user->notes()->save($note);
        //return $request->all();
       // $cards->notes()->create($request->all());
        return back();
    }
    public function edit(Notes $note)
    {
        return view('notes.edit',compact('note'));
    }
    public function update(Request $request,Notes $note)
    {
        $note->update($request->all());

        return back();
    }
}
