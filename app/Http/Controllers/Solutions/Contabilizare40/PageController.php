<?php

namespace App\Http\Controllers\Solutions\Contabilizare40;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    private $viewPath = 'default.pages.solutions.contabilizare-4-0';

    public function erpSystem(Request $request)
    {
        return view($this->viewPath . '.erp-system');
    }

    public function agriculturalManagement()
    {
        return view($this->viewPath . '.agricultural-management');
    }

    public function constructionManagement()
    {
        return view($this->viewPath . '.construction-management');
    }
}
