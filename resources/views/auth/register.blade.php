<x-auth-app>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:css>
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/bootstrap-select/bootstrap-select.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/libs/select2/select2.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth.css') }}">

        <link rel="stylesheet" href="{{ asset('assets/vendor/css/pages/page-auth-multisteps.css') }}">

    </x-slot:css>

    <div class="authentication-wrapper authentication-cover">
        <!-- Logo -->
        <a href="{{ route('loginView') }}" class="app-brand auth-cover-brand gap-2">
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
            <span class="app-brand-text demo text-heading fw-bold">sneat</span>
        </a>
        <!-- /Logo -->
        <div class="authentication-inner row m-0">

            <!-- Left Text -->
            <div class="d-none d-lg-flex col-lg-4 align-items-center justify-content-end p-5 pe-0">
                <div class="w-px-400">
                    <img src="assets/img/illustrations/create-account-light.png" class="img-fluid"
                        alt="multi-steps" width="600" data-app-dark-img="illustrations/create-account-light.png"
                        data-app-light-img="illustrations/create-account-light.png">
                </div>
            </div>
            <!-- /Left Text -->

            <!--  Multi Steps Registration -->
            <div class="d-flex col-lg-8 align-items-center justify-content-center authentication-bg p-5">
                <div class="w-px-700">
                    <div id="multiStepsValidation" class="bs-stepper border-none shadow-none mt-5">
                        <div class="bs-stepper-header border-none pt-12 px-0">
                            <div class="step" data-target="#accountDetailsValidation">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="bx bx-home"></i></span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Account</span>
                                        <span class="bs-stepper-subtitle">Account Details</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line">
                                <i class="bx bx-chevron-right"></i>
                            </div>
                            <div class="step" data-target="#personalInfoValidation">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="bx bx-user"></i></span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Personal</span>
                                        <span class="bs-stepper-subtitle">Enter Information</span>
                                    </span>
                                </button>
                            </div>
                            <div class="line">
                                <i class="bx bx-chevron-right"></i>
                            </div>
                            <div class="step" data-target="#billingLinksValidation">
                                <button type="button" class="step-trigger">
                                    <span class="bs-stepper-circle"><i class="bx bx-detail"></i></span>
                                    <span class="bs-stepper-label">
                                        <span class="bs-stepper-title">Billing</span>
                                        <span class="bs-stepper-subtitle">Payment Details</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="bs-stepper-content px-0">
                            <form id="multiStepsForm" onsubmit="return false">
                                <!-- Account Details -->
                                <div id="accountDetailsValidation" class="content">
                                    <div class="content-header mb-6">
                                        <h4 class="mb-0">Account Information</h4>
                                        <p class="mb-0">Enter Your Account Details</p>
                                    </div>
                                    <div class="row g-6">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="multiStepsUsername">Username</label>
                                            <input type="text" name="multiStepsUsername" id="multiStepsUsername"
                                                class="form-control" placeholder="johndoe">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="multiStepsEmail">Email</label>
                                            <input type="email" name="multiStepsEmail" id="multiStepsEmail"
                                                class="form-control" placeholder="john.doe@email.com"
                                                aria-label="john.doe">
                                        </div>
                                        <div class="col-sm-6 form-password-toggle">
                                            <label class="form-label" for="multiStepsPass">Password</label>
                                            <div class="input-group input-group-merge">
                                                <input type="password" id="multiStepsPass" name="multiStepsPass"
                                                    class="form-control"
                                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                    aria-describedby="multiStepsPass2">
                                                <span class="input-group-text cursor-pointer" id="multiStepsPass2"><i
                                                        class="bx bx-hide"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 form-password-toggle">
                                            <label class="form-label" for="multiStepsConfirmPass">Confirm
                                                Password</label>
                                            <div class="input-group input-group-merge">
                                                <input type="password" id="multiStepsConfirmPass"
                                                    name="multiStepsConfirmPass" class="form-control"
                                                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                                    aria-describedby="multiStepsConfirmPass2">
                                                <span class="input-group-text cursor-pointer"
                                                    id="multiStepsConfirmPass2"><i class="bx bx-hide"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="multiStepsURL">Profile Link</label>
                                            <input type="text" name="multiStepsURL" id="multiStepsURL"
                                                class="form-control" placeholder="johndoe/profile"
                                                aria-label="johndoe">
                                        </div>
                                        <div class="col-12 d-flex justify-content-between">
                                            <button class="btn btn-label-secondary btn-prev" disabled=""> <i
                                                    class="bx bx-left-arrow-alt bx-sm ms-sm-n2 me-sm-2"></i>
                                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                            </button>
                                            <button class="btn btn-primary btn-next"> <span
                                                    class="align-middle d-sm-inline-block d-none me-sm-2 me-0">Next</span>
                                                <i class="bx bx-right-arrow-alt bx-sm me-sm-n2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Personal Info -->
                                <div id="personalInfoValidation" class="content">
                                    <div class="content-header mb-6">
                                        <h4 class="mb-0">Personal Information</h4>
                                        <p class="mb-0">Enter Your Personal Information</p>
                                    </div>
                                    <div class="row g-6">
                                        <div class="col-sm-6">
                                            <label class="form-label" for="multiStepsFirstName">First Name</label>
                                            <input type="text" id="multiStepsFirstName" name="multiStepsFirstName"
                                                class="form-control" placeholder="John">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="multiStepsLastName">Last Name</label>
                                            <input type="text" id="multiStepsLastName" name="multiStepsLastName"
                                                class="form-control" placeholder="Doe">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="multiStepsMobile">Mobile</label>
                                            <div class="input-group">
                                                <span class="input-group-text">US (+1)</span>
                                                <input type="text" id="multiStepsMobile" name="multiStepsMobile"
                                                    class="form-control multi-steps-mobile"
                                                    placeholder="202 555 0111">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="multiStepsPincode">Pincode</label>
                                            <input type="text" id="multiStepsPincode" name="multiStepsPincode"
                                                class="form-control multi-steps-pincode" placeholder="Postal Code"
                                                maxlength="6">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="multiStepsAddress">Address</label>
                                            <input type="text" id="multiStepsAddress" name="multiStepsAddress"
                                                class="form-control" placeholder="Address">
                                        </div>
                                        <div class="col-md-12">
                                            <label class="form-label" for="multiStepsArea">Landmark</label>
                                            <input type="text" id="multiStepsArea" name="multiStepsArea"
                                                class="form-control" placeholder="Area/Landmark">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="multiStepsCity">City</label>
                                            <input type="text" id="multiStepsCity" class="form-control"
                                                placeholder="Jackson">
                                        </div>
                                        <div class="col-sm-6">
                                            <label class="form-label" for="multiStepsState">State</label>
                                            <select id="multiStepsState" class="select2 form-select"
                                                data-allow-clear="true">
                                                <option value="">Select</option>
                                                <option value="AL">Alabama</option>
                                                <option value="AK">Alaska</option>
                                                <option value="AZ">Arizona</option>
                                                <option value="AR">Arkansas</option>
                                                <option value="CA">California</option>
                                                <option value="CO">Colorado</option>
                                                <option value="CT">Connecticut</option>
                                                <option value="DE">Delaware</option>
                                                <option value="DC">District Of Columbia</option>
                                                <option value="FL">Florida</option>
                                                <option value="GA">Georgia</option>
                                                <option value="HI">Hawaii</option>
                                                <option value="ID">Idaho</option>
                                                <option value="IL">Illinois</option>
                                                <option value="IN">Indiana</option>
                                                <option value="INA">Indonesia</option>
                                                <option value="IA">Iowa</option>
                                                <option value="KS">Kansas</option>
                                                <option value="KY">Kentucky</option>
                                                <option value="LA">Louisiana</option>
                                                <option value="ME">Maine</option>
                                                <option value="MD">Maryland</option>
                                                <option value="MA">Massachusetts</option>
                                                <option value="MI">Michigan</option>
                                                <option value="MN">Minnesota</option>
                                                <option value="MS">Mississippi</option>
                                                <option value="MO">Missouri</option>
                                                <option value="MT">Montana</option>
                                                <option value="NE">Nebraska</option>
                                                <option value="NV">Nevada</option>
                                                <option value="NH">New Hampshire</option>
                                                <option value="NJ">New Jersey</option>
                                                <option value="NM">New Mexico</option>
                                                <option value="NY">New York</option>
                                                <option value="NC">North Carolina</option>
                                                <option value="ND">North Dakota</option>
                                                <option value="OH">Ohio</option>
                                                <option value="OK">Oklahoma</option>
                                                <option value="OR">Oregon</option>
                                                <option value="PA">Pennsylvania</option>
                                                <option value="RI">Rhode Island</option>
                                                <option value="SC">South Carolina</option>
                                                <option value="SD">South Dakota</option>
                                                <option value="TN">Tennessee</option>
                                                <option value="TX">Texas</option>
                                                <option value="UT">Utah</option>
                                                <option value="VT">Vermont</option>
                                                <option value="VA">Virginia</option>
                                                <option value="WA">Washington</option>
                                                <option value="WV">West Virginia</option>
                                                <option value="WI">Wisconsin</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                        </div>
                                        <div class="col-12 d-flex justify-content-between">
                                            <button class="btn btn-label-secondary btn-prev"> <i
                                                    class="bx bx-left-arrow-alt bx-sm ms-sm-n2 me-sm-2"></i>
                                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                            </button>
                                            <button class="btn btn-primary btn-next"> <span
                                                    class="align-middle d-sm-inline-block d-none me-sm-2 me-0">Next</span>
                                                <i class="bx bx-right-arrow-alt bx-sm me-sm-n2"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Billing Links -->
                                <div id="billingLinksValidation" class="content">
                                    <div class="content-header mb-6">
                                        <h4 class="mb-0">Select Plan</h4>
                                        <p class="mb-0">Select plan as per your requirement</p>
                                    </div>
                                    <!-- Custom plan options -->
                                    <div class="row gap-md-0 gap-4 mb-12">
                                        <div class="col-md">
                                            <div class="form-check custom-option custom-option-icon">
                                                <label class="form-check-label custom-option-content"
                                                    for="basicOption">
                                                    <span class="custom-option-body">
                                                        <span class="d-block mb-2 h5">Basic</span>
                                                        <span>A simple start for start ups & Students</span>
                                                        <span class="d-flex justify-content-center mt-2">
                                                            <sup class="text-primary h6 fw-normal pt-2 mb-0">$</sup>
                                                            <span class="fw-medium h3 text-primary mb-0">0</span>
                                                            <sub class="h6 fw-normal mt-3 mb-0 text-muted">/month</sub>
                                                        </span>
                                                    </span>
                                                    <input name="customRadioIcon" class="form-check-input"
                                                        type="radio" value="" id="basicOption">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-check custom-option custom-option-icon">
                                                <label class="form-check-label custom-option-content"
                                                    for="standardOption">
                                                    <span class="custom-option-body">
                                                        <span class="d-block mb-2 h5">Standard</span>
                                                        <span>For small to medium businesses</span>
                                                        <span class="d-flex justify-content-center mt-2">
                                                            <sup class="text-primary h6 fw-normal pt-2 mb-0">$</sup>
                                                            <span class="fw-medium h3 text-primary mb-0">99</span>
                                                            <sub class="h6 fw-normal mt-3 mb-0 text-muted">/month</sub>
                                                        </span>
                                                    </span>
                                                    <input name="customRadioIcon" class="form-check-input"
                                                        type="radio" value="" id="standardOption"
                                                        checked="">
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-check custom-option custom-option-icon">
                                                <label class="form-check-label custom-option-content"
                                                    for="enterpriseOption">
                                                    <span class="custom-option-body">
                                                        <span class="d-block mb-2 h5">Enterprise</span>
                                                        <span>Solution for enterprise & organizations</span>
                                                        <span class="d-flex justify-content-center mt-2">
                                                            <sup class="text-primary h6 fw-normal pt-2 mb-0">$</sup>
                                                            <span class="fw-medium h3 text-primary mb-0">499</span>
                                                            <sub class="h6 fw-normal mt-3 mb-0 text-muted">/year</sub>
                                                        </span>
                                                    </span>
                                                    <input name="customRadioIcon" class="form-check-input"
                                                        type="radio" value="" id="enterpriseOption">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ Custom plan options -->
                                    <div class="content-header mb-6">
                                        <h4 class="mb-0">Payment Information</h4>
                                        <p class="mb-0">Enter your card information</p>
                                    </div>
                                    <!-- Credit Card Details -->
                                    <div class="row g-6">
                                        <div class="col-md-12">
                                            <label class="form-label w-100" for="multiStepsCard">Card Number</label>
                                            <div class="input-group input-group-merge">
                                                <input id="multiStepsCard" class="form-control multi-steps-card"
                                                    name="multiStepsCard" type="text"
                                                    placeholder="1356 3215 6548 7898"
                                                    aria-describedby="multiStepsCardImg">
                                                <span class="input-group-text cursor-pointer"
                                                    id="multiStepsCardImg"><span class="card-type"></span></span>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <label class="form-label" for="multiStepsName">Name On Card</label>
                                            <input type="text" id="multiStepsName" class="form-control"
                                                name="multiStepsName" placeholder="John Doe">
                                        </div>
                                        <div class="col-6 col-md-4">
                                            <label class="form-label" for="multiStepsExDate">Expiry Date</label>
                                            <input type="text" id="multiStepsExDate"
                                                class="form-control multi-steps-exp-date" name="multiStepsExDate"
                                                placeholder="MM/YY">
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <label class="form-label" for="multiStepsCvv">CVV Code</label>
                                            <div class="input-group input-group-merge">
                                                <input type="text" id="multiStepsCvv"
                                                    class="form-control multi-steps-cvv" name="multiStepsCvv"
                                                    maxlength="3" placeholder="654">
                                                <span class="input-group-text cursor-pointer"
                                                    id="multiStepsCvvHelp"><i class="bx bx-help-circle text-muted"
                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                        title="Card Verification Value"></i></span>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-between">
                                            <button class="btn btn-label-secondary btn-prev"> <i
                                                    class="bx bx-left-arrow-alt bx-sm ms-sm-n2 me-sm-2"></i>
                                                <span class="align-middle d-sm-inline-block d-none">Previous</span>
                                            </button>
                                            <button type="submit"
                                                class="btn btn-success btn-next btn-submit">Submit</button>
                                        </div>
                                    </div>
                                    <!--/ Credit Card Details -->
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Multi Steps Registration -->
        </div>
    </div>

    <script>
        // Check selected custom option
        window.Helpers.initCustomOptionCheck();
    </script>

    <x-slot:js>
        <script src="{{ asset('assets/vendor/libs/cleavejs/cleave.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/bs-stepper/bs-stepper.js') }}"></script>
        <script src="{{ asset('assets/vendor/libs/select2/select2.js') }}"></script>
        <script src="{{ asset('assets/js/pages-auth-multisteps.js')}}"></script>

    </x-slot:js>
</x-auth-app>
