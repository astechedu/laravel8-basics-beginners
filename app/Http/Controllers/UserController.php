<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class UserController extends Controller
{
    public function index(){     
       
    	return view('users.index');
    }

    public function contact(){     
       
    	return view('users.contact');
    }

}

