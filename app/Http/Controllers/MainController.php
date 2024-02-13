<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class MainController extends Controller
{
    public function index(){
        $trains = Train::whereYear('departure_datetime', 2024)
                      ->whereDay('departure_datetime', 13)
                      ->get();

        return view('pages.index',compact('trains'));
    }
}
