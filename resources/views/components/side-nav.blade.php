<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('dashboard-analystics') }}" class="app-brand-link">
            <span class="app-brand-logo demo">
                <img src="{{ asset(config('app.logo')) }}" alt="{{ config('app.name') . ' logo' }}">
            </span>
            <span class="app-brand-text demo menu-text ms-2"
                style="{{ config('app.style') }}">{{ config('app.name') }}</span>
        </a>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->
        <x-nav-item-ext :active="request()->is('dashboard-*')">
            <x-slot:title>Dashboard</x-slot:title>
            <x-slot:badge>5</x-slot:badge>
            <x-slot:icon>home-smile</x-slot:icon>
            @foreach (['dashboard-analystics', 'dashboard-crm', 'dashboard-ecommerce', 'dashboard-logistics', 'dashboard-academy'] as $routeName)
                <x-nav-item href="{{ route($routeName) }}" :active="request()->is($routeName)">
                    {{ ucfirst(str_replace('dashboard-', '', $routeName)) }}
                </x-nav-item>
            @endforeach
        </x-nav-item-ext>
        <!-- Layouts -->
        {{-- <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div class="text-truncate" data-i18n="Layouts">Layouts</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="layouts-collapsed-menu.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Collapsed menu">
                            Collapsed menu
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-content-navbar.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Content navbar">
                            Content navbar
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-content-navbar-with-sidebar.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Content nav + Sidebar">
                            Content nav + Sidebar
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="../horizontal-menu-template" class="menu-link" target="_blank">
                        <div class="text-truncate" data-i18n="Horizontal">
                            Horizontal
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-without-menu.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Without menu">
                            Without menu
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-without-navbar.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Without navbar">
                            Without navbar
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-fluid.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Fluid">Fluid</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-container.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Container">
                            Container
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="layouts-blank.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Blank">Blank</div>
                    </a>
                </li>
            </ul>
        </li> --}}

        <x-nav-item-ext :active="request()->is('layouts-*')">
            <x-slot:title>Layouts</x-slot:title>
            <x-slot:icon>layout</x-slot:icon>
            @foreach (['layouts-collapsed-menu', 'layouts-content-navbar', 'layouts-content-nav-sidebar', 'layouts-horizontal', 'layouts-without-menu', 'layouts-without-navbar', 'layouts-fluid', 'layouts-container', 'layouts-blank'] as $routeName)
                <x-nav-item href="{{ route($routeName) }}" :active="request()->is($routeName)" style="text-transform:capitalize">
                    {{ str_replace(['layouts-', '-'], ' ', $routeName) }}
                </x-nav-item>
            @endforeach
        </x-nav-item-ext>
        <!-- Front Pages -->
        <x-nav-item-ext :active="request()->is('frontpage-*')">
            <x-slot:title>Front Page</x-slot:title>
            <x-slot:icon>store</x-slot:icon>
            @foreach (['frontpage-landing', 'frontpage-pricing', 'frontpage-payment', 'frontpage-checkout', 'frontpage-help'] as $routeName)
                <x-nav-item href="{{ route($routeName) }}" :active="request()->is($routeName)">
                    {{ ucfirst(str_replace('frontpage-', '', $routeName)) }}
                </x-nav-item>
            @endforeach
        </x-nav-item-ext>
        <!-- Apps & Pages -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="Apps & Pages">Apps &amp; Pages</span>
        </li>

        <x-nav-item href="{{ route('email') }}" :active="request()->is('email')">Email<x-slot:icon>envelope</x-slot:icon></x-nav-item>
        <x-nav-item href="{{ route('chat') }}" :active="request()->is('chat')">Chat<x-slot:icon>chat</x-slot:icon></x-nav-item>
        <x-nav-item href="{{ route('calendar') }}" :active="request()->is('calendar')">Calendar<x-slot:icon>calendar</x-slot:icon></x-nav-item>
        <x-nav-item href="{{ route('kanban') }}" :active="request()->is('kanban')">Kanban<x-slot:icon>grid</x-slot:icon></x-nav-item>

        <!-- e-commerce-app menu start -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cart-alt"></i>
                <div class="text-truncate" data-i18n="eCommerce">eCommerce</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="app-ecommerce-dashboard.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Dashboard">
                            Dashboard
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div class="text-truncate" data-i18n="Products">
                            Products
                        </div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="app-ecommerce-product-list.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Product List">
                                    Product List
                                </div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="app-ecommerce-product-add.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Add Product">
                                    Add Product
                                </div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="app-ecommerce-category-list.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Category List">
                                    Category List
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div class="text-truncate" data-i18n="Order">Order</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="app-ecommerce-order-list.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Order List">
                                    Order List
                                </div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="app-ecommerce-order-details.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Order Details">
                                    Order Details
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div class="text-truncate" data-i18n="Customer">
                            Customer
                        </div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="app-ecommerce-customer-all.html" class="menu-link">
                                <div class="text-truncate" data-i18n="All Customers">
                                    All Customers
                                </div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <div class="text-truncate" data-i18n="Customer Details">
                                    Customer Details
                                </div>
                            </a>
                            <ul class="menu-sub">
                                <li class="menu-item">
                                    <a href="app-ecommerce-customer-details-overview.html" class="menu-link">
                                        <div class="text-truncate" data-i18n="Overview">
                                            Overview
                                        </div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="app-ecommerce-customer-details-security.html" class="menu-link">
                                        <div class="text-truncate" data-i18n="Security">
                                            Security
                                        </div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="app-ecommerce-customer-details-billing.html" class="menu-link">
                                        <div class="text-truncate" data-i18n="Address & Billing">
                                            Address & Billing
                                        </div>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="app-ecommerce-customer-details-notifications.html" class="menu-link">
                                        <div class="text-truncate" data-i18n="Notifications">
                                            Notifications
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="app-ecommerce-manage-reviews.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Manage Reviews">
                            Manage Reviews
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="app-ecommerce-referral.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Referrals">
                            Referrals
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div class="text-truncate" data-i18n="Settings">
                            Settings
                        </div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="app-ecommerce-settings-detail.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Store Details">
                                    Store Details
                                </div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="app-ecommerce-settings-payments.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Payments">
                                    Payments
                                </div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="app-ecommerce-settings-checkout.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Checkout">
                                    Checkout
                                </div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="app-ecommerce-settings-shipping.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Shipping & Delivery">
                                    Shipping & Delivery
                                </div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="app-ecommerce-settings-locations.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Locations">
                                    Locations
                                </div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="app-ecommerce-settings-notifications.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Notifications">
                                    Notifications
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <!-- e-commerce-app menu end -->
        <!-- Academy menu start -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-book-open"></i>
                <div class="text-truncate" data-i18n="Academy">Academy</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="app-academy-dashboard.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Dashboard">
                            Dashboard
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="app-academy-course.html" class="menu-link">
                        <div class="text-truncate" data-i18n="My Course">
                            My Course
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="app-academy-course-details.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Course Details">
                            Course Details
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- Academy menu end -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-car"></i>
                <div class="text-truncate" data-i18n="Logistics">Logistics</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="app-logistics-dashboard.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Dashboard">
                            Dashboard
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="app-logistics-fleet.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Fleet">Fleet</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-food-menu"></i>
                <div class="text-truncate" data-i18n="Invoice">Invoice</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="app-invoice-list.html" class="menu-link">
                        <div class="text-truncate" data-i18n="List">List</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="app-invoice-preview.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Preview">Preview</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="app-invoice-edit.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Edit">Edit</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="app-invoice-add.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Add">Add</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-user"></i>
                <div class="text-truncate" data-i18n="Users">Users</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="app-user-list.html" class="menu-link">
                        <div class="text-truncate" data-i18n="List">List</div>
                    </a>
                </li>

                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div class="text-truncate" data-i18n="View">View</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="app-user-view-account.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Account">
                                    Account
                                </div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="app-user-view-security.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Security">
                                    Security
                                </div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="app-user-view-billing.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Billing & Plans">
                                    Billing & Plans
                                </div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="app-user-view-notifications.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Notifications">
                                    Notifications
                                </div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="app-user-view-connections.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Connections">
                                    Connections
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-check-shield"></i>
                <div class="text-truncate" data-i18n="Roles & Permissions">
                    Roles & Permissions
                </div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="app-access-roles.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Roles">Roles</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="app-access-permission.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Permission">
                            Permission
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div class="text-truncate" data-i18n="Pages">Pages</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div class="text-truncate" data-i18n="User Profile">
                            User Profile
                        </div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="pages-profile-user.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Profile">
                                    Profile
                                </div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pages-profile-teams.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Teams">Teams</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pages-profile-projects.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Projects">
                                    Projects
                                </div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pages-profile-connections.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Connections">
                                    Connections
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div class="text-truncate" data-i18n="Account Settings">
                            Account Settings
                        </div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="pages-account-settings-account.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Account">
                                    Account
                                </div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pages-account-settings-security.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Security">
                                    Security
                                </div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pages-account-settings-billing.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Billing & Plans">
                                    Billing & Plans
                                </div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pages-account-settings-notifications.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Notifications">
                                    Notifications
                                </div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pages-account-settings-connections.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Connections">
                                    Connections
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="pages-faq.html" class="menu-link">
                        <div class="text-truncate" data-i18n="FAQ">FAQ</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-pricing.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Pricing">Pricing</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div class="text-truncate" data-i18n="Misc">Misc</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="pages-misc-error.html" class="menu-link" target="_blank">
                                <div class="text-truncate" data-i18n="Error">Error</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pages-misc-under-maintenance.html" class="menu-link" target="_blank">
                                <div class="text-truncate" data-i18n="Under Maintenance">
                                    Under Maintenance
                                </div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pages-misc-comingsoon.html" class="menu-link" target="_blank">
                                <div class="text-truncate" data-i18n="Coming Soon">
                                    Coming Soon
                                </div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="pages-misc-not-authorized.html" class="menu-link" target="_blank">
                                <div class="text-truncate" data-i18n="Not Authorized">
                                    Not Authorized
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div class="text-truncate" data-i18n="Authentications">
                    Authentications
                </div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div class="text-truncate" data-i18n="Login">Login</div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="auth-login-basic.html" class="menu-link" target="_blank">
                                <div class="text-truncate" data-i18n="Basic">Basic</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-login-cover.html" class="menu-link" target="_blank">
                                <div class="text-truncate" data-i18n="Cover">Cover</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div class="text-truncate" data-i18n="Register">
                            Register
                        </div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="auth-register-basic.html" class="menu-link" target="_blank">
                                <div class="text-truncate" data-i18n="Basic">Basic</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-register-cover.html" class="menu-link" target="_blank">
                                <div class="text-truncate" data-i18n="Cover">Cover</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-register-multisteps.html" class="menu-link" target="_blank">
                                <div class="text-truncate" data-i18n="Multi-steps">
                                    Multi-steps
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div class="text-truncate" data-i18n="Verify Email">
                            Verify Email
                        </div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="auth-verify-email-basic.html" class="menu-link" target="_blank">
                                <div class="text-truncate" data-i18n="Basic">Basic</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-verify-email-cover.html" class="menu-link" target="_blank">
                                <div class="text-truncate" data-i18n="Cover">Cover</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div class="text-truncate" data-i18n="Reset Password">
                            Reset Password
                        </div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="auth-reset-password-basic.html" class="menu-link" target="_blank">
                                <div class="text-truncate" data-i18n="Basic">Basic</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-reset-password-cover.html" class="menu-link" target="_blank">
                                <div class="text-truncate" data-i18n="Cover">Cover</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div class="text-truncate" data-i18n="Forgot Password">
                            Forgot Password
                        </div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                                <div class="text-truncate" data-i18n="Basic">Basic</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-forgot-password-cover.html" class="menu-link" target="_blank">
                                <div class="text-truncate" data-i18n="Cover">Cover</div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div class="text-truncate" data-i18n="Two Steps">
                            Two Steps
                        </div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="auth-two-steps-basic.html" class="menu-link" target="_blank">
                                <div class="text-truncate" data-i18n="Basic">Basic</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="auth-two-steps-cover.html" class="menu-link" target="_blank">
                                <div class="text-truncate" data-i18n="Cover">Cover</div>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
                <div class="text-truncate" data-i18n="Wizard Examples">
                    Wizard Examples
                </div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="wizard-ex-checkout.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Checkout">
                            Checkout
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="wizard-ex-property-listing.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Property Listing">
                            Property Listing
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="wizard-ex-create-deal.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Create Deal">
                            Create Deal
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="modal-examples.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-window-open"></i>
                <div class="text-truncate" data-i18n="Modal Examples">
                    Modal Examples
                </div>
            </a>
        </li>

        <!-- Components -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="Components">Components</span>
        </li>
        <!-- Cards -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-collection"></i>
                <div class="text-truncate" data-i18n="Cards">Cards</div>
                <span class="badge rounded-pill bg-primary ms-auto">6</span>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="cards-basic.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Basic">Basic</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="cards-advance.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Advance">Advance</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="cards-statistics.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Statistics">
                            Statistics
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="cards-analytics.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Analytics">
                            Analytics
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="cards-gamifications.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Gamifications">
                            Gamifications
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="cards-actions.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Actions">Actions</div>
                    </a>
                </li>
            </ul>
        </li>
        <!-- User interface -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div class="text-truncate" data-i18n="User interface">
                    User interface
                </div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="ui-accordion.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Accordion">
                            Accordion
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-alerts.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Alerts">Alerts</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-badges.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Badges">Badges</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-buttons.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Buttons">Buttons</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-carousel.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Carousel">
                            Carousel
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-collapse.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Collapse">
                            Collapse
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-dropdowns.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Dropdowns">
                            Dropdowns
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-footer.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Footer">Footer</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-list-groups.html" class="menu-link">
                        <div class="text-truncate" data-i18n="List Groups">
                            List groups
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-modals.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Modals">Modals</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-navbar.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Navbar">Navbar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-offcanvas.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Offcanvas">
                            Offcanvas
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Pagination & Breadcrumbs">
                            Pagination &amp; Breadcrumbs
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-progress.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Progress">
                            Progress
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-spinners.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Spinners">
                            Spinners
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-tabs-pills.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Tabs & Pills">
                            Tabs &amp; Pills
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-toasts.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Toasts">Toasts</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-tooltips-popovers.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Tooltips & Popovers">
                            Tooltips &amp; Popovers
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-typography.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Typography">
                            Typography
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Extended components -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-copy"></i>
                <div class="text-truncate" data-i18n="Extended UI">
                    Extended UI
                </div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="extended-ui-avatar.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Avatar">Avatar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="extended-ui-blockui.html" class="menu-link">
                        <div class="text-truncate" data-i18n="BlockUI">BlockUI</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="extended-ui-drag-and-drop.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Drag & Drop">
                            Drag &amp; Drop
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="extended-ui-media-player.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Media Player">
                            Media Player
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Perfect Scrollbar">
                            Perfect Scrollbar
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="extended-ui-star-ratings.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Star Ratings">
                            Star Ratings
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="extended-ui-sweetalert2.html" class="menu-link">
                        <div class="text-truncate" data-i18n="SweetAlert2">
                            SweetAlert2
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="extended-ui-text-divider.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Text Divider">
                            Text Divider
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div class="text-truncate" data-i18n="Timeline">
                            Timeline
                        </div>
                    </a>
                    <ul class="menu-sub">
                        <li class="menu-item">
                            <a href="extended-ui-timeline-basic.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Basic">Basic</div>
                            </a>
                        </li>
                        <li class="menu-item">
                            <a href="extended-ui-timeline-fullscreen.html" class="menu-link">
                                <div class="text-truncate" data-i18n="Fullscreen">
                                    Fullscreen
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item">
                    <a href="extended-ui-tour.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Tour">Tour</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="extended-ui-treeview.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Treeview">
                            Treeview
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="extended-ui-misc.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Miscellaneous">
                            Miscellaneous
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Icons -->
        <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div class="text-truncate" data-i18n="Icons">Icons</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="icons-boxicons.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Boxicons">
                            Boxicons
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="icons-font-awesome.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Fontawesome">
                            Fontawesome
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Forms & Tables -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="Forms & Tables">Forms &amp; Tables</span>
        </li>
        <!-- Forms -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div class="text-truncate" data-i18n="Form Elements">
                    Form Elements
                </div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="forms-basic-inputs.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Basic Inputs">
                            Basic Inputs
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forms-input-groups.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Input groups">
                            Input groups
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forms-custom-options.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Custom Options">
                            Custom Options
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forms-editors.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Editors">Editors</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forms-file-upload.html" class="menu-link">
                        <div class="text-truncate" data-i18n="File Upload">
                            File Upload
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forms-pickers.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Pickers">Pickers</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forms-selects.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Select & Tags">
                            Select &amp; Tags
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forms-sliders.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Sliders">Sliders</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forms-switches.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Switches">
                            Switches
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forms-extras.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Extras">Extras</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div class="text-truncate" data-i18n="Form Layouts">
                    Form Layouts
                </div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="form-layouts-vertical.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Vertical Form">
                            Vertical Form
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="form-layouts-horizontal.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Horizontal Form">
                            Horizontal Form
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="form-layouts-sticky.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Sticky Actions">
                            Sticky Actions
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-carousel"></i>
                <div class="text-truncate" data-i18n="Form Wizard">
                    Form Wizard
                </div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="form-wizard-numbered.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Numbered">
                            Numbered
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="form-wizard-icons.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Icons">Icons</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="form-validation.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-list-check"></i>
                <div class="text-truncate" data-i18n="Form Validation">
                    Form Validation
                </div>
            </a>
        </li>
        <!-- Tables -->
        <li class="menu-item">
            <a href="tables-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div class="text-truncate" data-i18n="Tables">Tables</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-grid"></i>
                <div class="text-truncate" data-i18n="Datatables">
                    Datatables
                </div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="tables-datatables-basic.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Basic">Basic</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="tables-datatables-advanced.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Advanced">
                            Advanced
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="tables-datatables-extensions.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Extensions">
                            Extensions
                        </div>
                    </a>
                </li>
            </ul>
        </li>

        <!-- Charts & Maps -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="Charts & Maps">Charts &amp; Maps</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-chart"></i>
                <div class="text-truncate" data-i18n="Charts">Charts</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="charts-apex.html" class="menu-link">
                        <div class="text-truncate" data-i18n="Apex Charts">
                            Apex Charts
                        </div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="charts-chartjs.html" class="menu-link">
                        <div class="text-truncate" data-i18n="ChartJS">ChartJS</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="maps-leaflet.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-map-alt"></i>
                <div class="text-truncate" data-i18n="Leaflet Maps">
                    Leaflet Maps
                </div>
            </a>
        </li>

        <!-- Misc -->
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text" data-i18n="Misc">Misc</span>
        </li>
        <li class="menu-item">
            <a href="https://themeselection.com/support/" target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div class="text-truncate" data-i18n="Support">Support</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
                target="_blank" class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div class="text-truncate" data-i18n="Documentation">
                    Documentation
                </div>
            </a>
        </li>
    </ul>
</aside>
