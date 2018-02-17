<ol class="breadcrumb white-text {!! $padre->clase_color !!}">
    <li>
        <i class="fa {!! 'fa-'.$padre->icono !!} fa-fw"></i>
        {!! $padre->nombre !!}
    </li>
    <li>{{ trans('validation.attributes.'.$subtipo) }} </li>
    @yield('links')
</ol>