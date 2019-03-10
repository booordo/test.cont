<?php

namespace App\Http\Middleware;

use Closure;
use Menu;

class GenerateMenus
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Menu::make('TopNavBar', function ($menu) {
            $menu->add('Главная');
            $menu->add('О компании', 'about');
            $menu->add('Решения', 'solutions')->nickname('solutions');
            $menu->add('Отзывы', 'reviews');
            $menu->add('Прайс-лист', 'price-list');
            $menu->add('Контакты', 'contacts');
            $menu->solutions->add('Contabilizare 4.0', 'solutions/contabilizare-4-0')->nickname('cont4');
            $menu->solutions->add('Contabilizare 5.0', 'solutions/contabilizare-5-0')->nickname('cont5');
            $menu->cont4->add('ERP-система', 'solutions/contabilizare-4-0/erp-system');
            $menu->cont4->add('Управление сельским хозяйством', 'solutions/contabilizare-4-0/agricultural-management');
            $menu->cont4->add('Управление строительными предприятием', 'solutions/contabilizare-4-0/construction-management');
            $menu->cont5->add('Описание', 'solutions/contabilizare-5-0/description');
            $menu->cont5->add('Скачать', 'solutions/contabilizare-5-0/download');
            $menu->cont5->add('Инструкция по установке', 'solutions/contabilizare-5-0/install');
            $menu->cont5->add('Партнерам', 'solutions/contabilizare-5-0/partners');
            $menu->cont5->add('Разработчикам', 'solutions/contabilizare-5-0/developers');
        });
        
        return $next($request);
    }
}
