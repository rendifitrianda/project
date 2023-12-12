<li class="nav-item">
    <a href="{{ $url ?? '' }}" class="nav-link">
        @isset($circle)
            <i class="far fa-{{ $circle ?? '' }} nav-icon"></i>
        @else
            <i class="nav-icon fas fa-{{ $icon ?? 'home' }}"></i>
        @endisset
        <p>{{ $label ?? '' }}</p>
    </a>
</li>
