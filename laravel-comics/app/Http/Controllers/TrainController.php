<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    //
    public function index(){

        $trains = Train::WhereDate('data', today())->get();

        return view ('pages.home', compact('trains')) ;
    }
}
