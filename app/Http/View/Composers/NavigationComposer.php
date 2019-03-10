<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;
use App\Models\Navigation;

class NavigationComposer
{
    protected $navigationTree;

    public function __construct()
    {
        $this->navigationTree = Navigation::tree();
    }

    public function compose(View $view)
    {
        $view->with('navigationTree', $this->navigationTree);
    }
}