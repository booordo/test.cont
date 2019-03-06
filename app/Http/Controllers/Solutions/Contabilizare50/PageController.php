<?php

namespace App\Http\Controllers\Solutions\Contabilizare50;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    private $viewPath = 'default.pages.solutions.contabilizare-5-0';

    public function description()
    {
        return view($this->viewPath . '.description');
    }

    public function developers()
    {
        return view($this->viewPath . '.developers');
    }

    public function download()
    {
        return view($this->viewPath . '.download');
    }

    public function install()
    {
        return view($this->viewPath . '.install');
    }

    public function partners()
    {
        return view($this->viewPath . '.partners');
    }
}
