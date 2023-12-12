<a href="{{ $url ?? '' }}" @isset($modal) data-toggle="modal"@endisset
    class="btn btn-{{ $class ?? '' }}">
    <i class="fas fa-{{ $icon ?? '' }}"></i>
</a>
