<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HirephpdeveloperController extends Controller
{
    public function index(){
        return view('pages.hire-php-developer');
    }
}