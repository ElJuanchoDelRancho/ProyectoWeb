<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;

class UserController extends Controller
{
    
    public function index()
    {
    	return view('main');
    }

    public function contact()
    {
    	return view('contact');
    }

}
