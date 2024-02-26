<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TkjController extends Controller
{
    public function index() {
        return view('home.tkj');
    }
}
