<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('default.pages.index');
    }

    public function about_history()
    {
        return view('default.pages.about.history');
    }

    public function about_partners()
    {
        return view('default.pages.about.partners');
    }

    public function about_developers()
    {
        return view('default.pages.about.developers');
    }
}
