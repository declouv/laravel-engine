<x-front-app>
    <x-slot:title>{{ $title }}</x-slot:title>
    <!-- Navbar: Start -->
    <nav class="layout-navbar shadow-none py-0">
        <div class="container">
            <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-8">
                <!-- Menu logo wrapper: Start -->
                <div class="navbar-brand app-brand demo d-flex py-0 me-4 me-xl-8">
                    <!-- Mobile menu toggle: Start-->
                    <button class="navbar-toggler border-0 px-0 me-4" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="tf-icons bx bx-menu bx-lg align-middle text-heading fw-medium"></i>
                    </button>
                    <!-- Mobile menu toggle: End-->
                    <a href="landing-page.html" class="app-brand-link">
                        <span class="app-brand-logo demo">

                            <svg width="25" viewbox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <path
                                        d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                                        id="path-1"></path>
                                    <path
                                        d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                                        id="path-3"></path>
                                    <path
                                        d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                                        id="path-4"></path>
                                    <path
                                        d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                                        id="path-5"></path>
                                </defs>
                                <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                                        <g id="Icon" transform="translate(27.000000, 15.000000)">
                                            <g id="Mask" transform="translate(0.000000, 8.000000)">
                                                <mask id="mask-2" fill="white">
                                                    <use xlink:href="#path-1"></use>
                                                </mask>
                                                <use fill="#696cff" xlink:href="#path-1"></use>
                                                <g id="Path-3" mask="url(#mask-2)">
                                                    <use fill="#696cff" xlink:href="#path-3"></use>
                                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                                </g>
                                                <g id="Path-4" mask="url(#mask-2)">
                                                    <use fill="#696cff" xlink:href="#path-4"></use>
                                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                                </g>
                                            </g>
                                            <g id="Triangle"
                                                transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                                                <use fill="#696cff" xlink:href="#path-5"></use>
                                                <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>

                        </span>
                        <span class="app-brand-text demo menu-text fw-bold ms-2 ps-1">sneat</span>
                    </a>
                </div>
                <!-- Menu logo wrapper: End -->
                <!-- Menu wrapper: Start -->
                <div class="collapse navbar-collapse landing-nav-menu" id="navbarSupportedContent">
                    <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl p-2"
                        type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="tf-icons bx bx-x bx-lg"></i>
                    </button>
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link fw-medium" aria-current="page"
                                href="landing-page.html#landingHero">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="landing-page.html#landingFeatures">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="landing-page.html#landingTeam">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="landing-page.html#landingFAQ">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="landing-page.html#landingContact">Contact us</a>
                        </li>
                        <li class="nav-item mega-dropdown
   active">
                            <a href="javascript:void(0);"
                                class="nav-link dropdown-toggle navbar-ex-14-mega-dropdown mega-dropdown fw-medium"
                                aria-expanded="false" data-bs-toggle="mega-dropdown" data-trigger="hover">
                                <span data-i18n="Pages">Pages</span>
                            </a>
                            <div class="dropdown-menu p-4 p-xl-8">
                                <div class="row gy-4">
                                    <div class="col-12 col-lg">
                                        <div class="h6 d-flex align-items-center mb-3 mb-lg-4">
                                            <div class="avatar flex-shrink-0 me-3">
                                                <span class="avatar-initial rounded bg-label-primary"><i
                                                        class='bx bx-grid-alt'></i></span>
                                            </div>
                                            <span class="ps-1">Other</span>
                                        </div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item active">
                                                <a class="nav-link mega-dropdown-link" href="pricing-page.html">
                                                    <i class='bx bx-radio-circle me-1'></i>
                                                    <span data-i18n="Pricing">Pricing</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link" href="payment-page.html">
                                                    <i class='bx bx-radio-circle me-1'></i>
                                                    <span data-i18n="Payment">Payment</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link" href="checkout-page.html">
                                                    <i class='bx bx-radio-circle me-1'></i>
                                                    <span data-i18n="Checkout">Checkout</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link"
                                                    href="help-center-landing.html">
                                                    <i class='bx bx-radio-circle me-1'></i>
                                                    <span data-i18n="Help Center">Help Center</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-lg">
                                        <div class="h6 d-flex align-items-center mb-3 mb-lg-4">
                                            <div class="avatar flex-shrink-0 me-3">
                                                <span class="avatar-initial rounded bg-label-primary"><i
                                                        class='bx bx-lock-open bx-lg'></i></span>
                                            </div>
                                            <span class="ps-1">Auth Demo</span>
                                        </div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link"
                                                    href="../vertical-menu-template/auth-login-basic.html"
                                                    target="_blank">
                                                    <i class='bx bx-radio-circle me-1'></i>
                                                    Login (Basic)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link"
                                                    href="../vertical-menu-template/auth-login-cover.html"
                                                    target="_blank">
                                                    <i class='bx bx-radio-circle me-1'></i>
                                                    Login (Cover)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link"
                                                    href="../vertical-menu-template/auth-register-basic.html"
                                                    target="_blank">
                                                    <i class='bx bx-radio-circle me-1'></i>
                                                    Register (Basic)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link"
                                                    href="../vertical-menu-template/auth-register-cover.html"
                                                    target="_blank">
                                                    <i class='bx bx-radio-circle me-1'></i>
                                                    Register (Cover)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link"
                                                    href="../vertical-menu-template/auth-register-multisteps.html"
                                                    target="_blank">
                                                    <i class='bx bx-radio-circle me-1'></i>
                                                    Register (Multi-steps)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link"
                                                    href="../vertical-menu-template/auth-forgot-password-basic.html"
                                                    target="_blank">
                                                    <i class='bx bx-radio-circle me-1'></i>
                                                    Forgot Password (Basic)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link"
                                                    href="../vertical-menu-template/auth-forgot-password-cover.html"
                                                    target="_blank">
                                                    <i class='bx bx-radio-circle me-1'></i>
                                                    Forgot Password (Cover)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link"
                                                    href="../vertical-menu-template/auth-reset-password-basic.html"
                                                    target="_blank">
                                                    <i class='bx bx-radio-circle me-1'></i>
                                                    Reset Password (Basic)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link"
                                                    href="../vertical-menu-template/auth-reset-password-cover.html"
                                                    target="_blank">
                                                    <i class='bx bx-radio-circle me-1'></i>
                                                    Reset Password (Cover)
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-12 col-lg">
                                        <div class="h6 d-flex align-items-center mb-3 mb-lg-4">
                                            <div class="avatar flex-shrink-0 me-3">
                                                <span class="avatar-initial rounded bg-label-primary"><i
                                                        class='bx bx-image-alt bx-lg'></i></span>
                                            </div>
                                            <span class="ps-1">Other</span>
                                        </div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link"
                                                    href="../vertical-menu-template/pages-misc-error.html"
                                                    target="_blank">
                                                    <i class='bx bx-radio-circle me-1'></i>
                                                    Error
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link"
                                                    href="../vertical-menu-template/pages-misc-under-maintenance.html"
                                                    target="_blank">
                                                    <i class='bx bx-radio-circle me-1'></i>
                                                    Under Maintenance
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link"
                                                    href="../vertical-menu-template/pages-misc-comingsoon.html"
                                                    target="_blank">
                                                    <i class='bx bx-radio-circle me-1'></i>
                                                    Coming Soon
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link"
                                                    href="../vertical-menu-template/pages-misc-not-authorized.html"
                                                    target="_blank">
                                                    <i class='bx bx-radio-circle me-1'></i>
                                                    Not Authorized
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link"
                                                    href="../vertical-menu-template/auth-verify-email-basic.html"
                                                    target="_blank">
                                                    <i class='bx bx-radio-circle me-1'></i>
                                                    Verify Email (Basic)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link"
                                                    href="../vertical-menu-template/auth-verify-email-cover.html"
                                                    target="_blank">
                                                    <i class='bx bx-radio-circle me-1'></i>
                                                    Verify Email (Cover)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link"
                                                    href="../vertical-menu-template/auth-two-steps-basic.html"
                                                    target="_blank">
                                                    <i class='bx bx-radio-circle me-1'></i>
                                                    Two Steps (Basic)
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link mega-dropdown-link"
                                                    href="../vertical-menu-template/auth-two-steps-cover.html"
                                                    target="_blank">
                                                    <i class='bx bx-radio-circle me-1'></i>
                                                    Two Steps (Cover)
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 d-none d-lg-block">
                                        <div class="bg-body nav-img-col p-2">
                                            <img src="../../assets/img/front-pages/misc/nav-item-col-img.png"
                                                alt="nav item col image" class="w-100">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-medium" href="../vertical-menu-template/index.html"
                                target="_blank">Admin</a>
                        </li>
                    </ul>
                </div>
                <div class="landing-menu-overlay d-lg-none"></div>
                <!-- Menu wrapper: End -->
                <!-- Toolbar: Start -->
                <ul class="navbar-nav flex-row align-items-center ms-auto">

                    <!-- Style Switcher -->
                    <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-1">
                        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                            data-bs-toggle="dropdown">
                            <i class='bx bx-lg'></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                            <li>
                                <a class="dropdown-item" href="javascript:void(0);" data-theme="light">
                                    <span class="align-middle"><i class='bx bx-md bx-sun me-3'></i>Light</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:void(0);" data-theme="dark">
                                    <span class="align-middle"><i class="bx bx-md bx-moon me-3"></i>Dark</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:void(0);" data-theme="system">
                                    <span class="align-middle"><i class="bx bx-md bx-desktop me-3"></i>System</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- / Style Switcher-->

                    <!-- navbar button: Start -->
                    <li>
                        <a href="../vertical-menu-template/auth-login-cover.html" class="btn btn-primary"
                            target="_blank"><span
                                class="tf-icons bx bx-log-in-circle scaleX-n1-rtl me-md-1"></span><span
                                class="d-none d-md-block">Login/Register</span></a>
                    </li>
                    <!-- navbar button: End -->
                </ul>
                <!-- Toolbar: End -->
            </div>
        </div>
    </nav>
    <!-- Navbar: End -->


    <!-- Sections:Start -->

    <!-- Pricing Plans -->
    <section class="section-py first-section-pt">
        <div class="container">
            <h2 class="text-center mb-2">Pricing Plans</h2>
            <p class="text-center mb-0">All plans include 40+ advanced tools and features to boost your product.<br>
                Choose the best plan to fit your needs.</p>
            <div class="d-flex align-items-center justify-content-center flex-wrap gap-2 pt-9 pb-3 mb-2">
                <label class="switch switch-sm ms-sm-12 ps-sm-12 me-0">
                    <span class="switch-label fs-6 text-body">Monthly</span>
                    <input type="checkbox" class="switch-input price-duration-toggler" checked="">
                    <span class="switch-toggle-slider">
                        <span class="switch-on"></span>
                        <span class="switch-off"></span>
                    </span>
                    <span class="switch-label fs-6 text-body">Annually</span>
                </label>
                <div class="mt-n5 ms-n10 ml-2 mb-10 d-none d-sm-flex align-items-center gap-1">
                    <img src="../../assets/img/pages/pricing-arrow-light-1.png" alt="arrow img"
                        class="scaleX-n1-rtl pt-1" data-app-dark-img="pages/pricing-arrow-dark.png"
                        data-app-light-img="pages/pricing-arrow-light.png">
                    <span class="badge badge-sm bg-label-primary rounded-1 mb-3 ">Save up to 10%</span>
                </div>
            </div>

            <div class="row g-6">
                <!-- Basic -->
                <div class="col-lg">
                    <div class="card border rounded shadow-none">
                        <div class="card-body pt-12 px-5">
                            <div class="mt-3 mb-5 text-center">
                                <img src="../../assets/img/icons/unicons/bookmark-1.png" alt="Basic Image"
                                    width="120">
                            </div>
                            <h4 class="card-title text-center text-capitalize mb-1">Basic</h4>
                            <p class="text-center mb-5">A simple start for everyone</p>
                            <div class="text-center h-px-50">
                                <div class="d-flex justify-content-center">
                                    <sup class="h6 text-body pricing-currency mt-2 mb-0 me-1">$</sup>
                                    <h1 class="mb-0 text-primary">0</h1>
                                    <sub class="h6 text-body pricing-duration mt-auto mb-1 ms-1">/month</sub>
                                </div>
                            </div>

                            <ul class="list-group my-5 pt-9">
                                <li class="mb-4 d-flex align-items-center"><span
                                        class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                            class="bx bx-check bx-xs"></i></span><span>100 responses a month</span>
                                </li>
                                <li class="mb-4 d-flex align-items-center"><span
                                        class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                            class="bx bx-check bx-xs"></i></span><span>Unlimited forms and
                                        surveys</span> </li>
                                <li class="mb-4 d-flex align-items-center"><span
                                        class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                            class="bx bx-check bx-xs"></i></span><span>Unlimited fields</span> </li>
                                <li class="mb-4 d-flex align-items-center"><span
                                        class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                            class="bx bx-check bx-xs"></i></span><span>Basic form creation tools</span>
                                </li>
                                <li class="mb-0 d-flex align-items-center"><span
                                        class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                            class="bx bx-check bx-xs"></i></span><span>Up to 2 subdomains</span> </li>
                            </ul>
                            <a href="payment-page.html" class="btn btn-label-success d-grid w-100">Your Current
                                Plan</a>
                        </div>
                    </div>
                </div>

                <!-- Pro -->
                <div class="col-lg">
                    <div class="card border-primary border shadow-none">
                        <div class="card-body position-relative pt-4">
                            <div class="position-absolute end-0 me-5 top-0 mt-4">
                                <span class="badge bg-label-primary rounded-1">Popular</span>
                            </div>
                            <div class="my-5 pt-6 text-center">
                                <img src="../../assets/img/icons/unicons/wallet-round-1.png" alt="Pro Image"
                                    width="120">
                            </div>
                            <h4 class="card-title text-center text-capitalize mb-1">Standard</h4>
                            <p class="text-center mb-5">For small to medium businesses</p>
                            <div class="text-center h-px-50">
                                <div class="d-flex justify-content-center">
                                    <sup class="h6 text-body pricing-currency mt-2 mb-0 me-1">$</sup>
                                    <h1 class="price-toggle price-yearly text-primary mb-0">7</h1>
                                    <h1 class="price-toggle price-monthly text-primary mb-0 d-none">9</h1>
                                    <sub class="h6 text-body pricing-duration mt-auto mb-1 ms-1">/month</sub>
                                </div>
                                <small class="price-yearly price-yearly-toggle text-muted">USD 480 / year</small>
                            </div>

                            <ul class="list-group my-5 pt-9">
                                <li class="mb-4 d-flex align-items-center"><span
                                        class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                            class="bx bx-check bx-xs"></i></span><span>Unlimited responses</span> </li>
                                <li class="mb-4 d-flex align-items-center"><span
                                        class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                            class="bx bx-check bx-xs"></i></span><span>Unlimited forms and
                                        surveys</span> </li>
                                <li class="mb-4 d-flex align-items-center"><span
                                        class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                            class="bx bx-check bx-xs"></i></span><span>Instagram profile page</span>
                                </li>
                                <li class="mb-4 d-flex align-items-center"><span
                                        class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                            class="bx bx-check bx-xs"></i></span><span>Google Docs integration</span>
                                </li>
                                <li class="mb-0 d-flex align-items-center"><span
                                        class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                            class="bx bx-check bx-xs"></i></span><span>Custom “Thank you” page</span>
                                </li>
                            </ul>
                            <a href="payment-page.html" class="btn btn-primary d-grid w-100">Upgrade</a>
                        </div>
                    </div>
                </div>

                <!-- Enterprise -->
                <div class="col-lg">
                    <div class="card border rounded shadow-none">
                        <div class="card-body pt-12">
                            <div class="mt-3 mb-5 text-center">
                                <img src="../../assets/img/icons/unicons/briefcase-round-1.png" alt="Pro Image"
                                    width="120">
                            </div>
                            <h4 class="card-title text-center text-capitalize mb-1">Enterprise</h4>
                            <p class="text-center mb-5">Solution for big organizations</p>

                            <div class="text-center h-px-50">
                                <div class="d-flex justify-content-center">
                                    <sup class="h6 text-body pricing-currency mt-2 mb-0 me-1">$</sup>
                                    <h1 class="price-toggle price-yearly text-primary mb-0">16</h1>
                                    <h1 class="price-toggle price-monthly text-primary mb-0 d-none">19</h1>
                                    <sub class="h6 text-body pricing-duration mt-auto mb-1 ms-1">/month</sub>
                                </div>
                                <small class="price-yearly price-yearly-toggle text-muted">USD 960 / year</small>
                            </div>
                            <ul class="list-group my-5 pt-9">
                                <li class="mb-4 d-flex align-items-center"><span
                                        class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                            class="bx bx-check bx-xs"></i></span><span>PayPal payments</span> </li>
                                <li class="mb-4 d-flex align-items-center"><span
                                        class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                            class="bx bx-check bx-xs"></i></span><span>Logic Jumps</span> </li>
                                <li class="mb-4 d-flex align-items-center"><span
                                        class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                            class="bx bx-check bx-xs"></i></span><span>File upload with 5GB
                                        storage</span> </li>
                                <li class="mb-4 d-flex align-items-center"><span
                                        class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                            class="bx bx-check bx-xs"></i></span><span>Custom domain support</span>
                                </li>
                                <li class="mb-0 d-flex align-items-center"><span
                                        class="badge p-50 w-px-20 h-px-20 rounded-pill bg-label-primary me-2"><i
                                            class="bx bx-check bx-xs"></i></span><span>Stripe integration</span> </li>
                            </ul>
                            <a href="payment-page.html" class="btn btn-label-primary d-grid w-100">Upgrade</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Pricing Plans -->
    <!-- Pricing Free Trial -->
    <section class="pricing-free-trial bg-label-primary">
        <div class="container">
            <div class="position-relative">
                <div
                    class="d-flex justify-content-between flex-column-reverse flex-lg-row align-items-center pt-12 pb-10">
                    <div class="text-center text-lg-start">
                        <h4 class="text-primary mb-2">Still not convinced? Start with a 14-day FREE trial!</h4>
                        <p class="text-body mb-6 mb-md-11">You will get full access to with all the features for 14
                            days.</p>
                        <a href="payment-page.html" class="btn btn-primary">Start 14-day free trial</a>
                    </div>
                    <!-- image -->
                    <div class="text-center">
                        <img src="../../assets/img/illustrations/lady-with-laptop-light-1.png"
                            class="img-fluid me-lg-5 pe-lg-1 mb-3 mb-lg-0" alt="Api Key Image" width="202"
                            data-app-light-img="illustrations/lady-with-laptop-light.png"
                            data-app-dark-img="illustrations/lady-with-laptop-dark.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Pricing Free Trial -->
    <!-- Plans Comparison -->
    <section class="section-py pricing-plans-comparison">
        <div class="container">
            <div class="col-12 text-center mb-6">
                <h3 class="mb-2">Pick a plan that works best for you</h3>
                <p>Stay cool, we have a 48-hour money back guarantee!</p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="table-responsive border border-top-0 rounded">
                        <table class="table table-striped text-center mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <p class="mb-50">Features</p>
                                        <small class="text-body fw-normal text-capitalize">Native front
                                            features</small>
                                    </th>
                                    <th scope="col">
                                        <p class="mb-50">Starter</p>
                                        <small class="text-body fw-normal text-capitalize">Free</small>
                                    </th>
                                    <th scope="col">
                                        <p class="mb-50 position-relative">Pro
                                            <span
                                                class="badge badge-center rounded-pill bg-primary position-absolute mt-n2 ms-1"><i
                                                    class="bx bx-star"></i></span>
                                        </p>
                                        <small class="text-body fw-normal text-capitalize">$7.5/month</small>
                                    </th>
                                    <th scope="col">
                                        <p class="mb-50">Enterprise</p>
                                        <small class="text-body fw-normal text-capitalize">$16/month</small>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-heading">14-days free trial</td>
                                    <td><span
                                            class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-primary p-0">
                                            <i class="bx bx-check"></i>
                                        </span>
                                    </td>
                                    <td><span
                                            class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-primary p-0">
                                            <i class="bx bx-check"></i>
                                        </span>
                                    </td>
                                    <td><span
                                            class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-primary p-0">
                                            <i class="bx bx-check"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-heading">No user limit</td>
                                    <td><span
                                            class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-secondary p-0 d-inline-flex align-items-center justify-content-center">
                                            <i class="bx bx-x"></i>
                                        </span>
                                    </td>
                                    <td><span
                                            class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-secondary p-0 d-inline-flex align-items-center justify-content-center">
                                            <i class="bx bx-x"></i>
                                        </span>
                                    </td>
                                    <td><span
                                            class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-primary p-0 d-inline-flex align-items-center justify-content-center">
                                            <i class="bx bx-check"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-heading">Product Support</td>
                                    <td><span
                                            class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-secondary p-0 d-inline-flex align-items-center justify-content-center">
                                            <i class="bx bx-x"></i>
                                        </span>
                                    </td>
                                    <td><span
                                            class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-primary p-0 d-inline-flex align-items-center justify-content-center">
                                            <i class="bx bx-check"></i>
                                        </span>
                                    </td>
                                    <td><span
                                            class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-primary p-0 d-inline-flex align-items-center justify-content-center">
                                            <i class="bx bx-check"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-heading">Email Support</td>
                                    <td><span
                                            class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-secondary p-0 d-inline-flex align-items-center justify-content-center">
                                            <i class="bx bx-x"></i>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-primary badge-sm">Add-On-Available</span>
                                    </td>
                                    <td><span
                                            class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-primary p-0 d-inline-flex align-items-center justify-content-center">
                                            <i class="bx bx-check"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-heading">Integrations</td>
                                    <td><span
                                            class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-secondary p-0 d-inline-flex align-items-center justify-content-center">
                                            <i class="bx bx-x"></i>
                                        </span>
                                    </td>
                                    <td><span
                                            class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-primary p-0 d-inline-flex align-items-center justify-content-center">
                                            <i class="bx bx-check"></i>
                                        </span>
                                    </td>
                                    <td><span
                                            class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-primary p-0 d-inline-flex align-items-center justify-content-center">
                                            <i class="bx bx-check"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-heading">Removal of Front branding</td>
                                    <td><span
                                            class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-secondary p-0 d-inline-flex align-items-center justify-content-center">
                                            <i class="bx bx-x"></i>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge bg-label-primary badge-sm">Add-On-Available</span>
                                    </td>
                                    <td><span
                                            class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-primary p-0 d-inline-flex align-items-center justify-content-center">
                                            <i class="bx bx-check"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-heading">Active maintenance & support</td>
                                    <td><span
                                            class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-secondary p-0 d-inline-flex align-items-center justify-content-center">
                                            <i class="bx bx-x"></i>
                                        </span>
                                    </td>
                                    <td><span
                                            class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-secondary p-0 d-inline-flex align-items-center justify-content-center">
                                            <i class="bx bx-x"></i>
                                        </span>
                                    </td>
                                    <td><span
                                            class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-primary p-0 d-inline-flex align-items-center justify-content-center">
                                            <i class="bx bx-check"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-heading">Data storage for 365 days</td>
                                    <td><span
                                            class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-secondary p-0 d-inline-flex align-items-center justify-content-center">
                                            <i class="bx bx-x"></i>
                                        </span>
                                    </td>
                                    <td><span
                                            class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-secondary p-0 d-inline-flex align-items-center justify-content-center">
                                            <i class="bx bx-x"></i>
                                        </span>
                                    </td>
                                    <td><span
                                            class="badge badge-center rounded-pill w-px-20 h-px-20 bg-label-primary p-0 d-inline-flex align-items-center justify-content-center">
                                            <i class="bx bx-check"></i>
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <a href="payment-page.html" class="btn text-nowrap btn-label-primary">Choose
                                            Plan</a>
                                    </td>
                                    <td>
                                        <a href="payment-page.html" class="btn text-nowrap btn-primary">Choose
                                            Plan</a>
                                    </td>
                                    <td>
                                        <a href="payment-page.html" class="btn text-nowrap btn-label-primary">Choose
                                            Plan</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Plans Comparison -->
    <!-- FAQS -->
    <section class="section-py pricing-faqs rounded-bottom bg-body">
        <div class="container">
            <div class="text-center mb-6">
                <h4 class="mb-2">FAQs</h4>
                <p>Let us help answer the most common questions you might have.</p>
            </div>
            <div class="accordion" id="pricingFaq">
                <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingone">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#faq-1" aria-expanded="false" aria-controls="faq-1">
                            What counts towards the 100 responses limit?
                        </button>
                    </h2>
                    <div id="faq-1" class="accordion-collapse collapse" aria-labelledby="headingone"
                        data-bs-parent="#pricingFaq">
                        <div class="accordion-body">
                            We accept Visa®, MasterCard®, American Express®, and PayPal®.
                            So you can be confident that your credit card information will be kept
                            safe and secure.
                        </div>
                    </div>
                </div>
                <div class="card accordion-item active">
                    <h2 class="accordion-header" id="headingTwo">
                        <button type="button" class="accordion-button" data-bs-toggle="collapse"
                            data-bs-target="#faq-2" aria-expanded="false" aria-controls="faq-2">
                            How do you process payments?
                        </button>
                    </h2>
                    <div id="faq-2" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                        data-bs-parent="#pricingFaq">
                        <div class="accordion-body">
                            Donec placerat, lectus sed mattis semper, neque lectus feugiat lectus, varius pulvinar diam
                            eros in elit. Pellentesque convallis laoreet laoreet.Donec placerat, lectus sed mattis
                            semper, neque lectus feugiat lectus, varius pulvinar diam eros in elit. Pellentesque
                            convallis laoreet laoreet.
                        </div>
                    </div>
                </div>
                <div class="card accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#faq-3" aria-expanded="false" aria-controls="faq-3">
                            Do you have a money-back guarantee?
                        </button>
                    </h2>
                    <div id="faq-3" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#pricingFaq">
                        <div class="accordion-body">
                            We count all responses submitted through all your forms in a month.
                            If you already received 100 responses this month, you won’t be able to receive any more of
                            them until next
                            month when the counter resets.
                        </div>
                    </div>
                </div>
                <div class="card accordion-item">
                    <h6 class="accordion-header" id="headingFour">
                        <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse"
                            data-bs-target="#faq-4" aria-expanded="false" aria-controls="faq-4">
                            I have more questions. Where can I get help?
                        </button>
                    </h6>
                    <div id="faq-4" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#pricingFaq">
                        <div class="accordion-body">
                            2Checkout accepts all types of credit and debit cards.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ FAQS -->


    <!-- / Sections:End -->



    <!-- Footer: Start -->
    <footer class="landing-footer bg-body footer-text">
        <div class="footer-top position-relative overflow-hidden z-1">
            <img src="../../assets/img/front-pages/backgrounds/footer-bg.png" alt="footer bg"
                class="footer-bg banner-bg-img z-n1">
            <div class="container">
                <div class="row gx-0 gy-6 g-lg-10">
                    <div class="col-lg-5">
                        <a href="landing-page.html" class="app-brand-link mb-6">
                            <span class="app-brand-logo demo">

                                <svg width="25" viewbox="0 0 25 42" version="1.1"
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <defs>
                                        <path
                                            d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                                            id="path-1"></path>
                                        <path
                                            d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                                            id="path-3"></path>
                                        <path
                                            d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                                            id="path-4"></path>
                                        <path
                                            d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                                            id="path-5"></path>
                                    </defs>
                                    <g id="g-app-brand" stroke="none" stroke-width="1" fill="none"
                                        fill-rule="evenodd">
                                        <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                                            <g id="Icon" transform="translate(27.000000, 15.000000)">
                                                <g id="Mask" transform="translate(0.000000, 8.000000)">
                                                    <mask id="mask-2" fill="white">
                                                        <use xlink:href="#path-1"></use>
                                                    </mask>
                                                    <use fill="#696cff" xlink:href="#path-1"></use>
                                                    <g id="Path-3" mask="url(#mask-2)">
                                                        <use fill="#696cff" xlink:href="#path-3"></use>
                                                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3">
                                                        </use>
                                                    </g>
                                                    <g id="Path-4" mask="url(#mask-2)">
                                                        <use fill="#696cff" xlink:href="#path-4"></use>
                                                        <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4">
                                                        </use>
                                                    </g>
                                                </g>
                                                <g id="Triangle"
                                                    transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                                                    <use fill="#696cff" xlink:href="#path-5"></use>
                                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5">
                                                    </use>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>

                            </span>
                            <span class="app-brand-text demo text-white fw-bold ms-2 ps-1">sneat</span>
                        </a>
                        <p class="footer-text footer-logo-description mb-6">
                            Most developer friendly & highly customisable Admin Dashboard Template.
                        </p>
                        <form class="footer-form">
                            <label for="footer-email" class="small">Subscribe to newsletter</label>
                            <div class="d-flex mt-1">
                                <input type="email"
                                    class="form-control rounded-0 rounded-start-bottom rounded-start-top"
                                    id="footer-email" placeholder="Your email">
                                <button type="submit"
                                    class="btn btn-primary shadow-none rounded-0 rounded-end-bottom rounded-end-top">
                                    Subscribe
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <h6 class="footer-title mb-6">Demos</h6>
                        <ul class="list-unstyled">
                            <li class="mb-4">
                                <a href="../vertical-menu-template/" target="_blank" class="footer-link">Vertical
                                    Layout</a>
                            </li>
                            <li class="mb-4">
                                <a href="../horizontal-menu-template/" target="_blank" class="footer-link">Horizontal
                                    Layout</a>
                            </li>
                            <li class="mb-4">
                                <a href="../vertical-menu-template-bordered/" target="_blank"
                                    class="footer-link">Bordered Layout</a>
                            </li>
                            <li class="mb-4">
                                <a href="../vertical-menu-template-semi-dark/" target="_blank"
                                    class="footer-link">Semi Dark Layout</a>
                            </li>
                            <li>
                                <a href="../vertical-menu-template-dark/" target="_blank" class="footer-link">Dark
                                    Layout</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <h6 class="footer-title mb-6">Pages</h6>
                        <ul class="list-unstyled">
                            <li class="mb-4">
                                <a href="pricing-page.html" class="footer-link">Pricing</a>
                            </li>
                            <li class="mb-4">
                                <a href="payment-page.html" class="footer-link">Payment<span
                                        class="badge bg-primary ms-2">New</span></a>
                            </li>
                            <li class="mb-4">
                                <a href="checkout-page.html" class="footer-link">Checkout</a>
                            </li>
                            <li class="mb-4">
                                <a href="help-center-landing.html" class="footer-link">Help Center</a>
                            </li>
                            <li>
                                <a href="../vertical-menu-template/auth-login-cover.html" target="_blank"
                                    class="footer-link">Login/Register</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <h6 class="footer-title mb-6">Download our app</h6>
                        <a href="javascript:void(0);" class="d-block mb-4"><img
                                src="../../assets/img/front-pages/landing-page/apple-icon.png" alt="apple icon"></a>
                        <a href="javascript:void(0);" class="d-block"><img
                                src="../../assets/img/front-pages/landing-page/google-play-icon.png"
                                alt="google play icon"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom py-3 py-md-5">
            <div
                class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
                <div class="mb-2 mb-md-0">
                    <span class="footer-bottom-text">©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                    </span>
                    <a href="https://themeselection.com" target="_blank" class="text-white">ThemeSelection,</a>
                    <span class="footer-bottom-text"> Made with ❤️ for a better web.</span>
                </div>
                <div>
                    <a href="https://github.com/themeselection" class="me-4" target="_blank">
                        <img src="../../assets/img/front-pages/icons/github.svg" alt="github icon">
                    </a>
                    <a href="https://www.facebook.com/ThemeSelections/" class="me-4" target="_blank">
                        <img src="../../assets/img/front-pages/icons/facebook.svg" alt="facebook icon">
                    </a>
                    <a href="https://twitter.com/Theme_Selection" class="me-4" target="_blank">
                        <img src="../../assets/img/front-pages/icons/twitter.svg" alt="twitter icon">
                    </a>
                    <a href="https://www.instagram.com/themeselection/" target="_blank">
                        <img src="../../assets/img/front-pages/icons/instagram.svg" alt="google icon">
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer: End -->
    <x-slot:js>
        <script src="{{ asset('assets/js/front-page-pricing.js') }}"></script>
    </x-slot:js>
</x-front-app>
