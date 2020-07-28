<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\user;
class pagescontroller extends Controller
{
    public function index()
    {
        $user_id=auth()->user()->id;
        $user=User::find($user_id);
        return view('pages.index')->withposts($user->posts);
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
