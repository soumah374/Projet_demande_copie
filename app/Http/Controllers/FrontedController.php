<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class FrontedController extends Controller
{

    public function about(){
        return view('frontend.presentation.propos');
    }

    public function file(){
        return view('Auth::profile');
    }
    

    public function index(){
        return view('frontend.accueil.index');
    }


}
