<?php
use App\http\Controllers\BelajarController;
use Illuminate\Support\Facades\Route;

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

//hello world
Route:: get('/hello',function(){
    return'<h1>Hello World</h1>';
});

//route baru
Route:: get('belajarcontroller',[BelajarController::class,'index']);
    
