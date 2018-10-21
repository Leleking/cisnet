<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',['except'=>['about']]);
    }
    public function index(){
        return view('pages.index');
    }
    public function about(){
        return view('pages.about');
    }
    public function team(){
        return view('pages.team');
    }
    public function courses(){
        return view('pages.courses');
    }
    public function instructor(){
        return view('pages.instructor');
    }
}
