<?php

// HowtoUseController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HowtoUseController extends Controller
{
    public function index()
    {
        return view('HowtoUse');
    }
}
