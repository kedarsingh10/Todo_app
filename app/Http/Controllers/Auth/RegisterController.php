<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __contruct(){
        $this->middleware(['gust']);
    } 

    public function index(){
        return view('auth.register');
    }

    public function store(Request $request){
        $this->validate($request, [
            'name' => 'required|max: 255',
            'username' => 'required|max: 255',
            'email' => 'required|email|max: 255',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('todo');
    }
}
