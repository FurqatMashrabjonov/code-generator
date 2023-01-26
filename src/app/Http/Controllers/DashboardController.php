<?php

namespace Furqat\CodeGenerator\app\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        return view('generator::dashboard');
    }
}
