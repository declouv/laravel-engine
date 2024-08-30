@props(['active'=>false])
<li class="menu-item {{ $active ? 'active' : ''}}">
    <a {{ $attributes }} class="menu-link">
        <i class="menu-icon tf-icons bx bx-@if(isset($icon)) $icon @endif"></i>
        <div class="text-truncate" data-i18n="{{ $slot }}">{{ $slot }}</div>
    </a>
</li>
