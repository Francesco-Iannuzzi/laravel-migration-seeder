<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index ()
    {
        //dd(Train::all());
        $trains = Train::orderBy('departure_time', 'asc')->get();
        return view('home', compact('trains'));
    }

    public function about ()
    {
        return view('about');
    }
}