<?php

namespace App\Http\Controllers;

class SolutionController extends Controller
{
    private $cont4ViewPath = 'default.pages.solutions.contabilizare-4-0';
    private $cont5ViewPath = 'default.pages.solutions.contabilizare-5-0';

    public function cont4ErpSystem()
    {
        return view($this->cont4ViewPath . '.erp-system');
    }

    public function cont4AgriculturalManagement()
    {
        return view($this->cont4ViewPath . '.agricultural-management');
    }

    public function cont4ConstructionManagement()
    {
        return view($this->cont4ViewPath . '.construction-management');
    }

    public function cont5Description()
    {
        return view($this->cont5ViewPath . '.description');
    }

    public function cont5Developers()
    {
        return view($this->cont5ViewPath . '.developers');
    }

    public function cont5Download()
    {
        return view($this->cont5ViewPath . '.download');
    }

    public function cont5Install()
    {
        return view($this->cont5ViewPath . '.install');
    }

    public function cont5Partners()
    {
        return view($this->cont5ViewPath . '.partners');
    }
}
