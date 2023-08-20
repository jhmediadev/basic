<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function Index() {
        return view('about');
    } //endpoint method
    
    public function ContactMethod() {
        return view('contact');
    }
}

