<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;

class MainController extends Controller
{
    function index(){
        return view('login');
    }
    function checklogin(Request $request) {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|alphaNum|min:3'
        ]);

        if(Auth::attempt($user_data)) {
            return redirect('main/successlogin');
        }
        else{
            return back()->with('error', 'Wrong Login Details');
        }
    }
    function successlogin() {
        return view('Main');
    }
    function logout() {
        Auth::logout();
        return redirect('main');
    }
}
