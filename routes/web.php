<?php
use App\User;
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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/admin', function(){
    $users = User::all();
   return view('admin.index', compact('users'));
});*/

Route::get('/admin', function(){
     $users = User::all();
     return view('admin.index', compact('users'));
});

Route::resource('admin/users', 'AdminUsersController');