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
                                            <li class="nav-item">
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
                                            <li class="nav-item active">
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

    <section class="section-py bg-body first-section-pt">
        <div class="container">
            <!--/ Checkout Wizard -->
            <!-- Checkout Wizard -->
            <div id="wizard-checkout" class="bs-stepper wizard-icons wizard-icons-example">
                <div class="bs-stepper-header m-lg-auto border-0">
                    <div class="step" data-target="#checkout-cart">
                        <button type="button" class="step-trigger">
                            <span class="bs-stepper-icon">
                                <svg viewbox="0 0 60 60">
                                    <use xlink:href='../../assets/svg/icons/wizard-checkout-cart.svg#wizardCart'></use>
                                </svg>
                            </span>
                            <span class="bs-stepper-label">Cart</span>
                        </button>
                    </div>
                    <div class="line">
                        <i class="bx bx-chevron-right"></i>
                    </div>
                    <div class="step" data-target="#checkout-address">
                        <button type="button" class="step-trigger">
                            <span class="bs-stepper-icon">
                                <svg viewbox="0 0 60 60">
                                    <use
                                        xlink:href='../../assets/svg/icons/wizard-checkout-address.svg#wizardCheckoutAddress'>
                                    </use>
                                </svg>
                            </span>
                            <span class="bs-stepper-label">Address</span>
                        </button>
                    </div>
                    <div class="line">
                        <i class="bx bx-chevron-right"></i>
                    </div>
                    <div class="step" data-target="#checkout-payment">
                        <button type="button" class="step-trigger">
                            <span class="bs-stepper-icon">
                                <svg viewbox="0 0 60 60">
                                    <use xlink:href='../../assets/svg/icons/wizard-checkout-payment.svg#wizardPayment'>
                                    </use>
                                </svg>
                            </span>
                            <span class="bs-stepper-label">Payment</span>
                        </button>
                    </div>
                    <div class="line">
                        <i class="bx bx-chevron-right"></i>
                    </div>
                    <div class="step" data-target="#checkout-confirmation">
                        <button type="button" class="step-trigger">
                            <span class="bs-stepper-icon">
                                <svg viewbox="0 0 60 60">
                                    <use
                                        xlink:href='../../assets/svg/icons/wizard-checkout-confirmation.svg#wizardConfirm'>
                                    </use>
                                </svg>
                            </span>
                            <span class="bs-stepper-label">Confirmation</span>
                        </button>
                    </div>
                </div>
                <div class="bs-stepper-content border-top">
                    <form id="wizard-checkout-form" onsubmit="return false">

                        <!-- Cart -->
                        <div id="checkout-cart" class="content">
                            <div class="row">
                                <!-- Cart left -->
                                <div class="col-xl-8 mb-6 mb-xl-0">

                                    <!-- Offer alert -->
                                    <div class="alert alert-success mb-4" role="alert">
                                        <div class="d-flex gap-3">
                                            <div class="alert-icon flex-shrink-0 rounded-circle me-0">
                                                <i class="bx bx-purchase-tag"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="alert-heading mb-1">Available Offers</h5>
                                                <ul class="list-unstyled mb-0">
                                                    <li> - 10% Instant Discount on Bank of America Corp Bank Debit and
                                                        Credit cards</li>
                                                    <li> - 25% Cashback Voucher of up to $60 on first ever PayPal
                                                        transaction. TCA</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <button type="button" class="btn-close btn-pinned" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>

                                    <!-- Shopping bag -->
                                    <h5>My Shopping Bag (2 Items)</h5>
                                    <ul class="list-group mb-4">
                                        <li class="list-group-item p-6">
                                            <div class="d-flex gap-4 flex-sm-row flex-column align-items-center">
                                                <div class="flex-shrink-0 d-flex align-items-center">
                                                    <img src="../../assets/img/products/1-1.png" alt="google home"
                                                        class="w-px-100">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="row text-center text-sm-start">
                                                        <div class="col-md-8">
                                                            <p class="me-3 mb-2"><a href="javascript:void(0)"
                                                                    class="fw-medium"> <span
                                                                        class="text-heading">Google - Google Home -
                                                                        White</span></a></p>
                                                            <div
                                                                class="text-muted mb-2 d-flex flex-wrap justify-content-center justify-content-sm-start">
                                                                <span class="me-1">Sold by:</span> <a
                                                                    href="javascript:void(0)" class="me-4">Apple</a>
                                                                <span class="badge bg-label-success">In Stock</span>
                                                            </div>
                                                            <div
                                                                class="d-flex d-md-block align-items-center mb-2 gap-2 justify-content-center justify-content-sm-start">
                                                                <div class="read-only-ratings mb-sm-2 px-0"
                                                                    data-rateyo-read-only="true"></div>
                                                                <input type="number"
                                                                    class="form-control form-control-sm w-px-100"
                                                                    value="1" min="1" max="5">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="text-md-end">
                                                                <button type="button" class="btn-close btn-pinned"
                                                                    aria-label="Close"></button>
                                                                <div
                                                                    class="d-flex d-md-block align-items-center mb-2 gap-2 justify-content-center justify-content-sm-start">
                                                                    <div class="my-2 mt-md-8 mb-md-4"><span
                                                                            class="text-primary">$299/</span><s
                                                                            class="text-body">$359</s></div>
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-label-primary">Move to
                                                                        wishlist</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item p-6">
                                            <div class="d-flex gap-4 flex-sm-row flex-column align-items-center">
                                                <div class="flex-shrink-0 d-flex align-items-center">
                                                    <img src="../../assets/img/products/2-1.png" alt="google home"
                                                        class="w-px-100">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="row text-center text-sm-start">
                                                        <div class="col-md-8">
                                                            <p class="me-3 mb-2"><a href="javascript:void(0)"
                                                                    class="fw-medium"><span class="text-heading">Apple
                                                                        iPhone 11 (64GB, Black)</span></a></p>
                                                            <div
                                                                class="text-muted mb-2 d-flex flex-wrap justify-content-center justify-content-sm-start">
                                                                <span class="me-1">Sold by:</span> <a
                                                                    href="javascript:void(0)" class="me-4">Apple</a>
                                                                <span class="badge bg-label-success">In Stock</span>
                                                            </div>
                                                            <div
                                                                class="d-flex d-md-block align-items-center mb-2 gap-2 justify-content-center justify-content-sm-start">
                                                                <div class="read-only-ratings mb-sm-2 px-0"
                                                                    data-rateyo-read-only="true"></div>
                                                                <input type="number"
                                                                    class="form-control form-control-sm w-px-100"
                                                                    value="1" min="1" max="5">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="text-md-end">
                                                                <button type="button"
                                                                    class="btn-close btn-pinned checkout-btn-close"
                                                                    aria-label="Close"></button>
                                                                <div
                                                                    class="d-flex d-md-block align-items-center mb-2 gap-2 justify-content-center justify-content-sm-start">
                                                                    <div class="my-2 mt-md-8 mb-md-4"><span
                                                                            class="text-primary">$299/</span><s
                                                                            class="text-body">$359</s></div>
                                                                    <button type="button"
                                                                        class="btn btn-sm btn-label-primary">Move to
                                                                        wishlist</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

                                    <!-- Wishlist -->
                                    <div class="list-group">
                                        <a href="javascript:void(0)"
                                            class="list-group-item text-primary border-primary d-flex justify-content-between">
                                            <span class="fw-medium">Add more products from wishlist</span>
                                            <i class="bx bx-sm bx-right-arrow-alt scaleX-n1-rtl mt-50"></i>
                                        </a>
                                    </div>
                                </div>

                                <!-- Cart right -->
                                <div class="col-xl-4">
                                    <div class="border rounded p-6 mb-4">

                                        <!-- Offer -->
                                        <h6>Offer</h6>
                                        <div class="row g-4 mb-4">
                                            <div class="col-8 col-xxl-8 col-xl-12">
                                                <input type="text" class="form-control"
                                                    placeholder="Enter Promo Code" aria-label="Enter Promo Code">
                                            </div>
                                            <div class="col-4 col-xxl-4 col-xl-12">
                                                <div class="d-grid">
                                                    <button type="button"
                                                        class="btn btn-label-primary">Apply</button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Gift wrap -->
                                        <div class="bg-lighter rounded p-6">
                                            <h6 class="mb-2">Buying gift for a loved one?</h6>
                                            <p class="mb-2">Gift wrap and personalized message on card, Only for $2.
                                            </p>
                                            <a href="javascript:void(0)" class="fw-medium">Add a gift wrap</a>
                                        </div>
                                        <hr class="mx-n6 my-6">

                                        <!-- Price Details -->
                                        <h6>Price Details</h6>
                                        <dl class="row mb-0 text-heading">
                                            <dt class="col-6 fw-normal">Bag Total</dt>
                                            <dd class="col-6 text-end">$1198.00</dd>

                                            <dt class="col-6 fw-normal">Coupon Discount</dt>
                                            <dd class="col-6 text-primary text-end">Apply Coupon</dd>

                                            <dt class="col-6 fw-normal">Order Total</dt>
                                            <dd class="col-6 text-end">$1198.00</dd>

                                            <dt class="col-6 fw-normal">Delivery Charges</dt>
                                            <dd class="col-6 text-end"><s class="text-muted">$5.00</s> <span
                                                    class="badge bg-label-success ms-1">Free</span></dd>

                                        </dl>

                                        <hr class="mx-n6 my-6">
                                        <dl class="row mb-0">
                                            <dt class="col-6 text-heading">Total</dt>
                                            <dd class="col-6 fw-medium text-end text-heading mb-0">$1198.00</dd>
                                        </dl>
                                    </div>
                                    <div class="d-grid">
                                        <button class="btn btn-primary btn-next">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Address -->
                        <div id="checkout-address" class="content">
                            <div class="row">
                                <!-- Address left -->
                                <div class="col-xl-8 mb-6 mb-xl-0">

                                    <!-- Select address -->
                                    <p class="fw-medium text-heading">Select your preferable address</p>
                                    <div class="row mb-4 g-6">
                                        <div class="col-md">
                                            <div class="form-check custom-option custom-option-basic checked">
                                                <label class="form-check-label custom-option-content"
                                                    for="customRadioAddress1">
                                                    <input name="customRadioTemp" class="form-check-input"
                                                        type="radio" value="" id="customRadioAddress1"
                                                        checked="">
                                                    <span class="custom-option-header mb-2">
                                                        <span class="fw-medium text-heading mb-0">John Doe
                                                            (Default)</span>
                                                        <span class="badge bg-label-primary">Home</span>
                                                    </span>
                                                    <span class="custom-option-body">
                                                        <small>4135 Parkway Street, Los Angeles, CA, 90017.<br> Mobile :
                                                            1234567890 Card / Cash on delivery available</small>
                                                        <span class="my-3 border-bottom d-block"></span>
                                                        <span class="d-flex mb-1_5">
                                                            <a class="me-4" href="javascript:void(0)">Edit</a> <a
                                                                href="javascript:void(0)">Remove</a>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-check custom-option custom-option-basic">
                                                <label class="form-check-label custom-option-content"
                                                    for="customRadioAddress2">
                                                    <input name="customRadioTemp" class="form-check-input"
                                                        type="radio" value="" id="customRadioAddress2">
                                                    <span class="custom-option-header mb-2">
                                                        <span class="fw-medium text-heading mb-0">ACME Inc.</span>
                                                        <span class="badge bg-label-success">Office</span>
                                                    </span>
                                                    <span class="custom-option-body">
                                                        <small>87 Hoffman Avenue, New York, NY, 10016.<br>Mobile :
                                                            1234567890 Card / Cash on delivery available</small>
                                                        <span class="my-3 border-bottom d-block"></span>
                                                        <span class="d-flex mb-1_5">
                                                            <a class="me-4" href="javascript:void(0)">Edit</a> <a
                                                                href="javascript:void(0)">Remove</a>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-label-primary mb-6" data-bs-toggle="modal"
                                        data-bs-target="#addNewAddress">Add new address</button>

                                    <!-- Choose Delivery -->
                                    <p class="fw-medium text-heading">Choose Delivery Speed</p>
                                    <div class="row mt-2">
                                        <div class="col-md mb-md-0 mb-2">
                                            <div
                                                class="form-check custom-option custom-option-icon position-relative checked">
                                                <label class="form-check-label custom-option-content"
                                                    for="customRadioDelivery1">
                                                    <span class="custom-option-body">
                                                        <i class="bx bx-user mb-2"></i>
                                                        <span class="custom-option-title mb-2">Standard</span>
                                                        <span class="badge bg-label-success btn-pinned">FREE</span>
                                                        <small>Get your product in 1 Week.</small>
                                                    </span>
                                                    <input name="customRadioIcon" class="form-check-input"
                                                        type="radio" value="" id="customRadioDelivery1"
                                                        checked="">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md mb-md-0 mb-2">
                                            <div class="form-check custom-option custom-option-icon position-relative">
                                                <label class="form-check-label custom-option-content"
                                                    for="customRadioDelivery2">
                                                    <span class="custom-option-body">
                                                        <i class="bx bx-star mb-2"></i>
                                                        <span class="custom-option-title mb-2">Express</span>
                                                        <span class="badge bg-label-secondary btn-pinned">$10</span>
                                                        <small>Get your product in 3-4 days.</small>
                                                    </span>
                                                    <input name="customRadioIcon" class="form-check-input"
                                                        type="radio" value="" id="customRadioDelivery2">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-check custom-option custom-option-icon position-relative">
                                                <label class="form-check-label custom-option-content"
                                                    for="customRadioDelivery3">
                                                    <span class="custom-option-body">
                                                        <i class="bx bx-crown mb-2"></i>
                                                        <span class="custom-option-title mb-2">Overnight</span>
                                                        <span class="badge bg-label-secondary btn-pinned">$15</span>
                                                        <small>Get your product in 0-1 days.</small>
                                                    </span>
                                                    <input name="customRadioIcon" class="form-check-input"
                                                        type="radio" value="" id="customRadioDelivery3">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Address right -->
                                <div class="col-xl-4">
                                    <div class="border rounded p-6 mb-4">

                                        <!-- Estimated Delivery -->
                                        <h6>Estimated Delivery Date</h6>
                                        <ul class="list-unstyled">
                                            <li class="d-flex gap-4 align-items-center py-2 mb-4">
                                                <div class="flex-shrink-0">
                                                    <img src="../../assets/img/products/1-1.png" alt="google home"
                                                        class="w-px-50">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0"><a class="text-body"
                                                            href="javascript:void(0)">Google - Google Home - White</a>
                                                    </p>
                                                    <p class="fw-medium mb-0">18th Nov 2021</p>
                                                </div>
                                            </li>
                                            <li class="d-flex gap-4 align-items-center py-2">
                                                <div class="flex-shrink-0">
                                                    <img src="../../assets/img/products/2-1.png" alt="google home"
                                                        class="w-px-50">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <p class="mb-0"><a class="text-body"
                                                            href="javascript:void(0)">Apple iPhone 11 (64GB, Black)</a>
                                                    </p>
                                                    <p class="fw-medium mb-0">20th Nov 2021</p>
                                                </div>
                                            </li>
                                        </ul>

                                        <hr class="mx-n6 my-6">

                                        <!-- Price Details -->
                                        <h6>Price Details</h6>
                                        <dl class="row mb-0 text-heading">

                                            <dt class="col-6 fw-normal">Order Total</dt>
                                            <dd class="col-6 text-end">$1198.00</dd>

                                            <dt class="col-6 fw-normal">Delivery Charges</dt>
                                            <dd class="col-6 text-end"><s class="text-muted">$5.00</s> <span
                                                    class="badge bg-label-success ms-2">Free</span></dd>

                                        </dl>
                                        <hr class="mx-n6 my-6">
                                        <dl class="row mb-0">
                                            <dt class="col-6 text-heading">Total</dt>
                                            <dd class="col-6 fw-medium text-end text-heading mb-0">$1198.00</dd>
                                        </dl>
                                    </div>
                                    <div class="d-grid">
                                        <button class="btn btn-primary btn-next">Place Order</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Payment -->
                        <div id="checkout-payment" class="content">
                            <div class="row">
                                <!-- Payment left -->
                                <div class="col-xl-8 mb-6 mb-xl-0">
                                    <!-- Offer alert -->
                                    <div class="alert alert-success mb-6" role="alert">
                                        <div class="d-flex gap-4">
                                            <div class="alert-icon flex-shrink-0 rounded-circle me-0">
                                                <i class="bx bx-purchase-tag"></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h5 class="alert-heading mb-1">Available Offers</h5>
                                                <ul class="list-unstyled mb-0">
                                                    <li> - 10% Instant Discount on Bank of America Corp Bank Debit and
                                                        Credit cards</li>
                                                    <li> - 25% Cashback Voucher of up to $60 on first ever PayPal
                                                        transaction. TCA</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <button type="button" class="btn-close btn-pinned" data-bs-dismiss="alert"
                                            aria-label="Close"></button>
                                    </div>

                                    <!-- Payment Tabs -->
                                    <div class="col-xxl-6 col-lg-8">
                                        <div class="nav-align-top">
                                            <ul class="nav nav-pills row-gap-2" id="paymentTabs" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="pills-cc-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-cc"
                                                        type="button" role="tab" aria-controls="pills-cc"
                                                        aria-selected="true">Card</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-cod-tab" data-bs-toggle="pill"
                                                        data-bs-target="#pills-cod" type="button" role="tab"
                                                        aria-controls="pills-cod" aria-selected="false">Cash On
                                                        Delivery</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="pills-gift-card-tab"
                                                        data-bs-toggle="pill" data-bs-target="#pills-gift-card"
                                                        type="button" role="tab" aria-controls="pills-gift-card"
                                                        aria-selected="false">Gift Card</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="tab-content px-0 pb-0" id="paymentTabsContent">
                                            <!-- Credit card -->
                                            <div class="tab-pane fade show active" id="pills-cc" role="tabpanel"
                                                aria-labelledby="pills-cc-tab">
                                                <div class="row g-6">
                                                    <div class="col-12">
                                                        <label class="form-label w-100" for="paymentCard">Card
                                                            Number</label>
                                                        <div class="input-group input-group-merge">
                                                            <input id="paymentCard" name="paymentCard"
                                                                class="form-control credit-card-mask" type="text"
                                                                placeholder="1356 3215 6548 7898"
                                                                aria-describedby="paymentCard2">
                                                            <span class="input-group-text cursor-pointer"
                                                                id="paymentCard2"><span
                                                                    class="card-type"></span></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6">
                                                        <label class="form-label" for="paymentCardName">Name</label>
                                                        <input type="text" id="paymentCardName"
                                                            class="form-control" placeholder="John Doe">
                                                    </div>
                                                    <div class="col-6 col-md-3">
                                                        <label class="form-label" for="paymentCardExpiryDate">Exp.
                                                            Date</label>
                                                        <input type="text" id="paymentCardExpiryDate"
                                                            class="form-control expiry-date-mask" placeholder="MM/YY">
                                                    </div>
                                                    <div class="col-6 col-md-3">
                                                        <label class="form-label" for="paymentCardCvv">CVV
                                                            Code</label>
                                                        <div class="input-group input-group-merge">
                                                            <input type="text" id="paymentCardCvv"
                                                                class="form-control cvv-code-mask" maxlength="3"
                                                                placeholder="654">
                                                            <span class="input-group-text cursor-pointer"
                                                                id="paymentCardCvv2"><i
                                                                    class="bx bx-help-circle text-muted"
                                                                    data-bs-toggle="tooltip" data-bs-placement="top"
                                                                    title="Card Verification Value"></i></span>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="form-check form-switch mt-2 ms-2">
                                                            <input type="checkbox" class="form-check-input"
                                                                id="cardFutureBilling">
                                                            <label for="cardFutureBilling"
                                                                class="form-check-label">Save card for future
                                                                billing?</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="button"
                                                            class="btn btn-primary btn-next me-3">Save Changes</button>
                                                        <button type="reset"
                                                            class="btn btn-label-secondary">Reset</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- COD -->
                                            <div class="tab-pane fade" id="pills-cod" role="tabpanel"
                                                aria-labelledby="pills-cod-tab">
                                                <p>Cash on Delivery is a type of payment method where the recipient make
                                                    payment for the order at the time of delivery rather than in
                                                    advance.</p>
                                                <button type="button" class="btn btn-primary btn-next">Pay On
                                                    Delivery</button>
                                            </div>

                                            <!-- Gift card -->
                                            <div class="tab-pane fade" id="pills-gift-card" role="tabpanel"
                                                aria-labelledby="pills-gift-card-tab">
                                                <h6>Enter Gift Card Details</h6>
                                                <div class="row g-5">
                                                    <div class="col-12">
                                                        <label for="giftCardNumber" class="form-label">Gift card
                                                            number</label>
                                                        <input type="number" class="form-control"
                                                            id="giftCardNumber" placeholder="Gift card number">
                                                    </div>
                                                    <div class="col-12">
                                                        <label for="giftCardPin" class="form-label">Gift card
                                                            pin</label>
                                                        <input type="number" class="form-control" id="giftCardPin"
                                                            placeholder="Gift card pin">
                                                    </div>
                                                    <div class="col-12">
                                                        <button type="button" class="btn btn-primary btn-next">Redeem
                                                            Gift Card</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- Address right -->
                                <div class="col-xl-4">
                                    <div class="border rounded p-6">

                                        <!-- Price Details -->
                                        <h6>Price Details</h6>
                                        <dl class="row text-heading">

                                            <dt class="col-6 fw-normal">Order Total</dt>
                                            <dd class="col-6 text-end">$1198.00</dd>

                                            <dt class="col-6 fw-normal">Delivery Charges</dt>
                                            <dd class="col-6 text-end"><s class="text-muted">$5.00</s> <span
                                                    class="badge bg-label-success ms-1">Free</span></dd>

                                        </dl>
                                        <hr class="mx-n6 mb-6 mt-4">
                                        <dl class="row">
                                            <dt class="col-6 text-heading mb-3">Total</dt>
                                            <dd class="col-6 fw-medium text-end text-heading mb-0">$1198.00</dd>

                                            <dt class="col-6 fw-medium text-heading">Deliver to:</dt>
                                            <dd class="col-6 fw-medium text-end mb-0"><span
                                                    class="badge bg-label-primary">Home</span></dd>
                                        </dl>
                                        <!-- Address Details -->
                                        <address>
                                            <span class="text-heading fw-medium"> John Doe (Default),</span><br>
                                            4135 Parkway Street, <br>
                                            Los Angeles, CA, 90017. <br>
                                            Mobile : +1 906 568 2332
                                        </address>
                                        <a href="javascript:void(0)" class="fw-medium">Change address</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Confirmation -->
                        <div id="checkout-confirmation" class="content">
                            <div class="row mb-6">
                                <div class="col-12 col-lg-8 mx-auto text-center mb-2">
                                    <h4>Thank You! 😇</h4>
                                    <p>Your order <a href="javascript:void(0)"
                                            class="text-heading fw-medium">#1536548131</a> has been placed!</p>
                                    <p>We sent an email to <a href="mailto:john.doe@example.com"
                                            class="text-heading fw-medium">john.doe@example.com</a> with your order
                                        confirmation and receipt. If the email hasn't arrived within two minutes, please
                                        check your spam folder to see if the email was routed there.</p>
                                    <p><span><i class="bx bx-time-five me-1 text-heading align-top"></i> Time
                                            placed:&nbsp;</span> 25/05/2020 13:35pm</p>
                                </div>
                                <!-- Confirmation details -->
                                <div class="col-12">
                                    <ul class="list-group list-group-horizontal-md">
                                        <li class="list-group-item flex-fill p-6 text-body">
                                            <h6 class="d-flex align-items-center gap-2"><i class="bx bx-map"></i>
                                                Shipping</h6>
                                            <address class="mb-0">
                                                John Doe <br>
                                                4135 Parkway Street,<br>
                                                Los Angeles, CA 90017,<br>
                                                USA
                                            </address>
                                            <p class="mb-0 mt-4">+123456789</p>
                                        </li>
                                        <li class="list-group-item flex-fill p-6 text-body">
                                            <h6 class="d-flex align-items-center gap-2"><i
                                                    class="bx bx-credit-card"></i> Billing Address</h6>
                                            <address class="mb-0">
                                                John Doe <br>
                                                4135 Parkway Street,<br>
                                                Los Angeles, CA 90017,<br>
                                                USA
                                            </address>
                                            <p class="mb-0 mt-4">+123456789</p>
                                        </li>
                                        <li class="list-group-item flex-fill p-6 text-body">
                                            <h6 class="d-flex align-items-center gap-2"><i class="bx bxs-ship"></i>
                                                Shipping Method</h6>
                                            <p class="fw-medium mb-4">Preferred Method:</p>
                                            Standard Delivery<br>
                                            (Normally 3-4 business days)
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="row">
                                <!-- Confirmation items -->
                                <div class="col-xl-9 mb-6 mb-xl-0">
                                    <ul class="list-group">
                                        <li class="list-group-item p-6">
                                            <div class="d-flex gap-4 flex-sm-row flex-column">
                                                <div class="flex-shrink-0">
                                                    <img src="../../assets/img/products/1-1.png" alt="google home"
                                                        class="w-px-75">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <a href="javascript:void(0)">
                                                                <h6 class="mb-2">Google - Google Home - White</h6>
                                                            </a>
                                                            <div class="text-body mb-2 d-flex flex-wrap"><span
                                                                    class="me-1">Sold by:</span> <a
                                                                    href="javascript:void(0)"
                                                                    class="me-3">Google</a></div>
                                                            <span class="badge bg-label-success">In Stock</span>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="text-md-end">
                                                                <div class="my-2 my-lg-6"><span
                                                                        class="text-primary">$299/</span><s
                                                                        class="text-muted">$359</s></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item p-6">
                                            <div class="d-flex gap-4 flex-sm-row flex-column">
                                                <div class="flex-shrink-0">
                                                    <img src="../../assets/img/products/2-1.png" alt="google home"
                                                        class="w-px-75">
                                                </div>
                                                <div class="flex-grow-1">
                                                    <div class="row">
                                                        <div class="col-md-8">
                                                            <a href="javascript:void(0)">
                                                                <h6 class="mb-2">Apple iPhone 11 (64GB, Black)</h6>
                                                            </a>
                                                            <div class="text-body mb-2 d-flex flex-wrap"><span
                                                                    class="me-1">Sold by:</span> <a
                                                                    href="javascript:void(0)">Apple</a></div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="text-md-end">
                                                                <div class="my-2 my-lg-6"><span
                                                                        class="text-primary">$299/</span><s
                                                                        class="text-muted">$359</s></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Confirmation total -->
                                <div class="col-xl-3">
                                    <div class="border rounded p-6">
                                        <!-- Price Details -->
                                        <h6>Price Details</h6>
                                        <dl class="row mb-0 text-heading">

                                            <dt class="col-6 fw-normal">Order Total</dt>
                                            <dd class="col-6 text-end">$1198.00</dd>

                                            <dt class="col-sm-6 text-heading fw-normal">Charges</dt>
                                            <dd class="col-sm-6 text-end"><s class="text-muted">$5.00</s> <span
                                                    class="badge bg-label-success ms-1">Free</span></dd>
                                        </dl>
                                        <hr class="mx-n6 mb-6">
                                        <dl class="row mb-0">
                                            <dt class="col-6 text-heading">Total</dt>
                                            <dd class="col-6 fw-medium text-end text-heading mb-0">$1198.00</dd>
                                        </dl>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!--/ Checkout Wizard -->


            <!-- Add new address modal -->
            <!-- Add New Address Modal -->
            <div class="modal fade" id="addNewAddress" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-simple modal-add-new-address">
                    <div class="modal-content">
                        <div class="modal-body">
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                            <div class="text-center mb-6">
                                <h4 class="address-title mb-2">Add New Address</h4>
                                <p class="address-subtitle">Add new address for express delivery</p>
                            </div>
                            <form id="addNewAddressForm" class="row g-6" onsubmit="return false">

                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md mb-md-0 mb-4">
                                            <div class="form-check custom-option custom-option-icon">
                                                <label class="form-check-label custom-option-content"
                                                    for="customRadioHome">
                                                    <span class="custom-option-body">
                                                        <i class="bx bx-home"></i>
                                                        <span class="custom-option-title">Home</span>
                                                        <small> Delivery time (9am – 9pm) </small>
                                                    </span>
                                                    <input name="customRadioIcon" class="form-check-input"
                                                        type="radio" value="" id="customRadioHome"
                                                        checked="">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md mb-md-0 mb-4">
                                            <div class="form-check custom-option custom-option-icon">
                                                <label class="form-check-label custom-option-content"
                                                    for="customRadioOffice">
                                                    <span class="custom-option-body">
                                                        <i class='bx bx-briefcase'></i>
                                                        <span class="custom-option-title"> Office </span>
                                                        <small> Delivery time (9am – 5pm) </small>
                                                    </span>
                                                    <input name="customRadioIcon" class="form-check-input"
                                                        type="radio" value="" id="customRadioOffice">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalAddressFirstName">First Name</label>
                                    <input type="text" id="modalAddressFirstName" name="modalAddressFirstName"
                                        class="form-control" placeholder="John">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalAddressLastName">Last Name</label>
                                    <input type="text" id="modalAddressLastName" name="modalAddressLastName"
                                        class="form-control" placeholder="Doe">
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="modalAddressCountry">Country</label>
                                    <select id="modalAddressCountry" name="modalAddressCountry"
                                        class="select2 form-select" data-allow-clear="true">
                                        <option value="">Select</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Canada">Canada</option>
                                        <option value="China">China</option>
                                        <option value="France">France</option>
                                        <option value="Germany">Germany</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Korea">Korea, Republic of</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Russia">Russian Federation</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                    </select>
                                </div>
                                <div class="col-12 ">
                                    <label class="form-label" for="modalAddressAddress1">Address Line 1</label>
                                    <input type="text" id="modalAddressAddress1" name="modalAddressAddress1"
                                        class="form-control" placeholder="12, Business Park">
                                </div>
                                <div class="col-12">
                                    <label class="form-label" for="modalAddressAddress2">Address Line 2</label>
                                    <input type="text" id="modalAddressAddress2" name="modalAddressAddress2"
                                        class="form-control" placeholder="Mall Road">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalAddressLandmark">Landmark</label>
                                    <input type="text" id="modalAddressLandmark" name="modalAddressLandmark"
                                        class="form-control" placeholder="Nr. Hard Rock Cafe">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalAddressCity">City</label>
                                    <input type="text" id="modalAddressCity" name="modalAddressCity"
                                        class="form-control" placeholder="Los Angeles">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalAddressLandmark">State</label>
                                    <input type="text" id="modalAddressState" name="modalAddressState"
                                        class="form-control" placeholder="California">
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="modalAddressZipCode">Zip Code</label>
                                    <input type="text" id="modalAddressZipCode" name="modalAddressZipCode"
                                        class="form-control" placeholder="99950">
                                </div>
                                <div class="col-12">
                                    <div class="form-check form-switch my-2 ms-2">
                                        <input type="checkbox" class="form-check-input" id="billingAddress">
                                        <label for="billingAddress" class="switch-label">Use as a billing
                                            address?</label>
                                    </div>
                                </div>
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary me-3">Submit</button>
                                    <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="modal"
                                        aria-label="Close">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ Add New Address Modal -->

        </div>
    </section>

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
                                                        <use fill-opacity="0.2" fill="#FFFFFF"
                                                            xlink:href="#path-4"></use>
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
                                <a href="../horizontal-menu-template/" target="_blank"
                                    class="footer-link">Horizontal Layout</a>
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
        <script src="{{ asset('assets/vendor/libs/jquery/jquery-1.js')}}"></script>
        <script src="{{ asset('assets/vendor/libs/select2/select2-1.js')}}"></script>
        <script src="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper-1.js')}}"></script>
        <script src="{{ asset('assets/vendor/libs/rateyo/rateyo-1.js')}}"></script>
        <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-1.js')}}"></script>
        <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone-1.js')}}"></script>
        <script src="{{ asset('assets/vendor/libs/%40form-validation/popular-1.js')}}"></script>
        <script src="{{ asset('assets/vendor/libs/%40form-validation/bootstrap5-1.js')}}"></script>
        <script src="{{ asset('assets/vendor/libs/%40form-validation/auto-focus-1.js')}}"></script>

        <script src="{{ asset('assets/js/modal-add-new-address.js') }}"></script>
        <script src="{{ asset('assets/js/wizard-ex-checkout.js') }}"></script>
    </x-slot:js>
</x-front-app>
