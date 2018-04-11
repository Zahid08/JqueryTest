<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class LoginController extends Controller
{
    public function index(Request $request)
    {
    	return view('login.index');
    }

    public function verify(Request $request)
    {
    	//$un = $request->input('username');
    	
    	/*$user = User::where('username', $request->username)
    		->where('password', $request->password)
    		->first();*/
    	$user = DB::table('users')
    		->where('username', $request->username)
    		->where('password', $request->password)
    		->first();

    	if($user != null)
    	{
            $request->session()->put('loggedUser', $user);
    		return redirect()->route('home.index');
    	}
    	else
    	{
    		$request->session()->flash('username', $request->username);
    		$request->session()->flash('message', 'Invalid username or password');
    		/*return view('login.index')
    			->with('username', $un)
    			->with('message', 'Invalid username or password');*/
    		return redirect()->route('login.index');
    	}
    }
}
