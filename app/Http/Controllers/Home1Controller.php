<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class Home1Controller extends Controller
{
    public function index(){
        return view("home1");
    }

    public function bedroomlist(){
        $room = Room::all();
        return view("bedroomlist" , [
            "rooms"=> $room
        ]);
    }

    public function facilities(){
        return view("facilities");
    }

    public function contactus(){
        return view("contactus");
    }
}
