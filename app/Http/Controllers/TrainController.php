<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function index(){

        $trains= Train::orderBy('departure_time')->get();
        return view('trains', compact('trains'));
    }
}
