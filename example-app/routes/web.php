<?php

use App\Http\Controllers\site;
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
    // return view('welcome');
    return 'estamos em uma rota';
});
// router::get('/sair',function(){
//    return view('sair');
// });
// nessa rota estamos referenciando o controller e utiliza esse dois parametros um é a string 
Route::get('/',[site::class,'index']);

Route::get('/sair',[site::class,'sair']);
Route::get('/user/{qnt}',[site::class,'user']);