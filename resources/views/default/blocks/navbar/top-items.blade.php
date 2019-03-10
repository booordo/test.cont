@foreach ($items as $item)
    <li @lm_attrs($item) class="navbar-top__item navbar-top__item_level_{{ $level }}" @lm_endattrs>
        <a class="navbar-top__link navbar-top__link_level_{{ $level }}" href="{!! $item->url() !!}">{!! $item->title !!}</a>
        @if ($item->hasChildren())
            <ul class="navbar-top navbar-top_level_{{ $level + 1 }}">
                @include('default.blocks.navbar.top-items', ['items' => $item->children(), 'level' => $level + 1])
            </ul>     
        @endif   
    </li>     
@endforeach