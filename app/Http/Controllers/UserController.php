<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class UserController extends Controller
{
    //
    function show(){
        return view('daftar2');
    }

    function create(Request $req){

        $validate = $this->validate($req, [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'level' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

        $validate['password'] = bcrypt($req->password);

        User::create($validate);

        return redirect('login');
    }

    function userupdate(Request $req, $id){
        User::Where('id', $id)->update([
            'first_name' => $req->first_name,
            'last_name' => $req->last_name,
            'level' => $req->level,
            'email' => $req->email,
            'password' => $req->password
        ]);

        return redirect('myuser');
    }

    function auth(Request $req){
        $credentials = $req->only('email','password');

        if (Auth::attempt($credentials)) {

            if (Auth::user()->level === "admin") {
                return redirect('template');
                
            }else if (Auth::user()->level === "member") {
                return redirect('home1');
            }

        }
        return redirect()->back();
    }

    function logout(){
        Auth::logout();
        return redirect('login');
    }
}
