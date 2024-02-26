<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AkController extends Controller
{
    public function index() {
        return view('home.akuntansi');
    }
}
