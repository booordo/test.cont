<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Navigation;

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

    public function news()
    {
        return view('default.pages.news');
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
        return view('default.pages.price_list');
    }
}
