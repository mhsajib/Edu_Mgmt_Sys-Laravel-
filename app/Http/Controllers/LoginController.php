<?php

namespace App\Http\Controllers;
use App\Http\Requests\login;
use Illuminate\Http\Request ;
use App\user;

// use Illuminate\Foundation\Bus\DispatchesJobs;
// use Illuminate\Routing\Controller as BaseController;
// use Illuminate\Foundation\Validation\ValidatesRequests;
// use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class LoginController extends Controller
{
    function index(){
        return view('login.index');
    }
    function verify(login $request){

       // return redirect()->route('home.index');

    			$user = User::where('username', $request->username)
					->where('password', $request->password)
					->first();

		//$users = DB::table('users')->get();
	/*	$user = DB::table('users')->where('username', $request->username)
					->where('password', $request->password)
					->get();*/

		if(count($user) > 0){
			$request->session()->put('uname', $request->input('username'));
			//$req->session()->put('user', $user[0]->type);
			//$req->session()->put('user', $user->type);
			$request->session()->put('user', $user);

			return redirect()->route('home.index');
		}else{

			$request->session()->flash('msg', 'invalid username/password');

			//return view('login.index');
			return redirect()->route('login.index');
		}
	}
    
}
