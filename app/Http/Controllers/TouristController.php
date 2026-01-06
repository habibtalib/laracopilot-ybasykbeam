<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TouristController extends Controller
{
    public function index()
    {
        return view('tourist.index');
    }

    public function details()
    {
        return view('tourist.details');
    }
}