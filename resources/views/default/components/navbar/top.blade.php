
<ul class="navbar navbar_top">
    @foreach ($items as $item)
        <li class="navbar__item navbar__item_top">
            <a class="navbar__link navbar__link_top" href="{{ $item['link'] }}">{{ $item['title'] }}</a>
            @if (!empty($item['items']))
                <ul class="navbar__sublist navbar__sublist_top">
                    @foreach ($item['items'] as $subitem)
                        <li class="navbar__subitem navbar__subitem_top"><a class="navbar__sublink navbar__sublink_top" href="{{ $subitem['link'] }}">{{ $subitem['title'] }}</a></li>    
                    @endforeach
                </ul>     
            @endif
        </li>   
    @endforeach
</ul>