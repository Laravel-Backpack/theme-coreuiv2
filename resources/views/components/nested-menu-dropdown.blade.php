<li class="nav-item nav-dropdown {{ $open ? 'open' : '' }}">
    <a {{ $attributes->merge([ 'class' => 'nav-link nav-dropdown-toggle', 'href' => $link ?? '#' ]) }}>
        @if($icon)<i class="nav-icon {{ $icon }}"></i>@endif
        @if($title) <span>{{ $title }}</span>@endif
    </a>
    <ul class="nav-dropdown-items">
        {!! $slot !!}
    </ul>
</li>
