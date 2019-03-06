<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('default.pages.index');
    }

    public function about()
    {
        return view('default.pages.about');
    }

    public function reviews()
    {
        return view('default.pages.reviews');
    }

    public function contacts()
    {
        return view('default.pages.contacts');
    }

    public function priceList()
    {
        return view('default.pages.price-list');
    }
}
