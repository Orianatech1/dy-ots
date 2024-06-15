<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MobileappdesignController extends Controller
{
    public function index(){
        return view('pages.mobile-app-design');
    }
}
