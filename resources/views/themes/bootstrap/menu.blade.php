<ul class="{{ $class }}">
    @foreach ($items as $item)
        <li @if ($item['class']) class="{{ $item['class'] }}" @endif id="menu_{{ $item['id'] }}">
            @if (empty($item['submenu']))
                <a href="{{ $item['url'] }}">
                    {{ $item['title'] }}
                </a>
            @else
                <a href="{{ $item['url'] }}" class="dropdown-toggle" data-toggle="dropdown">
                    {{ $item['title'] }}
                </a>
                <ul class="dropdown-menu">
                    @foreach ($item['submenu'] as $subitem)
                        <li>
                            <a href="{{ $subitem['url'] }}">

                                {{ str_replace_first('red','Red',str_replace_first( "de este lado","De este lado", $subitem['title'])) }}
                                @if( !empty($subitem['icon']) )
                                    <i class="fa fa-{{ $subitem['icon'] }} fa-fw" ></i>
                                @endif
                            </a>
                        </li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
</ul>