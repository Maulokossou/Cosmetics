<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        return view("index");
    }
    public function event(){
        return view("event");
    }
    public function service(){
        return view("service");
    }
    public function contact(){
        return view("contact");
    }
    public function eventdescription(){
        return view("eventdescription");
    }
    public function payment(){
        return view("payment");
    }
    public function succes(){
        return view("succes");
    }
}
