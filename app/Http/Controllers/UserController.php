<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //

    public function index(){
        return view('frontend.login');
    }

    public function login(Request $request){
        // echo "<pre>";
        // print_r($request->toArray());
        

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if(Auth::attempt($credentials)){
            $user_id = Auth::id('user_id');
            $user = Auth::user();
            $request->session()->put(['user_id'=>$user_id,'user'=>$user]);
            return redirect('/');
            
        }else{
            return "Error";

        }


    }



    public function register(){
        return view('frontend.register');
    }

  

    public function create(Request $request){
        // echo "<pre>";
        // print_r($request->toArray());
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password'=> 'required|confirmed',
            'password_confirmation' => 'required'
        ]);
        $user = new User();
        $user -> name = $request['name'];
        $user -> email = $request['email'];
        $user -> password = Hash::make($request['password']);
        $user ->save();
        // redirect('/login')

    }
    public function delete(){

    }
    public function edit($id){

    }
    public function update($id, Request $request){

    }
}
