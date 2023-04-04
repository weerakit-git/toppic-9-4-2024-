<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ServiceController;
use App\Models\User;
use App\Models\Admincontrol;

// Route::resource('adminpage', AdminController::class);

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),
    'verified'
])->group(function () {
   
   
Route::get('/dashboard', function () {
        $title=Admincontrol::all();
        $users = User::all();
        return view('dashboard', compact('users','title'));
})->name('dashboard');
});

Route::get('/page/home',[AdminController::class,'home'])->name('home');
Route::get('/page/create/all',[AdminController::class,'index1'])->name('post');
Route::get('/page/all',[AdminController::class,'index2'])->name('homepost');
Route::post('/page/addpost',[AdminController::class,'store'])->name('addpost');

Route::get('/page/edit/{id}',[AdminController::class,'edit']);
Route::post('/page/update/{id}',[AdminController::class,'update']);
Route::get('/page/delete/{id}',[AdminController::class,'delete']);

Route::get('/page/show/',[AdminController::class,'show']);