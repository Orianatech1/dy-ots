<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeopackagesController extends Controller
{
    public function index(){
        return view('pages.seo-packages');
    }
}
