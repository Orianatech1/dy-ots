<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WireframedesignController extends Controller
{
    public function index(){
        return view('pages.wireframe-design');
    }
}
