<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\TestingController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(PageController::class)->group(function(){
    Route::get('/','showHome')->name('home');
    Route::get('/users','showUsers')->name('users');
    Route::get('/user/{id}','showUser')->name('user');
});

Route::get('/test',TestingController::class);



// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/post', function () {
//     return view('post');
// });
 
// Route::get('/test', function () {
//     return view('test');
// });

//     // return view('users')->with('user', $name)->with('city','Noida');

//     // return view('users')->withUser($name)->withCity('Noida');
// });

// Route::get('/user/{id}', function ($id) {
//     $users = getUsers();
//     // abort_if(!isset($users[$id]),404);
//     $user = $users[$id];
//     return view('user',['id' => $user]);
// })->name('view.user');

// function getUsers(){
//     return [
//         1 => ['name' => 'Sandeep', 'phone' => '9546089674', 'city' => 'Ramgarhwa'],
//         2 => ['name' => 'Mandeep', 'phone' => '9546569674', 'city' => 'Motihari'],
//         3 => ['name' => 'Abhinav', 'phone' => '9546639674', 'city' => 'Raxaul'],
//         4 => ['name' => 'Anit', 'phone' => '9546779674', 'city' => 'Bhaluahiya'],
//     ];
// }

