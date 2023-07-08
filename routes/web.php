<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

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
//     return view('index');
// });


Route::get('/',[ProfileController::class,'index'])->name('index');
Route::get('/login',[ProfileController::class,'login'])->name('login');
Route::post('/auth',[ProfileController::class,'auth']);
Route::post('editedu/{id}',[ProfileController::class,'update']);
Route::get('hapusedu/{id}',[ProfileController::class,'delete']);
Route::get('/dashboard',[ProfileController::class,'dashboard']);
Route::post('/simpanpendidikan',[ProfileController::class,'store']);
Route::patch('image-upload', [ProfileController::class,'updateprofil']);
Route::patch('updatebackground', [ProfileController::class,'updatebackground']);
Route::patch('updateimage', [ProfileController::class,'updateimage']);
