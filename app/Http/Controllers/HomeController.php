<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;
use App\Models\Administrator;

class HomeController extends Controller
{
    //
    function show(){
        return view('template');
    }

    function home(){

        $data['_administrators'] = Administrator::all();
        return view('home1',$data);
    }

    function absensi(){
        $data['_absensi'] = Absensi::all();
        return view('absensi2',$data);

    }

    function navbar(){
        // $data['_absensi'] = Absensi::all();
        return view('navbar');

    }
}
