
<ul class="navbar navbar_top">
    @foreach ($navbarItems as $item)
        <li class="navbar__item navbar__item_top">
            <a class="navbar__link navbar__link_top" href="{{ $item['path'] }}">{{ $item['title'] }}</a>
            @if (!empty($item['children']))
                <ul class="navbar__sublist navbar__sublist_top">
                    @foreach ($item['children'] as $item2)
                        <li class="navbar__subitem navbar__subitem_top"><a class="navbar__sublink navbar__sublink_top" href="{{ $item2['path'] }}">{{ $item2['title'] }}</a></li>
                    @endforeach
                </ul>     
            @endif
        </li>   
    @endforeach
</ul>