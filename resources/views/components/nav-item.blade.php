@props(['active'=>false])
<li class="menu-item {{ $active ? 'active' : ''}}">
    <a {{ $attributes }} class="menu-link">
        <i class="menu-icon tf-icons bx {{ isset($icon) ? 'bx-' . $icon : '' }}"></i>
        <div class="text-truncate" data-i18n="{{ $slot }}">{{ $slot }}</div>
    </a>
</li>
