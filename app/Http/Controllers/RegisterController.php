<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index(){
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    public function store(Request $request ){
        $validatedData = $request->all();
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        //$request->session()->flash('success','Registrasion Success!');

        return redirect('/login')->with('success', 'Registration success! Please Login');
    }

}
