<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHome(){
        return view('welcome');
    }

    public function showUser(string $id){
        return view('user',compact('id'));
    }

    public function showUsers(){
        return view('users');
    }
}
