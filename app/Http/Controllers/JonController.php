<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JonController extends Controller
{
    public function Contact(){
        return view('contact');
    }
}
