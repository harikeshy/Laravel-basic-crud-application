<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () 
//{
    //return view('welcome');
//}
//);


Route::get('/', 'TasksController@index');

Auth::routes();

// add case
Route::get('task','TasksController@add');
Route::post('task','TasksController@addData');

// edit case
Route::get('task/{task}','TasksController@edit');
Route::post('task/{task}','TasksController@update');

// delete case
Route:: get('delete/{task}','TasksController@deleteRec');


// add user
Route:: get('registernew','TasksController@add_new_user');

Route:: post('adduserlist','TasksController@addUser');
Route:: get('memberlist','TasksController@memberList');

// edit user form
Route:: get('memberlist/{uid}','TasksController@editMember');

// update user form
Route::post('update','TasksController@updateMember');

//Delete Member
Route:: get('/memberDelete/{uid}','TasksController@memberDelete');
Route:: get('/memberDelete/{uid}/{page}','TasksController@memberDelete');



Route:: get('contact',function(){
	return 'This is contact form';
});


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
