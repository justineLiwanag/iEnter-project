<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeclarationFormController extends Controller
{
    public function index()
    {
        return view('front-end.visitor-declaration-form');
    }
}
