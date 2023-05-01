<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenusController extends Controller
{
    public function index(){
        $title = "Home";
        return view('home')->with('title', $title);
    }

    public function agejo(){
        $title = "Agejo";
        return view('agejo')->with('title', $title);
    }

    public function ganguro(){
        $title = "Ganguro";
        return view('ganguro')->with('title', $title);
    }

    public function tsuyome(){
        $title = "Tsuyome";
        return view('tsuyome')->with('title', $title);
    }

    public function himegal(){
        $title = "Himegal";
        return view('himegyaru')->with('title', $title);
    }
}
