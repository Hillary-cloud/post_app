<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('auth.register');
    }
    public function store(Request $request){
        $this->validate($request, [
            'name'=>'required|max:225',
            'username'=>'required|max:225',
            'email'=>'required|email|max:225',
            'password'=>'required|confirmed',
        ]);

    }
    
}
