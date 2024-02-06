<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/','welcome');
// Route::view('/home','homePage');
Route::get('/home',[HomeController::class,'index']);
Route::get('/home/{userid}/{age}',[HomeController::class,'show']);

// Route::get('/home/{userId}/{age}', function ($userId, $age) {
//     $userName = request('username');
//     $items = array('table','chair','stool');
//     return view('homePage', ['products'=>$items,'username'=>$userName,'userId'=>$userId, 'age'=>$age]);
// });

Route::get('/customForm', function(){
    return view('customForm');
});

Route::post('/form-submit', function(){
    dd(request()->all());
});