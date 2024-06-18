<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsitedesignController extends Controller
{
    public function index(){
        return view('pages.website-design');
    }
}
