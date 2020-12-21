<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CytiController extends Controller
{
    public function index()
    {
        $cities = City::all();
        return view('cities.list', compact('cities'));
    }
}
