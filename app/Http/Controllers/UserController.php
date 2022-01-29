<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){

        $users = User::get();       
    	return view('index', ['users'=>$users]);

    }

    public function contact(){
        //this is new brachce laravel8crud
    	return view('contact');

    }

}
