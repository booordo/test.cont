<ul class="navbar-top navbar-top_level_1">
    @foreach ($navigationTree as $item1)
        <li class="navbar-top__item navbar-top__item_level_1 {{ Request::segment(1, "") == explode('/', $item1['path'])[1] ? "navbar-top__item_active" : "" }}">
        <a class="navbar-top__link navbar-top__link_level_1" {{ $item1['children']->isEmpty() ? "href=" . $item1['path'] : "" }}>{{ $item1['title'] }}</a>
            @if (!$item1['children']->isEmpty())
                <ul class="navbar-top navbar-top_level_2">
                    @foreach ($item1['children'] as $item2)
                        <li class="navbar-top__item navbar-top__item_level_2 {{ Request::segment(2, "") == explode('/', $item2['path'])[2] ? "navbar-top__item_active" : "" }}">
                            <a class="navbar-top__link navbar-top__link_level_2" {{ $item2['children']->isEmpty() ? "href=" . $item2['path'] : "" }}>{{ $item2['title'] }}</a>
                            @if (!$item2['children']->isEmpty())
                                <ul class="navbar-top navbar-top_level_3">
                                    @foreach ($item2['children'] as $item3)
                                        <li class="navbar-top__item navbar-top__item_level_3 {{ Request::segment(3, "") == explode('/', $item3['path'])[3] ? "navbar-top__item_active" : "" }}">
                                            <a class="navbar-top__link navbar-top__link_level_3" href="{{ $item3['path'] }}">{{ $item3['title'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>     
                            @endif
                        </li>
                    @endforeach
                </ul>     
            @endif
        </li>   
    @endforeach
</ul>