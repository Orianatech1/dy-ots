<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomSoftwareDevelopmentController extends Controller
{
    public function index(){
        return view('pages.custom-software-development');
    }
}
