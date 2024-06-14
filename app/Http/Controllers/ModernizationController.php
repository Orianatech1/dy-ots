<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModernizationController extends Controller
{
    public function index(){
        return view('pages.modernization');
    }
}
