<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class downloadController extends Controller
{
    public function __construct()
    {
        $this->middleware("auth");
    }
    public function index(){
        return view("download.index");
    }
    public function movies(){
        return view('download.movies');
    }
    public function series(){
        return view('download.series');
    }
    public function music(){
        return view('download.music');
    }
    public function education(){
        return view('download.education');
    }
    public function games(){
        return view('download.games');
    }
}
