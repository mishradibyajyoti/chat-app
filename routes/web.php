<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::view('/', 'welcome');

Route::get('/dashboard', function(){
    $users = User::where('id', '!=', auth()->user()->id)->get();
    return view('dashboard',['users' => $users]);

})->name('dashboard');
 
Route::get('/chat/{id}', function($id){
    return view('chat',['id' => $id]);

})->name('chat');


Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

    
Route::view('test', 'profile1')
->middleware(['auth'])
->name('profile');


require __DIR__.'/auth.php';
