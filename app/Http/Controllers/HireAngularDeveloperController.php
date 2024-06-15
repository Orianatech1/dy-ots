<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HireAngularDeveloperController extends Controller
{
    public function index(){
        return view('pages.hire-angular-developer');
    }
}
