<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use View;
class PagesController extends Controller
{
    public function index()
    {
    	if(View::exists('pages.index'))
    		return view('pages.index')
    	           ->with('text','<b>To Abeer Azad</b>')
    	           ->with(['name'=>'Tithi','location'=>'In the heart']);
    	else
    		return 'Nothing to show';
    }
    public function profile()
    {
       return view('pages.profile');
    }
     public function blade()
    {
       return view('blade.bladetest');
    }
}
