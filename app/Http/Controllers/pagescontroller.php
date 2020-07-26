<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function index()
    {

        return view('pages.index');
    }
    public function about()
    {
        return view('pages.about');
    }
    public function services()
    {   
        $services=['Content Writing','Web Designing','Movie Editing','Photoshop'];
        return view('pages.services')->withservices($services);
    }
    public function welcome()
    {
        return view('welcome');
    }
}
