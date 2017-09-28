<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
	public function showLoginForm()
	{
		// dd(bcrypt('1234'));
		return view('auth.login');
	}

    public function authenticate()
    {
    	Auth::loginUsingId(1);
    // 	$email = request()->input('email');
    // 	$password = request()->input('password');

    //     if (Auth::attempt(['email' => $email, 'password' => $password])) {
    //         // Authentication passed...
            return redirect()->to('/task');
    //     } else {
    //     	return '失敗';
    //     }
    }    //
}
