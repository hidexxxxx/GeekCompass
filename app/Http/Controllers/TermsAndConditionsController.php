<?php

// TermsAndConditionsController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermsAndConditionsController extends Controller
{
    public function index()
    {
        return view('terms&conditions');
    }
}
