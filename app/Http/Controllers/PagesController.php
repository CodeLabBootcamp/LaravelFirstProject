<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getHome()
    {
        return view('pages.home');
    }

    public function getVideo($id = null,$number = null)
    {

        return view('pages.videos',compact('id','number'));
    }
}
