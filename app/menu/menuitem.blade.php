<li class="active" id={{ $id }}>
    @if ($url = null)
        <a href="{{ $url }}">
    @endif
        @if ($icon = null)
            <i href="{{ $icon }}"></i>
        @endif
        <span>{{ $title }}</span>
    @if ($url = null)
        </a>
    @endif
</li>