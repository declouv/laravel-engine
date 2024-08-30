<x-front-app>
    <x-slot:title>{{ $title }}</x-slot:title>

<!-- Navbar: Start -->
<nav class="layout-navbar shadow-none py-0">
    <div class="container">
      <div class="navbar navbar-expand-lg landing-navbar px-3 px-md-8">
        <!-- Menu logo wrapper: Start -->
        <div class="navbar-brand app-brand demo d-flex py-0 me-4 me-xl-8">
          <!-- Mobile menu toggle: Start-->
          <button class="navbar-toggler border-0 px-0 me-4" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="tf-icons bx bx-menu bx-lg align-middle text-heading fw-medium"></i>
          </button>
          <!-- Mobile menu toggle: End-->
          <a href="landing-page.html" class="app-brand-link">
            <span class="app-brand-logo demo">

  <svg width="25" viewbox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
      <path d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z" id="path-1"></path>
      <path d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z" id="path-3"></path>
      <path d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z" id="path-4"></path>
      <path d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z" id="path-5"></path>
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
          <g id="Triangle" transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
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
          <button class="navbar-toggler border-0 text-heading position-absolute end-0 top-0 scaleX-n1-rtl p-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="tf-icons bx bx-x bx-lg"></i>
          </button>
          <ul class="navbar-nav me-auto">
            <li class="nav-item">
              <a class="nav-link fw-medium" aria-current="page" href="landing-page.html#landingHero">Home</a>
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
              <a href="javascript:void(0);" class="nav-link dropdown-toggle navbar-ex-14-mega-dropdown mega-dropdown fw-medium" aria-expanded="false" data-bs-toggle="mega-dropdown" data-trigger="hover">
                <span data-i18n="Pages">Pages</span>
              </a>
              <div class="dropdown-menu p-4 p-xl-8">
                <div class="row gy-4">
                  <div class="col-12 col-lg">
                    <div class="h6 d-flex align-items-center mb-3 mb-lg-4">
                      <div class="avatar flex-shrink-0 me-3">
                        <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-grid-alt'></i></span>
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
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="checkout-page.html">
                          <i class='bx bx-radio-circle me-1'></i>
                          <span data-i18n="Checkout">Checkout</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="help-center-landing.html">
                          <i class='bx bx-radio-circle me-1'></i>
                          <span data-i18n="Help Center">Help Center</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-12 col-lg">
                    <div class="h6 d-flex align-items-center mb-3 mb-lg-4">
                      <div class="avatar flex-shrink-0 me-3">
                        <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-lock-open bx-lg'></i></span>
                      </div>
                      <span class="ps-1">Auth Demo</span>
                    </div>
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-login-basic.html" target="_blank">
                          <i class='bx bx-radio-circle me-1'></i>
                          Login (Basic)
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-login-cover.html" target="_blank">
                          <i class='bx bx-radio-circle me-1'></i>
                          Login (Cover)
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-register-basic.html" target="_blank">
                          <i class='bx bx-radio-circle me-1'></i>
                          Register (Basic)
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-register-cover.html" target="_blank">
                          <i class='bx bx-radio-circle me-1'></i>
                          Register (Cover)
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-register-multisteps.html" target="_blank">
                          <i class='bx bx-radio-circle me-1'></i>
                          Register (Multi-steps)
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-forgot-password-basic.html" target="_blank">
                          <i class='bx bx-radio-circle me-1'></i>
                          Forgot Password (Basic)
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-forgot-password-cover.html" target="_blank">
                          <i class='bx bx-radio-circle me-1'></i>
                          Forgot Password (Cover)
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-reset-password-basic.html" target="_blank">
                          <i class='bx bx-radio-circle me-1'></i>
                          Reset Password (Basic)
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-reset-password-cover.html" target="_blank">
                          <i class='bx bx-radio-circle me-1'></i>
                          Reset Password (Cover)
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-12 col-lg">
                    <div class="h6 d-flex align-items-center mb-3 mb-lg-4">
                      <div class="avatar flex-shrink-0 me-3">
                        <span class="avatar-initial rounded bg-label-primary"><i class='bx bx-image-alt bx-lg'></i></span>
                      </div>
                      <span class="ps-1">Other</span>
                    </div>
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/pages-misc-error.html" target="_blank">
                          <i class='bx bx-radio-circle me-1'></i>
                          Error
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/pages-misc-under-maintenance.html" target="_blank">
                          <i class='bx bx-radio-circle me-1'></i>
                          Under Maintenance
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/pages-misc-comingsoon.html" target="_blank">
                          <i class='bx bx-radio-circle me-1'></i>
                          Coming Soon
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/pages-misc-not-authorized.html" target="_blank">
                          <i class='bx bx-radio-circle me-1'></i>
                          Not Authorized
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-verify-email-basic.html" target="_blank">
                          <i class='bx bx-radio-circle me-1'></i>
                          Verify Email (Basic)
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-verify-email-cover.html" target="_blank">
                          <i class='bx bx-radio-circle me-1'></i>
                          Verify Email (Cover)
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-two-steps-basic.html" target="_blank">
                          <i class='bx bx-radio-circle me-1'></i>
                          Two Steps (Basic)
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link mega-dropdown-link" href="../vertical-menu-template/auth-two-steps-cover.html" target="_blank">
                          <i class='bx bx-radio-circle me-1'></i>
                          Two Steps (Cover)
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-lg-4 d-none d-lg-block">
                    <div class="bg-body nav-img-col p-2">
                      <img src="../../assets/img/front-pages/misc/nav-item-col-img.png" alt="nav item col image" class="w-100">
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-medium" href="../vertical-menu-template/index.html" target="_blank">Admin</a>
            </li>
          </ul>
        </div>
        <div class="landing-menu-overlay d-lg-none"></div>
        <!-- Menu wrapper: End -->
        <!-- Toolbar: Start -->
        <ul class="navbar-nav flex-row align-items-center ms-auto">

          <!-- Style Switcher -->
          <li class="nav-item dropdown-style-switcher dropdown me-2 me-xl-1">
            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
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
            <a href="../vertical-menu-template/auth-login-cover.html" class="btn btn-primary" target="_blank"><span class="tf-icons bx bx-log-in-circle scaleX-n1-rtl me-md-1"></span><span class="d-none d-md-block">Login/Register</span></a>
          </li>
          <!-- navbar button: End -->
        </ul>
        <!-- Toolbar: End -->
      </div>
    </div>
  </nav>
  <!-- Navbar: End -->


  <!-- Sections:Start -->

  <section class="section-py first-section-pt">
    <div class="container">
      <div class="row g-6">
        <div class="col-lg-8">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mb-2">
              <li class="breadcrumb-item">
                <a href="javascript:void(0);">Help centre</a>
              </li>
              <li class="breadcrumb-item">
                <a href="javascript:void(0);">Buying and item support</a>
              </li>
              <li class="breadcrumb-item active">Template kits</li>
            </ol>
          </nav>
          <h4 class="mb-2">How to add product in cart?</h4>
          <p>1 month ago - Updated</p>
          <hr class="my-6">
          <p>If you’re after only one item, simply choose the ‘Buy Now’ option on the item page. This will take you directly to Checkout.</p>
          <p class="mb-0">If you want several items, use the ‘Add to Cart’ button and then choose ‘Keep Browsing’ to continue shopping or ‘Checkout’ to finalise your purchase.</p>
          <div class="my-6">
            <img src="../../assets/img/front-pages/misc/product-image.png" alt="product" class="img-fluid w-100">
          </div>
          <p class="mb-0">You can go back to your cart at any time by clicking on the shopping cart icon at the top right side of the page.</p>
          <div class="mt-6">
            <img src="../../assets/img/front-pages/misc/checkout-image.png" alt="product" class="img-fluid w-100">
          </div>
        </div>
        <div class="col-lg-4">
          <div class="input-group input-group-merge mb-6 mt-6 mt-lg-0">
            <span class="input-group-text" id="article-search"><i class="bx bx-search"></i></span>
            <input type="text" class="form-control" placeholder="Search..." aria-label="Search..." aria-describedby="article-search">
          </div>
          <div class="bg-lighter py-2 px-4 rounded">
            <h5 class="mb-0">Articles in this section</h5>
          </div>
          <ul class="list-unstyled mt-4 mb-0">
            <li class="mb-4">
              <a href="javascript:void(0)" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-2">
                  Template Kits
                </span>
                <i class="bx bx-chevron-right scaleX-n1-rtl text-muted"></i>
              </a>
            </li>
            <li class="mb-4">
              <a href="javascript:void(0)" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-2">
                  Envato Elements Template Kits - Importing Issues
                </span>
                <i class="bx bx-chevron-right scaleX-n1-rtl text-muted"></i>
              </a>
            </li>
            <li class="mb-4">
              <a href="javascript:void(0)" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-2">
                  Envato Elements Template Kits - Troubleshooting
                </span>
                <i class="bx bx-chevron-right scaleX-n1-rtl text-muted"></i>
              </a>
            </li>
            <li class="mb-4">
              <a href="javascript:void(0)" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-2">
                  How to use the template in WordPress
                </span>
                <i class="bx bx-chevron-right scaleX-n1-rtl text-muted"></i>
              </a>
            </li>
            <li>
              <a href="javascript:void(0)" class="text-heading d-flex justify-content-between">
                <span class="text-truncate me-2">
                  How to use the Template Kit Import plugin
                </span>
                <i class="bx bx-chevron-right scaleX-n1-rtl text-muted"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <!-- / Sections:End -->



  <!-- Footer: Start -->
  <footer class="landing-footer bg-body footer-text">
    <div class="footer-top position-relative overflow-hidden z-1">
      <img src="../../assets/img/front-pages/backgrounds/footer-bg.png" alt="footer bg" class="footer-bg banner-bg-img z-n1">
      <div class="container">
        <div class="row gx-0 gy-6 g-lg-10">
          <div class="col-lg-5">
            <a href="landing-page.html" class="app-brand-link mb-6">
              <span class="app-brand-logo demo">

  <svg width="25" viewbox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
      <path d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z" id="path-1"></path>
      <path d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z" id="path-3"></path>
      <path d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z" id="path-4"></path>
      <path d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z" id="path-5"></path>
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
          <g id="Triangle" transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
            <use fill="#696cff" xlink:href="#path-5"></use>
            <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
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
                <input type="email" class="form-control rounded-0 rounded-start-bottom rounded-start-top" id="footer-email" placeholder="Your email">
                <button type="submit" class="btn btn-primary shadow-none rounded-0 rounded-end-bottom rounded-end-top">
                  Subscribe
                </button>
              </div>
            </form>
          </div>
          <div class="col-lg-2 col-md-4 col-sm-6">
            <h6 class="footer-title mb-6">Demos</h6>
            <ul class="list-unstyled">
              <li class="mb-4">
                <a href="../vertical-menu-template/" target="_blank" class="footer-link">Vertical Layout</a>
              </li>
              <li class="mb-4">
                <a href="../horizontal-menu-template/" target="_blank" class="footer-link">Horizontal Layout</a>
              </li>
              <li class="mb-4">
                <a href="../vertical-menu-template-bordered/" target="_blank" class="footer-link">Bordered Layout</a>
              </li>
              <li class="mb-4">
                <a href="../vertical-menu-template-semi-dark/" target="_blank" class="footer-link">Semi Dark Layout</a>
              </li>
              <li>
                <a href="../vertical-menu-template-dark/" target="_blank" class="footer-link">Dark Layout</a>
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
                <a href="payment-page.html" class="footer-link">Payment<span class="badge bg-primary ms-2">New</span></a>
              </li>
              <li class="mb-4">
                <a href="checkout-page.html" class="footer-link">Checkout</a>
              </li>
              <li class="mb-4">
                <a href="help-center-landing.html" class="footer-link">Help Center</a>
              </li>
              <li>
                <a href="../vertical-menu-template/auth-login-cover.html" target="_blank" class="footer-link">Login/Register</a>
              </li>
            </ul>
          </div>
          <div class="col-lg-3 col-md-4">
            <h6 class="footer-title mb-6">Download our app</h6>
            <a href="javascript:void(0);" class="d-block mb-4"><img src="../../assets/img/front-pages/landing-page/apple-icon.png" alt="apple icon"></a>
            <a href="javascript:void(0);" class="d-block"><img src="../../assets/img/front-pages/landing-page/google-play-icon.png" alt="google play icon"></a>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-bottom py-3 py-md-5">
      <div class="container d-flex flex-wrap justify-content-between flex-md-row flex-column text-center text-md-start">
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

</x-front-app>
