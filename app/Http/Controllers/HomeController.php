<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view("home");
    }

    public function bedroomlist(){
        return view("bedroomlist");
    }

    public function facilities(){
        return view("facilities");
    }

    public function contactus(){
        return view("contactus");
    }
}
