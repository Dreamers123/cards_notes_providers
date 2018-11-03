<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Card;
use App\User;
use App\Notes;
use Auth;
class CardsController extends Controller
{
    public function index()
    {
        $cards=Card::all();
        return view('cards.index',compact('cards'));
    }
    public function create()
    {
        return view('cards.create');
    }
    public function store(Request $request)
    {
        Card::create($request->all());
        return redirect('/cards');
    }
    public function show(Card $cards)
    {
         $cards->load('notes.user');
        //return  $cards;
         // $cards=Card::find($id);
         //$cards->notes->first();
         return view('cards.show',compact('cards'));
    }
    public function test()
    {


        $cards=Card::has('notes.user')->get();
       // $notes = Notes::with(['cards', 'user'])->get();
        $notes = Notes::with(['cards.title'])->get();
        $users = User::with(['notes' => function ($query) {
            $query->where('body', 'like', 'forth%');
        }])->get();
        //return $users;
        $cards = Card::all();

        $cards->load(['notes' => function ($query) {
            $query->orderBy('created_at', 'desc');
        }]);

        return $cards;














        /*$cards= Card::doesntHave('notes')->get();
        //return $cards;
        $cards = Card::whereDoesntHave('notes', function ($query) {
            $query->where('body', 'like', 'First%');
        })->get();
        //return $cards;
        $cards = Card::withCount('notes')->get();

        foreach ($cards as $card) {
            echo $card->notes_count;
        }*/
    }
}
