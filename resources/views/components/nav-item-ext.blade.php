<li class="menu-item {{ $active ? 'active open' : '' }}">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons bx bx-{{ $icon }}"></i>
        <div class="text-truncate" data-i18n="{{ $title }}">
            {{ $title }}
        </div>
        @if(isset($badge))
            <span class="badge rounded-pill bg-danger ms-auto">{{ $badge }}</span>
        @endif
    </a>
    <ul class="menu-sub">
        {{ $slot }}
    </ul>
</li>
