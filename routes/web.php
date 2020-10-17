<?php
use App\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
   return view('welcome');
});


//Required Route with Dynamic paramiter
//Route::get('/welcome/{name}', function ($name) {
//   return "welcome ".$name;
//});


//optional Route with Dynamic paramiter
//Route::get('/welcome/{name?}', function ($name="Guest") {
//    return "welcome ".$name;
//});

//Redirect Route method
//Route::permanentRedirect('/','home');

//view Route method
//Route::view('/', 'welcome',['name'=>'Sharif','company'=>'Lighthouse']);

//Resource Controller for CMS

Route::prefix('admin')->middleware(['auth','password.confirm'])->group(function(){

	Route::view('/','dashboard.admin');
    Route::resource('posts','PostController');
    Route::resource('profile','UserProfileController');
    Route::resource('users','UserController');
    Route::resource('pages','PageController');
    Route::resource('categories','CategoryController');
    Route::resource('roles','RoleController');

});


Auth::routes();

Route::match(['get','post'],'/home', 'HomeController@index')->name('home');




