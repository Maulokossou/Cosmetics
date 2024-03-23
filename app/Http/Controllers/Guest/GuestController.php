<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){
        return view("guest.index");
    }
    public function event(){
        return view("guest.event");
    }
    public function service(){
        return view("guest.service");
    }
    public function contact(){
        return view("guest.contact");
    }
    public function eventdescription(){
        return view("guest.eventdescription");
    }
    public function payment(){
        return view("guest.payment");
    }
    public function succes(){
        return view("guest.succes");
    }
}
