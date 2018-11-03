<?php


Route::get('/return_view_with', 'PagesController@index');


//Route::get('/profile', 'PagesController@profile')->middleware('authenticated');
//Route::get('/abeer', 'PagesController@abeer');


Route::get('/blade', 'PagesController@blade');


//Route::get('users', 'UsersController@index')->middleware('authenticated');


Route::get('users/create', ['uses' => 'UsersController@create']);


Route::post('users', ['uses' => 'UsersController@store']);


/*Route::get('users', function () {
	
	$users= [
      '0'=> [
              'first_name' =>'Abeer',
              'last_name' =>'Azad',
              'location' =>'Barisal'
           ],
      '1'=> [
              'first_name' =>'Anika',
              'last_name' =>'Cornea',
              'location' =>'Dhaka'
           ]
	];
	return  $users;
    
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>'authenticated'], function()
{
  Route::get('users', 'UsersController@index');
  Route::get('/profile', 'PagesController@profile');
  // Route::get('/abeer', 'PagesController@abeer');

});

Route::get('example', function()
{
    //return URL::to('https://1337x.to/trending');
    return redirect()->away('https://www.google.com');
});


Route::get('people', function () {

    $peoples=['Abeer','Anika'];
    return view('calendar',compact('peoples'));

});


Route::group(['middleware' =>['web']], function () {

    Route::get('cards','CardsController@index');
    Route::get('/cards/{cards}','CardsController@show');  //card will be much better

    Route::get('/cards/create', 'CardsController@create');
    Route::post('/cards/create', 'CardsController@store');
    Route::post('/cards/{cards}/notes', 'NotesController@store');
    Route::get('/notes/{note}/edit', 'NotesController@edit');
    Route::patch('/notes/{note}', 'NotesController@update');

});



Route::get('homes', function () {
    return response('Hello World', 404)
        ->header('Content-Type', 'text/plain');
});


Route::get('test','CardsController@test');








































