<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\course;

class HomeController extends Controller
{
    //
    function home(){

    	$std = course::all();
    	return view('home.index')->with('users', $std);
       
    }
}
