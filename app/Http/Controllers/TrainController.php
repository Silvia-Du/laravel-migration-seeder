<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function index(){

        $trains= Train::all();
        return view('trains', compact('trains'));
    }
}
