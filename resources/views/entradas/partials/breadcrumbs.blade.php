<ol class="breadcrumb white-text {!! $padre->clase_color !!}">
    <li>
        <a href="{{ route('avisos') }}" class="white-text">
            <i class="fa {!! 'fa-'.$padre->icono !!} fa-fw"></i>
            {!! $padre->nombre !!}
        </a>
    </li>
    <li>{!! $padre->subtipo !!} </li>
    @yield('links')
</ol>