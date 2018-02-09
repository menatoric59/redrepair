<ol class="breadcrumb white-text {!! $padre->clase_color !!}">
    <li>
        <a href="{{ route('avisos') }}" class="white-text">
            <i class="fa {!! 'fa-'.$padre->icono !!} fa-fw"></i>
            {!! $padre->nombre !!}
        </a>
    </li>
    <li>{{ trans('validation.attributes.'.$subtipo) }} </li>
    @yield('links')
</ol>