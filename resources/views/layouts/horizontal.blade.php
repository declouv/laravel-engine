<html
  lang="en"
  class="light-style layout-compact layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../../assets/"
  data-template="horizontal-menu-template"
  data-style="light"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>
      Demo : Dashboard - Analytics | sneat - Bootstrap Dashboard PRO
    </title>

    <meta
      name="description"
      content="Most Powerful &amp; Comprehensive Bootstrap 5 Admin Dashboard built for developers!"
    />
    <meta
      name="keywords"
      content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5"
    />
    <!-- Canonical SEO -->
    <link
      rel="canonical"
      href="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/"
    />

    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script
      async=""
      src="https://www.googletagmanager.com/gtm.js?id=GTM-5DDHKGP"
    ></script>
    <script>
      (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, "script", "dataLayer", "GTM-5DDHKGP");
    </script>
    <!-- End Google Tag Manager -->

    <!-- Favicon -->
    <link
      rel="icon"
      type="image/x-icon"
      href="../../assets/img/favicon/favicon.ico"
    />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="" />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
      rel="stylesheet"
    />

    <!-- Icons -->
    <link rel="stylesheet" href="../../assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/fontawesome.css" />
    <link rel="stylesheet" href="../../assets/vendor/fonts/flag-icons.css" />

    <!-- Core CSS -->

    <link rel="stylesheet" href="../../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css"
    />
    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/typeahead-js/typeahead.css"
    />
    <link
      rel="stylesheet"
      href="../../assets/vendor/libs/apex-charts/apex-charts.css"
    />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../../assets/vendor/js/helpers.js"></script>
    <style type="text/css">
      .layout-menu-fixed .layout-navbar-full .layout-menu,
      .layout-menu-fixed-offcanvas .layout-navbar-full .layout-menu {
        top: 62px !important;
      }
      .layout-page {
        padding-top: 62px !important;
      }
      .content-wrapper {
        padding-bottom: 54px !important;
      }
    </style>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
    <script src="../../assets/vendor/js/template-customizer.js"></script>
    <style>
      #template-customizer {
        font-family: "Open Sans", BlinkMacSystemFont, "Segoe UI", Roboto,
          "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji",
          "Segoe UI Emoji", "Segoe UI Symbol" !important;
        font-size: inherit !important;
        position: fixed;
        top: 0;
        right: 0;
        height: 100%;
        z-index: 99999999;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 400px;
        -webkit-box-shadow: 0px 0.3125rem 1.375rem 0px rgba(34, 48, 62, 0.18);
        box-shadow: 0px 0.3125rem 1.375rem 0px rgba(34, 48, 62, 0.18);
        -webkit-transition: all 0.2s ease-in;
        -o-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
        -webkit-transform: translateX(420px);
        -ms-transform: translateX(420px);
        transform: translateX(420px);
      }
      .dark-style #template-customizer {
        -webkit-box-shadow: 0px 0.3125rem 1.375rem 0px rgba(20, 20, 29, 0.26);
        box-shadow: 0px 0.3125rem 1.375rem 0px rgba(20, 20, 29, 0.26);
      }
      #template-customizer h5 {
        position: relative;
        font-size: 11px;
      }
      #template-customizer > h5 {
        flex: 0 0 auto;
      }
      #template-customizer .disabled {
        color: #d1d2d3 !important;
      }
      #template-customizer .form-label {
        font-size: 0.9375rem;
        font-weight: 500;
      }
      #template-customizer .form-check-label {
        font-size: 0.8125rem;
      }
      #template-customizer.template-customizer-open {
        -webkit-transition-delay: 0.1s;
        -o-transition-delay: 0.1s;
        transition-delay: 0.1s;
        -webkit-transform: none !important;
        -ms-transform: none !important;
        transform: none !important;
      }
      #template-customizer.template-customizer-open .custom-option.checked {
        color: var(--bs-primary);
        border-width: 2px;
        margin: 0;
      }
      #template-customizer .template-customizer-header a:hover {
        color: inherit !important;
      }
      #template-customizer .template-customizer-open-btn {
        position: absolute;
        top: 180px;
        left: 0;
        z-index: -1;
        display: block;
        width: 38px;
        height: 38px;
        border-top-left-radius: 0.375rem;
        border-bottom-left-radius: 0.375rem;
        background: var(--bs-primary);
        box-shadow: 0px 0.125rem 0.25rem 0px rgba(105, 108, 255, 0.4);
        color: #fff !important;
        text-align: center;
        font-size: 18px !important;
        line-height: 38px;
        opacity: 1;
        -webkit-transition: all 0.1s linear 0.2s;
        -o-transition: all 0.1s linear 0.2s;
        transition: all 0.1s linear 0.2s;
        -webkit-transform: translateX(-58px);
        -ms-transform: translateX(-58px);
        transform: translateX(-58px);
      }
      @media (max-width: 991.98px) {
        #template-customizer .template-customizer-open-btn {
          top: 145px;
        }
      }
      .dark-style #template-customizer .template-customizer-open-btn {
        background: var(--bs-primary);
      }
      #template-customizer .template-customizer-open-btn::before {
        content: "";
        width: 22px;
        height: 22px;
        display: block;
        background-size: 100% 100%;
        position: absolute;
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAAAXNSR0IArs4c6QAABClJREFUaEPtmY1RFEEQhbsjUCIQIhAiUCNQIxAiECIQIxAiECIAIpAMhAiECIQI2vquZqnZvp6fhb3SK5mqq6Ju92b69bzXf6is+dI1t1+eAfztG5z1BsxsU0S+ici2iPB3vm5E5EpEDlSVv2dZswFIxv8UkZcNy+5EZGcuEHMCOBeR951uvVDVD53vVl+bE8DvDu8Pxtyo6ta/BsByg1R15Bwzqz5/LJgn34CZwfnPInI4BUB6/1hV0cSjVxcAM4PbcBZjL0XklIPN7Is3fLCkdQPpPYw/VNXj5IhPIvJWRIhSl6p60ULWBGBm30Vk123EwRxCuIzWkkjNrCZywith10ewE1Xdq4GoAjCz/RTXW44Ynt+LyBEfT43kYfbj86J3w5Q32DNcRQDpwF+dkQXDMey8xem0L3TEqB4g3PZWad8agBMRgZPeu96D1/C2Zbh3X0p80Op1xxloztN48bMQQNoc7+eLEuAoPSPiIDY4Ooo+E6ixeNXM+D3GERz2U3CIqMstLJUgJQDe+7eq6mub0NYEkLAKwEHkiBQDCZtddZCZ8d6r7JDwFkoARklHRPZUFVDVZWbwGuNrC4EfdOzFrRABh3Wnqhv+d70AEBLGFROPmeHlnM81G69UdSd6IUuM0GgUVn1uqWmg5EmMfBeEyB7Pe3txBkY+rGT8j0J+WXq/BgDkUCaqLgEAnwcRog0veMIqFAAwCy2wnw+bI2GaGboBgF9k5N0o0rUSGUb4eO0BeO9j/GYhkSHMHMTIqwGARX6p6a+nlPBl8kZuXMD9j6pKfF9aZuaFOdJCEL5D4eYb9wCYVCanrBmGyii/tIq+SLj/HQBCaM5bLzwfPqdQ6FpVHyra4IbuVbXaY7dETC2ESPNNWiIOi69CcdgSMXsh4tNSUiklMgwmC0aNd08Y5WAES6HHehM4gu97wyhBgWpgqXsrASglprDy7CwhehMZOSbK6JMSma+Fio1KltCmlBIj7gfZOGx8ppQSXrhzFnOhJ/31BDkjFHRvOd09x0mRBA9SFgxUgHpQg0q0t5ymPMlL+EnldFTfDA0NAmf+OTQ0X0sRouf7NNkYGhrOYNrxtIaGg83MNzVDSe3LXLhP7O/yrCsCz1zlWTpjWkuZAOBpX3yVnLqI1yLCOKU6qMrmP7SSrUEw54XF4WBIK5FxCMOr3lVsfGqNSmPzBXUnJTIX1jyVBq9wO6UObOpgC5GjO98vFKnTdQMZXxEsWZlDiCZMIxAbNxQOqlpVZtobejBaZNoBnRDzMFpkxvTQOD36BlrcySZuI6p1ACB6LU3wWuf5581+oHfD1vi89bz3nFUC8Nm7ZlP3nKkFbM4bWPt/MSFwklprYItwt6cmvpWJ2IVcQBCz6bLysSCv3SaANCiTsnaNRrNRqMXVVT1/BrAqz/buu/Y38Ad3KC5PARej0QAAAABJRU5ErkJggg==);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
      .customizer-hide #template-customizer .template-customizer-open-btn {
        display: none;
      }
      [dir="rtl"] #template-customizer .template-customizer-open-btn {
        border-radius: 0;
        border-top-right-radius: 0.375rem;
        border-bottom-right-radius: 0.375rem;
      }
      [dir="rtl"] #template-customizer .template-customizer-open-btn::before {
        margin-left: -2px;
      }
      #template-customizer.template-customizer-open
        .template-customizer-open-btn {
        opacity: 0;
        -webkit-transition-delay: 0s;
        -o-transition-delay: 0s;
        transition-delay: 0s;
        -webkit-transform: none !important;
        -ms-transform: none !important;
        transform: none !important;
      }
      #template-customizer .template-customizer-inner {
        position: relative;
        overflow: auto;
        -webkit-box-flex: 0;
        -ms-flex: 0 1 auto;
        flex: 0 1 auto;
        opacity: 1;
        -webkit-transition: opacity 0.2s;
        -o-transition: opacity 0.2s;
        transition: opacity 0.2s;
      }
      #template-customizer
        .template-customizer-inner
        > div:first-child
        > hr:first-of-type {
        display: none !important;
      }
      #template-customizer
        .template-customizer-inner
        > div:first-child
        > h5:first-of-type {
        padding-top: 0 !important;
      }
      #template-customizer .template-customizer-themes-inner {
        position: relative;
        opacity: 1;
        -webkit-transition: opacity 0.2s;
        -o-transition: opacity 0.2s;
        transition: opacity 0.2s;
      }
      #template-customizer .template-customizer-theme-item {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-align: center;
        align-items: center;
        -ms-flex-align: center;
        -webkit-box-flex: 1;
        -ms-flex: 1 1 100%;
        flex: 1 1 100%;
        -webkit-box-pack: justify;
        -ms-flex-pack: justify;
        justify-content: space-between;
        margin-bottom: 10px;
        padding: 0 24px;
        width: 100%;
        cursor: pointer;
      }
      #template-customizer .template-customizer-theme-item input {
        position: absolute;
        z-index: -1;
        opacity: 0;
      }
      #template-customizer .template-customizer-theme-item input ~ span {
        opacity: 0.25;
        -webkit-transition: all 0.2s;
        -o-transition: all 0.2s;
        transition: all 0.2s;
      }
      #template-customizer
        .template-customizer-theme-item
        .template-customizer-theme-checkmark {
        display: inline-block;
        width: 6px;
        height: 12px;
        border-right: 1px solid;
        border-bottom: 1px solid;
        opacity: 0;
        -webkit-transition: all 0.2s;
        -o-transition: all 0.2s;
        transition: all 0.2s;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        transform: rotate(45deg);
      }
      [dir="rtl"]
        #template-customizer
        .template-customizer-theme-item
        .template-customizer-theme-checkmark {
        border-right: none;
        border-left: 1px solid;
        -webkit-transform: rotate(-45deg);
        -ms-transform: rotate(-45deg);
        transform: rotate(-45deg);
      }
      #template-customizer
        .template-customizer-theme-item
        input:checked:not([disabled])
        ~ span,
      #template-customizer
        .template-customizer-theme-item:hover
        input:not([disabled])
        ~ span {
        opacity: 1;
      }
      #template-customizer
        .template-customizer-theme-item
        input:checked:not([disabled])
        ~ span
        .template-customizer-theme-checkmark {
        opacity: 1;
      }
      #template-customizer .template-customizer-theme-colors span {
        display: block;
        margin: 0 1px;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        -webkit-box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1) inset;
        box-shadow: 0 0 0 1px rgba(0, 0, 0, 0.1) inset;
      }
      #template-customizer.template-customizer-loading
        .template-customizer-inner,
      #template-customizer.template-customizer-loading-theme
        .template-customizer-themes-inner {
        opacity: 0.2;
      }
      #template-customizer.template-customizer-loading
        .template-customizer-inner::after,
      #template-customizer.template-customizer-loading-theme
        .template-customizer-themes-inner::after {
        content: "";
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 999;
        display: block;
      }
      @media (max-width: 1200px) {
        #template-customizer {
          display: none;
          visibility: hidden !important;
        }
      }
      @media (max-width: 575.98px) {
        #template-customizer {
          width: 300px;
          -webkit-transform: translateX(320px);
          -ms-transform: translateX(320px);
          transform: translateX(320px);
        }
      }
      .layout-menu-100vh #template-customizer {
        height: 100vh;
      }
      [dir="rtl"] #template-customizer {
        right: auto;
        left: 0;
        -webkit-transform: translateX(-420px);
        -ms-transform: translateX(-420px);
        transform: translateX(-420px);
      }
      [dir="rtl"] #template-customizer .template-customizer-open-btn {
        right: 0;
        left: auto;
        -webkit-transform: translateX(58px);
        -ms-transform: translateX(58px);
        transform: translateX(58px);
      }
      [dir="rtl"] #template-customizer .template-customizer-close-btn {
        right: auto;
        left: 0;
      }
      #template-customizer .template-customizer-layouts-options[disabled] {
        opacity: 0.5;
        pointer-events: none;
      }
      [dir="rtl"] .template-customizer-t-style_switch_light {
        padding-right: 0 !important;
      }
    </style>
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../../assets/js/config.js"></script>
    <link
      rel="stylesheet"
      type="text/css"
      href="../../assets/vendor/css/rtl/core.css"
      class="template-customizer-core-css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../../assets/vendor/css/rtl/theme-default.css"
      class="template-customizer-theme-css"
    />

    <script
      type="text/javascript"
      src="https://a.omappapi.com/app/js/api.min.js"
      async=""
      data-user="252882"
      data-account="269977"
    ></script>
    <style type="text/css">
      .apexcharts-canvas {
        position: relative;
        user-select: none;
        /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
      }

      /* scrollbar is not visible by default for legend, hence forcing the visibility */
      .apexcharts-canvas ::-webkit-scrollbar {
        -webkit-appearance: none;
        width: 6px;
      }

      .apexcharts-canvas ::-webkit-scrollbar-thumb {
        border-radius: 4px;
        background-color: rgba(0, 0, 0, 0.5);
        box-shadow: 0 0 1px rgba(255, 255, 255, 0.5);
        -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, 0.5);
      }

      .apexcharts-inner {
        position: relative;
      }

      .apexcharts-text tspan {
        font-family: inherit;
      }

      .legend-mouseover-inactive {
        transition: 0.15s ease all;
        opacity: 0.2;
      }

      .apexcharts-series-collapsed {
        opacity: 0;
      }

      .apexcharts-tooltip {
        border-radius: 5px;
        box-shadow: 2px 2px 6px -4px #999;
        cursor: default;
        font-size: 14px;
        left: 62px;
        opacity: 0;
        pointer-events: none;
        position: absolute;
        top: 20px;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        white-space: nowrap;
        z-index: 12;
        transition: 0.15s ease all;
      }

      .apexcharts-tooltip.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
      }

      .apexcharts-tooltip.apexcharts-theme-light {
        border: 1px solid #e3e3e3;
        background: rgba(255, 255, 255, 0.96);
      }

      .apexcharts-tooltip.apexcharts-theme-dark {
        color: #fff;
        background: rgba(30, 30, 30, 0.8);
      }

      .apexcharts-tooltip * {
        font-family: inherit;
      }

      .apexcharts-tooltip-title {
        padding: 6px;
        font-size: 15px;
        margin-bottom: 4px;
      }

      .apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
        background: #eceff1;
        border-bottom: 1px solid #ddd;
      }

      .apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
        background: rgba(0, 0, 0, 0.7);
        border-bottom: 1px solid #333;
      }

      .apexcharts-tooltip-text-y-value,
      .apexcharts-tooltip-text-goals-value,
      .apexcharts-tooltip-text-z-value {
        display: inline-block;
        font-weight: 600;
        margin-left: 5px;
      }

      .apexcharts-tooltip-text-y-label:empty,
      .apexcharts-tooltip-text-y-value:empty,
      .apexcharts-tooltip-text-goals-label:empty,
      .apexcharts-tooltip-text-goals-value:empty,
      .apexcharts-tooltip-text-z-value:empty {
        display: none;
      }

      .apexcharts-tooltip-text-y-value,
      .apexcharts-tooltip-text-goals-value,
      .apexcharts-tooltip-text-z-value {
        font-weight: 600;
      }

      .apexcharts-tooltip-text-goals-label,
      .apexcharts-tooltip-text-goals-value {
        padding: 6px 0 5px;
      }

      .apexcharts-tooltip-goals-group,
      .apexcharts-tooltip-text-goals-label,
      .apexcharts-tooltip-text-goals-value {
        display: flex;
      }
      .apexcharts-tooltip-text-goals-label:not(:empty),
      .apexcharts-tooltip-text-goals-value:not(:empty) {
        margin-top: -6px;
      }

      .apexcharts-tooltip-marker {
        width: 12px;
        height: 12px;
        position: relative;
        top: 0px;
        margin-right: 10px;
        border-radius: 50%;
      }

      .apexcharts-tooltip-series-group {
        padding: 0 10px;
        display: none;
        text-align: left;
        justify-content: left;
        align-items: center;
      }

      .apexcharts-tooltip-series-group.apexcharts-active
        .apexcharts-tooltip-marker {
        opacity: 1;
      }

      .apexcharts-tooltip-series-group.apexcharts-active,
      .apexcharts-tooltip-series-group:last-child {
        padding-bottom: 4px;
      }

      .apexcharts-tooltip-series-group-hidden {
        opacity: 0;
        height: 0;
        line-height: 0;
        padding: 0 !important;
      }

      .apexcharts-tooltip-y-group {
        padding: 6px 0 5px;
      }

      .apexcharts-tooltip-box,
      .apexcharts-custom-tooltip {
        padding: 4px 8px;
      }

      .apexcharts-tooltip-boxPlot {
        display: flex;
        flex-direction: column-reverse;
      }

      .apexcharts-tooltip-box > div {
        margin: 4px 0;
      }

      .apexcharts-tooltip-box span.value {
        font-weight: bold;
      }

      .apexcharts-tooltip-rangebar {
        padding: 5px 8px;
      }

      .apexcharts-tooltip-rangebar .category {
        font-weight: 600;
        color: #777;
      }

      .apexcharts-tooltip-rangebar .series-name {
        font-weight: bold;
        display: block;
        margin-bottom: 5px;
      }

      .apexcharts-xaxistooltip {
        opacity: 0;
        padding: 9px 10px;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #eceff1;
        border: 1px solid #90a4ae;
        transition: 0.15s ease all;
      }

      .apexcharts-xaxistooltip.apexcharts-theme-dark {
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(0, 0, 0, 0.5);
        color: #fff;
      }

      .apexcharts-xaxistooltip:after,
      .apexcharts-xaxistooltip:before {
        left: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
      }

      .apexcharts-xaxistooltip:after {
        border-color: rgba(236, 239, 241, 0);
        border-width: 6px;
        margin-left: -6px;
      }

      .apexcharts-xaxistooltip:before {
        border-color: rgba(144, 164, 174, 0);
        border-width: 7px;
        margin-left: -7px;
      }

      .apexcharts-xaxistooltip-bottom:after,
      .apexcharts-xaxistooltip-bottom:before {
        bottom: 100%;
      }

      .apexcharts-xaxistooltip-top:after,
      .apexcharts-xaxistooltip-top:before {
        top: 100%;
      }

      .apexcharts-xaxistooltip-bottom:after {
        border-bottom-color: #eceff1;
      }

      .apexcharts-xaxistooltip-bottom:before {
        border-bottom-color: #90a4ae;
      }

      .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
        border-bottom-color: rgba(0, 0, 0, 0.5);
      }

      .apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
        border-bottom-color: rgba(0, 0, 0, 0.5);
      }

      .apexcharts-xaxistooltip-top:after {
        border-top-color: #eceff1;
      }

      .apexcharts-xaxistooltip-top:before {
        border-top-color: #90a4ae;
      }

      .apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
        border-top-color: rgba(0, 0, 0, 0.5);
      }

      .apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
        border-top-color: rgba(0, 0, 0, 0.5);
      }

      .apexcharts-xaxistooltip.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
      }

      .apexcharts-yaxistooltip {
        opacity: 0;
        padding: 4px 10px;
        pointer-events: none;
        color: #373d3f;
        font-size: 13px;
        text-align: center;
        border-radius: 2px;
        position: absolute;
        z-index: 10;
        background: #eceff1;
        border: 1px solid #90a4ae;
      }

      .apexcharts-yaxistooltip.apexcharts-theme-dark {
        background: rgba(0, 0, 0, 0.7);
        border: 1px solid rgba(0, 0, 0, 0.5);
        color: #fff;
      }

      .apexcharts-yaxistooltip:after,
      .apexcharts-yaxistooltip:before {
        top: 50%;
        border: solid transparent;
        content: " ";
        height: 0;
        width: 0;
        position: absolute;
        pointer-events: none;
      }

      .apexcharts-yaxistooltip:after {
        border-color: rgba(236, 239, 241, 0);
        border-width: 6px;
        margin-top: -6px;
      }

      .apexcharts-yaxistooltip:before {
        border-color: rgba(144, 164, 174, 0);
        border-width: 7px;
        margin-top: -7px;
      }

      .apexcharts-yaxistooltip-left:after,
      .apexcharts-yaxistooltip-left:before {
        left: 100%;
      }

      .apexcharts-yaxistooltip-right:after,
      .apexcharts-yaxistooltip-right:before {
        right: 100%;
      }

      .apexcharts-yaxistooltip-left:after {
        border-left-color: #eceff1;
      }

      .apexcharts-yaxistooltip-left:before {
        border-left-color: #90a4ae;
      }

      .apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
        border-left-color: rgba(0, 0, 0, 0.5);
      }

      .apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
        border-left-color: rgba(0, 0, 0, 0.5);
      }

      .apexcharts-yaxistooltip-right:after {
        border-right-color: #eceff1;
      }

      .apexcharts-yaxistooltip-right:before {
        border-right-color: #90a4ae;
      }

      .apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
        border-right-color: rgba(0, 0, 0, 0.5);
      }

      .apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
        border-right-color: rgba(0, 0, 0, 0.5);
      }

      .apexcharts-yaxistooltip.apexcharts-active {
        opacity: 1;
      }

      .apexcharts-yaxistooltip-hidden {
        display: none;
      }

      .apexcharts-xcrosshairs,
      .apexcharts-ycrosshairs {
        pointer-events: none;
        opacity: 0;
        transition: 0.15s ease all;
      }

      .apexcharts-xcrosshairs.apexcharts-active,
      .apexcharts-ycrosshairs.apexcharts-active {
        opacity: 1;
        transition: 0.15s ease all;
      }

      .apexcharts-ycrosshairs-hidden {
        opacity: 0;
      }

      .apexcharts-selection-rect {
        cursor: move;
      }

      .svg_select_boundingRect,
      .svg_select_points_rot {
        pointer-events: none;
        opacity: 0;
        visibility: hidden;
      }
      .apexcharts-selection-rect + g .svg_select_boundingRect,
      .apexcharts-selection-rect + g .svg_select_points_rot {
        opacity: 0;
        visibility: hidden;
      }

      .apexcharts-selection-rect + g .svg_select_points_l,
      .apexcharts-selection-rect + g .svg_select_points_r {
        cursor: ew-resize;
        opacity: 1;
        visibility: visible;
      }

      .svg_select_points {
        fill: #efefef;
        stroke: #333;
        rx: 2;
      }

      .apexcharts-svg.apexcharts-zoomable.hovering-zoom {
        cursor: crosshair;
      }

      .apexcharts-svg.apexcharts-zoomable.hovering-pan {
        cursor: move;
      }

      .apexcharts-zoom-icon,
      .apexcharts-zoomin-icon,
      .apexcharts-zoomout-icon,
      .apexcharts-reset-icon,
      .apexcharts-pan-icon,
      .apexcharts-selection-icon,
      .apexcharts-menu-icon,
      .apexcharts-toolbar-custom-icon {
        cursor: pointer;
        width: 20px;
        height: 20px;
        line-height: 24px;
        color: #6e8192;
        text-align: center;
      }

      .apexcharts-zoom-icon svg,
      .apexcharts-zoomin-icon svg,
      .apexcharts-zoomout-icon svg,
      .apexcharts-reset-icon svg,
      .apexcharts-menu-icon svg {
        fill: #6e8192;
      }

      .apexcharts-selection-icon svg {
        fill: #444;
        transform: scale(0.76);
      }

      .apexcharts-theme-dark .apexcharts-zoom-icon svg,
      .apexcharts-theme-dark .apexcharts-zoomin-icon svg,
      .apexcharts-theme-dark .apexcharts-zoomout-icon svg,
      .apexcharts-theme-dark .apexcharts-reset-icon svg,
      .apexcharts-theme-dark .apexcharts-pan-icon svg,
      .apexcharts-theme-dark .apexcharts-selection-icon svg,
      .apexcharts-theme-dark .apexcharts-menu-icon svg,
      .apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
        fill: #f3f4f5;
      }

      .apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
      .apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
      .apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
        fill: #008ffb;
      }

      .apexcharts-theme-light
        .apexcharts-selection-icon:not(.apexcharts-selected):hover
        svg,
      .apexcharts-theme-light
        .apexcharts-zoom-icon:not(.apexcharts-selected):hover
        svg,
      .apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
      .apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
      .apexcharts-theme-light .apexcharts-reset-icon:hover svg,
      .apexcharts-theme-light .apexcharts-menu-icon:hover svg {
        fill: #333;
      }

      .apexcharts-selection-icon,
      .apexcharts-menu-icon {
        position: relative;
      }

      .apexcharts-reset-icon {
        margin-left: 5px;
      }

      .apexcharts-zoom-icon,
      .apexcharts-reset-icon,
      .apexcharts-menu-icon {
        transform: scale(0.85);
      }

      .apexcharts-zoomin-icon,
      .apexcharts-zoomout-icon {
        transform: scale(0.7);
      }

      .apexcharts-zoomout-icon {
        margin-right: 3px;
      }

      .apexcharts-pan-icon {
        transform: scale(0.62);
        position: relative;
        left: 1px;
        top: 0px;
      }

      .apexcharts-pan-icon svg {
        fill: #fff;
        stroke: #6e8192;
        stroke-width: 2;
      }

      .apexcharts-pan-icon.apexcharts-selected svg {
        stroke: #008ffb;
      }

      .apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
        stroke: #333;
      }

      .apexcharts-toolbar {
        position: absolute;
        z-index: 11;
        max-width: 176px;
        text-align: right;
        border-radius: 3px;
        padding: 0px 6px 2px 6px;
        display: flex;
        justify-content: space-between;
        align-items: center;
      }

      .apexcharts-menu {
        background: #fff;
        position: absolute;
        top: 100%;
        border: 1px solid #ddd;
        border-radius: 3px;
        padding: 3px;
        right: 10px;
        opacity: 0;
        min-width: 110px;
        transition: 0.15s ease all;
        pointer-events: none;
      }

      .apexcharts-menu.apexcharts-menu-open {
        opacity: 1;
        pointer-events: all;
        transition: 0.15s ease all;
      }

      .apexcharts-menu-item {
        padding: 6px 7px;
        font-size: 12px;
        cursor: pointer;
      }

      .apexcharts-theme-light .apexcharts-menu-item:hover {
        background: #eee;
      }

      .apexcharts-theme-dark .apexcharts-menu {
        background: rgba(0, 0, 0, 0.7);
        color: #fff;
      }

      @media screen and (min-width: 768px) {
        .apexcharts-canvas:hover .apexcharts-toolbar {
          opacity: 1;
        }
      }

      .apexcharts-datalabel.apexcharts-element-hidden {
        opacity: 0;
      }

      .apexcharts-pie-label,
      .apexcharts-datalabels,
      .apexcharts-datalabel,
      .apexcharts-datalabel-label,
      .apexcharts-datalabel-value {
        cursor: default;
        pointer-events: none;
      }

      .apexcharts-pie-label-delay {
        opacity: 0;
        animation-name: opaque;
        animation-duration: 0.3s;
        animation-fill-mode: forwards;
        animation-timing-function: ease;
      }

      .apexcharts-canvas .apexcharts-element-hidden {
        opacity: 0;
      }

      .apexcharts-hide .apexcharts-series-points {
        opacity: 0;
      }

      .apexcharts-gridline,
      .apexcharts-annotation-rect,
      .apexcharts-tooltip .apexcharts-marker,
      .apexcharts-area-series .apexcharts-area,
      .apexcharts-line,
      .apexcharts-zoom-rect,
      .apexcharts-toolbar svg,
      .apexcharts-area-series
        .apexcharts-series-markers
        .apexcharts-marker.no-pointer-events,
      .apexcharts-line-series
        .apexcharts-series-markers
        .apexcharts-marker.no-pointer-events,
      .apexcharts-radar-series path,
      .apexcharts-radar-series polygon {
        pointer-events: none;
      }

      /* markers */

      .apexcharts-marker {
        transition: 0.15s ease all;
      }

      @keyframes opaque {
        0% {
          opacity: 0;
        }
        100% {
          opacity: 1;
        }
      }

      /* Resize generated styles */

      @keyframes resizeanim {
        from {
          opacity: 0;
        }
        to {
          opacity: 0;
        }
      }

      .resize-triggers {
        animation: 1ms resizeanim;
        visibility: hidden;
        opacity: 0;
      }

      .resize-triggers,
      .resize-triggers > div,
      .contract-trigger:before {
        content: " ";
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        overflow: hidden;
      }

      .resize-triggers > div {
        background: #eee;
        overflow: auto;
      }

      .contract-trigger:before {
        width: 200%;
        height: 200%;
      }
    </style>
    <link
      rel="stylesheet"
      href="https://a.omappapi.com/app/js/api.min.css"
      id="omapi-css"
      media="all"
    />
    <style>
      @font-face {
        font-family: "NotoSans_online_security";
        src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/assets/fonts/noto-sans-regular.woff);
      }

      @font-face {
        font-family: "NotoSans_medium_online_security";
        src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/assets/fonts/noto-sans-medium.ttf);
      }

      @font-face {
        font-family: "NotoSans_bold_online_security";
        src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/assets/fonts/noto-sans-bold.woff);
      }

      @font-face {
        font-family: "NotoSans_semibold_online_security";
        src: url(chrome-extension://llbcnfanfmjhpedaedhbcnpgeepdnnok/assets/fonts/noto-sans-semibold.ttf);
      }
    </style>
  </head>

  <body>
    <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <noscript
      ><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
      ></iframe
    ></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Layout wrapper -->
    <div
      class="layout-wrapper layout-navbar-full layout-horizontal layout-without-menu"
    >
      <div class="layout-container">
        <!-- Navbar -->

        <nav
          class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme"
          id="layout-navbar"
        >
          <div class="container-xxl">
            <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
              <a href="index.html" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <svg
                    width="25"
                    viewBox="0 0 25 42"
                    version="1.1"
                    xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink"
                  >
                    <defs>
                      <path
                        d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                        id="path-1"
                      ></path>
                      <path
                        d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                        id="path-3"
                      ></path>
                      <path
                        d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                        id="path-4"
                      ></path>
                      <path
                        d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                        id="path-5"
                      ></path>
                    </defs>
                    <g
                      id="g-app-brand"
                      stroke="none"
                      stroke-width="1"
                      fill="none"
                      fill-rule="evenodd"
                    >
                      <g
                        id="Brand-Logo"
                        transform="translate(-27.000000, -15.000000)"
                      >
                        <g
                          id="Icon"
                          transform="translate(27.000000, 15.000000)"
                        >
                          <g
                            id="Mask"
                            transform="translate(0.000000, 8.000000)"
                          >
                            <mask id="mask-2" fill="white">
                              <use xlink:href="#path-1"></use>
                            </mask>
                            <use fill="#696cff" xlink:href="#path-1"></use>
                            <g id="Path-3" mask="url(#mask-2)">
                              <use fill="#696cff" xlink:href="#path-3"></use>
                              <use
                                fill-opacity="0.2"
                                fill="#FFFFFF"
                                xlink:href="#path-3"
                              ></use>
                            </g>
                            <g id="Path-4" mask="url(#mask-2)">
                              <use fill="#696cff" xlink:href="#path-4"></use>
                              <use
                                fill-opacity="0.2"
                                fill="#FFFFFF"
                                xlink:href="#path-4"
                              ></use>
                            </g>
                          </g>
                          <g
                            id="Triangle"
                            transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                          >
                            <use fill="#696cff" xlink:href="#path-5"></use>
                            <use
                              fill-opacity="0.2"
                              fill="#FFFFFF"
                              xlink:href="#path-5"
                            ></use>
                          </g>
                        </g>
                      </g>
                    </g>
                  </svg>
                </span>
                <span class="app-brand-text demo menu-text fw-bold text-heading"
                  >sneat</span
                >
              </a>

              <a
                href="javascript:void(0);"
                class="layout-menu-toggle menu-link text-large ms-auto d-xl-none"
              >
                <i
                  class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"
                ></i>
              </a>
            </div>

            <div
              class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none"
            >
              <a
                class="nav-item nav-link px-0 me-xl-6"
                href="javascript:void(0)"
              >
                <i class="bx bx-menu bx-md"></i>
              </a>
            </div>

            <div
              class="navbar-nav-right d-flex align-items-center"
              id="navbar-collapse"
            >
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Search -->
                <li class="nav-item navbar-search-wrapper me-2 me-xl-0">
                  <a class="nav-link search-toggler" href="javascript:void(0);">
                    <i class="bx bx-search bx-md"></i>
                  </a>
                </li>
                <!-- /Search -->

                <!-- Language -->
                <li class="nav-item dropdown-language dropdown me-2 me-xl-0">
                  <a
                    class="nav-link dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                  >
                    <i class="bx bx-globe bx-md"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a
                        class="dropdown-item active"
                        href="javascript:void(0);"
                        data-language="en"
                        data-text-direction="ltr"
                      >
                        <span>English</span>
                      </a>
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="javascript:void(0);"
                        data-language="fr"
                        data-text-direction="ltr"
                      >
                        <span>French</span>
                      </a>
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="javascript:void(0);"
                        data-language="ar"
                        data-text-direction="rtl"
                      >
                        <span>Arabic</span>
                      </a>
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="javascript:void(0);"
                        data-language="de"
                        data-text-direction="ltr"
                      >
                        <span>German</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- /Language -->

                <!-- Style Switcher -->
                <li
                  class="nav-item dropdown-style-switcher dropdown me-2 me-xl-0"
                >
                  <a
                    class="nav-link dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                  >
                    <i class="bx bx-md bx-sun"></i>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-styles">
                    <li>
                      <a
                        class="dropdown-item active"
                        href="javascript:void(0);"
                        data-theme="light"
                      >
                        <span><i class="bx bx-sun bx-md me-3"></i>Light</span>
                      </a>
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="javascript:void(0);"
                        data-theme="dark"
                      >
                        <span><i class="bx bx-moon bx-md me-3"></i>Dark</span>
                      </a>
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="javascript:void(0);"
                        data-theme="system"
                      >
                        <span
                          ><i class="bx bx-desktop bx-md me-3"></i>System</span
                        >
                      </a>
                    </li>
                  </ul>
                </li>
                <!-- / Style Switcher-->

                <!-- Quick links  -->
                <li
                  class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0"
                >
                  <a
                    class="nav-link dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                    aria-expanded="false"
                  >
                    <i class="bx bx-grid-alt bx-md"></i>
                  </a>
                  <div class="dropdown-menu dropdown-menu-end p-0">
                    <div class="dropdown-menu-header border-bottom">
                      <div
                        class="dropdown-header d-flex align-items-center py-3"
                      >
                        <h6 class="mb-0 me-auto">Shortcuts</h6>
                        <a
                          href="javascript:void(0)"
                          class="dropdown-shortcuts-add py-2"
                          data-bs-toggle="tooltip"
                          data-bs-placement="top"
                          aria-label="Add shortcuts"
                          data-bs-original-title="Add shortcuts"
                          ><i class="bx bx-plus-circle text-heading"></i
                        ></a>
                      </div>
                    </div>
                    <div
                      class="dropdown-shortcuts-list scrollable-container ps"
                    >
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span
                            class="dropdown-shortcuts-icon rounded-circle mb-3"
                          >
                            <i class="bx bx-calendar bx-26px text-heading"></i>
                          </span>
                          <a href="app-calendar.html" class="stretched-link"
                            >Calendar</a
                          >
                          <small>Appointments</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span
                            class="dropdown-shortcuts-icon rounded-circle mb-3"
                          >
                            <i class="bx bx-food-menu bx-26px text-heading"></i>
                          </span>
                          <a href="app-invoice-list.html" class="stretched-link"
                            >Invoice App</a
                          >
                          <small>Manage Accounts</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span
                            class="dropdown-shortcuts-icon rounded-circle mb-3"
                          >
                            <i class="bx bx-user bx-26px text-heading"></i>
                          </span>
                          <a href="app-user-list.html" class="stretched-link"
                            >User App</a
                          >
                          <small>Manage Users</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span
                            class="dropdown-shortcuts-icon rounded-circle mb-3"
                          >
                            <i
                              class="bx bx-check-shield bx-26px text-heading"
                            ></i>
                          </span>
                          <a href="app-access-roles.html" class="stretched-link"
                            >Role Management</a
                          >
                          <small>Permission</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span
                            class="dropdown-shortcuts-icon rounded-circle mb-3"
                          >
                            <i
                              class="bx bx-pie-chart-alt-2 bx-26px text-heading"
                            ></i>
                          </span>
                          <a href="index.html" class="stretched-link"
                            >Dashboard</a
                          >
                          <small>User Dashboard</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span
                            class="dropdown-shortcuts-icon rounded-circle mb-3"
                          >
                            <i class="bx bx-cog bx-26px text-heading"></i>
                          </span>
                          <a
                            href="pages-account-settings-account.html"
                            class="stretched-link"
                            >Setting</a
                          >
                          <small>Account Settings</small>
                        </div>
                      </div>
                      <div class="row row-bordered overflow-visible g-0">
                        <div class="dropdown-shortcuts-item col">
                          <span
                            class="dropdown-shortcuts-icon rounded-circle mb-3"
                          >
                            <i
                              class="bx bx-help-circle bx-26px text-heading"
                            ></i>
                          </span>
                          <a href="pages-faq.html" class="stretched-link"
                            >FAQs</a
                          >
                          <small>FAQs &amp; Articles</small>
                        </div>
                        <div class="dropdown-shortcuts-item col">
                          <span
                            class="dropdown-shortcuts-icon rounded-circle mb-3"
                          >
                            <i
                              class="bx bx-window-open bx-26px text-heading"
                            ></i>
                          </span>
                          <a href="modal-examples.html" class="stretched-link"
                            >Modals</a
                          >
                          <small>Useful Popups</small>
                        </div>
                      </div>
                      <div class="ps__rail-x" style="left: 0px; bottom: 0px">
                        <div
                          class="ps__thumb-x"
                          tabindex="0"
                          style="left: 0px; width: 0px"
                        ></div>
                      </div>
                      <div class="ps__rail-y" style="top: 0px; right: 0px">
                        <div
                          class="ps__thumb-y"
                          tabindex="0"
                          style="top: 0px; height: 0px"
                        ></div>
                      </div>
                    </div>
                  </div>
                </li>
                <!-- Quick links -->

                <!-- Notification -->
                <li
                  class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-2"
                >
                  <a
                    class="nav-link dropdown-toggle hide-arrow"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                    data-bs-auto-close="outside"
                    aria-expanded="false"
                  >
                    <span class="position-relative">
                      <i class="bx bx-bell bx-md"></i>
                      <span
                        class="badge rounded-pill bg-danger badge-dot badge-notifications border"
                      ></span>
                    </span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end p-0">
                    <li class="dropdown-menu-header border-bottom">
                      <div
                        class="dropdown-header d-flex align-items-center py-3"
                      >
                        <h6 class="mb-0 me-auto">Notification</h6>
                        <div class="d-flex align-items-center h6 mb-0">
                          <span class="badge bg-label-primary me-2">8 New</span>
                          <a
                            href="javascript:void(0)"
                            class="dropdown-notifications-all p-2"
                            data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            aria-label="Mark all as read"
                            data-bs-original-title="Mark all as read"
                            ><i class="bx bx-envelope-open text-heading"></i
                          ></a>
                        </div>
                      </div>
                    </li>
                    <li
                      class="dropdown-notifications-list scrollable-container ps"
                    >
                      <ul class="list-group list-group-flush">
                        <li
                          class="list-group-item list-group-item-action dropdown-notifications-item"
                        >
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img
                                  src="../../assets/img/avatars/1.png"
                                  alt=""
                                  class="rounded-circle"
                                />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="small mb-0">
                                Congratulation Lettie 🎉
                              </h6>
                              <small class="mb-1 d-block text-body"
                                >Won the monthly best seller gold badge</small
                              >
                              <small class="text-muted">1h ago</small>
                            </div>
                            <div
                              class="flex-shrink-0 dropdown-notifications-actions"
                            >
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-archive"
                                ><span class="bx bx-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li
                          class="list-group-item list-group-item-action dropdown-notifications-item"
                        >
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span
                                  class="avatar-initial rounded-circle bg-label-danger"
                                  >CF</span
                                >
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="small mb-0">Charles Franklin</h6>
                              <small class="mb-1 d-block text-body"
                                >Accepted your connection</small
                              >
                              <small class="text-muted">12hr ago</small>
                            </div>
                            <div
                              class="flex-shrink-0 dropdown-notifications-actions"
                            >
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-archive"
                                ><span class="bx bx-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li
                          class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read"
                        >
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img
                                  src="../../assets/img/avatars/2.png"
                                  alt=""
                                  class="rounded-circle"
                                />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="small mb-0">New Message ✉️</h6>
                              <small class="mb-1 d-block text-body"
                                >You have new message from Natalie</small
                              >
                              <small class="text-muted">1h ago</small>
                            </div>
                            <div
                              class="flex-shrink-0 dropdown-notifications-actions"
                            >
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-archive"
                                ><span class="bx bx-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li
                          class="list-group-item list-group-item-action dropdown-notifications-item"
                        >
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span
                                  class="avatar-initial rounded-circle bg-label-success"
                                  ><i class="bx bx-cart"></i
                                ></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="small mb-0">
                                Whoo! You have new order 🛒
                              </h6>
                              <small class="mb-1 d-block text-body"
                                >ACME Inc. made new order $1,154</small
                              >
                              <small class="text-muted">1 day ago</small>
                            </div>
                            <div
                              class="flex-shrink-0 dropdown-notifications-actions"
                            >
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-archive"
                                ><span class="bx bx-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li
                          class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read"
                        >
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img
                                  src="../../assets/img/avatars/9.png"
                                  alt=""
                                  class="rounded-circle"
                                />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="small mb-0">
                                Application has been approved 🚀
                              </h6>
                              <small class="mb-1 d-block text-body"
                                >Your ABC project application has been
                                approved.</small
                              >
                              <small class="text-muted">2 days ago</small>
                            </div>
                            <div
                              class="flex-shrink-0 dropdown-notifications-actions"
                            >
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-archive"
                                ><span class="bx bx-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li
                          class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read"
                        >
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span
                                  class="avatar-initial rounded-circle bg-label-success"
                                  ><i class="bx bx-pie-chart-alt"></i
                                ></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="small mb-0">
                                Monthly report is generated
                              </h6>
                              <small class="mb-1 d-block text-body"
                                >July monthly financial report is generated
                              </small>
                              <small class="text-muted">3 days ago</small>
                            </div>
                            <div
                              class="flex-shrink-0 dropdown-notifications-actions"
                            >
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-archive"
                                ><span class="bx bx-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li
                          class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read"
                        >
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img
                                  src="../../assets/img/avatars/5.png"
                                  alt=""
                                  class="rounded-circle"
                                />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="small mb-0">
                                Send connection request
                              </h6>
                              <small class="mb-1 d-block text-body"
                                >Peter sent you connection request</small
                              >
                              <small class="text-muted">4 days ago</small>
                            </div>
                            <div
                              class="flex-shrink-0 dropdown-notifications-actions"
                            >
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-archive"
                                ><span class="bx bx-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li
                          class="list-group-item list-group-item-action dropdown-notifications-item"
                        >
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <img
                                  src="../../assets/img/avatars/6.png"
                                  alt=""
                                  class="rounded-circle"
                                />
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="small mb-0">New message from Jane</h6>
                              <small class="mb-1 d-block text-body"
                                >Your have new message from Jane</small
                              >
                              <small class="text-muted">5 days ago</small>
                            </div>
                            <div
                              class="flex-shrink-0 dropdown-notifications-actions"
                            >
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-archive"
                                ><span class="bx bx-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                        <li
                          class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read"
                        >
                          <div class="d-flex">
                            <div class="flex-shrink-0 me-3">
                              <div class="avatar">
                                <span
                                  class="avatar-initial rounded-circle bg-label-warning"
                                  ><i class="bx bx-error"></i
                                ></span>
                              </div>
                            </div>
                            <div class="flex-grow-1">
                              <h6 class="small mb-0">CPU is running high</h6>
                              <small class="mb-1 d-block text-body"
                                >CPU Utilization Percent is currently at
                                88.63%,</small
                              >
                              <small class="text-muted">5 days ago</small>
                            </div>
                            <div
                              class="flex-shrink-0 dropdown-notifications-actions"
                            >
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-read"
                                ><span class="badge badge-dot"></span
                              ></a>
                              <a
                                href="javascript:void(0)"
                                class="dropdown-notifications-archive"
                                ><span class="bx bx-x"></span
                              ></a>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="ps__rail-x" style="left: 0px; bottom: 0px">
                        <div
                          class="ps__thumb-x"
                          tabindex="0"
                          style="left: 0px; width: 0px"
                        ></div>
                      </div>
                      <div class="ps__rail-y" style="top: 0px; right: 0px">
                        <div
                          class="ps__thumb-y"
                          tabindex="0"
                          style="top: 0px; height: 0px"
                        ></div>
                      </div>
                    </li>
                    <li class="border-top">
                      <div class="d-grid p-4">
                        <a
                          class="btn btn-primary btn-sm d-flex"
                          href="javascript:void(0);"
                        >
                          <small class="align-middle"
                            >View all notifications</small
                          >
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
                <!--/ Notification -->
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a
                    class="nav-link dropdown-toggle hide-arrow p-0"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                  >
                    <div class="avatar avatar-online">
                      <img
                        src="../../assets/img/avatars/1.png"
                        alt=""
                        class="w-px-40 h-auto rounded-circle"
                      />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a
                        class="dropdown-item"
                        href="pages-account-settings-account.html"
                      >
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img
                                src="../../assets/img/avatars/1.png"
                                alt=""
                                class="w-px-40 h-auto rounded-circle"
                              />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-0">John Doe</h6>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider my-1"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-profile-user.html">
                        <i class="bx bx-user bx-md me-3"></i
                        ><span>My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="pages-account-settings-account.html"
                      >
                        <i class="bx bx-cog bx-md me-3"></i
                        ><span>Settings</span>
                      </a>
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="pages-account-settings-billing.html"
                      >
                        <span class="d-flex align-items-center align-middle">
                          <i
                            class="flex-shrink-0 bx bx-credit-card bx-md me-3"
                          ></i
                          ><span class="flex-grow-1 align-middle"
                            >Billing Plan</span
                          >
                          <span
                            class="flex-shrink-0 badge rounded-pill bg-danger"
                            >4</span
                          >
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider my-1"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-pricing.html">
                        <i class="bx bx-dollar bx-md me-3"></i
                        ><span>Pricing</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="pages-faq.html">
                        <i class="bx bx-help-circle bx-md me-3"></i
                        ><span>FAQ</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider my-1"></div>
                    </li>
                    <li>
                      <a
                        class="dropdown-item"
                        href="auth-login-cover.html"
                        target="_blank"
                      >
                        <i class="bx bx-power-off bx-md me-3"></i
                        ><span>Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>

            <!-- Search Small Screens -->
            <div
              class="navbar-search-wrapper search-input-wrapper container-xxl d-none"
            >
              <span
                class="twitter-typeahead"
                style="position: relative; display: inline-block"
                ><input
                  type="text"
                  class="form-control search-input border-0 container-xxl tt-input"
                  placeholder="Search..."
                  aria-label="Search..."
                  autocomplete="off"
                  spellcheck="false"
                  dir="auto"
                  style="position: relative; vertical-align: top" />
                <pre
                  aria-hidden="true"
                  style="
                    position: absolute;
                    visibility: hidden;
                    white-space: pre;
                    font-family: 'Public Sans', -apple-system,
                      BlinkMacSystemFont, 'Segoe UI', Oxygen, Ubuntu, Cantarell,
                      'Fira Sans', 'Droid Sans', 'Helvetica Neue', sans-serif;
                    font-size: 15px;
                    font-style: normal;
                    font-variant: normal;
                    font-weight: 400;
                    word-spacing: 0px;
                    letter-spacing: 0px;
                    text-indent: 0px;
                    text-rendering: auto;
                    text-transform: none;
                  "
                ></pre>
                <div
                  class="tt-menu navbar-search-suggestion ps"
                  style="
                    position: absolute;
                    top: 100%;
                    left: 0px;
                    z-index: 100;
                    display: none;
                  "
                >
                  <div class="tt-dataset tt-dataset-pages"></div>
                  <div class="tt-dataset tt-dataset-files"></div>
                  <div class="tt-dataset tt-dataset-members"></div>
                  <div class="ps__rail-x" style="left: 0px; bottom: 0px">
                    <div
                      class="ps__thumb-x"
                      tabindex="0"
                      style="left: 0px; width: 0px"
                    ></div>
                  </div>
                  <div class="ps__rail-y" style="top: 0px; right: 0px">
                    <div
                      class="ps__thumb-y"
                      tabindex="0"
                      style="top: 0px; height: 0px"
                    ></div>
                  </div></div
              ></span>
              <i class="bx bx-x bx-md search-toggler cursor-pointer"></i>
            </div>
          </div>
        </nav>

        <!-- / Navbar -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Menu -->
            <aside
              id="layout-menu"
              class="layout-menu-horizontal menu-horizontal menu bg-menu-theme flex-grow-0"
              data-bg-class="bg-menu-theme"
              style="
                touch-action: none;
                user-select: none;
                -webkit-user-drag: none;
                -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
              "
            >
              <div class="container-xxl d-flex h-100">
                <a href="#" class="menu-horizontal-prev d-none"></a>
                <div class="menu-horizontal-wrapper">
                  <ul class="menu-inner" style="margin-left: 0px">
                    <!-- Dashboards -->
                    <li class="menu-item active">
                      <a
                        href="javascript:void(0)"
                        class="menu-link menu-toggle"
                      >
                        <i class="menu-icon tf-icons bx bx-home-smile"></i>
                        <div data-i18n="Dashboards">Dashboards</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item active">
                          <a href="dashboards-analytics.html" class="menu-link">
                            <i
                              class="menu-icon tf-icons bx bx-pie-chart-alt-2"
                            ></i>
                            <div data-i18n="Analytics">Analytics</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="dashboards-crm.html" class="menu-link">
                            <i
                              class="menu-icon tf-icons bx bx-shape-circle"
                            ></i>
                            <div data-i18n="CRM">CRM</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a
                            href="app-ecommerce-dashboard.html"
                            class="menu-link"
                          >
                            <i class="menu-icon tf-icons bx bx-cart-alt"></i>
                            <div data-i18n="eCommerce">eCommerce</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a
                            href="app-logistics-dashboard.html"
                            class="menu-link"
                          >
                            <i class="menu-icon tf-icons bx bx-car"></i>
                            <div data-i18n="Logistics">Logistics</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a
                            href="app-academy-dashboard.html"
                            class="menu-link"
                          >
                            <i class="menu-icon tf-icons bx bx-book-open"></i>
                            <div data-i18n="Academy">Academy</div>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <!-- Layouts -->
                    <li class="menu-item">
                      <a
                        href="javascript:void(0)"
                        class="menu-link menu-toggle"
                      >
                        <i class="menu-icon tf-icons bx bx-layout"></i>
                        <div data-i18n="Layouts">Layouts</div>
                      </a>

                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="layouts-without-menu.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-menu"></i>
                            <div data-i18n="Without menu">Without menu</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a
                            href="../vertical-menu-template/"
                            class="menu-link"
                            target="_blank"
                          >
                            <i
                              class="menu-icon tf-icons bx bx-vertical-center"
                            ></i>
                            <div data-i18n="Vertical">Vertical</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="layouts-fluid.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-fullscreen"></i>
                            <div data-i18n="Fluid">Fluid</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="layouts-container.html" class="menu-link">
                            <i
                              class="menu-icon tf-icons bx bx-exit-fullscreen"
                            ></i>
                            <div data-i18n="Container">Container</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="layouts-blank.html" class="menu-link">
                            <i
                              class="menu-icon tf-icons bx bx-square-rounded"
                            ></i>
                            <div data-i18n="Blank">Blank</div>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <!-- Apps -->
                    <li class="menu-item">
                      <a
                        href="javascript:void(0)"
                        class="menu-link menu-toggle"
                      >
                        <i class="menu-icon tf-icons bx bx-customize"></i>
                        <div data-i18n="Apps">Apps</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a href="app-email.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-envelope"></i>
                            <div data-i18n="Email">Email</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="app-chat.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-chat"></i>
                            <div data-i18n="Chat">Chat</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="app-calendar.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-calendar"></i>

                            <div data-i18n="Calendar">Calendar</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="app-kanban.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-grid"></i>
                            <div data-i18n="Kanban">Kanban</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a
                            href="javascript:void(0);"
                            class="menu-link menu-toggle"
                          >
                            <i class="menu-icon tf-icons bx bx-cart-alt"></i>
                            <div data-i18n="eCommerce">eCommerce</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a
                                href="app-ecommerce-dashboard.html"
                                class="menu-link"
                              >
                                <div data-i18n="Dashboard">Dashboard</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="javascript:void(0);"
                                class="menu-link menu-toggle"
                              >
                                <div data-i18n="Products">Products</div>
                              </a>
                              <ul class="menu-sub">
                                <li class="menu-item">
                                  <a
                                    href="app-ecommerce-product-list.html"
                                    class="menu-link"
                                  >
                                    <div data-i18n="Product List">
                                      Product List
                                    </div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a
                                    href="app-ecommerce-product-add.html"
                                    class="menu-link"
                                  >
                                    <div data-i18n="Add Product">
                                      Add Product
                                    </div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a
                                    href="app-ecommerce-category-list.html"
                                    class="menu-link"
                                  >
                                    <div data-i18n="Category List">
                                      Category List
                                    </div>
                                  </a>
                                </li>
                              </ul>
                            </li>
                            <li class="menu-item">
                              <a
                                href="javascript:void(0);"
                                class="menu-link menu-toggle"
                              >
                                <div data-i18n="Order">Order</div>
                              </a>
                              <ul class="menu-sub">
                                <li class="menu-item">
                                  <a
                                    href="app-ecommerce-order-list.html"
                                    class="menu-link"
                                  >
                                    <div data-i18n="Order List">Order List</div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a
                                    href="app-ecommerce-order-details.html"
                                    class="menu-link"
                                  >
                                    <div data-i18n="Order Details">
                                      Order Details
                                    </div>
                                  </a>
                                </li>
                              </ul>
                            </li>
                            <li class="menu-item">
                              <a
                                href="javascript:void(0);"
                                class="menu-link menu-toggle"
                              >
                                <div data-i18n="Customer">Customer</div>
                              </a>
                              <ul class="menu-sub">
                                <li class="menu-item">
                                  <a
                                    href="app-ecommerce-customer-all.html"
                                    class="menu-link"
                                  >
                                    <div data-i18n="All Customers">
                                      All Customers
                                    </div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a
                                    href="javascript:void(0);"
                                    class="menu-link menu-toggle"
                                  >
                                    <div data-i18n="Customer Details">
                                      Customer Details
                                    </div>
                                  </a>
                                  <ul class="menu-sub">
                                    <li class="menu-item">
                                      <a
                                        href="app-ecommerce-customer-details-overview.html"
                                        class="menu-link"
                                      >
                                        <div data-i18n="Overview">Overview</div>
                                      </a>
                                    </li>
                                    <li class="menu-item">
                                      <a
                                        href="app-ecommerce-customer-details-security.html"
                                        class="menu-link"
                                      >
                                        <div data-i18n="Security">Security</div>
                                      </a>
                                    </li>
                                    <li class="menu-item">
                                      <a
                                        href="app-ecommerce-customer-details-billing.html"
                                        class="menu-link"
                                      >
                                        <div data-i18n="Address &amp; Billing">
                                          Address &amp; Billing
                                        </div>
                                      </a>
                                    </li>
                                    <li class="menu-item">
                                      <a
                                        href="app-ecommerce-customer-details-notifications.html"
                                        class="menu-link"
                                      >
                                        <div data-i18n="Notifications">
                                          Notifications
                                        </div>
                                      </a>
                                    </li>
                                  </ul>
                                </li>
                              </ul>
                            </li>
                            <li class="menu-item">
                              <a
                                href="app-ecommerce-manage-reviews.html"
                                class="menu-link"
                              >
                                <div data-i18n="Manage Reviews">
                                  Manage Reviews
                                </div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="app-ecommerce-referral.html"
                                class="menu-link"
                              >
                                <div data-i18n="Referrals">Referrals</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="javascript:void(0);"
                                class="menu-link menu-toggle"
                              >
                                <div data-i18n="Settings">Settings</div>
                              </a>
                              <ul class="menu-sub">
                                <li class="menu-item">
                                  <a
                                    href="app-ecommerce-settings-detail.html"
                                    class="menu-link"
                                  >
                                    <div data-i18n="Store Details">
                                      Store Details
                                    </div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a
                                    href="app-ecommerce-settings-payments.html"
                                    class="menu-link"
                                  >
                                    <div data-i18n="Payments">Payments</div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a
                                    href="app-ecommerce-settings-checkout.html"
                                    class="menu-link"
                                  >
                                    <div data-i18n="Checkout">Checkout</div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a
                                    href="app-ecommerce-settings-shipping.html"
                                    class="menu-link"
                                  >
                                    <div data-i18n="Shipping &amp; Delivery">
                                      Shipping &amp; Delivery
                                    </div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a
                                    href="app-ecommerce-settings-locations.html"
                                    class="menu-link"
                                  >
                                    <div data-i18n="Locations">Locations</div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a
                                    href="app-ecommerce-settings-notifications.html"
                                    class="menu-link"
                                  >
                                    <div data-i18n="Notifications">
                                      Notifications
                                    </div>
                                  </a>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a
                            href="javascript:void(0);"
                            class="menu-link menu-toggle"
                          >
                            <i class="menu-icon tf-icons bx bx-book-open"></i>
                            <div data-i18n="Academy">Academy</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a
                                href="app-academy-dashboard.html"
                                class="menu-link"
                              >
                                <div data-i18n="Dashboard">Dashboard</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="app-academy-course.html"
                                class="menu-link"
                              >
                                <div data-i18n="My Course">My Course</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="app-academy-course-details.html"
                                class="menu-link"
                              >
                                <div data-i18n="Course Details">
                                  Course Details
                                </div>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a
                            href="javascript:void(0);"
                            class="menu-link menu-toggle"
                          >
                            <i class="menu-icon tf-icons bx bx-car"></i>
                            <div data-i18n="Logistics">Logistics</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a
                                href="app-logistics-dashboard.html"
                                class="menu-link"
                              >
                                <div data-i18n="Dashboard">Dashboard</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="app-logistics-fleet.html"
                                class="menu-link"
                              >
                                <div data-i18n="Fleet">Fleet</div>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a
                            href="javascript:void(0);"
                            class="menu-link menu-toggle"
                          >
                            <i class="menu-icon tf-icons bx bx-food-menu"></i>
                            <div data-i18n="Invoice">Invoice</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="app-invoice-list.html" class="menu-link">
                                <div data-i18n="List">List</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="app-invoice-preview.html"
                                class="menu-link"
                              >
                                <div data-i18n="Preview">Preview</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="app-invoice-edit.html" class="menu-link">
                                <div data-i18n="Edit">Edit</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="app-invoice-add.html" class="menu-link">
                                <div data-i18n="Add">Add</div>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a
                            href="javascript:void(0);"
                            class="menu-link menu-toggle"
                          >
                            <i class="menu-icon tf-icons bx bx-user"></i>
                            <div data-i18n="Users">Users</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="app-user-list.html" class="menu-link">
                                <div data-i18n="List">List</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="javascript:void(0);"
                                class="menu-link menu-toggle"
                              >
                                <div data-i18n="View">View</div>
                              </a>
                              <ul class="menu-sub">
                                <li class="menu-item">
                                  <a
                                    href="app-user-view-account.html"
                                    class="menu-link"
                                  >
                                    <div data-i18n="Account">Account</div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a
                                    href="app-user-view-security.html"
                                    class="menu-link"
                                  >
                                    <div data-i18n="Security">Security</div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a
                                    href="app-user-view-billing.html"
                                    class="menu-link"
                                  >
                                    <div data-i18n="Billing &amp; Plans">
                                      Billing &amp; Plans
                                    </div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a
                                    href="app-user-view-notifications.html"
                                    class="menu-link"
                                  >
                                    <div data-i18n="Notifications">
                                      Notifications
                                    </div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a
                                    href="app-user-view-connections.html"
                                    class="menu-link"
                                  >
                                    <div data-i18n="Connections">
                                      Connections
                                    </div>
                                  </a>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a
                            href="javascript:void(0);"
                            class="menu-link menu-toggle"
                          >
                            <i
                              class="menu-icon tf-icons bx bx-check-shield"
                            ></i>
                            <div data-i18n="Roles &amp; Permissions">
                              Roles &amp; Permissions
                            </div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="app-access-roles.html" class="menu-link">
                                <div data-i18n="Roles">Roles</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="app-access-permission.html"
                                class="menu-link"
                              >
                                <div data-i18n="Permission">Permission</div>
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>

                    <!-- Pages -->
                    <li class="menu-item">
                      <a
                        href="javascript:void(0)"
                        class="menu-link menu-toggle"
                      >
                        <i class="menu-icon tf-icons bx bx-collection"></i>
                        <div data-i18n="Pages">Pages</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a
                            href="javascript:void(0);"
                            class="menu-link menu-toggle"
                          >
                            <i class="menu-icon tf-icons bx bx-store"></i>
                            <div data-i18n="Front Pages">Front Pages</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a
                                href="../front-pages/landing-page.html"
                                class="menu-link"
                                target="_blank"
                              >
                                <div data-i18n="Landing">Landing</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="../front-pages/pricing-page.html"
                                class="menu-link"
                                target="_blank"
                              >
                                <div data-i18n="Pricing">Pricing</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="../front-pages/payment-page.html"
                                class="menu-link"
                                target="_blank"
                              >
                                <div data-i18n="Payment">Payment</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="../front-pages/checkout-page.html"
                                class="menu-link"
                                target="_blank"
                              >
                                <div data-i18n="Checkout">Checkout</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="../front-pages/help-center-landing.html"
                                class="menu-link"
                                target="_blank"
                              >
                                <div data-i18n="Help Center">Help Center</div>
                              </a>
                            </li>
                          </ul>
                        </li>

                        <li class="menu-item">
                          <a
                            href="javascript:void(0);"
                            class="menu-link menu-toggle"
                          >
                            <i class="menu-icon tf-icons bx bx-user-circle"></i>
                            <div data-i18n="User Profile">User Profile</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a
                                href="pages-profile-user.html"
                                class="menu-link"
                              >
                                <div data-i18n="Profile">Profile</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="pages-profile-teams.html"
                                class="menu-link"
                              >
                                <div data-i18n="Teams">Teams</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="pages-profile-projects.html"
                                class="menu-link"
                              >
                                <div data-i18n="Projects">Projects</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="pages-profile-connections.html"
                                class="menu-link"
                              >
                                <div data-i18n="Connections">Connections</div>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a
                            href="javascript:void(0);"
                            class="menu-link menu-toggle"
                          >
                            <i class="menu-icon tf-icons bx bx-cog"></i>
                            <div data-i18n="Account Settings">
                              Account Settings
                            </div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a
                                href="pages-account-settings-account.html"
                                class="menu-link"
                              >
                                <div data-i18n="Account">Account</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="pages-account-settings-security.html"
                                class="menu-link"
                              >
                                <div data-i18n="Security">Security</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="pages-account-settings-billing.html"
                                class="menu-link"
                              >
                                <div data-i18n="Billing &amp; Plans">
                                  Billing &amp; Plans
                                </div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="pages-account-settings-notifications.html"
                                class="menu-link"
                              >
                                <div data-i18n="Notifications">
                                  Notifications
                                </div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="pages-account-settings-connections.html"
                                class="menu-link"
                              >
                                <div data-i18n="Connections">Connections</div>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a href="pages-faq.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-help-circle"></i>
                            <div data-i18n="FAQ">FAQ</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a href="pages-pricing.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-diamond"></i>
                            <div data-i18n="Pricing">Pricing</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a
                            href="javascript:void(0);"
                            class="menu-link menu-toggle"
                          >
                            <i
                              class="menu-icon tf-icons bx bx-shape-circle"
                            ></i>
                            <div data-i18n="Misc">Misc</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a
                                href="pages-misc-error.html"
                                class="menu-link"
                                target="_blank"
                              >
                                <div data-i18n="Error">Error</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="pages-misc-under-maintenance.html"
                                class="menu-link"
                                target="_blank"
                              >
                                <div data-i18n="Under Maintenance">
                                  Under Maintenance
                                </div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="pages-misc-comingsoon.html"
                                class="menu-link"
                                target="_blank"
                              >
                                <div data-i18n="Coming Soon">Coming Soon</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="pages-misc-not-authorized.html"
                                class="menu-link"
                                target="_blank"
                              >
                                <div data-i18n="Not Authorized">
                                  Not Authorized
                                </div>
                              </a>
                            </li>
                          </ul>
                        </li>

                        <li class="menu-item">
                          <a
                            href="javascript:void(0);"
                            class="menu-link menu-toggle"
                          >
                            <i
                              class="menu-icon tf-icons bx bx-lock-open-alt"
                            ></i>
                            <div data-i18n="Authentications">
                              Authentications
                            </div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a
                                href="javascript:void(0);"
                                class="menu-link menu-toggle"
                              >
                                <div data-i18n="Login">Login</div>
                              </a>
                              <ul class="menu-sub">
                                <li class="menu-item">
                                  <a
                                    href="auth-login-basic.html"
                                    class="menu-link"
                                    target="_blank"
                                  >
                                    <div data-i18n="Basic">Basic</div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a
                                    href="auth-login-cover.html"
                                    class="menu-link"
                                    target="_blank"
                                  >
                                    <div data-i18n="Cover">Cover</div>
                                  </a>
                                </li>
                              </ul>
                            </li>
                            <li class="menu-item">
                              <a
                                href="javascript:void(0);"
                                class="menu-link menu-toggle"
                              >
                                <div data-i18n="Register">Register</div>
                              </a>
                              <ul class="menu-sub">
                                <li class="menu-item">
                                  <a
                                    href="auth-register-basic.html"
                                    class="menu-link"
                                    target="_blank"
                                  >
                                    <div data-i18n="Basic">Basic</div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a
                                    href="auth-register-cover.html"
                                    class="menu-link"
                                    target="_blank"
                                  >
                                    <div data-i18n="Cover">Cover</div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a
                                    href="auth-register-multisteps.html"
                                    class="menu-link"
                                    target="_blank"
                                  >
                                    <div data-i18n="Multi-steps">
                                      Multi-steps
                                    </div>
                                  </a>
                                </li>
                              </ul>
                            </li>
                            <li class="menu-item">
                              <a
                                href="javascript:void(0);"
                                class="menu-link menu-toggle"
                              >
                                <div data-i18n="Verify Email">Verify Email</div>
                              </a>
                              <ul class="menu-sub">
                                <li class="menu-item">
                                  <a
                                    href="auth-verify-email-basic.html"
                                    class="menu-link"
                                    target="_blank"
                                  >
                                    <div data-i18n="Basic">Basic</div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a
                                    href="auth-verify-email-cover.html"
                                    class="menu-link"
                                    target="_blank"
                                  >
                                    <div data-i18n="Cover">Cover</div>
                                  </a>
                                </li>
                              </ul>
                            </li>
                            <li class="menu-item">
                              <a
                                href="javascript:void(0);"
                                class="menu-link menu-toggle"
                              >
                                <div data-i18n="Reset Password">
                                  Reset Password
                                </div>
                              </a>
                              <ul class="menu-sub">
                                <li class="menu-item">
                                  <a
                                    href="auth-reset-password-basic.html"
                                    class="menu-link"
                                    target="_blank"
                                  >
                                    <div data-i18n="Basic">Basic</div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a
                                    href="auth-reset-password-cover.html"
                                    class="menu-link"
                                    target="_blank"
                                  >
                                    <div data-i18n="Cover">Cover</div>
                                  </a>
                                </li>
                              </ul>
                            </li>
                            <li class="menu-item">
                              <a
                                href="javascript:void(0);"
                                class="menu-link menu-toggle"
                              >
                                <div data-i18n="Forgot Password">
                                  Forgot Password
                                </div>
                              </a>
                              <ul class="menu-sub">
                                <li class="menu-item">
                                  <a
                                    href="auth-forgot-password-basic.html"
                                    class="menu-link"
                                    target="_blank"
                                  >
                                    <div data-i18n="Basic">Basic</div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a
                                    href="auth-forgot-password-cover.html"
                                    class="menu-link"
                                    target="_blank"
                                  >
                                    <div data-i18n="Cover">Cover</div>
                                  </a>
                                </li>
                              </ul>
                            </li>
                            <li class="menu-item">
                              <a
                                href="javascript:void(0);"
                                class="menu-link menu-toggle"
                              >
                                <div data-i18n="Two Steps">Two Steps</div>
                              </a>
                              <ul class="menu-sub">
                                <li class="menu-item">
                                  <a
                                    href="auth-two-steps-basic.html"
                                    class="menu-link"
                                    target="_blank"
                                  >
                                    <div data-i18n="Basic">Basic</div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a
                                    href="auth-two-steps-cover.html"
                                    class="menu-link"
                                    target="_blank"
                                  >
                                    <div data-i18n="Cover">Cover</div>
                                  </a>
                                </li>
                              </ul>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a
                            href="javascript:void(0);"
                            class="menu-link menu-toggle"
                          >
                            <i class="menu-icon tf-icons bx bx-spreadsheet"></i>
                            <div data-i18n="Wizard Examples">
                              Wizard Examples
                            </div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a
                                href="wizard-ex-checkout.html"
                                class="menu-link"
                              >
                                <div data-i18n="Checkout">Checkout</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="wizard-ex-property-listing.html"
                                class="menu-link"
                              >
                                <div data-i18n="Property Listing">
                                  Property Listing
                                </div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="wizard-ex-create-deal.html"
                                class="menu-link"
                              >
                                <div data-i18n="Create Deal">Create Deal</div>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a href="modal-examples.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-window-open"></i>
                            <div data-i18n="Modal Examples">Modal Examples</div>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <!-- Components -->
                    <li class="menu-item">
                      <a
                        href="javascript:void(0)"
                        class="menu-link menu-toggle"
                      >
                        <i class="menu-icon tf-icons bx bx-code-block"></i>
                        <div data-i18n="Components">Components</div>
                      </a>
                      <ul class="menu-sub">
                        <!-- Cards -->
                        <li class="menu-item">
                          <a
                            href="javascript:void(0);"
                            class="menu-link menu-toggle"
                          >
                            <i class="menu-icon tf-icons bx bx-collection"></i>
                            <div data-i18n="Cards">Cards</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="cards-basic.html" class="menu-link">
                                <div data-i18n="Basic">Basic</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="cards-advance.html" class="menu-link">
                                <div data-i18n="Advance">Advance</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="cards-statistics.html" class="menu-link">
                                <div data-i18n="Statistics">Statistics</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="cards-analytics.html" class="menu-link">
                                <div data-i18n="Analytics">Analytics</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="cards-gamifications.html"
                                class="menu-link"
                              >
                                <div data-i18n="Gamifications">
                                  Gamifications
                                </div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="cards-actions.html" class="menu-link">
                                <div data-i18n="Actions">Actions</div>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <!-- User interface -->
                        <li class="menu-item">
                          <a
                            href="javascript:void(0)"
                            class="menu-link menu-toggle"
                          >
                            <i class="menu-icon tf-icons bx bx-box"></i>
                            <div data-i18n="User interface">User interface</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="ui-accordion.html" class="menu-link">
                                <div data-i18n="Accordion">Accordion</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="ui-alerts.html" class="menu-link">
                                <div data-i18n="Alerts">Alerts</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="ui-badges.html" class="menu-link">
                                <div data-i18n="Badges">Badges</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="ui-buttons.html" class="menu-link">
                                <div data-i18n="Buttons">Buttons</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="ui-carousel.html" class="menu-link">
                                <div data-i18n="Carousel">Carousel</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="ui-collapse.html" class="menu-link">
                                <div data-i18n="Collapse">Collapse</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="ui-dropdowns.html" class="menu-link">
                                <div data-i18n="Dropdowns">Dropdowns</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="ui-footer.html" class="menu-link">
                                <div data-i18n="Footer">Footer</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="ui-list-groups.html" class="menu-link">
                                <div data-i18n="List groups">List groups</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="ui-modals.html" class="menu-link">
                                <div data-i18n="Modals">Modals</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="ui-navbar.html" class="menu-link">
                                <div data-i18n="Navbar">Navbar</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="ui-offcanvas.html" class="menu-link">
                                <div data-i18n="Offcanvas">Offcanvas</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="ui-pagination-breadcrumbs.html"
                                class="menu-link"
                              >
                                <div data-i18n="Pagination &amp; Breadcrumbs">
                                  Pagination &amp; Breadcrumbs
                                </div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="ui-progress.html" class="menu-link">
                                <div data-i18n="Progress">Progress</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="ui-spinners.html" class="menu-link">
                                <div data-i18n="Spinners">Spinners</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="ui-tabs-pills.html" class="menu-link">
                                <div data-i18n="Tabs &amp; Pills">
                                  Tabs &amp; Pills
                                </div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="ui-toasts.html" class="menu-link">
                                <div data-i18n="Toasts">Toasts</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="ui-tooltips-popovers.html"
                                class="menu-link"
                              >
                                <div data-i18n="Tooltips &amp; Popovers">
                                  Tooltips &amp; Popovers
                                </div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="ui-typography.html" class="menu-link">
                                <div data-i18n="Typography">Typography</div>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <!-- Extended components -->
                        <li class="menu-item">
                          <a
                            href="javascript:void(0)"
                            class="menu-link menu-toggle"
                          >
                            <i class="menu-icon tf-icons bx bx-copy"></i>
                            <div data-i18n="Extended UI">Extended UI</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a
                                href="extended-ui-avatar.html"
                                class="menu-link"
                              >
                                <div data-i18n="Avatar">Avatar</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="extended-ui-blockui.html"
                                class="menu-link"
                              >
                                <div data-i18n="BlockUI">BlockUI</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="extended-ui-drag-and-drop.html"
                                class="menu-link"
                              >
                                <div data-i18n="Drag &amp; Drop">
                                  Drag &amp; Drop
                                </div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="extended-ui-media-player.html"
                                class="menu-link"
                              >
                                <div data-i18n="Media Player">Media Player</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="extended-ui-perfect-scrollbar.html"
                                class="menu-link"
                              >
                                <div data-i18n="Perfect Scrollbar">
                                  Perfect Scrollbar
                                </div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="extended-ui-star-ratings.html"
                                class="menu-link"
                              >
                                <div data-i18n="Star Ratings">Star Ratings</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="extended-ui-sweetalert2.html"
                                class="menu-link"
                              >
                                <div data-i18n="SweetAlert2">SweetAlert2</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="extended-ui-text-divider.html"
                                class="menu-link"
                              >
                                <div data-i18n="Text Divider">Text Divider</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="javascript:void(0);"
                                class="menu-link menu-toggle"
                              >
                                <div data-i18n="Timeline">Timeline</div>
                              </a>
                              <ul class="menu-sub">
                                <li class="menu-item">
                                  <a
                                    href="extended-ui-timeline-basic.html"
                                    class="menu-link"
                                  >
                                    <div data-i18n="Basic">Basic</div>
                                  </a>
                                </li>
                                <li class="menu-item">
                                  <a
                                    href="extended-ui-timeline-fullscreen.html"
                                    class="menu-link"
                                  >
                                    <div data-i18n="Fullscreen">Fullscreen</div>
                                  </a>
                                </li>
                              </ul>
                            </li>
                            <li class="menu-item">
                              <a href="extended-ui-tour.html" class="menu-link">
                                <div data-i18n="Tour">Tour</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="extended-ui-treeview.html"
                                class="menu-link"
                              >
                                <div data-i18n="Treeview">Treeview</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="extended-ui-misc.html" class="menu-link">
                                <div data-i18n="Miscellaneous">
                                  Miscellaneous
                                </div>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <!-- Icons -->
                        <li class="menu-item">
                          <a
                            href="javascript:void(0)"
                            class="menu-link menu-toggle"
                          >
                            <i class="menu-icon tf-icons bx bx-crown"></i>
                            <div data-i18n="Icons">Icons</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="icons-boxicons.html" class="menu-link">
                                <div data-i18n="Boxicons">Boxicons</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="icons-font-awesome.html"
                                class="menu-link"
                              >
                                <div data-i18n="Fontawesome">Fontawesome</div>
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>

                    <!-- Forms -->
                    <li class="menu-item">
                      <a
                        href="javascript:void(0)"
                        class="menu-link menu-toggle"
                      >
                        <i class="menu-icon tf-icons bx bx-book-content"></i>
                        <div data-i18n="Forms">Forms</div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a
                            href="javascript:void(0);"
                            class="menu-link menu-toggle"
                          >
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Form Elements">Form Elements</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a
                                href="forms-basic-inputs.html"
                                class="menu-link"
                              >
                                <div data-i18n="Basic Inputs">Basic Inputs</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="forms-input-groups.html"
                                class="menu-link"
                              >
                                <div data-i18n="Input groups">Input groups</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="forms-custom-options.html"
                                class="menu-link"
                              >
                                <div data-i18n="Custom Options">
                                  Custom Options
                                </div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="forms-editors.html" class="menu-link">
                                <div data-i18n="Editors">Editors</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="forms-file-upload.html"
                                class="menu-link"
                              >
                                <div data-i18n="File Upload">File Upload</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="forms-pickers.html" class="menu-link">
                                <div data-i18n="Pickers">Pickers</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="forms-selects.html" class="menu-link">
                                <div data-i18n="Select &amp; Tags">
                                  Select &amp; Tags
                                </div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="forms-sliders.html" class="menu-link">
                                <div data-i18n="Sliders">Sliders</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="forms-switches.html" class="menu-link">
                                <div data-i18n="Switches">Switches</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="forms-extras.html" class="menu-link">
                                <div data-i18n="Extras">Extras</div>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a
                            href="javascript:void(0);"
                            class="menu-link menu-toggle"
                          >
                            <i class="menu-icon tf-icons bx bx-detail"></i>
                            <div data-i18n="Form Layouts">Form Layouts</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a
                                href="form-layouts-vertical.html"
                                class="menu-link"
                              >
                                <div data-i18n="Vertical Form">
                                  Vertical Form
                                </div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="form-layouts-horizontal.html"
                                class="menu-link"
                              >
                                <div data-i18n="Horizontal Form">
                                  Horizontal Form
                                </div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="form-layouts-sticky.html"
                                class="menu-link"
                              >
                                <div data-i18n="Sticky Actions">
                                  Sticky Actions
                                </div>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a
                            href="javascript:void(0);"
                            class="menu-link menu-toggle"
                          >
                            <i class="menu-icon tf-icons bx bx-carousel"></i>
                            <div data-i18n="Form Wizard">Form Wizard</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a
                                href="form-wizard-numbered.html"
                                class="menu-link"
                              >
                                <div data-i18n="Numbered">Numbered</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="form-wizard-icons.html"
                                class="menu-link"
                              >
                                <div data-i18n="Icons">Icons</div>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a href="form-validation.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-list-check"></i>
                            <div data-i18n="Form Validation">
                              Form Validation
                            </div>
                          </a>
                        </li>
                      </ul>
                    </li>

                    <!-- Tables -->
                    <li class="menu-item">
                      <a
                        href="javascript:void(0)"
                        class="menu-link menu-toggle"
                      >
                        <i class="menu-icon tf-icons bx bx-grid-alt"></i>
                        <div data-i18n="Tables">Tables</div>
                      </a>
                      <ul class="menu-sub">
                        <!-- Tables -->
                        <li class="menu-item">
                          <a href="tables-basic.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-table"></i>
                            <div data-i18n="Tables">Tables</div>
                          </a>
                        </li>
                        <li class="menu-item">
                          <a
                            href="javascript:void(0);"
                            class="menu-link menu-toggle"
                          >
                            <i class="menu-icon tf-icons bx bx-grid"></i>
                            <div data-i18n="Datatables">Datatables</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a
                                href="tables-datatables-basic.html"
                                class="menu-link"
                              >
                                <div data-i18n="Basic">Basic</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="tables-datatables-advanced.html"
                                class="menu-link"
                              >
                                <div data-i18n="Advanced">Advanced</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a
                                href="tables-datatables-extensions.html"
                                class="menu-link"
                              >
                                <div data-i18n="Extensions">Extensions</div>
                              </a>
                            </li>
                          </ul>
                        </li>
                      </ul>
                    </li>

                    <!-- Charts & Maps -->
                    <li class="menu-item">
                      <a
                        href="javascript:void(0)"
                        class="menu-link menu-toggle"
                      >
                        <i
                          class="menu-icon tf-icons bx bx-bar-chart-square"
                        ></i>
                        <div data-i18n="Charts &amp; Maps">
                          Charts &amp; Maps
                        </div>
                      </a>
                      <ul class="menu-sub">
                        <li class="menu-item">
                          <a
                            href="javascript:void(0);"
                            class="menu-link menu-toggle"
                          >
                            <i class="menu-icon tf-icons bx bx-chart"></i>
                            <div data-i18n="Charts">Charts</div>
                          </a>
                          <ul class="menu-sub">
                            <li class="menu-item">
                              <a href="charts-apex.html" class="menu-link">
                                <div data-i18n="Apex Charts">Apex Charts</div>
                              </a>
                            </li>
                            <li class="menu-item">
                              <a href="charts-chartjs.html" class="menu-link">
                                <div data-i18n="ChartJS">ChartJS</div>
                              </a>
                            </li>
                          </ul>
                        </li>
                        <li class="menu-item">
                          <a href="maps-leaflet.html" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-map-alt"></i>
                            <div data-i18n="Leaflet Maps">Leaflet Maps</div>
                          </a>
                        </li>
                      </ul>
                    </li>
                  </ul>
                </div>
                <a href="#" class="menu-horizontal-next d-none"></a>
              </div>
            </aside>
            <!-- / Menu -->

            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="col-xxl-8 mb-6 order-0">
                  <div class="card">
                    <div class="d-flex align-items-start row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h5 class="card-title text-primary mb-3">
                            Congratulations John! 🎉
                          </h5>
                          <p class="mb-6">
                            You have done 72% more sales today.<br />Check your
                            new badge in your profile.
                          </p>

                          <a
                            href="javascript:;"
                            class="btn btn-sm btn-label-primary"
                            >View Badges</a
                          >
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-0 px-0 px-md-6">
                          <img
                            src="../../assets/img/illustrations/man-with-laptop.png"
                            height="175"
                            class="scaleX-n1-rtl"
                            alt="View Badge User"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xxl-4 col-lg-12 col-md-4 order-1">
                  <div class="row">
                    <div class="col-lg-6 col-md-12 col-6 mb-6">
                      <div class="card h-100">
                        <div class="card-body pb-4">
                          <span class="d-block fw-medium mb-1">Order</span>
                          <h4 class="card-title mb-0">276k</h4>
                        </div>
                        <div
                          id="orderChart"
                          class="pb-3"
                          style="min-height: 80px"
                        >
                          <div
                            id="apexchartslpwcwmwz"
                            class="apexcharts-canvas apexchartslpwcwmwz apexcharts-theme-light"
                            style="width: 210px; height: 80px"
                          >
                            <svg
                              id="SvgjsSvg1001"
                              width="210"
                              height="80"
                              xmlns="http://www.w3.org/2000/svg"
                              version="1.1"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              xmlns:svgjs="http://svgjs.dev"
                              class="apexcharts-svg"
                              xmlns:data="ApexChartsNS"
                              transform="translate(0, 0)"
                              style="background: transparent"
                            >
                              <g
                                id="SvgjsG1003"
                                class="apexcharts-inner apexcharts-graphical"
                                transform="translate(0, 0)"
                              >
                                <defs id="SvgjsDefs1002">
                                  <clipPath id="gridRectMasklpwcwmwz">
                                    <rect
                                      id="SvgjsRect1008"
                                      width="208"
                                      height="82"
                                      x="-3"
                                      y="-1"
                                      rx="0"
                                      ry="0"
                                      opacity="1"
                                      stroke-width="0"
                                      stroke="none"
                                      stroke-dasharray="0"
                                      fill="#fff"
                                    ></rect>
                                  </clipPath>
                                  <clipPath
                                    id="forecastMasklpwcwmwz"
                                  ></clipPath>
                                  <clipPath
                                    id="nonForecastMasklpwcwmwz"
                                  ></clipPath>
                                  <clipPath id="gridRectMarkerMasklpwcwmwz">
                                    <rect
                                      id="SvgjsRect1009"
                                      width="230"
                                      height="108"
                                      x="-14"
                                      y="-14"
                                      rx="0"
                                      ry="0"
                                      opacity="1"
                                      stroke-width="0"
                                      stroke="none"
                                      stroke-dasharray="0"
                                      fill="#fff"
                                    ></rect>
                                  </clipPath>
                                  <linearGradient
                                    id="SvgjsLinearGradient1027"
                                    x1="0"
                                    y1="0"
                                    x2="0"
                                    y2="1"
                                  >
                                    <stop
                                      id="SvgjsStop1028"
                                      stop-opacity="0.8"
                                      stop-color="rgba(113,221,55,0.8)"
                                      offset="0"
                                    ></stop>
                                    <stop
                                      id="SvgjsStop1029"
                                      stop-opacity="0.25"
                                      stop-color="rgba(227,248,215,0.25)"
                                      offset="0.85"
                                    ></stop>
                                    <stop
                                      id="SvgjsStop1030"
                                      stop-opacity="0.25"
                                      stop-color="rgba(227,248,215,0.25)"
                                      offset="1"
                                    ></stop>
                                  </linearGradient>
                                </defs>
                                <line
                                  id="SvgjsLine1007"
                                  x1="0"
                                  y1="0"
                                  x2="0"
                                  y2="80"
                                  stroke="#b6b6b6"
                                  stroke-dasharray="3"
                                  stroke-linecap="butt"
                                  class="apexcharts-xcrosshairs"
                                  x="0"
                                  y="0"
                                  width="1"
                                  height="80"
                                  fill="#b1b9c4"
                                  filter="none"
                                  fill-opacity="0.9"
                                  stroke-width="1"
                                ></line>
                                <g
                                  id="SvgjsG1033"
                                  class="apexcharts-xaxis"
                                  transform="translate(0, 0)"
                                >
                                  <g
                                    id="SvgjsG1034"
                                    class="apexcharts-xaxis-texts-g"
                                    transform="translate(0, -4)"
                                  ></g>
                                </g>
                                <g id="SvgjsG1043" class="apexcharts-grid">
                                  <g
                                    id="SvgjsG1044"
                                    class="apexcharts-gridlines-horizontal"
                                    style="display: none"
                                  >
                                    <line
                                      id="SvgjsLine1046"
                                      x1="0"
                                      y1="0"
                                      x2="202"
                                      y2="0"
                                      stroke="#e0e0e0"
                                      stroke-dasharray="0"
                                      stroke-linecap="butt"
                                      class="apexcharts-gridline"
                                    ></line>
                                    <line
                                      id="SvgjsLine1047"
                                      x1="0"
                                      y1="16"
                                      x2="202"
                                      y2="16"
                                      stroke="#e0e0e0"
                                      stroke-dasharray="0"
                                      stroke-linecap="butt"
                                      class="apexcharts-gridline"
                                    ></line>
                                    <line
                                      id="SvgjsLine1048"
                                      x1="0"
                                      y1="32"
                                      x2="202"
                                      y2="32"
                                      stroke="#e0e0e0"
                                      stroke-dasharray="0"
                                      stroke-linecap="butt"
                                      class="apexcharts-gridline"
                                    ></line>
                                    <line
                                      id="SvgjsLine1049"
                                      x1="0"
                                      y1="48"
                                      x2="202"
                                      y2="48"
                                      stroke="#e0e0e0"
                                      stroke-dasharray="0"
                                      stroke-linecap="butt"
                                      class="apexcharts-gridline"
                                    ></line>
                                    <line
                                      id="SvgjsLine1050"
                                      x1="0"
                                      y1="64"
                                      x2="202"
                                      y2="64"
                                      stroke="#e0e0e0"
                                      stroke-dasharray="0"
                                      stroke-linecap="butt"
                                      class="apexcharts-gridline"
                                    ></line>
                                    <line
                                      id="SvgjsLine1051"
                                      x1="0"
                                      y1="80"
                                      x2="202"
                                      y2="80"
                                      stroke="#e0e0e0"
                                      stroke-dasharray="0"
                                      stroke-linecap="butt"
                                      class="apexcharts-gridline"
                                    ></line>
                                  </g>
                                  <g
                                    id="SvgjsG1045"
                                    class="apexcharts-gridlines-vertical"
                                    style="display: none"
                                  ></g>
                                  <line
                                    id="SvgjsLine1053"
                                    x1="0"
                                    y1="80"
                                    x2="202"
                                    y2="80"
                                    stroke="transparent"
                                    stroke-dasharray="0"
                                    stroke-linecap="butt"
                                  ></line>
                                  <line
                                    id="SvgjsLine1052"
                                    x1="0"
                                    y1="1"
                                    x2="0"
                                    y2="80"
                                    stroke="transparent"
                                    stroke-dasharray="0"
                                    stroke-linecap="butt"
                                  ></line>
                                </g>
                                <g
                                  id="SvgjsG1010"
                                  class="apexcharts-area-series apexcharts-plot-series"
                                >
                                  <g
                                    id="SvgjsG1011"
                                    class="apexcharts-series"
                                    seriesName="seriesx1"
                                    data:longestSeries="true"
                                    rel="1"
                                    data:realIndex="0"
                                  >
                                    <path
                                      id="SvgjsPath1031"
                                      d="M0 80L0 56C11.783333333333335 56 21.883333333333336 58 33.66666666666667 58C45.45 58 55.55000000000001 18 67.33333333333334 18C79.11666666666667 18 89.21666666666667 72 101 72C112.78333333333333 72 122.88333333333335 46 134.66666666666669 46C146.45000000000002 46 156.55 52 168.33333333333334 52C180.11666666666667 52 190.21666666666667 10 202 10C202 10 202 10 202 80M202 10C202 10 202 10 202 10 "
                                      fill="url(#SvgjsLinearGradient1027)"
                                      fill-opacity="1"
                                      stroke-opacity="1"
                                      stroke-linecap="butt"
                                      stroke-width="0"
                                      stroke-dasharray="0"
                                      class="apexcharts-area"
                                      index="0"
                                      clip-path="url(#gridRectMasklpwcwmwz)"
                                      pathTo="M 0 80L 0 56C 11.783333333333335 56 21.883333333333336 58 33.66666666666667 58C 45.45 58 55.55000000000001 18 67.33333333333334 18C 79.11666666666667 18 89.21666666666667 72 101 72C 112.78333333333333 72 122.88333333333335 46 134.66666666666669 46C 146.45000000000002 46 156.55 52 168.33333333333334 52C 180.11666666666667 52 190.21666666666667 10 202 10C 202 10 202 10 202 80M 202 10z"
                                      pathFrom="M -1 128L -1 128L 33.66666666666667 128L 67.33333333333334 128L 101 128L 134.66666666666669 128L 168.33333333333334 128L 202 128"
                                    ></path>
                                    <path
                                      id="SvgjsPath1032"
                                      d="M0 56C11.783333333333335 56 21.883333333333336 58 33.66666666666667 58C45.45 58 55.55000000000001 18 67.33333333333334 18C79.11666666666667 18 89.21666666666667 72 101 72C112.78333333333333 72 122.88333333333335 46 134.66666666666669 46C146.45000000000002 46 156.55 52 168.33333333333334 52C180.11666666666667 52 190.21666666666667 10 202 10C202 10 202 10 202 10 "
                                      fill="none"
                                      fill-opacity="1"
                                      stroke="#71dd37"
                                      stroke-opacity="1"
                                      stroke-linecap="butt"
                                      stroke-width="2"
                                      stroke-dasharray="0"
                                      class="apexcharts-area"
                                      index="0"
                                      clip-path="url(#gridRectMasklpwcwmwz)"
                                      pathTo="M 0 56C 11.783333333333335 56 21.883333333333336 58 33.66666666666667 58C 45.45 58 55.55000000000001 18 67.33333333333334 18C 79.11666666666667 18 89.21666666666667 72 101 72C 112.78333333333333 72 122.88333333333335 46 134.66666666666669 46C 146.45000000000002 46 156.55 52 168.33333333333334 52C 180.11666666666667 52 190.21666666666667 10 202 10"
                                      pathFrom="M -1 128L -1 128L 33.66666666666667 128L 67.33333333333334 128L 101 128L 134.66666666666669 128L 168.33333333333334 128L 202 128"
                                    ></path>
                                    <g
                                      id="SvgjsG1012"
                                      class="apexcharts-series-markers-wrap"
                                      data:realIndex="0"
                                    >
                                      <g
                                        id="SvgjsG1014"
                                        class="apexcharts-series-markers"
                                        clip-path="url(#gridRectMarkerMasklpwcwmwz)"
                                      >
                                        <circle
                                          id="SvgjsCircle1015"
                                          r="6"
                                          cx="0"
                                          cy="56"
                                          class="apexcharts-marker no-pointer-events wbxdbj4ie"
                                          stroke="transparent"
                                          fill="transparent"
                                          fill-opacity="1"
                                          stroke-width="4"
                                          stroke-opacity="0.9"
                                          rel="0"
                                          j="0"
                                          index="0"
                                          default-marker-size="6"
                                        ></circle>
                                        <circle
                                          id="SvgjsCircle1016"
                                          r="6"
                                          cx="33.66666666666667"
                                          cy="58"
                                          class="apexcharts-marker no-pointer-events wswlvn2ri"
                                          stroke="transparent"
                                          fill="transparent"
                                          fill-opacity="1"
                                          stroke-width="4"
                                          stroke-opacity="0.9"
                                          rel="1"
                                          j="1"
                                          index="0"
                                          default-marker-size="6"
                                        ></circle>
                                      </g>
                                      <g
                                        id="SvgjsG1017"
                                        class="apexcharts-series-markers"
                                        clip-path="url(#gridRectMarkerMasklpwcwmwz)"
                                      >
                                        <circle
                                          id="SvgjsCircle1018"
                                          r="6"
                                          cx="67.33333333333334"
                                          cy="18"
                                          class="apexcharts-marker no-pointer-events w9ose9cua"
                                          stroke="transparent"
                                          fill="transparent"
                                          fill-opacity="1"
                                          stroke-width="4"
                                          stroke-opacity="0.9"
                                          rel="2"
                                          j="2"
                                          index="0"
                                          default-marker-size="6"
                                        ></circle>
                                      </g>
                                      <g
                                        id="SvgjsG1019"
                                        class="apexcharts-series-markers"
                                        clip-path="url(#gridRectMarkerMasklpwcwmwz)"
                                      >
                                        <circle
                                          id="SvgjsCircle1020"
                                          r="6"
                                          cx="101"
                                          cy="72"
                                          class="apexcharts-marker no-pointer-events wtacqyzq2"
                                          stroke="transparent"
                                          fill="transparent"
                                          fill-opacity="1"
                                          stroke-width="4"
                                          stroke-opacity="0.9"
                                          rel="3"
                                          j="3"
                                          index="0"
                                          default-marker-size="6"
                                        ></circle>
                                      </g>
                                      <g
                                        id="SvgjsG1021"
                                        class="apexcharts-series-markers"
                                        clip-path="url(#gridRectMarkerMasklpwcwmwz)"
                                      >
                                        <circle
                                          id="SvgjsCircle1022"
                                          r="6"
                                          cx="134.66666666666669"
                                          cy="46"
                                          class="apexcharts-marker no-pointer-events wi9zsw827"
                                          stroke="transparent"
                                          fill="transparent"
                                          fill-opacity="1"
                                          stroke-width="4"
                                          stroke-opacity="0.9"
                                          rel="4"
                                          j="4"
                                          index="0"
                                          default-marker-size="6"
                                        ></circle>
                                      </g>
                                      <g
                                        id="SvgjsG1023"
                                        class="apexcharts-series-markers"
                                        clip-path="url(#gridRectMarkerMasklpwcwmwz)"
                                      >
                                        <circle
                                          id="SvgjsCircle1024"
                                          r="6"
                                          cx="168.33333333333334"
                                          cy="52"
                                          class="apexcharts-marker no-pointer-events w623obyxz"
                                          stroke="transparent"
                                          fill="transparent"
                                          fill-opacity="1"
                                          stroke-width="4"
                                          stroke-opacity="0.9"
                                          rel="5"
                                          j="5"
                                          index="0"
                                          default-marker-size="6"
                                        ></circle>
                                      </g>
                                      <g
                                        id="SvgjsG1025"
                                        class="apexcharts-series-markers"
                                        clip-path="url(#gridRectMarkerMasklpwcwmwz)"
                                      >
                                        <circle
                                          id="SvgjsCircle1026"
                                          r="6"
                                          cx="202"
                                          cy="10"
                                          class="apexcharts-marker no-pointer-events wc2gfcysw"
                                          stroke="#71dd37"
                                          fill="#ffffff"
                                          fill-opacity="1"
                                          stroke-width="4"
                                          stroke-opacity="0.9"
                                          rel="6"
                                          j="6"
                                          index="0"
                                          default-marker-size="6"
                                        ></circle>
                                      </g>
                                    </g>
                                  </g>
                                  <g
                                    id="SvgjsG1013"
                                    class="apexcharts-datalabels"
                                    data:realIndex="0"
                                  ></g>
                                </g>
                                <line
                                  id="SvgjsLine1054"
                                  x1="0"
                                  y1="0"
                                  x2="202"
                                  y2="0"
                                  stroke="#b6b6b6"
                                  stroke-dasharray="0"
                                  stroke-width="1"
                                  stroke-linecap="butt"
                                  class="apexcharts-ycrosshairs"
                                ></line>
                                <line
                                  id="SvgjsLine1055"
                                  x1="0"
                                  y1="0"
                                  x2="202"
                                  y2="0"
                                  stroke-dasharray="0"
                                  stroke-width="0"
                                  stroke-linecap="butt"
                                  class="apexcharts-ycrosshairs-hidden"
                                ></line>
                                <g
                                  id="SvgjsG1056"
                                  class="apexcharts-yaxis-annotations"
                                ></g>
                                <g
                                  id="SvgjsG1057"
                                  class="apexcharts-xaxis-annotations"
                                ></g>
                                <g
                                  id="SvgjsG1058"
                                  class="apexcharts-point-annotations"
                                ></g>
                              </g>
                              <rect
                                id="SvgjsRect1006"
                                width="0"
                                height="0"
                                x="0"
                                y="0"
                                rx="0"
                                ry="0"
                                opacity="1"
                                stroke-width="0"
                                stroke="none"
                                stroke-dasharray="0"
                                fill="#fefefe"
                              ></rect>
                              <g
                                id="SvgjsG1042"
                                class="apexcharts-yaxis"
                                rel="0"
                                transform="translate(-18, 0)"
                              ></g>
                              <g
                                id="SvgjsG1004"
                                class="apexcharts-annotations"
                              ></g>
                            </svg>
                            <div
                              class="apexcharts-legend"
                              style="max-height: 40px"
                            ></div>
                            <div
                              class="apexcharts-tooltip apexcharts-theme-light"
                            >
                              <div
                                class="apexcharts-tooltip-title"
                                style="
                                  font-family: Helvetica, Arial, sans-serif;
                                  font-size: 12px;
                                "
                              ></div>
                              <div
                                class="apexcharts-tooltip-series-group"
                                style="order: 1"
                              >
                                <span
                                  class="apexcharts-tooltip-marker"
                                  style="background-color: rgb(113, 221, 55)"
                                ></span>
                                <div
                                  class="apexcharts-tooltip-text"
                                  style="
                                    font-family: Helvetica, Arial, sans-serif;
                                    font-size: 12px;
                                  "
                                >
                                  <div class="apexcharts-tooltip-y-group">
                                    <span
                                      class="apexcharts-tooltip-text-y-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-y-value"
                                    ></span>
                                  </div>
                                  <div class="apexcharts-tooltip-goals-group">
                                    <span
                                      class="apexcharts-tooltip-text-goals-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-goals-value"
                                    ></span>
                                  </div>
                                  <div class="apexcharts-tooltip-z-group">
                                    <span
                                      class="apexcharts-tooltip-text-z-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-z-value"
                                    ></span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div
                              class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"
                            >
                              <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                          </div>
                        </div>
                        <div class="resize-triggers">
                          <div class="expand-trigger">
                            <div style="width: 211px; height: 199px"></div>
                          </div>
                          <div class="contract-trigger"></div>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-6 mb-6">
                      <div class="card h-100">
                        <div class="card-body">
                          <div
                            class="card-title d-flex align-items-start justify-content-between mb-4"
                          >
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../../assets/img/icons/unicons/wallet-info.png"
                                alt="wallet info"
                                class="rounded"
                              />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt6"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i
                                  class="bx bx-dots-vertical-rounded text-muted"
                                ></i>
                              </button>
                              <div
                                class="dropdown-menu dropdown-menu-end"
                                aria-labelledby="cardOpt6"
                              >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >View More</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Delete</a
                                >
                              </div>
                            </div>
                          </div>
                          <p class="mb-1">Sales</p>
                          <h4 class="card-title mb-3">$4,679</h4>
                          <small class="text-success fw-medium"
                            ><i class="bx bx-up-arrow-alt"></i> +28.42%</small
                          >
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Total Revenue -->
                <div
                  class="col-12 col-xxl-8 order-2 order-md-3 order-xxl-2 mb-6"
                >
                  <div class="card">
                    <div class="row row-bordered g-0">
                      <div class="col-lg-8">
                        <div
                          class="card-header d-flex align-items-center justify-content-between"
                        >
                          <div class="card-title mb-0">
                            <h5 class="m-0 me-2">Total Revenue</h5>
                          </div>
                          <div class="dropdown">
                            <button
                              class="btn p-0"
                              type="button"
                              id="totalRevenue"
                              data-bs-toggle="dropdown"
                              aria-haspopup="true"
                              aria-expanded="false"
                            >
                              <i
                                class="bx bx-dots-vertical-rounded bx-lg text-muted"
                              ></i>
                            </button>
                            <div
                              class="dropdown-menu dropdown-menu-end"
                              aria-labelledby="totalRevenue"
                            >
                              <a
                                class="dropdown-item"
                                href="javascript:void(0);"
                                >Select All</a
                              >
                              <a
                                class="dropdown-item"
                                href="javascript:void(0);"
                                >Refresh</a
                              >
                              <a
                                class="dropdown-item"
                                href="javascript:void(0);"
                                >Share</a
                              >
                            </div>
                          </div>
                        </div>
                        <div
                          id="totalRevenueChart"
                          class="px-3"
                          style="min-height: 347px"
                        >
                          <div
                            id="apexchartsxqy40aknh"
                            class="apexcharts-canvas apexchartsxqy40aknh apexcharts-theme-light"
                            style="width: 587px; height: 332px"
                          >
                            <svg
                              id="SvgjsSvg1059"
                              width="587"
                              height="332"
                              xmlns="http://www.w3.org/2000/svg"
                              version="1.1"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              xmlns:svgjs="http://svgjs.dev"
                              class="apexcharts-svg"
                              xmlns:data="ApexChartsNS"
                              transform="translate(0, 0)"
                              style="background: transparent"
                            >
                              <foreignObject
                                x="0"
                                y="0"
                                width="587"
                                height="332"
                                ><div
                                  class="apexcharts-legend apexcharts-align-left apx-legend-position-top"
                                  xmlns="http://www.w3.org/1999/xhtml"
                                  style="
                                    right: 0px;
                                    position: absolute;
                                    left: 0px;
                                    top: 4px;
                                    max-height: 166px;
                                  "
                                >
                                  <div
                                    class="apexcharts-legend-series"
                                    rel="1"
                                    seriesname="2023"
                                    data:collapsed="false"
                                    style="margin: 2px 10px"
                                  >
                                    <span
                                      class="apexcharts-legend-marker"
                                      rel="1"
                                      data:collapsed="false"
                                      style="
                                        background: rgb(
                                          105,
                                          108,
                                          255
                                        ) !important;
                                        color: rgb(105, 108, 255);
                                        height: 8px;
                                        width: 8px;
                                        left: -5px;
                                        top: 0px;
                                        border-width: 0px;
                                        border-color: rgb(255, 255, 255);
                                        border-radius: 12px;
                                      "
                                    ></span
                                    ><span
                                      class="apexcharts-legend-text"
                                      rel="1"
                                      i="0"
                                      data:default-text="2023"
                                      data:collapsed="false"
                                      style="
                                        color: rgb(100, 110, 120);
                                        font-size: 13px;
                                        font-weight: 400;
                                        font-family: 'Public Sans';
                                      "
                                      >2023</span
                                    >
                                  </div>
                                  <div
                                    class="apexcharts-legend-series"
                                    rel="2"
                                    seriesname="2022"
                                    data:collapsed="false"
                                    style="margin: 2px 10px"
                                  >
                                    <span
                                      class="apexcharts-legend-marker"
                                      rel="2"
                                      data:collapsed="false"
                                      style="
                                        background: rgb(3, 195, 236) !important;
                                        color: rgb(3, 195, 236);
                                        height: 8px;
                                        width: 8px;
                                        left: -5px;
                                        top: 0px;
                                        border-width: 0px;
                                        border-color: rgb(255, 255, 255);
                                        border-radius: 12px;
                                      "
                                    ></span
                                    ><span
                                      class="apexcharts-legend-text"
                                      rel="2"
                                      i="1"
                                      data:default-text="2022"
                                      data:collapsed="false"
                                      style="
                                        color: rgb(100, 110, 120);
                                        font-size: 13px;
                                        font-weight: 400;
                                        font-family: 'Public Sans';
                                      "
                                      >2022</span
                                    >
                                  </div>
                                </div>
                                <style type="text/css">
                                  .apexcharts-legend {
                                    display: flex;
                                    overflow: auto;
                                    padding: 0 10px;
                                  }
                                  .apexcharts-legend.apx-legend-position-bottom,
                                  .apexcharts-legend.apx-legend-position-top {
                                    flex-wrap: wrap;
                                  }
                                  .apexcharts-legend.apx-legend-position-right,
                                  .apexcharts-legend.apx-legend-position-left {
                                    flex-direction: column;
                                    bottom: 0;
                                  }
                                  .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
                                  .apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
                                  .apexcharts-legend.apx-legend-position-right,
                                  .apexcharts-legend.apx-legend-position-left {
                                    justify-content: flex-start;
                                  }
                                  .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
                                  .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
                                    justify-content: center;
                                  }
                                  .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
                                  .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
                                    justify-content: flex-end;
                                  }
                                  .apexcharts-legend-series {
                                    cursor: pointer;
                                    line-height: normal;
                                  }
                                  .apexcharts-legend.apx-legend-position-bottom
                                    .apexcharts-legend-series,
                                  .apexcharts-legend.apx-legend-position-top
                                    .apexcharts-legend-series {
                                    display: flex;
                                    align-items: center;
                                  }
                                  .apexcharts-legend-text {
                                    position: relative;
                                    font-size: 14px;
                                  }
                                  .apexcharts-legend-text *,
                                  .apexcharts-legend-marker * {
                                    pointer-events: none;
                                  }
                                  .apexcharts-legend-marker {
                                    position: relative;
                                    display: inline-block;
                                    cursor: pointer;
                                    margin-right: 3px;
                                    border-style: solid;
                                  }

                                  .apexcharts-legend.apexcharts-align-right
                                    .apexcharts-legend-series,
                                  .apexcharts-legend.apexcharts-align-left
                                    .apexcharts-legend-series {
                                    display: inline-block;
                                  }
                                  .apexcharts-legend-series.apexcharts-no-click {
                                    cursor: auto;
                                  }
                                  .apexcharts-legend
                                    .apexcharts-hidden-zero-series,
                                  .apexcharts-legend
                                    .apexcharts-hidden-null-series {
                                    display: none !important;
                                  }
                                  .apexcharts-inactive-legend {
                                    opacity: 0.45;
                                  }
                                </style></foreignObject
                              >
                              <g
                                id="SvgjsG1061"
                                class="apexcharts-inner apexcharts-graphical"
                                transform="translate(55.65549278259277, 52)"
                              >
                                <defs id="SvgjsDefs1060">
                                  <linearGradient
                                    id="SvgjsLinearGradient1065"
                                    x1="0"
                                    y1="0"
                                    x2="0"
                                    y2="1"
                                  >
                                    <stop
                                      id="SvgjsStop1066"
                                      stop-opacity="0.4"
                                      stop-color="rgba(216,227,240,0.4)"
                                      offset="0"
                                    ></stop>
                                    <stop
                                      id="SvgjsStop1067"
                                      stop-opacity="0.5"
                                      stop-color="rgba(190,209,230,0.5)"
                                      offset="1"
                                    ></stop>
                                    <stop
                                      id="SvgjsStop1068"
                                      stop-opacity="0.5"
                                      stop-color="rgba(190,209,230,0.5)"
                                      offset="1"
                                    ></stop>
                                  </linearGradient>
                                  <clipPath id="gridRectMaskxqy40aknh">
                                    <rect
                                      id="SvgjsRect1070"
                                      width="521.3445072174072"
                                      height="255.700799074173"
                                      x="-5"
                                      y="-3"
                                      rx="0"
                                      ry="0"
                                      opacity="1"
                                      stroke-width="0"
                                      stroke="none"
                                      stroke-dasharray="0"
                                      fill="#fff"
                                    ></rect>
                                  </clipPath>
                                  <clipPath
                                    id="forecastMaskxqy40aknh"
                                  ></clipPath>
                                  <clipPath
                                    id="nonForecastMaskxqy40aknh"
                                  ></clipPath>
                                  <clipPath id="gridRectMarkerMaskxqy40aknh">
                                    <rect
                                      id="SvgjsRect1071"
                                      width="515.3445072174072"
                                      height="253.700799074173"
                                      x="-2"
                                      y="-2"
                                      rx="0"
                                      ry="0"
                                      opacity="1"
                                      stroke-width="0"
                                      stroke="none"
                                      stroke-dasharray="0"
                                      fill="#fff"
                                    ></rect>
                                  </clipPath>
                                </defs>
                                <rect
                                  id="SvgjsRect1069"
                                  width="25.56722536087036"
                                  height="249.700799074173"
                                  x="0"
                                  y="0"
                                  rx="0"
                                  ry="0"
                                  opacity="1"
                                  stroke-width="0"
                                  stroke-dasharray="3"
                                  fill="url(#SvgjsLinearGradient1065)"
                                  class="apexcharts-xcrosshairs"
                                  y2="249.700799074173"
                                  filter="none"
                                  fill-opacity="0.9"
                                ></rect>
                                <g
                                  id="SvgjsG1091"
                                  class="apexcharts-xaxis"
                                  transform="translate(0, 0)"
                                >
                                  <g
                                    id="SvgjsG1092"
                                    class="apexcharts-xaxis-texts-g"
                                    transform="translate(0, -4)"
                                  >
                                    <text
                                      id="SvgjsText1094"
                                      font-family="Public Sans"
                                      x="36.52460765838623"
                                      y="278.700799074173"
                                      text-anchor="middle"
                                      dominant-baseline="auto"
                                      font-size="13px"
                                      font-weight="400"
                                      fill="#a7acb2"
                                      class="apexcharts-text apexcharts-xaxis-label"
                                      style="font-family: 'Public Sans'"
                                    >
                                      <tspan id="SvgjsTspan1095">Jan</tspan>
                                      <title>Jan</title>
                                    </text>
                                    <text
                                      id="SvgjsText1097"
                                      font-family="Public Sans"
                                      x="109.57382297515869"
                                      y="278.700799074173"
                                      text-anchor="middle"
                                      dominant-baseline="auto"
                                      font-size="13px"
                                      font-weight="400"
                                      fill="#a7acb2"
                                      class="apexcharts-text apexcharts-xaxis-label"
                                      style="font-family: 'Public Sans'"
                                    >
                                      <tspan id="SvgjsTspan1098">Feb</tspan>
                                      <title>Feb</title>
                                    </text>
                                    <text
                                      id="SvgjsText1100"
                                      font-family="Public Sans"
                                      x="182.62303829193115"
                                      y="278.700799074173"
                                      text-anchor="middle"
                                      dominant-baseline="auto"
                                      font-size="13px"
                                      font-weight="400"
                                      fill="#a7acb2"
                                      class="apexcharts-text apexcharts-xaxis-label"
                                      style="font-family: 'Public Sans'"
                                    >
                                      <tspan id="SvgjsTspan1101">Mar</tspan>
                                      <title>Mar</title>
                                    </text>
                                    <text
                                      id="SvgjsText1103"
                                      font-family="Public Sans"
                                      x="255.6722536087036"
                                      y="278.700799074173"
                                      text-anchor="middle"
                                      dominant-baseline="auto"
                                      font-size="13px"
                                      font-weight="400"
                                      fill="#a7acb2"
                                      class="apexcharts-text apexcharts-xaxis-label"
                                      style="font-family: 'Public Sans'"
                                    >
                                      <tspan id="SvgjsTspan1104">Apr</tspan>
                                      <title>Apr</title>
                                    </text>
                                    <text
                                      id="SvgjsText1106"
                                      font-family="Public Sans"
                                      x="328.7214689254761"
                                      y="278.700799074173"
                                      text-anchor="middle"
                                      dominant-baseline="auto"
                                      font-size="13px"
                                      font-weight="400"
                                      fill="#a7acb2"
                                      class="apexcharts-text apexcharts-xaxis-label"
                                      style="font-family: 'Public Sans'"
                                    >
                                      <tspan id="SvgjsTspan1107">May</tspan>
                                      <title>May</title>
                                    </text>
                                    <text
                                      id="SvgjsText1109"
                                      font-family="Public Sans"
                                      x="401.77068424224854"
                                      y="278.700799074173"
                                      text-anchor="middle"
                                      dominant-baseline="auto"
                                      font-size="13px"
                                      font-weight="400"
                                      fill="#a7acb2"
                                      class="apexcharts-text apexcharts-xaxis-label"
                                      style="font-family: 'Public Sans'"
                                    >
                                      <tspan id="SvgjsTspan1110">Jun</tspan>
                                      <title>Jun</title>
                                    </text>
                                    <text
                                      id="SvgjsText1112"
                                      font-family="Public Sans"
                                      x="474.819899559021"
                                      y="278.700799074173"
                                      text-anchor="middle"
                                      dominant-baseline="auto"
                                      font-size="13px"
                                      font-weight="400"
                                      fill="#a7acb2"
                                      class="apexcharts-text apexcharts-xaxis-label"
                                      style="font-family: 'Public Sans'"
                                    >
                                      <tspan id="SvgjsTspan1113">Jul</tspan>
                                      <title>Jul</title>
                                    </text>
                                  </g>
                                </g>
                                <g id="SvgjsG1128" class="apexcharts-grid">
                                  <g
                                    id="SvgjsG1129"
                                    class="apexcharts-gridlines-horizontal"
                                  >
                                    <line
                                      id="SvgjsLine1131"
                                      x1="0"
                                      y1="0"
                                      x2="511.3445072174072"
                                      y2="0"
                                      stroke="#e4e6e8"
                                      stroke-dasharray="7"
                                      stroke-linecap="butt"
                                      class="apexcharts-gridline"
                                    ></line>
                                    <line
                                      id="SvgjsLine1132"
                                      x1="0"
                                      y1="49.9401598148346"
                                      x2="511.3445072174072"
                                      y2="49.9401598148346"
                                      stroke="#e4e6e8"
                                      stroke-dasharray="7"
                                      stroke-linecap="butt"
                                      class="apexcharts-gridline"
                                    ></line>
                                    <line
                                      id="SvgjsLine1133"
                                      x1="0"
                                      y1="99.8803196296692"
                                      x2="511.3445072174072"
                                      y2="99.8803196296692"
                                      stroke="#e4e6e8"
                                      stroke-dasharray="7"
                                      stroke-linecap="butt"
                                      class="apexcharts-gridline"
                                    ></line>
                                    <line
                                      id="SvgjsLine1134"
                                      x1="0"
                                      y1="149.8204794445038"
                                      x2="511.3445072174072"
                                      y2="149.8204794445038"
                                      stroke="#e4e6e8"
                                      stroke-dasharray="7"
                                      stroke-linecap="butt"
                                      class="apexcharts-gridline"
                                    ></line>
                                    <line
                                      id="SvgjsLine1135"
                                      x1="0"
                                      y1="199.7606392593384"
                                      x2="511.3445072174072"
                                      y2="199.7606392593384"
                                      stroke="#e4e6e8"
                                      stroke-dasharray="7"
                                      stroke-linecap="butt"
                                      class="apexcharts-gridline"
                                    ></line>
                                    <line
                                      id="SvgjsLine1136"
                                      x1="0"
                                      y1="249.700799074173"
                                      x2="511.3445072174072"
                                      y2="249.700799074173"
                                      stroke="#e4e6e8"
                                      stroke-dasharray="7"
                                      stroke-linecap="butt"
                                      class="apexcharts-gridline"
                                    ></line>
                                  </g>
                                  <g
                                    id="SvgjsG1130"
                                    class="apexcharts-gridlines-vertical"
                                  ></g>
                                  <line
                                    id="SvgjsLine1138"
                                    x1="0"
                                    y1="249.700799074173"
                                    x2="511.3445072174072"
                                    y2="249.700799074173"
                                    stroke="transparent"
                                    stroke-dasharray="0"
                                    stroke-linecap="butt"
                                  ></line>
                                  <line
                                    id="SvgjsLine1137"
                                    x1="0"
                                    y1="1"
                                    x2="0"
                                    y2="249.700799074173"
                                    stroke="transparent"
                                    stroke-dasharray="0"
                                    stroke-linecap="butt"
                                  ></line>
                                </g>
                                <g
                                  id="SvgjsG1072"
                                  class="apexcharts-bar-series apexcharts-plot-series"
                                >
                                  <g
                                    id="SvgjsG1073"
                                    class="apexcharts-series"
                                    seriesName="2023"
                                    rel="1"
                                    data:realIndex="0"
                                  >
                                    <path
                                      id="SvgjsPath1075"
                                      d="M23.74099497795105 139.8204794445038L23.74099497795105 69.92819177780152C23.74099497795105 63.26152511113486 27.074328311284383 59.928191777801516 33.74099497795105 59.928191777801516L33.308220338821414 59.928191777801516C39.97488700548808 59.928191777801516 43.308220338821414 63.26152511113486 43.308220338821414 69.92819177780152L43.308220338821414 69.92819177780152L43.308220338821414 139.8204794445038C43.308220338821414 146.48714611117046 39.97488700548808 149.8204794445038 33.308220338821414 149.8204794445038C33.308220338821414 149.8204794445038 33.74099497795105 149.8204794445038 33.74099497795105 149.8204794445038C27.074328311284383 149.8204794445038 23.74099497795105 146.48714611117046 23.74099497795105 139.8204794445038C23.74099497795105 139.8204794445038 23.74099497795105 139.8204794445038 23.74099497795105 139.8204794445038 "
                                      fill="rgba(105,108,255,1)"
                                      fill-opacity="1"
                                      stroke="#ffffff"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="6"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="0"
                                      clip-path="url(#gridRectMaskxqy40aknh)"
                                      pathTo="M 23.74099497795105 139.8204794445038L 23.74099497795105 69.92819177780152Q 23.74099497795105 59.928191777801516 33.74099497795105 59.928191777801516L 33.308220338821414 59.928191777801516Q 43.308220338821414 59.928191777801516 43.308220338821414 69.92819177780152L 43.308220338821414 69.92819177780152L 43.308220338821414 139.8204794445038Q 43.308220338821414 149.8204794445038 33.308220338821414 149.8204794445038L 33.74099497795105 149.8204794445038Q 23.74099497795105 149.8204794445038 23.74099497795105 139.8204794445038z"
                                      pathFrom="M 23.74099497795105 139.8204794445038L 23.74099497795105 139.8204794445038L 43.308220338821414 139.8204794445038L 43.308220338821414 139.8204794445038L 43.308220338821414 139.8204794445038L 43.308220338821414 139.8204794445038L 43.308220338821414 139.8204794445038L 23.74099497795105 139.8204794445038"
                                      cy="59.928191777801516"
                                      cx="93.79021029472351"
                                      j="0"
                                      val="18"
                                      barHeight="89.89228766670229"
                                      barWidth="25.56722536087036"
                                    ></path>
                                    <path
                                      id="SvgjsPath1076"
                                      d="M96.79021029472351 139.8204794445038L96.79021029472351 124.86236757411959C96.79021029472351 118.19570090745293 100.12354362805684 114.86236757411959 106.79021029472351 114.86236757411959L106.35743565559386 114.86236757411959C113.02410232226052 114.86236757411959 116.35743565559386 118.19570090745293 116.35743565559386 124.86236757411959L116.35743565559386 124.86236757411959L116.35743565559386 139.8204794445038C116.35743565559386 146.48714611117046 113.02410232226052 149.8204794445038 106.35743565559386 149.8204794445038C106.35743565559386 149.8204794445038 106.79021029472351 149.8204794445038 106.79021029472351 149.8204794445038C100.12354362805684 149.8204794445038 96.79021029472351 146.48714611117046 96.79021029472351 139.8204794445038C96.79021029472351 139.8204794445038 96.79021029472351 139.8204794445038 96.79021029472351 139.8204794445038 "
                                      fill="rgba(105,108,255,1)"
                                      fill-opacity="1"
                                      stroke="#ffffff"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="6"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="0"
                                      clip-path="url(#gridRectMaskxqy40aknh)"
                                      pathTo="M 96.79021029472351 139.8204794445038L 96.79021029472351 124.86236757411959Q 96.79021029472351 114.86236757411959 106.79021029472351 114.86236757411959L 106.35743565559386 114.86236757411959Q 116.35743565559386 114.86236757411959 116.35743565559386 124.86236757411959L 116.35743565559386 124.86236757411959L 116.35743565559386 139.8204794445038Q 116.35743565559386 149.8204794445038 106.35743565559386 149.8204794445038L 106.79021029472351 149.8204794445038Q 96.79021029472351 149.8204794445038 96.79021029472351 139.8204794445038z"
                                      pathFrom="M 96.79021029472351 139.8204794445038L 96.79021029472351 139.8204794445038L 116.35743565559386 139.8204794445038L 116.35743565559386 139.8204794445038L 116.35743565559386 139.8204794445038L 116.35743565559386 139.8204794445038L 116.35743565559386 139.8204794445038L 96.79021029472351 139.8204794445038"
                                      cy="114.86236757411959"
                                      cx="166.83942561149598"
                                      j="1"
                                      val="7"
                                      barHeight="34.95811187038422"
                                      barWidth="25.56722536087036"
                                    ></path>
                                    <path
                                      id="SvgjsPath1077"
                                      d="M169.83942561149598 139.8204794445038L169.83942561149598 84.9102397222519C169.83942561149598 78.24357305558523 173.1727589448293 74.9102397222519 179.83942561149598 74.9102397222519L179.40665097236635 74.9102397222519C186.073317639033 74.9102397222519 189.40665097236635 78.24357305558523 189.40665097236635 84.9102397222519L189.40665097236635 84.9102397222519L189.40665097236635 139.8204794445038C189.40665097236635 146.48714611117046 186.073317639033 149.8204794445038 179.40665097236635 149.8204794445038C179.40665097236635 149.8204794445038 179.83942561149598 149.8204794445038 179.83942561149598 149.8204794445038C173.1727589448293 149.8204794445038 169.83942561149598 146.48714611117046 169.83942561149598 139.8204794445038C169.83942561149598 139.8204794445038 169.83942561149598 139.8204794445038 169.83942561149598 139.8204794445038 "
                                      fill="rgba(105,108,255,1)"
                                      fill-opacity="1"
                                      stroke="#ffffff"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="6"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="0"
                                      clip-path="url(#gridRectMaskxqy40aknh)"
                                      pathTo="M 169.83942561149598 139.8204794445038L 169.83942561149598 84.9102397222519Q 169.83942561149598 74.9102397222519 179.83942561149598 74.9102397222519L 179.40665097236635 74.9102397222519Q 189.40665097236635 74.9102397222519 189.40665097236635 84.9102397222519L 189.40665097236635 84.9102397222519L 189.40665097236635 139.8204794445038Q 189.40665097236635 149.8204794445038 179.40665097236635 149.8204794445038L 179.83942561149598 149.8204794445038Q 169.83942561149598 149.8204794445038 169.83942561149598 139.8204794445038z"
                                      pathFrom="M 169.83942561149598 139.8204794445038L 169.83942561149598 139.8204794445038L 189.40665097236635 139.8204794445038L 189.40665097236635 139.8204794445038L 189.40665097236635 139.8204794445038L 189.40665097236635 139.8204794445038L 189.40665097236635 139.8204794445038L 169.83942561149598 139.8204794445038"
                                      cy="74.9102397222519"
                                      cx="239.88864092826844"
                                      j="2"
                                      val="15"
                                      barHeight="74.9102397222519"
                                      barWidth="25.56722536087036"
                                    ></path>
                                    <path
                                      id="SvgjsPath1078"
                                      d="M242.88864092826844 139.8204794445038L242.88864092826844 14.994015981483471C242.88864092826844 8.327349314816814 246.22197426160176 4.9940159814834715 252.88864092826844 4.9940159814834715L252.45586628913878 4.9940159814834715C259.12253295580547 4.9940159814834715 262.4558662891388 8.327349314816814 262.4558662891388 14.994015981483471L262.4558662891388 14.994015981483471L262.4558662891388 139.8204794445038C262.4558662891388 146.48714611117046 259.12253295580547 149.8204794445038 252.45586628913878 149.8204794445038C252.45586628913878 149.8204794445038 252.88864092826844 149.8204794445038 252.88864092826844 149.8204794445038C246.22197426160176 149.8204794445038 242.88864092826844 146.48714611117046 242.88864092826844 139.8204794445038C242.88864092826844 139.8204794445038 242.88864092826844 139.8204794445038 242.88864092826844 139.8204794445038 "
                                      fill="rgba(105,108,255,1)"
                                      fill-opacity="1"
                                      stroke="#ffffff"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="6"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="0"
                                      clip-path="url(#gridRectMaskxqy40aknh)"
                                      pathTo="M 242.88864092826844 139.8204794445038L 242.88864092826844 14.994015981483471Q 242.88864092826844 4.9940159814834715 252.88864092826844 4.9940159814834715L 252.45586628913878 4.9940159814834715Q 262.4558662891388 4.9940159814834715 262.4558662891388 14.994015981483471L 262.4558662891388 14.994015981483471L 262.4558662891388 139.8204794445038Q 262.4558662891388 149.8204794445038 252.45586628913878 149.8204794445038L 252.88864092826844 149.8204794445038Q 242.88864092826844 149.8204794445038 242.88864092826844 139.8204794445038z"
                                      pathFrom="M 242.88864092826844 139.8204794445038L 242.88864092826844 139.8204794445038L 262.4558662891388 139.8204794445038L 262.4558662891388 139.8204794445038L 262.4558662891388 139.8204794445038L 262.4558662891388 139.8204794445038L 262.4558662891388 139.8204794445038L 242.88864092826844 139.8204794445038"
                                      cy="4.9940159814834715"
                                      cx="312.9378562450409"
                                      j="3"
                                      val="29"
                                      barHeight="144.82646346302033"
                                      barWidth="25.56722536087036"
                                    ></path>
                                    <path
                                      id="SvgjsPath1079"
                                      d="M315.9378562450409 139.8204794445038L315.9378562450409 69.92819177780152C315.9378562450409 63.26152511113486 319.2711895783742 59.928191777801516 325.9378562450409 59.928191777801516L325.50508160591124 59.928191777801516C332.17174827257793 59.928191777801516 335.50508160591124 63.26152511113486 335.50508160591124 69.92819177780152L335.50508160591124 69.92819177780152L335.50508160591124 139.8204794445038C335.50508160591124 146.48714611117046 332.17174827257793 149.8204794445038 325.50508160591124 149.8204794445038C325.50508160591124 149.8204794445038 325.9378562450409 149.8204794445038 325.9378562450409 149.8204794445038C319.2711895783742 149.8204794445038 315.9378562450409 146.48714611117046 315.9378562450409 139.8204794445038C315.9378562450409 139.8204794445038 315.9378562450409 139.8204794445038 315.9378562450409 139.8204794445038 "
                                      fill="rgba(105,108,255,1)"
                                      fill-opacity="1"
                                      stroke="#ffffff"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="6"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="0"
                                      clip-path="url(#gridRectMaskxqy40aknh)"
                                      pathTo="M 315.9378562450409 139.8204794445038L 315.9378562450409 69.92819177780152Q 315.9378562450409 59.928191777801516 325.9378562450409 59.928191777801516L 325.50508160591124 59.928191777801516Q 335.50508160591124 59.928191777801516 335.50508160591124 69.92819177780152L 335.50508160591124 69.92819177780152L 335.50508160591124 139.8204794445038Q 335.50508160591124 149.8204794445038 325.50508160591124 149.8204794445038L 325.9378562450409 149.8204794445038Q 315.9378562450409 149.8204794445038 315.9378562450409 139.8204794445038z"
                                      pathFrom="M 315.9378562450409 139.8204794445038L 315.9378562450409 139.8204794445038L 335.50508160591124 139.8204794445038L 335.50508160591124 139.8204794445038L 335.50508160591124 139.8204794445038L 335.50508160591124 139.8204794445038L 335.50508160591124 139.8204794445038L 315.9378562450409 139.8204794445038"
                                      cy="59.928191777801516"
                                      cx="385.98707156181337"
                                      j="4"
                                      val="18"
                                      barHeight="89.89228766670229"
                                      barWidth="25.56722536087036"
                                    ></path>
                                    <path
                                      id="SvgjsPath1080"
                                      d="M388.98707156181337 139.8204794445038L388.98707156181337 99.89228766670229C388.9870715618133 93.22562100003562 392.3204048951467 89.89228766670229 398.98707156181337 89.89228766670229L398.5542969226837 89.89228766670229C405.2209635893504 89.89228766670229 408.5542969226837 93.22562100003562 408.5542969226837 99.89228766670229L408.5542969226837 99.89228766670229L408.5542969226837 139.8204794445038C408.5542969226837 146.48714611117046 405.2209635893504 149.8204794445038 398.5542969226837 149.8204794445038C398.5542969226837 149.8204794445038 398.98707156181337 149.8204794445038 398.98707156181337 149.8204794445038C392.3204048951467 149.8204794445038 388.9870715618133 146.48714611117046 388.98707156181337 139.8204794445038C388.98707156181337 139.8204794445038 388.98707156181337 139.8204794445038 388.98707156181337 139.8204794445038 "
                                      fill="rgba(105,108,255,1)"
                                      fill-opacity="1"
                                      stroke="#ffffff"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="6"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="0"
                                      clip-path="url(#gridRectMaskxqy40aknh)"
                                      pathTo="M 388.98707156181337 139.8204794445038L 388.98707156181337 99.89228766670229Q 388.98707156181337 89.89228766670229 398.98707156181337 89.89228766670229L 398.5542969226837 89.89228766670229Q 408.5542969226837 89.89228766670229 408.5542969226837 99.89228766670229L 408.5542969226837 99.89228766670229L 408.5542969226837 139.8204794445038Q 408.5542969226837 149.8204794445038 398.5542969226837 149.8204794445038L 398.98707156181337 149.8204794445038Q 388.98707156181337 149.8204794445038 388.98707156181337 139.8204794445038z"
                                      pathFrom="M 388.98707156181337 139.8204794445038L 388.98707156181337 139.8204794445038L 408.5542969226837 139.8204794445038L 408.5542969226837 139.8204794445038L 408.5542969226837 139.8204794445038L 408.5542969226837 139.8204794445038L 408.5542969226837 139.8204794445038L 388.98707156181337 139.8204794445038"
                                      cy="89.89228766670229"
                                      cx="459.0362868785858"
                                      j="5"
                                      val="12"
                                      barHeight="59.92819177780152"
                                      barWidth="25.56722536087036"
                                    ></path>
                                    <path
                                      id="SvgjsPath1081"
                                      d="M462.0362868785858 139.8204794445038L462.0362868785858 114.87433561115266C462.0362868785858 108.20766894448599 465.36962021191914 104.87433561115267 472.0362868785858 104.87433561115266L471.60351223945617 104.87433561115266C478.27017890612285 104.87433561115267 481.6035122394562 108.20766894448599 481.60351223945617 114.87433561115266L481.60351223945617 114.87433561115266L481.60351223945617 139.8204794445038C481.6035122394562 146.48714611117046 478.27017890612285 149.8204794445038 471.60351223945617 149.8204794445038C471.60351223945617 149.8204794445038 472.0362868785858 149.8204794445038 472.0362868785858 149.8204794445038C465.36962021191914 149.8204794445038 462.0362868785858 146.48714611117046 462.0362868785858 139.8204794445038C462.0362868785858 139.8204794445038 462.0362868785858 139.8204794445038 462.0362868785858 139.8204794445038 "
                                      fill="rgba(105,108,255,1)"
                                      fill-opacity="1"
                                      stroke="#ffffff"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="6"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="0"
                                      clip-path="url(#gridRectMaskxqy40aknh)"
                                      pathTo="M 462.0362868785858 139.8204794445038L 462.0362868785858 114.87433561115266Q 462.0362868785858 104.87433561115266 472.0362868785858 104.87433561115266L 471.60351223945617 104.87433561115266Q 481.60351223945617 104.87433561115266 481.60351223945617 114.87433561115266L 481.60351223945617 114.87433561115266L 481.60351223945617 139.8204794445038Q 481.60351223945617 149.8204794445038 471.60351223945617 149.8204794445038L 472.0362868785858 149.8204794445038Q 462.0362868785858 149.8204794445038 462.0362868785858 139.8204794445038z"
                                      pathFrom="M 462.0362868785858 139.8204794445038L 462.0362868785858 139.8204794445038L 481.60351223945617 139.8204794445038L 481.60351223945617 139.8204794445038L 481.60351223945617 139.8204794445038L 481.60351223945617 139.8204794445038L 481.60351223945617 139.8204794445038L 462.0362868785858 139.8204794445038"
                                      cy="104.87433561115266"
                                      cx="532.0855021953582"
                                      j="6"
                                      val="9"
                                      barHeight="44.946143833351144"
                                      barWidth="25.56722536087036"
                                    ></path>
                                  </g>
                                  <g
                                    id="SvgjsG1082"
                                    class="apexcharts-series"
                                    seriesName="2022"
                                    rel="2"
                                    data:realIndex="1"
                                  >
                                    <path
                                      id="SvgjsPath1084"
                                      d="M23.74099497795105 169.8204794445038L23.74099497795105 214.7426872037888C23.74099497795105 221.40935387045545 27.074328311284383 224.7426872037888 33.74099497795105 224.7426872037888L33.308220338821414 224.7426872037888C39.97488700548808 224.7426872037888 43.308220338821414 221.40935387045545 43.308220338821414 214.7426872037888L43.308220338821414 214.7426872037888L43.308220338821414 169.8204794445038C43.308220338821414 163.15381277783715 39.97488700548808 159.8204794445038 33.308220338821414 159.8204794445038C33.308220338821414 159.8204794445038 33.74099497795105 159.8204794445038 33.74099497795105 159.8204794445038C27.074328311284383 159.8204794445038 23.74099497795105 163.15381277783715 23.74099497795105 169.8204794445038C23.74099497795105 169.8204794445038 23.74099497795105 169.8204794445038 23.74099497795105 169.8204794445038 "
                                      fill="rgba(3,195,236,1)"
                                      fill-opacity="1"
                                      stroke="#ffffff"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="6"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="1"
                                      clip-path="url(#gridRectMaskxqy40aknh)"
                                      pathTo="M 23.74099497795105 169.8204794445038L 23.74099497795105 214.7426872037888Q 23.74099497795105 224.7426872037888 33.74099497795105 224.7426872037888L 33.308220338821414 224.7426872037888Q 43.308220338821414 224.7426872037888 43.308220338821414 214.7426872037888L 43.308220338821414 214.7426872037888L 43.308220338821414 169.8204794445038Q 43.308220338821414 159.8204794445038 33.308220338821414 159.8204794445038L 33.74099497795105 159.8204794445038Q 23.74099497795105 159.8204794445038 23.74099497795105 169.8204794445038z"
                                      pathFrom="M 23.74099497795105 169.8204794445038L 23.74099497795105 169.8204794445038L 43.308220338821414 169.8204794445038L 43.308220338821414 169.8204794445038L 43.308220338821414 169.8204794445038L 43.308220338821414 169.8204794445038L 43.308220338821414 169.8204794445038L 23.74099497795105 169.8204794445038"
                                      cy="204.7426872037888"
                                      cx="93.79021029472351"
                                      j="0"
                                      val="-13"
                                      barHeight="-64.92220775928499"
                                      barWidth="25.56722536087036"
                                    ></path>
                                    <path
                                      id="SvgjsPath1085"
                                      d="M96.79021029472351 169.8204794445038L96.79021029472351 239.7127671112061C96.79021029472351 246.37943377787275 100.12354362805684 249.71276711120612 106.79021029472351 249.7127671112061L106.35743565559386 249.7127671112061C113.02410232226052 249.71276711120612 116.35743565559386 246.37943377787275 116.35743565559386 239.7127671112061L116.35743565559386 239.7127671112061L116.35743565559386 169.8204794445038C116.35743565559386 163.15381277783715 113.02410232226052 159.8204794445038 106.35743565559386 159.8204794445038C106.35743565559386 159.8204794445038 106.79021029472351 159.8204794445038 106.79021029472351 159.8204794445038C100.12354362805684 159.8204794445038 96.79021029472351 163.15381277783715 96.79021029472351 169.8204794445038C96.79021029472351 169.8204794445038 96.79021029472351 169.8204794445038 96.79021029472351 169.8204794445038 "
                                      fill="rgba(3,195,236,1)"
                                      fill-opacity="1"
                                      stroke="#ffffff"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="6"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="1"
                                      clip-path="url(#gridRectMaskxqy40aknh)"
                                      pathTo="M 96.79021029472351 169.8204794445038L 96.79021029472351 239.7127671112061Q 96.79021029472351 249.7127671112061 106.79021029472351 249.7127671112061L 106.35743565559386 249.7127671112061Q 116.35743565559386 249.7127671112061 116.35743565559386 239.7127671112061L 116.35743565559386 239.7127671112061L 116.35743565559386 169.8204794445038Q 116.35743565559386 159.8204794445038 106.35743565559386 159.8204794445038L 106.79021029472351 159.8204794445038Q 96.79021029472351 159.8204794445038 96.79021029472351 169.8204794445038z"
                                      pathFrom="M 96.79021029472351 169.8204794445038L 96.79021029472351 169.8204794445038L 116.35743565559386 169.8204794445038L 116.35743565559386 169.8204794445038L 116.35743565559386 169.8204794445038L 116.35743565559386 169.8204794445038L 116.35743565559386 169.8204794445038L 96.79021029472351 169.8204794445038"
                                      cy="229.7127671112061"
                                      cx="166.83942561149598"
                                      j="1"
                                      val="-18"
                                      barHeight="-89.89228766670229"
                                      barWidth="25.56722536087036"
                                    ></path>
                                    <path
                                      id="SvgjsPath1086"
                                      d="M169.83942561149598 169.8204794445038L169.83942561149598 194.76662327785493C169.83942561149598 201.43328994452162 173.1727589448293 204.76662327785493 179.83942561149598 204.76662327785493L179.40665097236635 204.76662327785493C186.073317639033 204.76662327785493 189.40665097236635 201.43328994452162 189.40665097236635 194.76662327785493L189.40665097236635 194.76662327785493L189.40665097236635 169.8204794445038C189.40665097236635 163.15381277783715 186.073317639033 159.8204794445038 179.40665097236635 159.8204794445038C179.40665097236635 159.8204794445038 179.83942561149598 159.8204794445038 179.83942561149598 159.8204794445038C173.1727589448293 159.8204794445038 169.83942561149598 163.15381277783715 169.83942561149598 169.8204794445038C169.83942561149598 169.8204794445038 169.83942561149598 169.8204794445038 169.83942561149598 169.8204794445038 "
                                      fill="rgba(3,195,236,1)"
                                      fill-opacity="1"
                                      stroke="#ffffff"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="6"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="1"
                                      clip-path="url(#gridRectMaskxqy40aknh)"
                                      pathTo="M 169.83942561149598 169.8204794445038L 169.83942561149598 194.76662327785493Q 169.83942561149598 204.76662327785493 179.83942561149598 204.76662327785493L 179.40665097236635 204.76662327785493Q 189.40665097236635 204.76662327785493 189.40665097236635 194.76662327785493L 189.40665097236635 194.76662327785493L 189.40665097236635 169.8204794445038Q 189.40665097236635 159.8204794445038 179.40665097236635 159.8204794445038L 179.83942561149598 159.8204794445038Q 169.83942561149598 159.8204794445038 169.83942561149598 169.8204794445038z"
                                      pathFrom="M 169.83942561149598 169.8204794445038L 169.83942561149598 169.8204794445038L 189.40665097236635 169.8204794445038L 189.40665097236635 169.8204794445038L 189.40665097236635 169.8204794445038L 189.40665097236635 169.8204794445038L 189.40665097236635 169.8204794445038L 169.83942561149598 169.8204794445038"
                                      cy="184.76662327785493"
                                      cx="239.88864092826844"
                                      j="2"
                                      val="-9"
                                      barHeight="-44.946143833351144"
                                      barWidth="25.56722536087036"
                                    ></path>
                                    <path
                                      id="SvgjsPath1087"
                                      d="M242.88864092826844 169.8204794445038L242.88864092826844 219.73670318527223C242.88864092826844 226.4033698519389 246.22197426160176 229.73670318527223 252.88864092826844 229.73670318527223L252.45586628913878 229.73670318527223C259.12253295580547 229.73670318527223 262.4558662891388 226.4033698519389 262.4558662891388 219.73670318527223L262.4558662891388 219.73670318527223L262.4558662891388 169.8204794445038C262.4558662891388 163.15381277783715 259.12253295580547 159.8204794445038 252.45586628913878 159.8204794445038C252.45586628913878 159.8204794445038 252.88864092826844 159.8204794445038 252.88864092826844 159.8204794445038C246.22197426160176 159.8204794445038 242.88864092826844 163.15381277783715 242.88864092826844 169.8204794445038C242.88864092826844 169.8204794445038 242.88864092826844 169.8204794445038 242.88864092826844 169.8204794445038 "
                                      fill="rgba(3,195,236,1)"
                                      fill-opacity="1"
                                      stroke="#ffffff"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="6"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="1"
                                      clip-path="url(#gridRectMaskxqy40aknh)"
                                      pathTo="M 242.88864092826844 169.8204794445038L 242.88864092826844 219.73670318527223Q 242.88864092826844 229.73670318527223 252.88864092826844 229.73670318527223L 252.45586628913878 229.73670318527223Q 262.4558662891388 229.73670318527223 262.4558662891388 219.73670318527223L 262.4558662891388 219.73670318527223L 262.4558662891388 169.8204794445038Q 262.4558662891388 159.8204794445038 252.45586628913878 159.8204794445038L 252.88864092826844 159.8204794445038Q 242.88864092826844 159.8204794445038 242.88864092826844 169.8204794445038z"
                                      pathFrom="M 242.88864092826844 169.8204794445038L 242.88864092826844 169.8204794445038L 262.4558662891388 169.8204794445038L 262.4558662891388 169.8204794445038L 262.4558662891388 169.8204794445038L 262.4558662891388 169.8204794445038L 262.4558662891388 169.8204794445038L 242.88864092826844 169.8204794445038"
                                      cy="209.73670318527223"
                                      cx="312.9378562450409"
                                      j="3"
                                      val="-14"
                                      barHeight="-69.91622374076844"
                                      barWidth="25.56722536087036"
                                    ></path>
                                    <path
                                      id="SvgjsPath1088"
                                      d="M315.9378562450409 169.8204794445038L315.9378562450409 174.7905593519211C315.9378562450409 181.45722601858776 319.2711895783742 184.7905593519211 325.9378562450409 184.7905593519211L325.50508160591124 184.7905593519211C332.17174827257793 184.7905593519211 335.50508160591124 181.45722601858776 335.50508160591124 174.7905593519211L335.50508160591124 174.7905593519211L335.50508160591124 169.8204794445038C335.50508160591124 163.15381277783715 332.17174827257793 159.8204794445038 325.50508160591124 159.8204794445038C325.50508160591124 159.8204794445038 325.9378562450409 159.8204794445038 325.9378562450409 159.8204794445038C319.2711895783742 159.8204794445038 315.9378562450409 163.15381277783715 315.9378562450409 169.8204794445038C315.9378562450409 169.8204794445038 315.9378562450409 169.8204794445038 315.9378562450409 169.8204794445038 "
                                      fill="rgba(3,195,236,1)"
                                      fill-opacity="1"
                                      stroke="#ffffff"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="6"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="1"
                                      clip-path="url(#gridRectMaskxqy40aknh)"
                                      pathTo="M 315.9378562450409 169.8204794445038L 315.9378562450409 174.7905593519211Q 315.9378562450409 184.7905593519211 325.9378562450409 184.7905593519211L 325.50508160591124 184.7905593519211Q 335.50508160591124 184.7905593519211 335.50508160591124 174.7905593519211L 335.50508160591124 174.7905593519211L 335.50508160591124 169.8204794445038Q 335.50508160591124 159.8204794445038 325.50508160591124 159.8204794445038L 325.9378562450409 159.8204794445038Q 315.9378562450409 159.8204794445038 315.9378562450409 169.8204794445038z"
                                      pathFrom="M 315.9378562450409 169.8204794445038L 315.9378562450409 169.8204794445038L 335.50508160591124 169.8204794445038L 335.50508160591124 169.8204794445038L 335.50508160591124 169.8204794445038L 335.50508160591124 169.8204794445038L 335.50508160591124 169.8204794445038L 315.9378562450409 169.8204794445038"
                                      cy="164.7905593519211"
                                      cx="385.98707156181337"
                                      j="4"
                                      val="-5"
                                      barHeight="-24.9700799074173"
                                      barWidth="25.56722536087036"
                                    ></path>
                                    <path
                                      id="SvgjsPath1089"
                                      d="M388.98707156181337 169.8204794445038L388.98707156181337 234.71875112972262C388.9870715618133 241.38541779638928 392.3204048951467 244.71875112972265 398.98707156181337 244.71875112972262L398.5542969226837 244.71875112972262C405.2209635893504 244.71875112972265 408.5542969226837 241.38541779638928 408.5542969226837 234.71875112972262L408.5542969226837 234.71875112972262L408.5542969226837 169.8204794445038C408.5542969226837 163.15381277783715 405.2209635893504 159.8204794445038 398.5542969226837 159.8204794445038C398.5542969226837 159.8204794445038 398.98707156181337 159.8204794445038 398.98707156181337 159.8204794445038C392.3204048951467 159.8204794445038 388.9870715618133 163.15381277783715 388.98707156181337 169.8204794445038C388.98707156181337 169.8204794445038 388.98707156181337 169.8204794445038 388.98707156181337 169.8204794445038 "
                                      fill="rgba(3,195,236,1)"
                                      fill-opacity="1"
                                      stroke="#ffffff"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="6"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="1"
                                      clip-path="url(#gridRectMaskxqy40aknh)"
                                      pathTo="M 388.98707156181337 169.8204794445038L 388.98707156181337 234.71875112972262Q 388.98707156181337 244.71875112972262 398.98707156181337 244.71875112972262L 398.5542969226837 244.71875112972262Q 408.5542969226837 244.71875112972262 408.5542969226837 234.71875112972262L 408.5542969226837 234.71875112972262L 408.5542969226837 169.8204794445038Q 408.5542969226837 159.8204794445038 398.5542969226837 159.8204794445038L 398.98707156181337 159.8204794445038Q 388.98707156181337 159.8204794445038 388.98707156181337 169.8204794445038z"
                                      pathFrom="M 388.98707156181337 169.8204794445038L 388.98707156181337 169.8204794445038L 408.5542969226837 169.8204794445038L 408.5542969226837 169.8204794445038L 408.5542969226837 169.8204794445038L 408.5542969226837 169.8204794445038L 408.5542969226837 169.8204794445038L 388.98707156181337 169.8204794445038"
                                      cy="224.71875112972262"
                                      cx="459.0362868785858"
                                      j="5"
                                      val="-17"
                                      barHeight="-84.89827168521882"
                                      barWidth="25.56722536087036"
                                    ></path>
                                    <path
                                      id="SvgjsPath1090"
                                      d="M462.0362868785858 169.8204794445038L462.0362868785858 224.7307191667557C462.0362868785858 231.39738583342236 465.36962021191914 234.7307191667557 472.0362868785858 234.7307191667557L471.60351223945617 234.7307191667557C478.27017890612285 234.7307191667557 481.6035122394562 231.39738583342236 481.60351223945617 224.7307191667557L481.60351223945617 224.7307191667557L481.60351223945617 169.8204794445038C481.6035122394562 163.15381277783715 478.27017890612285 159.8204794445038 471.60351223945617 159.8204794445038C471.60351223945617 159.8204794445038 472.0362868785858 159.8204794445038 472.0362868785858 159.8204794445038C465.36962021191914 159.8204794445038 462.0362868785858 163.15381277783715 462.0362868785858 169.8204794445038C462.0362868785858 169.8204794445038 462.0362868785858 169.8204794445038 462.0362868785858 169.8204794445038 "
                                      fill="rgba(3,195,236,1)"
                                      fill-opacity="1"
                                      stroke="#ffffff"
                                      stroke-opacity="1"
                                      stroke-linecap="round"
                                      stroke-width="6"
                                      stroke-dasharray="0"
                                      class="apexcharts-bar-area"
                                      index="1"
                                      clip-path="url(#gridRectMaskxqy40aknh)"
                                      pathTo="M 462.0362868785858 169.8204794445038L 462.0362868785858 224.7307191667557Q 462.0362868785858 234.7307191667557 472.0362868785858 234.7307191667557L 471.60351223945617 234.7307191667557Q 481.60351223945617 234.7307191667557 481.60351223945617 224.7307191667557L 481.60351223945617 224.7307191667557L 481.60351223945617 169.8204794445038Q 481.60351223945617 159.8204794445038 471.60351223945617 159.8204794445038L 472.0362868785858 159.8204794445038Q 462.0362868785858 159.8204794445038 462.0362868785858 169.8204794445038z"
                                      pathFrom="M 462.0362868785858 169.8204794445038L 462.0362868785858 169.8204794445038L 481.60351223945617 169.8204794445038L 481.60351223945617 169.8204794445038L 481.60351223945617 169.8204794445038L 481.60351223945617 169.8204794445038L 481.60351223945617 169.8204794445038L 462.0362868785858 169.8204794445038"
                                      cy="214.7307191667557"
                                      cx="532.0855021953582"
                                      j="6"
                                      val="-15"
                                      barHeight="-74.9102397222519"
                                      barWidth="25.56722536087036"
                                    ></path>
                                  </g>
                                  <g
                                    id="SvgjsG1074"
                                    class="apexcharts-datalabels"
                                    data:realIndex="0"
                                  ></g>
                                  <g
                                    id="SvgjsG1083"
                                    class="apexcharts-datalabels"
                                    data:realIndex="1"
                                  ></g>
                                </g>
                                <line
                                  id="SvgjsLine1139"
                                  x1="0"
                                  y1="0"
                                  x2="511.3445072174072"
                                  y2="0"
                                  stroke="#b6b6b6"
                                  stroke-dasharray="0"
                                  stroke-width="1"
                                  stroke-linecap="butt"
                                  class="apexcharts-ycrosshairs"
                                ></line>
                                <line
                                  id="SvgjsLine1140"
                                  x1="0"
                                  y1="0"
                                  x2="511.3445072174072"
                                  y2="0"
                                  stroke-dasharray="0"
                                  stroke-width="0"
                                  stroke-linecap="butt"
                                  class="apexcharts-ycrosshairs-hidden"
                                ></line>
                                <g
                                  id="SvgjsG1141"
                                  class="apexcharts-yaxis-annotations"
                                ></g>
                                <g
                                  id="SvgjsG1142"
                                  class="apexcharts-xaxis-annotations"
                                ></g>
                                <g
                                  id="SvgjsG1143"
                                  class="apexcharts-point-annotations"
                                ></g>
                              </g>
                              <g
                                id="SvgjsG1114"
                                class="apexcharts-yaxis"
                                rel="0"
                                transform="translate(17.655492782592773, 0)"
                              >
                                <g
                                  id="SvgjsG1115"
                                  class="apexcharts-yaxis-texts-g"
                                >
                                  <text
                                    id="SvgjsText1116"
                                    font-family="Public Sans"
                                    x="20"
                                    y="53.5"
                                    text-anchor="end"
                                    dominant-baseline="auto"
                                    font-size="13px"
                                    font-weight="400"
                                    fill="#a7acb2"
                                    class="apexcharts-text apexcharts-yaxis-label"
                                    style="font-family: 'Public Sans'"
                                  >
                                    <tspan id="SvgjsTspan1117">30</tspan>
                                    <title>30</title>
                                  </text>
                                  <text
                                    id="SvgjsText1118"
                                    font-family="Public Sans"
                                    x="20"
                                    y="103.4401598148346"
                                    text-anchor="end"
                                    dominant-baseline="auto"
                                    font-size="13px"
                                    font-weight="400"
                                    fill="#a7acb2"
                                    class="apexcharts-text apexcharts-yaxis-label"
                                    style="font-family: 'Public Sans'"
                                  >
                                    <tspan id="SvgjsTspan1119">20</tspan>
                                    <title>20</title>
                                  </text>
                                  <text
                                    id="SvgjsText1120"
                                    font-family="Public Sans"
                                    x="20"
                                    y="153.3803196296692"
                                    text-anchor="end"
                                    dominant-baseline="auto"
                                    font-size="13px"
                                    font-weight="400"
                                    fill="#a7acb2"
                                    class="apexcharts-text apexcharts-yaxis-label"
                                    style="font-family: 'Public Sans'"
                                  >
                                    <tspan id="SvgjsTspan1121">10</tspan>
                                    <title>10</title>
                                  </text>
                                  <text
                                    id="SvgjsText1122"
                                    font-family="Public Sans"
                                    x="20"
                                    y="203.3204794445038"
                                    text-anchor="end"
                                    dominant-baseline="auto"
                                    font-size="13px"
                                    font-weight="400"
                                    fill="#a7acb2"
                                    class="apexcharts-text apexcharts-yaxis-label"
                                    style="font-family: 'Public Sans'"
                                  >
                                    <tspan id="SvgjsTspan1123">0</tspan>
                                    <title>0</title>
                                  </text>
                                  <text
                                    id="SvgjsText1124"
                                    font-family="Public Sans"
                                    x="20"
                                    y="253.2606392593384"
                                    text-anchor="end"
                                    dominant-baseline="auto"
                                    font-size="13px"
                                    font-weight="400"
                                    fill="#a7acb2"
                                    class="apexcharts-text apexcharts-yaxis-label"
                                    style="font-family: 'Public Sans'"
                                  >
                                    <tspan id="SvgjsTspan1125">-10</tspan>
                                    <title>-10</title>
                                  </text>
                                  <text
                                    id="SvgjsText1126"
                                    font-family="Public Sans"
                                    x="20"
                                    y="303.200799074173"
                                    text-anchor="end"
                                    dominant-baseline="auto"
                                    font-size="13px"
                                    font-weight="400"
                                    fill="#a7acb2"
                                    class="apexcharts-text apexcharts-yaxis-label"
                                    style="font-family: 'Public Sans'"
                                  >
                                    <tspan id="SvgjsTspan1127">-20</tspan>
                                    <title>-20</title>
                                  </text>
                                </g>
                              </g>
                              <g
                                id="SvgjsG1062"
                                class="apexcharts-annotations"
                              ></g>
                            </svg>
                            <div
                              class="apexcharts-tooltip apexcharts-theme-light"
                            >
                              <div
                                class="apexcharts-tooltip-title"
                                style="
                                  font-family: Helvetica, Arial, sans-serif;
                                  font-size: 12px;
                                "
                              ></div>
                              <div
                                class="apexcharts-tooltip-series-group"
                                style="order: 1"
                              >
                                <span
                                  class="apexcharts-tooltip-marker"
                                  style="background-color: rgb(105, 108, 255)"
                                ></span>
                                <div
                                  class="apexcharts-tooltip-text"
                                  style="
                                    font-family: Helvetica, Arial, sans-serif;
                                    font-size: 12px;
                                  "
                                >
                                  <div class="apexcharts-tooltip-y-group">
                                    <span
                                      class="apexcharts-tooltip-text-y-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-y-value"
                                    ></span>
                                  </div>
                                  <div class="apexcharts-tooltip-goals-group">
                                    <span
                                      class="apexcharts-tooltip-text-goals-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-goals-value"
                                    ></span>
                                  </div>
                                  <div class="apexcharts-tooltip-z-group">
                                    <span
                                      class="apexcharts-tooltip-text-z-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-z-value"
                                    ></span>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="apexcharts-tooltip-series-group"
                                style="order: 2"
                              >
                                <span
                                  class="apexcharts-tooltip-marker"
                                  style="background-color: rgb(3, 195, 236)"
                                ></span>
                                <div
                                  class="apexcharts-tooltip-text"
                                  style="
                                    font-family: Helvetica, Arial, sans-serif;
                                    font-size: 12px;
                                  "
                                >
                                  <div class="apexcharts-tooltip-y-group">
                                    <span
                                      class="apexcharts-tooltip-text-y-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-y-value"
                                    ></span>
                                  </div>
                                  <div class="apexcharts-tooltip-goals-group">
                                    <span
                                      class="apexcharts-tooltip-text-goals-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-goals-value"
                                    ></span>
                                  </div>
                                  <div class="apexcharts-tooltip-z-group">
                                    <span
                                      class="apexcharts-tooltip-text-z-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-z-value"
                                    ></span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div
                              class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"
                            >
                              <div class="apexcharts-yaxistooltip-text"></div>
                            </div>
                          </div>
                        </div>
                        <div class="resize-triggers">
                          <div class="expand-trigger">
                            <div style="width: 612px; height: 425px"></div>
                          </div>
                          <div class="contract-trigger"></div>
                        </div>
                      </div>
                      <div class="col-lg-4 d-flex align-items-center">
                        <div
                          class="card-body px-xl-9"
                          style="position: relative"
                        >
                          <div class="text-center mb-6">
                            <div class="btn-group">
                              <button
                                type="button"
                                class="btn btn-label-primary"
                              >
                                <script>
                                  document.write(new Date().getFullYear() - 1);
                                </script>
                                2023
                              </button>
                              <button
                                type="button"
                                class="btn btn-label-primary dropdown-toggle dropdown-toggle-split"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                              >
                                <span class="visually-hidden"
                                  >Toggle Dropdown</span
                                >
                              </button>
                              <ul class="dropdown-menu">
                                <li>
                                  <a
                                    class="dropdown-item"
                                    href="javascript:void(0);"
                                    >2021</a
                                  >
                                </li>
                                <li>
                                  <a
                                    class="dropdown-item"
                                    href="javascript:void(0);"
                                    >2020</a
                                  >
                                </li>
                                <li>
                                  <a
                                    class="dropdown-item"
                                    href="javascript:void(0);"
                                    >2019</a
                                  >
                                </li>
                              </ul>
                            </div>
                          </div>

                          <div id="growthChart" style="min-height: 154.875px">
                            <div
                              id="apexchartsv688t4k2"
                              class="apexcharts-canvas apexchartsv688t4k2 apexcharts-theme-light"
                              style="width: 234px; height: 154.875px"
                            >
                              <svg
                                id="SvgjsSvg1144"
                                width="234"
                                height="154.875"
                                xmlns="http://www.w3.org/2000/svg"
                                version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg"
                                xmlns:data="ApexChartsNS"
                                transform="translate(0, 0)"
                                style="background: transparent"
                              >
                                <g
                                  id="SvgjsG1146"
                                  class="apexcharts-inner apexcharts-graphical"
                                  transform="translate(10, -25)"
                                >
                                  <defs id="SvgjsDefs1145">
                                    <clipPath id="gridRectMaskv688t4k2">
                                      <rect
                                        id="SvgjsRect1148"
                                        width="222"
                                        height="285"
                                        x="-3"
                                        y="-1"
                                        rx="0"
                                        ry="0"
                                        opacity="1"
                                        stroke-width="0"
                                        stroke="none"
                                        stroke-dasharray="0"
                                        fill="#fff"
                                      ></rect>
                                    </clipPath>
                                    <clipPath
                                      id="forecastMaskv688t4k2"
                                    ></clipPath>
                                    <clipPath
                                      id="nonForecastMaskv688t4k2"
                                    ></clipPath>
                                    <clipPath id="gridRectMarkerMaskv688t4k2">
                                      <rect
                                        id="SvgjsRect1149"
                                        width="220"
                                        height="287"
                                        x="-2"
                                        y="-2"
                                        rx="0"
                                        ry="0"
                                        opacity="1"
                                        stroke-width="0"
                                        stroke="none"
                                        stroke-dasharray="0"
                                        fill="#fff"
                                      ></rect>
                                    </clipPath>
                                    <linearGradient
                                      id="SvgjsLinearGradient1154"
                                      x1="1"
                                      y1="0"
                                      x2="0"
                                      y2="1"
                                    >
                                      <stop
                                        id="SvgjsStop1155"
                                        stop-opacity="1"
                                        stop-color="rgba(105,108,255,1)"
                                        offset="0.3"
                                      ></stop>
                                      <stop
                                        id="SvgjsStop1156"
                                        stop-opacity="0.6"
                                        stop-color="rgba(255,255,255,0.6)"
                                        offset="0.7"
                                      ></stop>
                                      <stop
                                        id="SvgjsStop1157"
                                        stop-opacity="0.6"
                                        stop-color="rgba(255,255,255,0.6)"
                                        offset="1"
                                      ></stop>
                                    </linearGradient>
                                    <linearGradient
                                      id="SvgjsLinearGradient1165"
                                      x1="1"
                                      y1="0"
                                      x2="0"
                                      y2="1"
                                    >
                                      <stop
                                        id="SvgjsStop1166"
                                        stop-opacity="1"
                                        stop-color="rgba(105,108,255,1)"
                                        offset="0.3"
                                      ></stop>
                                      <stop
                                        id="SvgjsStop1167"
                                        stop-opacity="0.6"
                                        stop-color="rgba(105,108,255,0.6)"
                                        offset="0.7"
                                      ></stop>
                                      <stop
                                        id="SvgjsStop1168"
                                        stop-opacity="0.6"
                                        stop-color="rgba(105,108,255,0.6)"
                                        offset="1"
                                      ></stop>
                                    </linearGradient>
                                  </defs>
                                  <g
                                    id="SvgjsG1150"
                                    class="apexcharts-radialbar"
                                  >
                                    <g id="SvgjsG1151">
                                      <g
                                        id="SvgjsG1152"
                                        class="apexcharts-tracks"
                                      >
                                        <g
                                          id="SvgjsG1153"
                                          class="apexcharts-radialbar-track apexcharts-track"
                                          rel="1"
                                        >
                                          <path
                                            id="apexcharts-radialbarTrack-0"
                                            d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656"
                                            fill="none"
                                            fill-opacity="1"
                                            stroke="rgba(255,255,255,0.85)"
                                            stroke-opacity="1"
                                            stroke-linecap="butt"
                                            stroke-width="17.357317073170734"
                                            stroke-dasharray="0"
                                            class="apexcharts-radialbar-area"
                                            data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 142.16493902439026 167.17541022773656"
                                          ></path>
                                        </g>
                                      </g>
                                      <g id="SvgjsG1159">
                                        <g
                                          id="SvgjsG1164"
                                          class="apexcharts-series apexcharts-radial-series"
                                          seriesName="Growth"
                                          rel="1"
                                          data:realIndex="0"
                                        >
                                          <path
                                            id="SvgjsPath1169"
                                            d="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481"
                                            fill="none"
                                            fill-opacity="0.85"
                                            stroke="url(#SvgjsLinearGradient1165)"
                                            stroke-opacity="1"
                                            stroke-linecap="butt"
                                            stroke-width="17.357317073170734"
                                            stroke-dasharray="5"
                                            class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                            data:angle="234"
                                            data:value="78"
                                            index="0"
                                            j="0"
                                            data:pathOrig="M 73.83506097560974 167.17541022773656 A 68.32987804878049 68.32987804878049 0 1 1 175.95555982735613 100.85758285229481"
                                          ></path>
                                        </g>
                                        <circle
                                          id="SvgjsCircle1160"
                                          r="54.65121951219512"
                                          cx="108"
                                          cy="108"
                                          class="apexcharts-radialbar-hollow"
                                          fill="transparent"
                                        ></circle>
                                        <g
                                          id="SvgjsG1161"
                                          class="apexcharts-datalabels-group"
                                          transform="translate(0, 0) scale(1)"
                                          style="opacity: 1"
                                        >
                                          <text
                                            id="SvgjsText1162"
                                            font-family="Public Sans"
                                            x="108"
                                            y="123"
                                            text-anchor="middle"
                                            dominant-baseline="auto"
                                            font-size="15px"
                                            font-weight="500"
                                            fill="#646e78"
                                            class="apexcharts-text apexcharts-datalabel-label"
                                            style="font-family: 'Public Sans'"
                                          >
                                            Growth
                                          </text>
                                          <text
                                            id="SvgjsText1163"
                                            font-family="Public Sans"
                                            x="108"
                                            y="99"
                                            text-anchor="middle"
                                            dominant-baseline="auto"
                                            font-size="22px"
                                            font-weight="500"
                                            fill="#384551"
                                            class="apexcharts-text apexcharts-datalabel-value"
                                            style="font-family: 'Public Sans'"
                                          >
                                            78%
                                          </text>
                                        </g>
                                      </g>
                                    </g>
                                  </g>
                                  <line
                                    id="SvgjsLine1170"
                                    x1="0"
                                    y1="0"
                                    x2="216"
                                    y2="0"
                                    stroke="#b6b6b6"
                                    stroke-dasharray="0"
                                    stroke-width="1"
                                    stroke-linecap="butt"
                                    class="apexcharts-ycrosshairs"
                                  ></line>
                                  <line
                                    id="SvgjsLine1171"
                                    x1="0"
                                    y1="0"
                                    x2="216"
                                    y2="0"
                                    stroke-dasharray="0"
                                    stroke-width="0"
                                    stroke-linecap="butt"
                                    class="apexcharts-ycrosshairs-hidden"
                                  ></line>
                                </g>
                                <g
                                  id="SvgjsG1147"
                                  class="apexcharts-annotations"
                                ></g>
                              </svg>
                              <div class="apexcharts-legend"></div>
                            </div>
                          </div>
                          <div class="text-center fw-medium my-6">
                            62% Company Growth
                          </div>

                          <div class="d-flex gap-3 justify-content-between">
                            <div class="d-flex">
                              <div class="avatar me-2">
                                <span
                                  class="avatar-initial rounded-2 bg-label-primary"
                                  ><i
                                    class="bx bx-dollar bx-lg text-primary"
                                  ></i
                                ></span>
                              </div>
                              <div class="d-flex flex-column">
                                <small>
                                  <script>
                                    document.write(
                                      new Date().getFullYear() - 1
                                    );
                                  </script>
                                  2023
                                </small>
                                <h6 class="mb-0">$32.5k</h6>
                              </div>
                            </div>
                            <div class="d-flex">
                              <div class="avatar me-2">
                                <span
                                  class="avatar-initial rounded-2 bg-label-info"
                                  ><i class="bx bx-wallet bx-lg text-info"></i
                                ></span>
                              </div>
                              <div class="d-flex flex-column">
                                <small>
                                  <script>
                                    document.write(
                                      new Date().getFullYear() - 2
                                    );
                                  </script>
                                  2022
                                </small>
                                <h6 class="mb-0">$41.2k</h6>
                              </div>
                            </div>
                          </div>
                          <div class="resize-triggers">
                            <div class="expand-trigger">
                              <div style="width: 307px; height: 374px"></div>
                            </div>
                            <div class="contract-trigger"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Total Revenue -->
                <div
                  class="col-12 col-md-8 col-lg-12 col-xxl-4 order-3 order-md-2"
                >
                  <div class="row">
                    <div class="col-6 mb-6">
                      <div class="card h-100">
                        <div class="card-body">
                          <div
                            class="card-title d-flex align-items-start justify-content-between mb-4"
                          >
                            <div class="avatar flex-shrink-0">
                              <img
                                src="../../assets/img/icons/unicons/paypal.png"
                                alt="paypal"
                                class="rounded"
                              />
                            </div>
                            <div class="dropdown">
                              <button
                                class="btn p-0"
                                type="button"
                                id="cardOpt4"
                                data-bs-toggle="dropdown"
                                aria-haspopup="true"
                                aria-expanded="false"
                              >
                                <i
                                  class="bx bx-dots-vertical-rounded text-muted"
                                ></i>
                              </button>
                              <div
                                class="dropdown-menu dropdown-menu-end"
                                aria-labelledby="cardOpt4"
                              >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >View More</a
                                >
                                <a
                                  class="dropdown-item"
                                  href="javascript:void(0);"
                                  >Delete</a
                                >
                              </div>
                            </div>
                          </div>
                          <p class="mb-1">Payments</p>
                          <h4 class="card-title mb-3">$2,456</h4>
                          <small class="text-danger fw-medium"
                            ><i class="bx bx-down-arrow-alt"></i> -14.82%</small
                          >
                        </div>
                      </div>
                    </div>
                    <div class="col-6 mb-6">
                      <div class="card h-100">
                        <div class="card-body pb-0" style="position: relative">
                          <span class="d-block fw-medium mb-1">Revenue</span>
                          <h4 class="card-title mb-0 mb-lg-4">425k</h4>
                          <div id="revenueChart" style="min-height: 110px">
                            <div
                              id="apexchartsgdj1rtj9"
                              class="apexcharts-canvas apexchartsgdj1rtj9 apexcharts-theme-light"
                              style="width: 162px; height: 95px"
                            >
                              <svg
                                id="SvgjsSvg1172"
                                width="162"
                                height="95"
                                xmlns="http://www.w3.org/2000/svg"
                                version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg"
                                xmlns:data="ApexChartsNS"
                                transform="translate(0, 0)"
                                style="background: transparent"
                              >
                                <g
                                  id="SvgjsG1174"
                                  class="apexcharts-inner apexcharts-graphical"
                                  transform="translate(0, 10)"
                                >
                                  <defs id="SvgjsDefs1173">
                                    <linearGradient
                                      id="SvgjsLinearGradient1177"
                                      x1="0"
                                      y1="0"
                                      x2="0"
                                      y2="1"
                                    >
                                      <stop
                                        id="SvgjsStop1178"
                                        stop-opacity="0.4"
                                        stop-color="rgba(216,227,240,0.4)"
                                        offset="0"
                                      ></stop>
                                      <stop
                                        id="SvgjsStop1179"
                                        stop-opacity="0.5"
                                        stop-color="rgba(190,209,230,0.5)"
                                        offset="1"
                                      ></stop>
                                      <stop
                                        id="SvgjsStop1180"
                                        stop-opacity="0.5"
                                        stop-color="rgba(190,209,230,0.5)"
                                        offset="1"
                                      ></stop>
                                    </linearGradient>
                                    <clipPath id="gridRectMaskgdj1rtj9">
                                      <rect
                                        id="SvgjsRect1182"
                                        width="166"
                                        height="58.70079907417298"
                                        x="-2"
                                        y="0"
                                        rx="0"
                                        ry="0"
                                        opacity="1"
                                        stroke-width="0"
                                        stroke="none"
                                        stroke-dasharray="0"
                                        fill="#fff"
                                      ></rect>
                                    </clipPath>
                                    <clipPath
                                      id="forecastMaskgdj1rtj9"
                                    ></clipPath>
                                    <clipPath
                                      id="nonForecastMaskgdj1rtj9"
                                    ></clipPath>
                                    <clipPath id="gridRectMarkerMaskgdj1rtj9">
                                      <rect
                                        id="SvgjsRect1183"
                                        width="166"
                                        height="62.70079907417298"
                                        x="-2"
                                        y="-2"
                                        rx="0"
                                        ry="0"
                                        opacity="1"
                                        stroke-width="0"
                                        stroke="none"
                                        stroke-dasharray="0"
                                        fill="#fff"
                                      ></rect>
                                    </clipPath>
                                  </defs>
                                  <rect
                                    id="SvgjsRect1181"
                                    width="17.357142857142858"
                                    height="58.70079907417298"
                                    x="0"
                                    y="0"
                                    rx="0"
                                    ry="0"
                                    opacity="1"
                                    stroke-width="0"
                                    stroke-dasharray="3"
                                    fill="url(#SvgjsLinearGradient1177)"
                                    class="apexcharts-xcrosshairs"
                                    y2="58.70079907417298"
                                    filter="none"
                                    fill-opacity="0.9"
                                  ></rect>
                                  <g
                                    id="SvgjsG1202"
                                    class="apexcharts-xaxis"
                                    transform="translate(0, 0)"
                                  >
                                    <g
                                      id="SvgjsG1203"
                                      class="apexcharts-xaxis-texts-g"
                                      transform="translate(0, -4)"
                                    >
                                      <text
                                        id="SvgjsText1205"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="11.571428571428571"
                                        y="87.70079907417298"
                                        text-anchor="middle"
                                        dominant-baseline="auto"
                                        font-size="13px"
                                        font-weight="400"
                                        fill="#a7acb2"
                                        class="apexcharts-text apexcharts-xaxis-label"
                                        style="
                                          font-family: Helvetica, Arial,
                                            sans-serif;
                                        "
                                      >
                                        <tspan id="SvgjsTspan1206">M</tspan>
                                        <title>M</title>
                                      </text>
                                      <text
                                        id="SvgjsText1208"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="34.714285714285715"
                                        y="87.70079907417298"
                                        text-anchor="middle"
                                        dominant-baseline="auto"
                                        font-size="13px"
                                        font-weight="400"
                                        fill="#a7acb2"
                                        class="apexcharts-text apexcharts-xaxis-label"
                                        style="
                                          font-family: Helvetica, Arial,
                                            sans-serif;
                                        "
                                      >
                                        <tspan id="SvgjsTspan1209">T</tspan>
                                        <title>T</title>
                                      </text>
                                      <text
                                        id="SvgjsText1211"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="57.85714285714286"
                                        y="87.70079907417298"
                                        text-anchor="middle"
                                        dominant-baseline="auto"
                                        font-size="13px"
                                        font-weight="400"
                                        fill="#a7acb2"
                                        class="apexcharts-text apexcharts-xaxis-label"
                                        style="
                                          font-family: Helvetica, Arial,
                                            sans-serif;
                                        "
                                      >
                                        <tspan id="SvgjsTspan1212">W</tspan>
                                        <title>W</title>
                                      </text>
                                      <text
                                        id="SvgjsText1214"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="81"
                                        y="87.70079907417298"
                                        text-anchor="middle"
                                        dominant-baseline="auto"
                                        font-size="13px"
                                        font-weight="400"
                                        fill="#a7acb2"
                                        class="apexcharts-text apexcharts-xaxis-label"
                                        style="
                                          font-family: Helvetica, Arial,
                                            sans-serif;
                                        "
                                      >
                                        <tspan id="SvgjsTspan1215">T</tspan>
                                        <title>T</title>
                                      </text>
                                      <text
                                        id="SvgjsText1217"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="104.14285714285714"
                                        y="87.70079907417298"
                                        text-anchor="middle"
                                        dominant-baseline="auto"
                                        font-size="13px"
                                        font-weight="400"
                                        fill="#a7acb2"
                                        class="apexcharts-text apexcharts-xaxis-label"
                                        style="
                                          font-family: Helvetica, Arial,
                                            sans-serif;
                                        "
                                      >
                                        <tspan id="SvgjsTspan1218">F</tspan>
                                        <title>F</title>
                                      </text>
                                      <text
                                        id="SvgjsText1220"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="127.28571428571429"
                                        y="87.70079907417298"
                                        text-anchor="middle"
                                        dominant-baseline="auto"
                                        font-size="13px"
                                        font-weight="400"
                                        fill="#a7acb2"
                                        class="apexcharts-text apexcharts-xaxis-label"
                                        style="
                                          font-family: Helvetica, Arial,
                                            sans-serif;
                                        "
                                      >
                                        <tspan id="SvgjsTspan1221">S</tspan>
                                        <title>S</title>
                                      </text>
                                      <text
                                        id="SvgjsText1223"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="150.42857142857142"
                                        y="87.70079907417298"
                                        text-anchor="middle"
                                        dominant-baseline="auto"
                                        font-size="13px"
                                        font-weight="400"
                                        fill="#a7acb2"
                                        class="apexcharts-text apexcharts-xaxis-label"
                                        style="
                                          font-family: Helvetica, Arial,
                                            sans-serif;
                                        "
                                      >
                                        <tspan id="SvgjsTspan1224">S</tspan>
                                        <title>S</title>
                                      </text>
                                    </g>
                                  </g>
                                  <g id="SvgjsG1227" class="apexcharts-grid">
                                    <g
                                      id="SvgjsG1228"
                                      class="apexcharts-gridlines-horizontal"
                                      style="display: none"
                                    >
                                      <line
                                        id="SvgjsLine1230"
                                        x1="0"
                                        y1="0"
                                        x2="162"
                                        y2="0"
                                        stroke="#e0e0e0"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-gridline"
                                      ></line>
                                      <line
                                        id="SvgjsLine1231"
                                        x1="0"
                                        y1="11.740159814834595"
                                        x2="162"
                                        y2="11.740159814834595"
                                        stroke="#e0e0e0"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-gridline"
                                      ></line>
                                      <line
                                        id="SvgjsLine1232"
                                        x1="0"
                                        y1="23.48031962966919"
                                        x2="162"
                                        y2="23.48031962966919"
                                        stroke="#e0e0e0"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-gridline"
                                      ></line>
                                      <line
                                        id="SvgjsLine1233"
                                        x1="0"
                                        y1="35.22047944450378"
                                        x2="162"
                                        y2="35.22047944450378"
                                        stroke="#e0e0e0"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-gridline"
                                      ></line>
                                      <line
                                        id="SvgjsLine1234"
                                        x1="0"
                                        y1="46.96063925933838"
                                        x2="162"
                                        y2="46.96063925933838"
                                        stroke="#e0e0e0"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-gridline"
                                      ></line>
                                      <line
                                        id="SvgjsLine1235"
                                        x1="0"
                                        y1="58.70079907417298"
                                        x2="162"
                                        y2="58.70079907417298"
                                        stroke="#e0e0e0"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-gridline"
                                      ></line>
                                    </g>
                                    <g
                                      id="SvgjsG1229"
                                      class="apexcharts-gridlines-vertical"
                                      style="display: none"
                                    ></g>
                                    <line
                                      id="SvgjsLine1237"
                                      x1="0"
                                      y1="58.70079907417298"
                                      x2="162"
                                      y2="58.70079907417298"
                                      stroke="transparent"
                                      stroke-dasharray="0"
                                      stroke-linecap="butt"
                                    ></line>
                                    <line
                                      id="SvgjsLine1236"
                                      x1="0"
                                      y1="1"
                                      x2="0"
                                      y2="58.70079907417298"
                                      stroke="transparent"
                                      stroke-dasharray="0"
                                      stroke-linecap="butt"
                                    ></line>
                                  </g>
                                  <g
                                    id="SvgjsG1184"
                                    class="apexcharts-bar-series apexcharts-plot-series"
                                  >
                                    <g
                                      id="SvgjsG1185"
                                      class="apexcharts-series"
                                      rel="1"
                                      seriesName="seriesx1"
                                      data:realIndex="0"
                                    >
                                      <path
                                        id="SvgjsPath1189"
                                        d="M2.8928571428571423 54.70079907417298L2.8928571428571423 39.22047944450379C2.8928571428571423 36.55381277783712 4.2261904761904745 35.22047944450379 6.892857142857142 35.22047944450379L16.25 35.22047944450379C18.916666666666668 35.22047944450379 20.25 36.55381277783712 20.25 39.22047944450379L20.25 39.22047944450379L20.25 54.70079907417298C20.25 57.36746574083964 18.916666666666668 58.70079907417298 16.25 58.70079907417298C16.25 58.70079907417298 6.892857142857142 58.70079907417298 6.892857142857142 58.70079907417298C4.226190476190475 58.70079907417298 2.8928571428571423 57.36746574083964 2.8928571428571423 54.70079907417298C2.8928571428571423 54.70079907417298 2.8928571428571423 54.70079907417298 2.8928571428571423 54.70079907417298 "
                                        fill="#696cff29"
                                        fill-opacity="1"
                                        stroke-opacity="1"
                                        stroke-linecap="round"
                                        stroke-width="0"
                                        stroke-dasharray="0"
                                        class="apexcharts-bar-area"
                                        index="0"
                                        clip-path="url(#gridRectMaskgdj1rtj9)"
                                        pathTo="M 2.8928571428571423 54.70079907417298L 2.8928571428571423 39.22047944450379Q 2.8928571428571423 35.22047944450379 6.892857142857142 35.22047944450379L 16.25 35.22047944450379Q 20.25 35.22047944450379 20.25 39.22047944450379L 20.25 39.22047944450379L 20.25 54.70079907417298Q 20.25 58.70079907417298 16.25 58.70079907417298L 6.892857142857142 58.70079907417298Q 2.8928571428571423 58.70079907417298 2.8928571428571423 54.70079907417298z"
                                        pathFrom="M 2.8928571428571423 54.70079907417298L 2.8928571428571423 54.70079907417298L 20.25 54.70079907417298L 20.25 54.70079907417298L 20.25 54.70079907417298L 20.25 54.70079907417298L 20.25 54.70079907417298L 2.8928571428571423 54.70079907417298"
                                        cy="35.22047944450379"
                                        cx="26.035714285714285"
                                        j="0"
                                        val="40"
                                        barHeight="23.48031962966919"
                                        barWidth="17.357142857142858"
                                      ></path>
                                      <path
                                        id="SvgjsPath1191"
                                        d="M26.035714285714285 54.70079907417298L26.035714285714285 6.935039953708646C26.035714285714285 4.268373287041982 27.36904761904762 2.935039953708646 30.035714285714285 2.935039953708646L39.39285714285714 2.935039953708646C42.05952380952381 2.935039953708646 43.39285714285714 4.268373287041982 43.39285714285714 6.935039953708646L43.39285714285714 6.935039953708646L43.39285714285714 54.70079907417298C43.39285714285714 57.36746574083964 42.05952380952381 58.70079907417298 39.39285714285714 58.70079907417298C39.39285714285714 58.70079907417298 30.035714285714285 58.70079907417298 30.035714285714285 58.70079907417298C27.36904761904762 58.70079907417298 26.035714285714285 57.36746574083964 26.035714285714285 54.70079907417298C26.035714285714285 54.70079907417298 26.035714285714285 54.70079907417298 26.035714285714285 54.70079907417298 "
                                        fill="#696cff29"
                                        fill-opacity="1"
                                        stroke-opacity="1"
                                        stroke-linecap="round"
                                        stroke-width="0"
                                        stroke-dasharray="0"
                                        class="apexcharts-bar-area"
                                        index="0"
                                        clip-path="url(#gridRectMaskgdj1rtj9)"
                                        pathTo="M 26.035714285714285 54.70079907417298L 26.035714285714285 6.935039953708646Q 26.035714285714285 2.935039953708646 30.035714285714285 2.935039953708646L 39.39285714285714 2.935039953708646Q 43.39285714285714 2.935039953708646 43.39285714285714 6.935039953708646L 43.39285714285714 6.935039953708646L 43.39285714285714 54.70079907417298Q 43.39285714285714 58.70079907417298 39.39285714285714 58.70079907417298L 30.035714285714285 58.70079907417298Q 26.035714285714285 58.70079907417298 26.035714285714285 54.70079907417298z"
                                        pathFrom="M 26.035714285714285 54.70079907417298L 26.035714285714285 54.70079907417298L 43.39285714285714 54.70079907417298L 43.39285714285714 54.70079907417298L 43.39285714285714 54.70079907417298L 43.39285714285714 54.70079907417298L 43.39285714285714 54.70079907417298L 26.035714285714285 54.70079907417298"
                                        cy="2.935039953708646"
                                        cx="49.17857142857143"
                                        j="1"
                                        val="95"
                                        barHeight="55.76575912046433"
                                        barWidth="17.357142857142858"
                                      ></path>
                                      <path
                                        id="SvgjsPath1193"
                                        d="M49.17857142857143 54.70079907417298L49.17857142857143 27.48031962966919C49.17857142857143 24.813652963002525 50.51190476190476 23.48031962966919 53.17857142857143 23.48031962966919L62.53571428571429 23.48031962966919C65.20238095238096 23.48031962966919 66.53571428571429 24.813652963002525 66.53571428571429 27.48031962966919L66.53571428571429 27.48031962966919L66.53571428571429 54.70079907417298C66.53571428571429 57.36746574083964 65.20238095238096 58.70079907417298 62.53571428571429 58.70079907417298C62.53571428571429 58.70079907417298 53.17857142857143 58.70079907417298 53.17857142857143 58.70079907417298C50.51190476190476 58.70079907417298 49.17857142857143 57.36746574083964 49.17857142857143 54.70079907417298C49.17857142857143 54.70079907417298 49.17857142857143 54.70079907417298 49.17857142857143 54.70079907417298 "
                                        fill="#696cff29"
                                        fill-opacity="1"
                                        stroke-opacity="1"
                                        stroke-linecap="round"
                                        stroke-width="0"
                                        stroke-dasharray="0"
                                        class="apexcharts-bar-area"
                                        index="0"
                                        clip-path="url(#gridRectMaskgdj1rtj9)"
                                        pathTo="M 49.17857142857143 54.70079907417298L 49.17857142857143 27.48031962966919Q 49.17857142857143 23.48031962966919 53.17857142857143 23.48031962966919L 62.53571428571429 23.48031962966919Q 66.53571428571429 23.48031962966919 66.53571428571429 27.48031962966919L 66.53571428571429 27.48031962966919L 66.53571428571429 54.70079907417298Q 66.53571428571429 58.70079907417298 62.53571428571429 58.70079907417298L 53.17857142857143 58.70079907417298Q 49.17857142857143 58.70079907417298 49.17857142857143 54.70079907417298z"
                                        pathFrom="M 49.17857142857143 54.70079907417298L 49.17857142857143 54.70079907417298L 66.53571428571429 54.70079907417298L 66.53571428571429 54.70079907417298L 66.53571428571429 54.70079907417298L 66.53571428571429 54.70079907417298L 66.53571428571429 54.70079907417298L 49.17857142857143 54.70079907417298"
                                        cy="23.48031962966919"
                                        cx="72.32142857142857"
                                        j="2"
                                        val="60"
                                        barHeight="35.22047944450379"
                                        barWidth="17.357142857142858"
                                      ></path>
                                      <path
                                        id="SvgjsPath1195"
                                        d="M72.32142857142857 54.70079907417298L72.32142857142857 36.28543949079514C72.32142857142857 33.61877282412848 73.6547619047619 32.28543949079514 76.32142857142857 32.28543949079514L85.67857142857143 32.28543949079514C88.3452380952381 32.28543949079514 89.67857142857143 33.61877282412848 89.67857142857143 36.28543949079514L89.67857142857143 36.28543949079514L89.67857142857143 54.70079907417298C89.67857142857143 57.36746574083964 88.3452380952381 58.70079907417298 85.67857142857143 58.70079907417298C85.67857142857143 58.70079907417298 76.32142857142857 58.70079907417298 76.32142857142857 58.70079907417298C73.6547619047619 58.70079907417298 72.32142857142857 57.36746574083964 72.32142857142857 54.70079907417298C72.32142857142857 54.70079907417298 72.32142857142857 54.70079907417298 72.32142857142857 54.70079907417298 "
                                        fill="#696cff29"
                                        fill-opacity="1"
                                        stroke-opacity="1"
                                        stroke-linecap="round"
                                        stroke-width="0"
                                        stroke-dasharray="0"
                                        class="apexcharts-bar-area"
                                        index="0"
                                        clip-path="url(#gridRectMaskgdj1rtj9)"
                                        pathTo="M 72.32142857142857 54.70079907417298L 72.32142857142857 36.28543949079514Q 72.32142857142857 32.28543949079514 76.32142857142857 32.28543949079514L 85.67857142857143 32.28543949079514Q 89.67857142857143 32.28543949079514 89.67857142857143 36.28543949079514L 89.67857142857143 36.28543949079514L 89.67857142857143 54.70079907417298Q 89.67857142857143 58.70079907417298 85.67857142857143 58.70079907417298L 76.32142857142857 58.70079907417298Q 72.32142857142857 58.70079907417298 72.32142857142857 54.70079907417298z"
                                        pathFrom="M 72.32142857142857 54.70079907417298L 72.32142857142857 54.70079907417298L 89.67857142857143 54.70079907417298L 89.67857142857143 54.70079907417298L 89.67857142857143 54.70079907417298L 89.67857142857143 54.70079907417298L 89.67857142857143 54.70079907417298L 72.32142857142857 54.70079907417298"
                                        cy="32.28543949079514"
                                        cx="95.46428571428571"
                                        j="3"
                                        val="45"
                                        barHeight="26.41535958337784"
                                        barWidth="17.357142857142858"
                                      ></path>
                                      <path
                                        id="SvgjsPath1197"
                                        d="M95.46428571428571 54.70079907417298L95.46428571428571 9.8700799074173C95.46428571428571 7.203413240750635 96.79761904761904 5.870079907417299 99.46428571428571 5.870079907417299L108.82142857142857 5.870079907417299C111.48809523809524 5.870079907417299 112.82142857142856 7.203413240750635 112.82142857142857 9.8700799074173L112.82142857142857 9.8700799074173L112.82142857142857 54.70079907417298C112.82142857142856 57.36746574083964 111.48809523809524 58.70079907417298 108.82142857142857 58.70079907417298C108.82142857142857 58.70079907417298 99.46428571428571 58.70079907417298 99.46428571428571 58.70079907417298C96.79761904761904 58.70079907417298 95.46428571428571 57.36746574083964 95.46428571428571 54.70079907417298C95.46428571428571 54.70079907417298 95.46428571428571 54.70079907417298 95.46428571428571 54.70079907417298 "
                                        fill="rgba(105,108,255,0.85)"
                                        fill-opacity="1"
                                        stroke-opacity="1"
                                        stroke-linecap="round"
                                        stroke-width="0"
                                        stroke-dasharray="0"
                                        class="apexcharts-bar-area"
                                        index="0"
                                        clip-path="url(#gridRectMaskgdj1rtj9)"
                                        pathTo="M 95.46428571428571 54.70079907417298L 95.46428571428571 9.8700799074173Q 95.46428571428571 5.870079907417299 99.46428571428571 5.870079907417299L 108.82142857142857 5.870079907417299Q 112.82142857142857 5.870079907417299 112.82142857142857 9.8700799074173L 112.82142857142857 9.8700799074173L 112.82142857142857 54.70079907417298Q 112.82142857142857 58.70079907417298 108.82142857142857 58.70079907417298L 99.46428571428571 58.70079907417298Q 95.46428571428571 58.70079907417298 95.46428571428571 54.70079907417298z"
                                        pathFrom="M 95.46428571428571 54.70079907417298L 95.46428571428571 54.70079907417298L 112.82142857142857 54.70079907417298L 112.82142857142857 54.70079907417298L 112.82142857142857 54.70079907417298L 112.82142857142857 54.70079907417298L 112.82142857142857 54.70079907417298L 95.46428571428571 54.70079907417298"
                                        cy="5.870079907417299"
                                        cx="118.60714285714285"
                                        j="4"
                                        val="90"
                                        barHeight="52.83071916675568"
                                        barWidth="17.357142857142858"
                                      ></path>
                                      <path
                                        id="SvgjsPath1199"
                                        d="M118.60714285714285 54.70079907417298L118.60714285714285 33.35039953708649C118.60714285714286 30.68373287041982 119.94047619047618 29.35039953708649 122.60714285714285 29.35039953708649L131.9642857142857 29.35039953708649C134.63095238095235 29.35039953708649 135.9642857142857 30.68373287041982 135.9642857142857 33.35039953708649L135.9642857142857 33.35039953708649L135.9642857142857 54.70079907417298C135.9642857142857 57.36746574083964 134.63095238095235 58.70079907417298 131.9642857142857 58.70079907417298C131.9642857142857 58.70079907417298 122.60714285714285 58.70079907417298 122.60714285714285 58.70079907417298C119.94047619047618 58.70079907417298 118.60714285714286 57.36746574083964 118.60714285714285 54.70079907417298C118.60714285714285 54.70079907417298 118.60714285714285 54.70079907417298 118.60714285714285 54.70079907417298 "
                                        fill="#696cff29"
                                        fill-opacity="1"
                                        stroke-opacity="1"
                                        stroke-linecap="round"
                                        stroke-width="0"
                                        stroke-dasharray="0"
                                        class="apexcharts-bar-area"
                                        index="0"
                                        clip-path="url(#gridRectMaskgdj1rtj9)"
                                        pathTo="M 118.60714285714285 54.70079907417298L 118.60714285714285 33.35039953708649Q 118.60714285714285 29.35039953708649 122.60714285714285 29.35039953708649L 131.9642857142857 29.35039953708649Q 135.9642857142857 29.35039953708649 135.9642857142857 33.35039953708649L 135.9642857142857 33.35039953708649L 135.9642857142857 54.70079907417298Q 135.9642857142857 58.70079907417298 131.9642857142857 58.70079907417298L 122.60714285714285 58.70079907417298Q 118.60714285714285 58.70079907417298 118.60714285714285 54.70079907417298z"
                                        pathFrom="M 118.60714285714285 54.70079907417298L 118.60714285714285 54.70079907417298L 135.9642857142857 54.70079907417298L 135.9642857142857 54.70079907417298L 135.9642857142857 54.70079907417298L 135.9642857142857 54.70079907417298L 135.9642857142857 54.70079907417298L 118.60714285714285 54.70079907417298"
                                        cy="29.35039953708649"
                                        cx="141.75"
                                        j="5"
                                        val="50"
                                        barHeight="29.35039953708649"
                                        barWidth="17.357142857142858"
                                      ></path>
                                      <path
                                        id="SvgjsPath1201"
                                        d="M141.75 54.70079907417298L141.75 18.675199768543244C141.75 16.00853310187658 143.08333333333334 14.675199768543244 145.75 14.675199768543244L155.10714285714286 14.675199768543244C157.77380952380952 14.675199768543244 159.10714285714286 16.00853310187658 159.10714285714286 18.675199768543244L159.10714285714286 18.675199768543244L159.10714285714286 54.70079907417298C159.10714285714286 57.36746574083964 157.77380952380952 58.70079907417298 155.10714285714286 58.70079907417298C155.10714285714286 58.70079907417298 145.75 58.70079907417298 145.75 58.70079907417298C143.08333333333334 58.70079907417298 141.75 57.36746574083964 141.75 54.70079907417298C141.75 54.70079907417298 141.75 54.70079907417298 141.75 54.70079907417298 "
                                        fill="#696cff29"
                                        fill-opacity="1"
                                        stroke-opacity="1"
                                        stroke-linecap="round"
                                        stroke-width="0"
                                        stroke-dasharray="0"
                                        class="apexcharts-bar-area"
                                        index="0"
                                        clip-path="url(#gridRectMaskgdj1rtj9)"
                                        pathTo="M 141.75 54.70079907417298L 141.75 18.675199768543244Q 141.75 14.675199768543244 145.75 14.675199768543244L 155.10714285714286 14.675199768543244Q 159.10714285714286 14.675199768543244 159.10714285714286 18.675199768543244L 159.10714285714286 18.675199768543244L 159.10714285714286 54.70079907417298Q 159.10714285714286 58.70079907417298 155.10714285714286 58.70079907417298L 145.75 58.70079907417298Q 141.75 58.70079907417298 141.75 54.70079907417298z"
                                        pathFrom="M 141.75 54.70079907417298L 141.75 54.70079907417298L 159.10714285714286 54.70079907417298L 159.10714285714286 54.70079907417298L 159.10714285714286 54.70079907417298L 159.10714285714286 54.70079907417298L 159.10714285714286 54.70079907417298L 141.75 54.70079907417298"
                                        cy="14.675199768543244"
                                        cx="164.89285714285714"
                                        j="6"
                                        val="75"
                                        barHeight="44.02559930562973"
                                        barWidth="17.357142857142858"
                                      ></path>
                                      <g
                                        id="SvgjsG1187"
                                        class="apexcharts-bar-goals-markers"
                                        style="pointer-events: none"
                                      >
                                        <g
                                          id="SvgjsG1188"
                                          className="apexcharts-bar-goals-groups"
                                        ></g>
                                        <g
                                          id="SvgjsG1190"
                                          className="apexcharts-bar-goals-groups"
                                        ></g>
                                        <g
                                          id="SvgjsG1192"
                                          className="apexcharts-bar-goals-groups"
                                        ></g>
                                        <g
                                          id="SvgjsG1194"
                                          className="apexcharts-bar-goals-groups"
                                        ></g>
                                        <g
                                          id="SvgjsG1196"
                                          className="apexcharts-bar-goals-groups"
                                        ></g>
                                        <g
                                          id="SvgjsG1198"
                                          className="apexcharts-bar-goals-groups"
                                        ></g>
                                        <g
                                          id="SvgjsG1200"
                                          className="apexcharts-bar-goals-groups"
                                        ></g>
                                      </g>
                                    </g>
                                    <g
                                      id="SvgjsG1186"
                                      class="apexcharts-datalabels"
                                      data:realIndex="0"
                                    ></g>
                                  </g>
                                  <line
                                    id="SvgjsLine1238"
                                    x1="0"
                                    y1="0"
                                    x2="162"
                                    y2="0"
                                    stroke="#b6b6b6"
                                    stroke-dasharray="0"
                                    stroke-width="1"
                                    stroke-linecap="butt"
                                    class="apexcharts-ycrosshairs"
                                  ></line>
                                  <line
                                    id="SvgjsLine1239"
                                    x1="0"
                                    y1="0"
                                    x2="162"
                                    y2="0"
                                    stroke-dasharray="0"
                                    stroke-width="0"
                                    stroke-linecap="butt"
                                    class="apexcharts-ycrosshairs-hidden"
                                  ></line>
                                  <g
                                    id="SvgjsG1240"
                                    class="apexcharts-yaxis-annotations"
                                  ></g>
                                  <g
                                    id="SvgjsG1241"
                                    class="apexcharts-xaxis-annotations"
                                  ></g>
                                  <g
                                    id="SvgjsG1242"
                                    class="apexcharts-point-annotations"
                                  ></g>
                                </g>
                                <g
                                  id="SvgjsG1225"
                                  class="apexcharts-yaxis"
                                  rel="0"
                                  transform="translate(-8, 0)"
                                >
                                  <g
                                    id="SvgjsG1226"
                                    class="apexcharts-yaxis-texts-g"
                                  ></g>
                                </g>
                                <g
                                  id="SvgjsG1175"
                                  class="apexcharts-annotations"
                                ></g>
                              </svg>
                              <div
                                class="apexcharts-legend"
                                style="max-height: 47.5px"
                              ></div>
                              <div
                                class="apexcharts-tooltip apexcharts-theme-light"
                              >
                                <div
                                  class="apexcharts-tooltip-title"
                                  style="
                                    font-family: Helvetica, Arial, sans-serif;
                                    font-size: 12px;
                                  "
                                ></div>
                                <div
                                  class="apexcharts-tooltip-series-group"
                                  style="order: 1"
                                >
                                  <span
                                    class="apexcharts-tooltip-marker"
                                    style="
                                      background-color: rgba(
                                        105,
                                        108,
                                        255,
                                        0.16
                                      );
                                    "
                                  ></span>
                                  <div
                                    class="apexcharts-tooltip-text"
                                    style="
                                      font-family: Helvetica, Arial, sans-serif;
                                      font-size: 12px;
                                    "
                                  >
                                    <div class="apexcharts-tooltip-y-group">
                                      <span
                                        class="apexcharts-tooltip-text-y-label"
                                      ></span
                                      ><span
                                        class="apexcharts-tooltip-text-y-value"
                                      ></span>
                                    </div>
                                    <div class="apexcharts-tooltip-goals-group">
                                      <span
                                        class="apexcharts-tooltip-text-goals-label"
                                      ></span
                                      ><span
                                        class="apexcharts-tooltip-text-goals-value"
                                      ></span>
                                    </div>
                                    <div class="apexcharts-tooltip-z-group">
                                      <span
                                        class="apexcharts-tooltip-text-z-label"
                                      ></span
                                      ><span
                                        class="apexcharts-tooltip-text-z-value"
                                      ></span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"
                              >
                                <div class="apexcharts-yaxistooltip-text"></div>
                              </div>
                            </div>
                          </div>
                          <div class="resize-triggers">
                            <div class="expand-trigger">
                              <div style="width: 211px; height: 214px"></div>
                            </div>
                            <div class="contract-trigger"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-12 mb-6">
                      <div class="card">
                        <div class="card-body">
                          <div
                            class="d-flex justify-content-between align-items-center flex-sm-row flex-column gap-10"
                            style="position: relative"
                          >
                            <div
                              class="d-flex flex-sm-column flex-row align-items-start justify-content-between"
                            >
                              <div class="card-title mb-6">
                                <h5 class="text-nowrap mb-1">Profile Report</h5>
                                <span class="badge bg-label-warning"
                                  >YEAR 2022</span
                                >
                              </div>
                              <div class="mt-sm-auto">
                                <span class="text-success text-nowrap fw-medium"
                                  ><i class="bx bx-up-arrow-alt"></i>
                                  68.2%</span
                                >
                                <h4 class="mb-0">$84,686k</h4>
                              </div>
                            </div>
                            <div
                              id="profileReportChart"
                              style="min-height: 75px"
                            >
                              <div
                                id="apexchartsqib7xkgl"
                                class="apexcharts-canvas apexchartsqib7xkgl apexcharts-theme-light"
                                style="width: 240px; height: 75px"
                              >
                                <svg
                                  id="SvgjsSvg1243"
                                  width="240"
                                  height="75"
                                  xmlns="http://www.w3.org/2000/svg"
                                  version="1.1"
                                  xmlns:xlink="http://www.w3.org/1999/xlink"
                                  xmlns:svgjs="http://svgjs.dev"
                                  class="apexcharts-svg"
                                  xmlns:data="ApexChartsNS"
                                  transform="translate(0, 0)"
                                  style="background: transparent"
                                >
                                  <g
                                    id="SvgjsG1245"
                                    class="apexcharts-inner apexcharts-graphical"
                                    transform="translate(0, 0)"
                                  >
                                    <defs id="SvgjsDefs1244">
                                      <clipPath id="gridRectMaskqib7xkgl">
                                        <rect
                                          id="SvgjsRect1250"
                                          width="241"
                                          height="80"
                                          x="-4.5"
                                          y="-2.5"
                                          rx="0"
                                          ry="0"
                                          opacity="1"
                                          stroke-width="0"
                                          stroke="none"
                                          stroke-dasharray="0"
                                          fill="#fff"
                                        ></rect>
                                      </clipPath>
                                      <clipPath
                                        id="forecastMaskqib7xkgl"
                                      ></clipPath>
                                      <clipPath
                                        id="nonForecastMaskqib7xkgl"
                                      ></clipPath>
                                      <clipPath id="gridRectMarkerMaskqib7xkgl">
                                        <rect
                                          id="SvgjsRect1251"
                                          width="236"
                                          height="79"
                                          x="-2"
                                          y="-2"
                                          rx="0"
                                          ry="0"
                                          opacity="1"
                                          stroke-width="0"
                                          stroke="none"
                                          stroke-dasharray="0"
                                          fill="#fff"
                                        ></rect>
                                      </clipPath>
                                      <filter
                                        id="SvgjsFilter1257"
                                        filterUnits="userSpaceOnUse"
                                        width="200%"
                                        height="200%"
                                        x="-50%"
                                        y="-50%"
                                      >
                                        <feFlood
                                          id="SvgjsFeFlood1258"
                                          flood-color="#ffab00"
                                          flood-opacity="0.15"
                                          result="SvgjsFeFlood1258Out"
                                          in="SourceGraphic"
                                        ></feFlood>
                                        <feComposite
                                          id="SvgjsFeComposite1259"
                                          in="SvgjsFeFlood1258Out"
                                          in2="SourceAlpha"
                                          operator="in"
                                          result="SvgjsFeComposite1259Out"
                                        ></feComposite>
                                        <feOffset
                                          id="SvgjsFeOffset1260"
                                          dx="5"
                                          dy="10"
                                          result="SvgjsFeOffset1260Out"
                                          in="SvgjsFeComposite1259Out"
                                        ></feOffset>
                                        <feGaussianBlur
                                          id="SvgjsFeGaussianBlur1261"
                                          stdDeviation="3 "
                                          result="SvgjsFeGaussianBlur1261Out"
                                          in="SvgjsFeOffset1260Out"
                                        ></feGaussianBlur>
                                        <feMerge
                                          id="SvgjsFeMerge1262"
                                          result="SvgjsFeMerge1262Out"
                                          in="SourceGraphic"
                                        >
                                          <feMergeNode
                                            id="SvgjsFeMergeNode1263"
                                            in="SvgjsFeGaussianBlur1261Out"
                                          ></feMergeNode>
                                          <feMergeNode
                                            id="SvgjsFeMergeNode1264"
                                            in="[object Arguments]"
                                          ></feMergeNode>
                                        </feMerge>
                                        <feBlend
                                          id="SvgjsFeBlend1265"
                                          in="SourceGraphic"
                                          in2="SvgjsFeMerge1262Out"
                                          mode="normal"
                                          result="SvgjsFeBlend1265Out"
                                        ></feBlend>
                                      </filter>
                                    </defs>
                                    <line
                                      id="SvgjsLine1249"
                                      x1="0"
                                      y1="0"
                                      x2="0"
                                      y2="75"
                                      stroke="#b6b6b6"
                                      stroke-dasharray="3"
                                      stroke-linecap="butt"
                                      class="apexcharts-xcrosshairs"
                                      x="0"
                                      y="0"
                                      width="1"
                                      height="75"
                                      fill="#b1b9c4"
                                      filter="none"
                                      fill-opacity="0.9"
                                      stroke-width="1"
                                    ></line>
                                    <g
                                      id="SvgjsG1266"
                                      class="apexcharts-xaxis"
                                      transform="translate(0, 0)"
                                    >
                                      <g
                                        id="SvgjsG1267"
                                        class="apexcharts-xaxis-texts-g"
                                        transform="translate(0, -4)"
                                      ></g>
                                    </g>
                                    <g id="SvgjsG1275" class="apexcharts-grid">
                                      <g
                                        id="SvgjsG1276"
                                        class="apexcharts-gridlines-horizontal"
                                        style="display: none"
                                      >
                                        <line
                                          id="SvgjsLine1278"
                                          x1="0"
                                          y1="0"
                                          x2="232"
                                          y2="0"
                                          stroke="#e0e0e0"
                                          stroke-dasharray="0"
                                          stroke-linecap="butt"
                                          class="apexcharts-gridline"
                                        ></line>
                                        <line
                                          id="SvgjsLine1279"
                                          x1="0"
                                          y1="18.75"
                                          x2="232"
                                          y2="18.75"
                                          stroke="#e0e0e0"
                                          stroke-dasharray="0"
                                          stroke-linecap="butt"
                                          class="apexcharts-gridline"
                                        ></line>
                                        <line
                                          id="SvgjsLine1280"
                                          x1="0"
                                          y1="37.5"
                                          x2="232"
                                          y2="37.5"
                                          stroke="#e0e0e0"
                                          stroke-dasharray="0"
                                          stroke-linecap="butt"
                                          class="apexcharts-gridline"
                                        ></line>
                                        <line
                                          id="SvgjsLine1281"
                                          x1="0"
                                          y1="56.25"
                                          x2="232"
                                          y2="56.25"
                                          stroke="#e0e0e0"
                                          stroke-dasharray="0"
                                          stroke-linecap="butt"
                                          class="apexcharts-gridline"
                                        ></line>
                                        <line
                                          id="SvgjsLine1282"
                                          x1="0"
                                          y1="75"
                                          x2="232"
                                          y2="75"
                                          stroke="#e0e0e0"
                                          stroke-dasharray="0"
                                          stroke-linecap="butt"
                                          class="apexcharts-gridline"
                                        ></line>
                                      </g>
                                      <g
                                        id="SvgjsG1277"
                                        class="apexcharts-gridlines-vertical"
                                        style="display: none"
                                      ></g>
                                      <line
                                        id="SvgjsLine1284"
                                        x1="0"
                                        y1="75"
                                        x2="232"
                                        y2="75"
                                        stroke="transparent"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                      ></line>
                                      <line
                                        id="SvgjsLine1283"
                                        x1="0"
                                        y1="1"
                                        x2="0"
                                        y2="75"
                                        stroke="transparent"
                                        stroke-dasharray="0"
                                        stroke-linecap="butt"
                                      ></line>
                                    </g>
                                    <g
                                      id="SvgjsG1252"
                                      class="apexcharts-line-series apexcharts-plot-series"
                                    >
                                      <g
                                        id="SvgjsG1253"
                                        class="apexcharts-series"
                                        seriesName="seriesx1"
                                        data:longestSeries="true"
                                        rel="1"
                                        data:realIndex="0"
                                      >
                                        <path
                                          id="SvgjsPath1256"
                                          d="M0 71.25C16.24 71.25 30.16 11.25 46.4 11.25C62.64 11.25 76.56 58.125 92.8 58.125C109.03999999999999 58.125 122.96 20.625 139.2 20.625C155.44 20.625 169.35999999999999 35.625 185.6 35.625C201.83999999999997 35.625 215.76 5.625 231.99999999999997 5.625C231.99999999999997 5.625 231.99999999999997 5.625 231.99999999999997 5.625 "
                                          fill="none"
                                          fill-opacity="1"
                                          stroke="rgba(255,171,0,0.85)"
                                          stroke-opacity="1"
                                          stroke-linecap="butt"
                                          stroke-width="5"
                                          stroke-dasharray="0"
                                          class="apexcharts-line"
                                          index="0"
                                          clip-path="url(#gridRectMaskqib7xkgl)"
                                          filter="url(#SvgjsFilter1257)"
                                          pathTo="M 0 71.25C 16.24 71.25 30.16 11.25 46.4 11.25C 62.64 11.25 76.56 58.125 92.8 58.125C 109.03999999999999 58.125 122.96 20.625 139.2 20.625C 155.44 20.625 169.35999999999999 35.625 185.6 35.625C 201.83999999999997 35.625 215.76 5.625 231.99999999999997 5.625"
                                          pathFrom="M -1 112.5L -1 112.5L 46.4 112.5L 92.8 112.5L 139.2 112.5L 185.6 112.5L 231.99999999999997 112.5"
                                        ></path>
                                        <g
                                          id="SvgjsG1254"
                                          class="apexcharts-series-markers-wrap"
                                          data:realIndex="0"
                                        >
                                          <g class="apexcharts-series-markers">
                                            <circle
                                              id="SvgjsCircle1290"
                                              r="0"
                                              cx="0"
                                              cy="0"
                                              class="apexcharts-marker wiuqyi7et no-pointer-events"
                                              stroke="#ffffff"
                                              fill="#ffab00"
                                              fill-opacity="1"
                                              stroke-width="2"
                                              stroke-opacity="0.9"
                                              default-marker-size="0"
                                            ></circle>
                                          </g>
                                        </g>
                                      </g>
                                      <g
                                        id="SvgjsG1255"
                                        class="apexcharts-datalabels"
                                        data:realIndex="0"
                                      ></g>
                                    </g>
                                    <line
                                      id="SvgjsLine1285"
                                      x1="0"
                                      y1="0"
                                      x2="232"
                                      y2="0"
                                      stroke="#b6b6b6"
                                      stroke-dasharray="0"
                                      stroke-width="1"
                                      stroke-linecap="butt"
                                      class="apexcharts-ycrosshairs"
                                    ></line>
                                    <line
                                      id="SvgjsLine1286"
                                      x1="0"
                                      y1="0"
                                      x2="232"
                                      y2="0"
                                      stroke-dasharray="0"
                                      stroke-width="0"
                                      stroke-linecap="butt"
                                      class="apexcharts-ycrosshairs-hidden"
                                    ></line>
                                    <g
                                      id="SvgjsG1287"
                                      class="apexcharts-yaxis-annotations"
                                    ></g>
                                    <g
                                      id="SvgjsG1288"
                                      class="apexcharts-xaxis-annotations"
                                    ></g>
                                    <g
                                      id="SvgjsG1289"
                                      class="apexcharts-point-annotations"
                                    ></g>
                                  </g>
                                  <rect
                                    id="SvgjsRect1248"
                                    width="0"
                                    height="0"
                                    x="0"
                                    y="0"
                                    rx="0"
                                    ry="0"
                                    opacity="1"
                                    stroke-width="0"
                                    stroke="none"
                                    stroke-dasharray="0"
                                    fill="#fefefe"
                                  ></rect>
                                  <g
                                    id="SvgjsG1274"
                                    class="apexcharts-yaxis"
                                    rel="0"
                                    transform="translate(-18, 0)"
                                  ></g>
                                  <g
                                    id="SvgjsG1246"
                                    class="apexcharts-annotations"
                                  ></g>
                                </svg>
                                <div
                                  class="apexcharts-legend"
                                  style="max-height: 37.5px"
                                ></div>
                                <div
                                  class="apexcharts-tooltip apexcharts-theme-light"
                                >
                                  <div
                                    class="apexcharts-tooltip-title"
                                    style="
                                      font-family: Helvetica, Arial, sans-serif;
                                      font-size: 12px;
                                    "
                                  ></div>
                                  <div
                                    class="apexcharts-tooltip-series-group"
                                    style="order: 1"
                                  >
                                    <span
                                      class="apexcharts-tooltip-marker"
                                      style="background-color: rgb(255, 171, 0)"
                                    ></span>
                                    <div
                                      class="apexcharts-tooltip-text"
                                      style="
                                        font-family: Helvetica, Arial,
                                          sans-serif;
                                        font-size: 12px;
                                      "
                                    >
                                      <div class="apexcharts-tooltip-y-group">
                                        <span
                                          class="apexcharts-tooltip-text-y-label"
                                        ></span
                                        ><span
                                          class="apexcharts-tooltip-text-y-value"
                                        ></span>
                                      </div>
                                      <div
                                        class="apexcharts-tooltip-goals-group"
                                      >
                                        <span
                                          class="apexcharts-tooltip-text-goals-label"
                                        ></span
                                        ><span
                                          class="apexcharts-tooltip-text-goals-value"
                                        ></span>
                                      </div>
                                      <div class="apexcharts-tooltip-z-group">
                                        <span
                                          class="apexcharts-tooltip-text-z-label"
                                        ></span
                                        ><span
                                          class="apexcharts-tooltip-text-z-value"
                                        ></span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div
                                  class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"
                                >
                                  <div
                                    class="apexcharts-yaxistooltip-text"
                                  ></div>
                                </div>
                              </div>
                            </div>
                            <div class="resize-triggers">
                              <div class="expand-trigger">
                                <div style="width: 398px; height: 140px"></div>
                              </div>
                              <div class="contract-trigger"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- Order Statistics -->
                <div class="col-md-6 col-lg-4 col-xl-4 order-0 mb-6">
                  <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                      <div class="card-title mb-0">
                        <h5 class="mb-1 me-2">Order Statistics</h5>
                        <p class="card-subtitle">42.82k Total Sales</p>
                      </div>
                      <div class="dropdown">
                        <button
                          class="btn text-muted p-0"
                          type="button"
                          id="orederStatistics"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="bx bx-dots-vertical-rounded bx-lg"></i>
                        </button>
                        <div
                          class="dropdown-menu dropdown-menu-end"
                          aria-labelledby="orederStatistics"
                        >
                          <a class="dropdown-item" href="javascript:void(0);"
                            >Select All</a
                          >
                          <a class="dropdown-item" href="javascript:void(0);"
                            >Refresh</a
                          >
                          <a class="dropdown-item" href="javascript:void(0);"
                            >Share</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                      <div
                        class="d-flex justify-content-between align-items-center mb-6"
                        style="position: relative"
                      >
                        <div
                          class="d-flex flex-column align-items-center gap-1"
                        >
                          <h3 class="mb-1">8,258</h3>
                          <small>Total Orders</small>
                        </div>
                        <div
                          id="orderStatisticsChart"
                          style="min-height: 117.55px"
                        >
                          <div
                            id="apexchartsopqg5cds"
                            class="apexcharts-canvas apexchartsopqg5cds apexcharts-theme-light"
                            style="width: 110px; height: 117.55px"
                          >
                            <svg
                              id="SvgjsSvg1291"
                              width="110"
                              height="117.55"
                              xmlns="http://www.w3.org/2000/svg"
                              version="1.1"
                              xmlns:xlink="http://www.w3.org/1999/xlink"
                              xmlns:svgjs="http://svgjs.dev"
                              class="apexcharts-svg"
                              xmlns:data="ApexChartsNS"
                              transform="translate(0, 0)"
                              style="background: transparent"
                            >
                              <g
                                id="SvgjsG1293"
                                class="apexcharts-inner apexcharts-graphical"
                                transform="translate(-7, 0)"
                              >
                                <defs id="SvgjsDefs1292">
                                  <clipPath id="gridRectMaskopqg5cds">
                                    <rect
                                      id="SvgjsRect1295"
                                      width="130"
                                      height="153"
                                      x="-4.5"
                                      y="-2.5"
                                      rx="0"
                                      ry="0"
                                      opacity="1"
                                      stroke-width="0"
                                      stroke="none"
                                      stroke-dasharray="0"
                                      fill="#fff"
                                    ></rect>
                                  </clipPath>
                                  <clipPath
                                    id="forecastMaskopqg5cds"
                                  ></clipPath>
                                  <clipPath
                                    id="nonForecastMaskopqg5cds"
                                  ></clipPath>
                                  <clipPath id="gridRectMarkerMaskopqg5cds">
                                    <rect
                                      id="SvgjsRect1296"
                                      width="125"
                                      height="152"
                                      x="-2"
                                      y="-2"
                                      rx="0"
                                      ry="0"
                                      opacity="1"
                                      stroke-width="0"
                                      stroke="none"
                                      stroke-dasharray="0"
                                      fill="#fff"
                                    ></rect>
                                  </clipPath>
                                </defs>
                                <g id="SvgjsG1297" class="apexcharts-pie">
                                  <g
                                    id="SvgjsG1298"
                                    transform="translate(0, 0) scale(1)"
                                  >
                                    <circle
                                      id="SvgjsCircle1299"
                                      r="37.518292682926834"
                                      cx="60.5"
                                      cy="60.5"
                                      fill="transparent"
                                    ></circle>
                                    <g
                                      id="SvgjsG1300"
                                      class="apexcharts-slices"
                                    >
                                      <g
                                        id="SvgjsG1301"
                                        class="apexcharts-series apexcharts-pie-series"
                                        seriesName="Electronic"
                                        rel="1"
                                        data:realIndex="0"
                                      >
                                        <path
                                          id="SvgjsPath1302"
                                          d="M 60.5 10.475609756097555 A 50.024390243902445 50.024390243902445 0 0 1 110.52439024390245 60.5 L 98.01829268292684 60.5 A 37.518292682926834 37.518292682926834 0 0 0 60.5 22.981707317073166 L 60.5 10.475609756097555 z"
                                          fill="rgba(113,221,55,1)"
                                          fill-opacity="1"
                                          stroke-opacity="1"
                                          stroke-linecap="butt"
                                          stroke-width="5"
                                          stroke-dasharray="0"
                                          class="apexcharts-pie-area apexcharts-donut-slice-0"
                                          index="0"
                                          j="0"
                                          data:angle="90"
                                          data:startAngle="0"
                                          data:strokeWidth="5"
                                          data:value="50"
                                          data:pathOrig="M 60.5 10.475609756097555 A 50.024390243902445 50.024390243902445 0 0 1 110.52439024390245 60.5 L 98.01829268292684 60.5 A 37.518292682926834 37.518292682926834 0 0 0 60.5 22.981707317073166 L 60.5 10.475609756097555 z"
                                          stroke="#ffffff"
                                        ></path>
                                      </g>
                                      <g
                                        id="SvgjsG1303"
                                        class="apexcharts-series apexcharts-pie-series"
                                        seriesName="Sports"
                                        rel="2"
                                        data:realIndex="1"
                                      >
                                        <path
                                          id="SvgjsPath1304"
                                          d="M 110.52439024390245 60.5 A 50.024390243902445 50.024390243902445 0 0 1 15.92794192413799 83.21059792599539 L 27.07095644310349 77.53294844449654 A 37.518292682926834 37.518292682926834 0 0 0 98.01829268292684 60.5 L 110.52439024390245 60.5 z"
                                          fill="rgba(105,108,255,1)"
                                          fill-opacity="1"
                                          stroke-opacity="1"
                                          stroke-linecap="butt"
                                          stroke-width="5"
                                          stroke-dasharray="0"
                                          class="apexcharts-pie-area apexcharts-donut-slice-1"
                                          index="0"
                                          j="1"
                                          data:angle="153"
                                          data:startAngle="90"
                                          data:strokeWidth="5"
                                          data:value="85"
                                          data:pathOrig="M 110.52439024390245 60.5 A 50.024390243902445 50.024390243902445 0 0 1 15.92794192413799 83.21059792599539 L 27.07095644310349 77.53294844449654 A 37.518292682926834 37.518292682926834 0 0 0 98.01829268292684 60.5 L 110.52439024390245 60.5 z"
                                          stroke="#ffffff"
                                        ></path>
                                      </g>
                                      <g
                                        id="SvgjsG1305"
                                        class="apexcharts-series apexcharts-pie-series"
                                        seriesName="Decor"
                                        rel="3"
                                        data:realIndex="2"
                                      >
                                        <path
                                          id="SvgjsPath1306"
                                          d="M 15.92794192413799 83.21059792599539 A 50.024390243902445 50.024390243902445 0 0 1 12.923977684844871 45.04161328138981 L 24.817983263633657 48.90620996104236 A 37.518292682926834 37.518292682926834 0 0 0 27.07095644310349 77.53294844449654 L 15.92794192413799 83.21059792599539 z"
                                          fill="rgba(133,146,163,1)"
                                          fill-opacity="1"
                                          stroke-opacity="1"
                                          stroke-linecap="butt"
                                          stroke-width="5"
                                          stroke-dasharray="0"
                                          class="apexcharts-pie-area apexcharts-donut-slice-2"
                                          index="0"
                                          j="2"
                                          data:angle="45"
                                          data:startAngle="243"
                                          data:strokeWidth="5"
                                          data:value="25"
                                          data:pathOrig="M 15.92794192413799 83.21059792599539 A 50.024390243902445 50.024390243902445 0 0 1 12.923977684844871 45.04161328138981 L 24.817983263633657 48.90620996104236 A 37.518292682926834 37.518292682926834 0 0 0 27.07095644310349 77.53294844449654 L 15.92794192413799 83.21059792599539 z"
                                          stroke="#ffffff"
                                        ></path>
                                      </g>
                                      <g
                                        id="SvgjsG1307"
                                        class="apexcharts-series apexcharts-pie-series"
                                        seriesName="Fashion"
                                        rel="4"
                                        data:realIndex="3"
                                      >
                                        <path
                                          id="SvgjsPath1308"
                                          d="M 12.923977684844871 45.04161328138981 A 50.024390243902445 50.024390243902445 0 0 1 60.491269096883734 10.475610518012587 L 60.4934518226628 22.98170788850944 A 37.518292682926834 37.518292682926834 0 0 0 24.817983263633657 48.90620996104236 L 12.923977684844871 45.04161328138981 z"
                                          fill="rgba(3,195,236,1)"
                                          fill-opacity="1"
                                          stroke-opacity="1"
                                          stroke-linecap="butt"
                                          stroke-width="5"
                                          stroke-dasharray="0"
                                          class="apexcharts-pie-area apexcharts-donut-slice-3"
                                          index="0"
                                          j="3"
                                          data:angle="72"
                                          data:startAngle="288"
                                          data:strokeWidth="5"
                                          data:value="40"
                                          data:pathOrig="M 12.923977684844871 45.04161328138981 A 50.024390243902445 50.024390243902445 0 0 1 60.491269096883734 10.475610518012587 L 60.4934518226628 22.98170788850944 A 37.518292682926834 37.518292682926834 0 0 0 24.817983263633657 48.90620996104236 L 12.923977684844871 45.04161328138981 z"
                                          stroke="#ffffff"
                                        ></path>
                                      </g>
                                    </g>
                                  </g>
                                  <g
                                    id="SvgjsG1309"
                                    class="apexcharts-datalabels-group"
                                    transform="translate(0, 0) scale(1)"
                                  >
                                    <text
                                      id="SvgjsText1310"
                                      font-family="Helvetica, Arial, sans-serif"
                                      x="60.5"
                                      y="77.5"
                                      text-anchor="middle"
                                      dominant-baseline="auto"
                                      font-size="13px"
                                      font-weight="400"
                                      fill="#646e78"
                                      class="apexcharts-text apexcharts-datalabel-label"
                                      style="
                                        font-family: Helvetica, Arial,
                                          sans-serif;
                                      "
                                    >
                                      Weekly
                                    </text>
                                    <text
                                      id="SvgjsText1311"
                                      font-family="Public Sans"
                                      x="60.5"
                                      y="59.5"
                                      text-anchor="middle"
                                      dominant-baseline="auto"
                                      font-size="18px"
                                      font-weight="500"
                                      fill="#384551"
                                      class="apexcharts-text apexcharts-datalabel-value"
                                      style="font-family: 'Public Sans'"
                                    >
                                      38%
                                    </text>
                                  </g>
                                </g>
                                <line
                                  id="SvgjsLine1312"
                                  x1="0"
                                  y1="0"
                                  x2="121"
                                  y2="0"
                                  stroke="#b6b6b6"
                                  stroke-dasharray="0"
                                  stroke-width="1"
                                  stroke-linecap="butt"
                                  class="apexcharts-ycrosshairs"
                                ></line>
                                <line
                                  id="SvgjsLine1313"
                                  x1="0"
                                  y1="0"
                                  x2="121"
                                  y2="0"
                                  stroke-dasharray="0"
                                  stroke-width="0"
                                  stroke-linecap="butt"
                                  class="apexcharts-ycrosshairs-hidden"
                                ></line>
                              </g>
                              <g
                                id="SvgjsG1294"
                                class="apexcharts-annotations"
                              ></g>
                            </svg>
                            <div class="apexcharts-legend"></div>
                            <div
                              class="apexcharts-tooltip apexcharts-theme-dark"
                            >
                              <div
                                class="apexcharts-tooltip-series-group"
                                style="order: 1"
                              >
                                <span
                                  class="apexcharts-tooltip-marker"
                                  style="background-color: rgb(113, 221, 55)"
                                ></span>
                                <div
                                  class="apexcharts-tooltip-text"
                                  style="
                                    font-family: Helvetica, Arial, sans-serif;
                                    font-size: 12px;
                                  "
                                >
                                  <div class="apexcharts-tooltip-y-group">
                                    <span
                                      class="apexcharts-tooltip-text-y-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-y-value"
                                    ></span>
                                  </div>
                                  <div class="apexcharts-tooltip-goals-group">
                                    <span
                                      class="apexcharts-tooltip-text-goals-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-goals-value"
                                    ></span>
                                  </div>
                                  <div class="apexcharts-tooltip-z-group">
                                    <span
                                      class="apexcharts-tooltip-text-z-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-z-value"
                                    ></span>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="apexcharts-tooltip-series-group"
                                style="order: 2"
                              >
                                <span
                                  class="apexcharts-tooltip-marker"
                                  style="background-color: rgb(105, 108, 255)"
                                ></span>
                                <div
                                  class="apexcharts-tooltip-text"
                                  style="
                                    font-family: Helvetica, Arial, sans-serif;
                                    font-size: 12px;
                                  "
                                >
                                  <div class="apexcharts-tooltip-y-group">
                                    <span
                                      class="apexcharts-tooltip-text-y-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-y-value"
                                    ></span>
                                  </div>
                                  <div class="apexcharts-tooltip-goals-group">
                                    <span
                                      class="apexcharts-tooltip-text-goals-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-goals-value"
                                    ></span>
                                  </div>
                                  <div class="apexcharts-tooltip-z-group">
                                    <span
                                      class="apexcharts-tooltip-text-z-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-z-value"
                                    ></span>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="apexcharts-tooltip-series-group"
                                style="order: 3"
                              >
                                <span
                                  class="apexcharts-tooltip-marker"
                                  style="background-color: rgb(133, 146, 163)"
                                ></span>
                                <div
                                  class="apexcharts-tooltip-text"
                                  style="
                                    font-family: Helvetica, Arial, sans-serif;
                                    font-size: 12px;
                                  "
                                >
                                  <div class="apexcharts-tooltip-y-group">
                                    <span
                                      class="apexcharts-tooltip-text-y-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-y-value"
                                    ></span>
                                  </div>
                                  <div class="apexcharts-tooltip-goals-group">
                                    <span
                                      class="apexcharts-tooltip-text-goals-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-goals-value"
                                    ></span>
                                  </div>
                                  <div class="apexcharts-tooltip-z-group">
                                    <span
                                      class="apexcharts-tooltip-text-z-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-z-value"
                                    ></span>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="apexcharts-tooltip-series-group"
                                style="order: 4"
                              >
                                <span
                                  class="apexcharts-tooltip-marker"
                                  style="background-color: rgb(3, 195, 236)"
                                ></span>
                                <div
                                  class="apexcharts-tooltip-text"
                                  style="
                                    font-family: Helvetica, Arial, sans-serif;
                                    font-size: 12px;
                                  "
                                >
                                  <div class="apexcharts-tooltip-y-group">
                                    <span
                                      class="apexcharts-tooltip-text-y-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-y-value"
                                    ></span>
                                  </div>
                                  <div class="apexcharts-tooltip-goals-group">
                                    <span
                                      class="apexcharts-tooltip-text-goals-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-goals-value"
                                    ></span>
                                  </div>
                                  <div class="apexcharts-tooltip-z-group">
                                    <span
                                      class="apexcharts-tooltip-text-z-label"
                                    ></span
                                    ><span
                                      class="apexcharts-tooltip-text-z-value"
                                    ></span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="resize-triggers">
                          <div class="expand-trigger">
                            <div style="width: 398px; height: 119px"></div>
                          </div>
                          <div class="contract-trigger"></div>
                        </div>
                      </div>
                      <ul class="p-0 m-0">
                        <li class="d-flex align-items-center mb-5">
                          <div class="avatar flex-shrink-0 me-3">
                            <span
                              class="avatar-initial rounded bg-label-primary"
                              ><i class="bx bx-mobile-alt"></i
                            ></span>
                          </div>
                          <div
                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2"
                          >
                            <div class="me-2">
                              <h6 class="mb-0">Electronic</h6>
                              <small>Mobile, Earbuds, TV</small>
                            </div>
                            <div class="user-progress">
                              <h6 class="mb-0">82.5k</h6>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex align-items-center mb-5">
                          <div class="avatar flex-shrink-0 me-3">
                            <span
                              class="avatar-initial rounded bg-label-success"
                              ><i class="bx bx-closet"></i
                            ></span>
                          </div>
                          <div
                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2"
                          >
                            <div class="me-2">
                              <h6 class="mb-0">Fashion</h6>
                              <small>T-shirt, Jeans, Shoes</small>
                            </div>
                            <div class="user-progress">
                              <h6 class="mb-0">23.8k</h6>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex align-items-center mb-5">
                          <div class="avatar flex-shrink-0 me-3">
                            <span class="avatar-initial rounded bg-label-info"
                              ><i class="bx bx-home-alt"></i
                            ></span>
                          </div>
                          <div
                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2"
                          >
                            <div class="me-2">
                              <h6 class="mb-0">Decor</h6>
                              <small>Fine Art, Dining</small>
                            </div>
                            <div class="user-progress">
                              <h6 class="mb-0">849k</h6>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex align-items-center">
                          <div class="avatar flex-shrink-0 me-3">
                            <span
                              class="avatar-initial rounded bg-label-secondary"
                              ><i class="bx bx-football"></i
                            ></span>
                          </div>
                          <div
                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2"
                          >
                            <div class="me-2">
                              <h6 class="mb-0">Sports</h6>
                              <small>Football, Cricket Kit</small>
                            </div>
                            <div class="user-progress">
                              <h6 class="mb-0">99</h6>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Order Statistics -->

                <!-- Expense Overview -->
                <div class="col-md-6 col-lg-4 order-1 mb-6">
                  <div class="card h-100">
                    <div class="card-header nav-align-top">
                      <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button
                            type="button"
                            class="nav-link active"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-tabs-line-card-income"
                            aria-controls="navs-tabs-line-card-income"
                            aria-selected="true"
                          >
                            Income
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button
                            type="button"
                            class="nav-link"
                            role="tab"
                            aria-selected="false"
                            tabindex="-1"
                          >
                            Expenses
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button
                            type="button"
                            class="nav-link"
                            role="tab"
                            aria-selected="false"
                            tabindex="-1"
                          >
                            Profit
                          </button>
                        </li>
                      </ul>
                    </div>
                    <div class="card-body">
                      <div class="tab-content p-0">
                        <div
                          class="tab-pane fade show active"
                          id="navs-tabs-line-card-income"
                          role="tabpanel"
                          style="position: relative"
                        >
                          <div class="d-flex mb-6">
                            <div class="avatar flex-shrink-0 me-3">
                              <img
                                src="../../assets/img/icons/unicons/wallet-primary.png"
                                alt="User"
                              />
                            </div>
                            <div>
                              <p class="mb-0">Total Balance</p>
                              <div class="d-flex align-items-center">
                                <h6 class="mb-0 me-1">$459.10</h6>
                                <small class="text-success fw-medium">
                                  <i class="bx bx-chevron-up bx-lg"></i>
                                  42.9%
                                </small>
                              </div>
                            </div>
                          </div>
                          <div id="incomeChart" style="min-height: 232px">
                            <div
                              id="apexchartsh1yev7v4f"
                              class="apexcharts-canvas apexchartsh1yev7v4f apexcharts-theme-light"
                              style="width: 397px; height: 232px"
                            >
                              <svg
                                id="SvgjsSvg1314"
                                width="397"
                                height="232"
                                xmlns="http://www.w3.org/2000/svg"
                                version="1.1"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                xmlns:svgjs="http://svgjs.dev"
                                class="apexcharts-svg apexcharts-zoomable"
                                xmlns:data="ApexChartsNS"
                                transform="translate(0, 0)"
                                style="background: transparent"
                              >
                                <g
                                  id="SvgjsG1316"
                                  class="apexcharts-inner apexcharts-graphical"
                                  transform="translate(10, 10)"
                                >
                                  <defs id="SvgjsDefs1315">
                                    <clipPath id="gridRectMaskh1yev7v4f">
                                      <rect
                                        id="SvgjsRect1321"
                                        width="376.6875"
                                        height="194.70079907417298"
                                        x="-3.5"
                                        y="-1.5"
                                        rx="0"
                                        ry="0"
                                        opacity="1"
                                        stroke-width="0"
                                        stroke="none"
                                        stroke-dasharray="0"
                                        fill="#fff"
                                      ></rect>
                                    </clipPath>
                                    <clipPath
                                      id="forecastMaskh1yev7v4f"
                                    ></clipPath>
                                    <clipPath
                                      id="nonForecastMaskh1yev7v4f"
                                    ></clipPath>
                                    <clipPath id="gridRectMarkerMaskh1yev7v4f">
                                      <rect
                                        id="SvgjsRect1322"
                                        width="397.6875"
                                        height="219.70079907417298"
                                        x="-14"
                                        y="-14"
                                        rx="0"
                                        ry="0"
                                        opacity="1"
                                        stroke-width="0"
                                        stroke="none"
                                        stroke-dasharray="0"
                                        fill="#fff"
                                      ></rect>
                                    </clipPath>
                                    <linearGradient
                                      id="SvgjsLinearGradient1340"
                                      x1="0"
                                      y1="0"
                                      x2="0"
                                      y2="1"
                                    >
                                      <stop
                                        id="SvgjsStop1341"
                                        stop-opacity="0.5"
                                        stop-color="rgba(105,108,255,0.5)"
                                        offset="0"
                                      ></stop>
                                      <stop
                                        id="SvgjsStop1342"
                                        stop-opacity="0.25"
                                        stop-color="rgba(195,196,255,0.25)"
                                        offset="0.95"
                                      ></stop>
                                      <stop
                                        id="SvgjsStop1343"
                                        stop-opacity="0.25"
                                        stop-color="rgba(195,196,255,0.25)"
                                        offset="1"
                                      ></stop>
                                    </linearGradient>
                                  </defs>
                                  <line
                                    id="SvgjsLine1320"
                                    x1="0"
                                    y1="0"
                                    x2="0"
                                    y2="191.70079907417298"
                                    stroke="#b6b6b6"
                                    stroke-dasharray="3"
                                    stroke-linecap="butt"
                                    class="apexcharts-xcrosshairs"
                                    x="0"
                                    y="0"
                                    width="1"
                                    height="191.70079907417298"
                                    fill="#b1b9c4"
                                    filter="none"
                                    fill-opacity="0.9"
                                    stroke-width="1"
                                  ></line>
                                  <g
                                    id="SvgjsG1346"
                                    class="apexcharts-xaxis"
                                    transform="translate(0, 0)"
                                  >
                                    <g
                                      id="SvgjsG1347"
                                      class="apexcharts-xaxis-texts-g"
                                      transform="translate(0, -4)"
                                    >
                                      <text
                                        id="SvgjsText1349"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="0"
                                        y="220.70079907417298"
                                        text-anchor="middle"
                                        dominant-baseline="auto"
                                        font-size="13px"
                                        font-weight="400"
                                        fill="#a7acb2"
                                        class="apexcharts-text apexcharts-xaxis-label"
                                        style="
                                          font-family: Helvetica, Arial,
                                            sans-serif;
                                        "
                                      >
                                        <tspan id="SvgjsTspan1350">Jan</tspan>
                                        <title>Jan</title>
                                      </text>
                                      <text
                                        id="SvgjsText1352"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="61.61458333333333"
                                        y="220.70079907417298"
                                        text-anchor="middle"
                                        dominant-baseline="auto"
                                        font-size="13px"
                                        font-weight="400"
                                        fill="#a7acb2"
                                        class="apexcharts-text apexcharts-xaxis-label"
                                        style="
                                          font-family: Helvetica, Arial,
                                            sans-serif;
                                        "
                                      >
                                        <tspan id="SvgjsTspan1353">Feb</tspan>
                                        <title>Feb</title>
                                      </text>
                                      <text
                                        id="SvgjsText1355"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="123.22916666666667"
                                        y="220.70079907417298"
                                        text-anchor="middle"
                                        dominant-baseline="auto"
                                        font-size="13px"
                                        font-weight="400"
                                        fill="#a7acb2"
                                        class="apexcharts-text apexcharts-xaxis-label"
                                        style="
                                          font-family: Helvetica, Arial,
                                            sans-serif;
                                        "
                                      >
                                        <tspan id="SvgjsTspan1356">Mar</tspan>
                                        <title>Mar</title>
                                      </text>
                                      <text
                                        id="SvgjsText1358"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="184.84375000000003"
                                        y="220.70079907417298"
                                        text-anchor="middle"
                                        dominant-baseline="auto"
                                        font-size="13px"
                                        font-weight="400"
                                        fill="#a7acb2"
                                        class="apexcharts-text apexcharts-xaxis-label"
                                        style="
                                          font-family: Helvetica, Arial,
                                            sans-serif;
                                        "
                                      >
                                        <tspan id="SvgjsTspan1359">Apr</tspan>
                                        <title>Apr</title>
                                      </text>
                                      <text
                                        id="SvgjsText1361"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="246.45833333333334"
                                        y="220.70079907417298"
                                        text-anchor="middle"
                                        dominant-baseline="auto"
                                        font-size="13px"
                                        font-weight="400"
                                        fill="#a7acb2"
                                        class="apexcharts-text apexcharts-xaxis-label"
                                        style="
                                          font-family: Helvetica, Arial,
                                            sans-serif;
                                        "
                                      >
                                        <tspan id="SvgjsTspan1362">May</tspan>
                                        <title>May</title>
                                      </text>
                                      <text
                                        id="SvgjsText1364"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="308.07291666666663"
                                        y="220.70079907417298"
                                        text-anchor="middle"
                                        dominant-baseline="auto"
                                        font-size="13px"
                                        font-weight="400"
                                        fill="#a7acb2"
                                        class="apexcharts-text apexcharts-xaxis-label"
                                        style="
                                          font-family: Helvetica, Arial,
                                            sans-serif;
                                        "
                                      >
                                        <tspan id="SvgjsTspan1365">Jun</tspan>
                                        <title>Jun</title>
                                      </text>
                                      <text
                                        id="SvgjsText1367"
                                        font-family="Helvetica, Arial, sans-serif"
                                        x="369.68749999999994"
                                        y="220.70079907417298"
                                        text-anchor="middle"
                                        dominant-baseline="auto"
                                        font-size="13px"
                                        font-weight="400"
                                        fill="#a7acb2"
                                        class="apexcharts-text apexcharts-xaxis-label"
                                        style="
                                          font-family: Helvetica, Arial,
                                            sans-serif;
                                        "
                                      >
                                        <tspan id="SvgjsTspan1368">Jul</tspan>
                                        <title>Jul</title>
                                      </text>
                                    </g>
                                  </g>
                                  <g id="SvgjsG1371" class="apexcharts-grid">
                                    <g
                                      id="SvgjsG1372"
                                      class="apexcharts-gridlines-horizontal"
                                    >
                                      <line
                                        id="SvgjsLine1374"
                                        x1="0"
                                        y1="0"
                                        x2="369.6875"
                                        y2="0"
                                        stroke="#e4e6e8"
                                        stroke-dasharray="8"
                                        stroke-linecap="butt"
                                        class="apexcharts-gridline"
                                      ></line>
                                      <line
                                        id="SvgjsLine1375"
                                        x1="0"
                                        y1="47.925199768543244"
                                        x2="369.6875"
                                        y2="47.925199768543244"
                                        stroke="#e4e6e8"
                                        stroke-dasharray="8"
                                        stroke-linecap="butt"
                                        class="apexcharts-gridline"
                                      ></line>
                                      <line
                                        id="SvgjsLine1376"
                                        x1="0"
                                        y1="95.85039953708649"
                                        x2="369.6875"
                                        y2="95.85039953708649"
                                        stroke="#e4e6e8"
                                        stroke-dasharray="8"
                                        stroke-linecap="butt"
                                        class="apexcharts-gridline"
                                      ></line>
                                      <line
                                        id="SvgjsLine1377"
                                        x1="0"
                                        y1="143.77559930562973"
                                        x2="369.6875"
                                        y2="143.77559930562973"
                                        stroke="#e4e6e8"
                                        stroke-dasharray="8"
                                        stroke-linecap="butt"
                                        class="apexcharts-gridline"
                                      ></line>
                                      <line
                                        id="SvgjsLine1378"
                                        x1="0"
                                        y1="191.70079907417298"
                                        x2="369.6875"
                                        y2="191.70079907417298"
                                        stroke="#e4e6e8"
                                        stroke-dasharray="8"
                                        stroke-linecap="butt"
                                        class="apexcharts-gridline"
                                      ></line>
                                    </g>
                                    <g
                                      id="SvgjsG1373"
                                      class="apexcharts-gridlines-vertical"
                                    ></g>
                                    <line
                                      id="SvgjsLine1380"
                                      x1="0"
                                      y1="191.70079907417298"
                                      x2="369.6875"
                                      y2="191.70079907417298"
                                      stroke="transparent"
                                      stroke-dasharray="0"
                                      stroke-linecap="butt"
                                    ></line>
                                    <line
                                      id="SvgjsLine1379"
                                      x1="0"
                                      y1="1"
                                      x2="0"
                                      y2="191.70079907417298"
                                      stroke="transparent"
                                      stroke-dasharray="0"
                                      stroke-linecap="butt"
                                    ></line>
                                  </g>
                                  <g
                                    id="SvgjsG1323"
                                    class="apexcharts-area-series apexcharts-plot-series"
                                  >
                                    <g
                                      id="SvgjsG1324"
                                      class="apexcharts-series"
                                      seriesName="seriesx1"
                                      data:longestSeries="true"
                                      rel="1"
                                      data:realIndex="0"
                                    >
                                      <path
                                        id="SvgjsPath1344"
                                        d="M0 191.70079907417298L0 138.98307932877543C21.565104166666668 138.98307932877543 40.04947916666667 95.8503995370865 61.614583333333336 95.8503995370865C83.1796875 95.8503995370865 101.6640625 134.19055935192108 123.22916666666667 134.19055935192108C144.79427083333334 134.19055935192108 163.27864583333334 38.34015981483461 184.84375 38.34015981483461C206.40885416666666 38.34015981483461 224.89322916666669 115.02047944450379 246.45833333333334 115.02047944450379C268.0234375 115.02047944450379 286.5078125 71.88779965281486 308.0729166666667 71.88779965281486C329.63802083333337 71.88779965281486 348.12239583333337 100.64291951394083 369.6875 100.64291951394083C369.6875 100.64291951394083 369.6875 100.64291951394083 369.6875 191.70079907417298M369.6875 100.64291951394083C369.6875 100.64291951394083 369.6875 100.64291951394083 369.6875 100.64291951394083 "
                                        fill="url(#SvgjsLinearGradient1340)"
                                        fill-opacity="1"
                                        stroke-opacity="1"
                                        stroke-linecap="butt"
                                        stroke-width="0"
                                        stroke-dasharray="0"
                                        class="apexcharts-area"
                                        index="0"
                                        clip-path="url(#gridRectMaskh1yev7v4f)"
                                        pathTo="M 0 191.70079907417298L 0 138.98307932877543C 21.565104166666668 138.98307932877543 40.04947916666667 95.8503995370865 61.614583333333336 95.8503995370865C 83.1796875 95.8503995370865 101.6640625 134.19055935192108 123.22916666666667 134.19055935192108C 144.79427083333334 134.19055935192108 163.27864583333334 38.34015981483461 184.84375 38.34015981483461C 206.40885416666666 38.34015981483461 224.89322916666669 115.02047944450379 246.45833333333334 115.02047944450379C 268.0234375 115.02047944450379 286.5078125 71.88779965281486 308.0729166666667 71.88779965281486C 329.63802083333337 71.88779965281486 348.12239583333337 100.64291951394083 369.6875 100.64291951394083C 369.6875 100.64291951394083 369.6875 100.64291951394083 369.6875 191.70079907417298M 369.6875 100.64291951394083z"
                                        pathFrom="M -1 239.62599884271623L -1 239.62599884271623L 61.614583333333336 239.62599884271623L 123.22916666666667 239.62599884271623L 184.84375 239.62599884271623L 246.45833333333334 239.62599884271623L 308.0729166666667 239.62599884271623L 369.6875 239.62599884271623"
                                      ></path>
                                      <path
                                        id="SvgjsPath1345"
                                        d="M0 138.98307932877543C21.565104166666668 138.98307932877543 40.04947916666667 95.8503995370865 61.614583333333336 95.8503995370865C83.1796875 95.8503995370865 101.6640625 134.19055935192108 123.22916666666667 134.19055935192108C144.79427083333334 134.19055935192108 163.27864583333334 38.34015981483461 184.84375 38.34015981483461C206.40885416666666 38.34015981483461 224.89322916666669 115.02047944450379 246.45833333333334 115.02047944450379C268.0234375 115.02047944450379 286.5078125 71.88779965281486 308.0729166666667 71.88779965281486C329.63802083333337 71.88779965281486 348.12239583333337 100.64291951394083 369.6875 100.64291951394083C369.6875 100.64291951394083 369.6875 100.64291951394083 369.6875 100.64291951394083 "
                                        fill="none"
                                        fill-opacity="1"
                                        stroke="#696cff"
                                        stroke-opacity="1"
                                        stroke-linecap="butt"
                                        stroke-width="3"
                                        stroke-dasharray="0"
                                        class="apexcharts-area"
                                        index="0"
                                        clip-path="url(#gridRectMaskh1yev7v4f)"
                                        pathTo="M 0 138.98307932877543C 21.565104166666668 138.98307932877543 40.04947916666667 95.8503995370865 61.614583333333336 95.8503995370865C 83.1796875 95.8503995370865 101.6640625 134.19055935192108 123.22916666666667 134.19055935192108C 144.79427083333334 134.19055935192108 163.27864583333334 38.34015981483461 184.84375 38.34015981483461C 206.40885416666666 38.34015981483461 224.89322916666669 115.02047944450379 246.45833333333334 115.02047944450379C 268.0234375 115.02047944450379 286.5078125 71.88779965281486 308.0729166666667 71.88779965281486C 329.63802083333337 71.88779965281486 348.12239583333337 100.64291951394083 369.6875 100.64291951394083"
                                        pathFrom="M -1 239.62599884271623L -1 239.62599884271623L 61.614583333333336 239.62599884271623L 123.22916666666667 239.62599884271623L 184.84375 239.62599884271623L 246.45833333333334 239.62599884271623L 308.0729166666667 239.62599884271623L 369.6875 239.62599884271623"
                                      ></path>
                                      <g
                                        id="SvgjsG1325"
                                        class="apexcharts-series-markers-wrap"
                                        data:realIndex="0"
                                      >
                                        <g
                                          id="SvgjsG1327"
                                          class="apexcharts-series-markers"
                                          clip-path="url(#gridRectMarkerMaskh1yev7v4f)"
                                        >
                                          <circle
                                            id="SvgjsCircle1328"
                                            r="6"
                                            cx="0"
                                            cy="138.98307932877543"
                                            class="apexcharts-marker no-pointer-events warygk9r7"
                                            stroke="transparent"
                                            fill="transparent"
                                            fill-opacity="1"
                                            stroke-width="4"
                                            stroke-opacity="0.9"
                                            rel="0"
                                            j="0"
                                            index="0"
                                            default-marker-size="6"
                                          ></circle>
                                          <circle
                                            id="SvgjsCircle1329"
                                            r="6"
                                            cx="61.614583333333336"
                                            cy="95.8503995370865"
                                            class="apexcharts-marker no-pointer-events w4yr31qco"
                                            stroke="transparent"
                                            fill="transparent"
                                            fill-opacity="1"
                                            stroke-width="4"
                                            stroke-opacity="0.9"
                                            rel="1"
                                            j="1"
                                            index="0"
                                            default-marker-size="6"
                                          ></circle>
                                        </g>
                                        <g
                                          id="SvgjsG1330"
                                          class="apexcharts-series-markers"
                                          clip-path="url(#gridRectMarkerMaskh1yev7v4f)"
                                        >
                                          <circle
                                            id="SvgjsCircle1331"
                                            r="6"
                                            cx="123.22916666666667"
                                            cy="134.19055935192108"
                                            class="apexcharts-marker no-pointer-events w3m9uretx"
                                            stroke="transparent"
                                            fill="transparent"
                                            fill-opacity="1"
                                            stroke-width="4"
                                            stroke-opacity="0.9"
                                            rel="2"
                                            j="2"
                                            index="0"
                                            default-marker-size="6"
                                          ></circle>
                                        </g>
                                        <g
                                          id="SvgjsG1332"
                                          class="apexcharts-series-markers"
                                          clip-path="url(#gridRectMarkerMaskh1yev7v4f)"
                                        >
                                          <circle
                                            id="SvgjsCircle1333"
                                            r="6"
                                            cx="184.84375"
                                            cy="38.34015981483461"
                                            class="apexcharts-marker no-pointer-events wxxkbk61f"
                                            stroke="transparent"
                                            fill="transparent"
                                            fill-opacity="1"
                                            stroke-width="4"
                                            stroke-opacity="0.9"
                                            rel="3"
                                            j="3"
                                            index="0"
                                            default-marker-size="6"
                                          ></circle>
                                        </g>
                                        <g
                                          id="SvgjsG1334"
                                          class="apexcharts-series-markers"
                                          clip-path="url(#gridRectMarkerMaskh1yev7v4f)"
                                        >
                                          <circle
                                            id="SvgjsCircle1335"
                                            r="6"
                                            cx="246.45833333333334"
                                            cy="115.02047944450379"
                                            class="apexcharts-marker no-pointer-events wvomb1jqs"
                                            stroke="transparent"
                                            fill="transparent"
                                            fill-opacity="1"
                                            stroke-width="4"
                                            stroke-opacity="0.9"
                                            rel="4"
                                            j="4"
                                            index="0"
                                            default-marker-size="6"
                                          ></circle>
                                        </g>
                                        <g
                                          id="SvgjsG1336"
                                          class="apexcharts-series-markers"
                                          clip-path="url(#gridRectMarkerMaskh1yev7v4f)"
                                        >
                                          <circle
                                            id="SvgjsCircle1337"
                                            r="6"
                                            cx="308.0729166666667"
                                            cy="71.88779965281486"
                                            class="apexcharts-marker no-pointer-events wmkp732lw"
                                            stroke="transparent"
                                            fill="transparent"
                                            fill-opacity="1"
                                            stroke-width="4"
                                            stroke-opacity="0.9"
                                            rel="5"
                                            j="5"
                                            index="0"
                                            default-marker-size="6"
                                          ></circle>
                                        </g>
                                        <g
                                          id="SvgjsG1338"
                                          class="apexcharts-series-markers"
                                          clip-path="url(#gridRectMarkerMaskh1yev7v4f)"
                                        >
                                          <circle
                                            id="SvgjsCircle1339"
                                            r="6"
                                            cx="369.6875"
                                            cy="100.64291951394083"
                                            class="apexcharts-marker no-pointer-events wd7yfy8hn"
                                            stroke="#696cff"
                                            fill="#ffffff"
                                            fill-opacity="1"
                                            stroke-width="4"
                                            stroke-opacity="0.9"
                                            rel="6"
                                            j="6"
                                            index="0"
                                            default-marker-size="6"
                                          ></circle>
                                        </g>
                                      </g>
                                    </g>
                                    <g
                                      id="SvgjsG1326"
                                      class="apexcharts-datalabels"
                                      data:realIndex="0"
                                    ></g>
                                  </g>
                                  <line
                                    id="SvgjsLine1381"
                                    x1="0"
                                    y1="0"
                                    x2="369.6875"
                                    y2="0"
                                    stroke="#b6b6b6"
                                    stroke-dasharray="0"
                                    stroke-width="1"
                                    stroke-linecap="butt"
                                    class="apexcharts-ycrosshairs"
                                  ></line>
                                  <line
                                    id="SvgjsLine1382"
                                    x1="0"
                                    y1="0"
                                    x2="369.6875"
                                    y2="0"
                                    stroke-dasharray="0"
                                    stroke-width="0"
                                    stroke-linecap="butt"
                                    class="apexcharts-ycrosshairs-hidden"
                                  ></line>
                                  <g
                                    id="SvgjsG1383"
                                    class="apexcharts-yaxis-annotations"
                                  ></g>
                                  <g
                                    id="SvgjsG1384"
                                    class="apexcharts-xaxis-annotations"
                                  ></g>
                                  <g
                                    id="SvgjsG1385"
                                    class="apexcharts-point-annotations"
                                  ></g>
                                  <rect
                                    id="SvgjsRect1386"
                                    width="0"
                                    height="0"
                                    x="0"
                                    y="0"
                                    rx="0"
                                    ry="0"
                                    opacity="1"
                                    stroke-width="0"
                                    stroke="none"
                                    stroke-dasharray="0"
                                    fill="#fefefe"
                                    class="apexcharts-zoom-rect"
                                  ></rect>
                                  <rect
                                    id="SvgjsRect1387"
                                    width="0"
                                    height="0"
                                    x="0"
                                    y="0"
                                    rx="0"
                                    ry="0"
                                    opacity="1"
                                    stroke-width="0"
                                    stroke="none"
                                    stroke-dasharray="0"
                                    fill="#fefefe"
                                    class="apexcharts-selection-rect"
                                  ></rect>
                                </g>
                                <rect
                                  id="SvgjsRect1319"
                                  width="0"
                                  height="0"
                                  x="0"
                                  y="0"
                                  rx="0"
                                  ry="0"
                                  opacity="1"
                                  stroke-width="0"
                                  stroke="none"
                                  stroke-dasharray="0"
                                  fill="#fefefe"
                                ></rect>
                                <g
                                  id="SvgjsG1369"
                                  class="apexcharts-yaxis"
                                  rel="0"
                                  transform="translate(-8, 0)"
                                >
                                  <g
                                    id="SvgjsG1370"
                                    class="apexcharts-yaxis-texts-g"
                                  ></g>
                                </g>
                                <g
                                  id="SvgjsG1317"
                                  class="apexcharts-annotations"
                                ></g>
                              </svg>
                              <div
                                class="apexcharts-legend"
                                style="max-height: 116px"
                              ></div>
                              <div
                                class="apexcharts-tooltip apexcharts-theme-light"
                              >
                                <div
                                  class="apexcharts-tooltip-title"
                                  style="
                                    font-family: Helvetica, Arial, sans-serif;
                                    font-size: 12px;
                                  "
                                ></div>
                                <div
                                  class="apexcharts-tooltip-series-group"
                                  style="order: 1"
                                >
                                  <span
                                    class="apexcharts-tooltip-marker"
                                    style="background-color: rgb(105, 108, 255)"
                                  ></span>
                                  <div
                                    class="apexcharts-tooltip-text"
                                    style="
                                      font-family: Helvetica, Arial, sans-serif;
                                      font-size: 12px;
                                    "
                                  >
                                    <div class="apexcharts-tooltip-y-group">
                                      <span
                                        class="apexcharts-tooltip-text-y-label"
                                      ></span
                                      ><span
                                        class="apexcharts-tooltip-text-y-value"
                                      ></span>
                                    </div>
                                    <div class="apexcharts-tooltip-goals-group">
                                      <span
                                        class="apexcharts-tooltip-text-goals-label"
                                      ></span
                                      ><span
                                        class="apexcharts-tooltip-text-goals-value"
                                      ></span>
                                    </div>
                                    <div class="apexcharts-tooltip-z-group">
                                      <span
                                        class="apexcharts-tooltip-text-z-label"
                                      ></span
                                      ><span
                                        class="apexcharts-tooltip-text-z-value"
                                      ></span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div
                                class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"
                              >
                                <div
                                  class="apexcharts-xaxistooltip-text"
                                  style="
                                    font-family: Helvetica, Arial, sans-serif;
                                    font-size: 12px;
                                  "
                                ></div>
                              </div>
                              <div
                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"
                              >
                                <div class="apexcharts-yaxistooltip-text"></div>
                              </div>
                            </div>
                          </div>
                          <div
                            class="d-flex align-items-center justify-content-center mt-6 gap-3"
                          >
                            <div
                              class="flex-shrink-0"
                              style="position: relative"
                            >
                              <div
                                id="expensesOfWeek"
                                style="min-height: 57.7px"
                              >
                                <div
                                  id="apexcharts8kcjq72ah"
                                  class="apexcharts-canvas apexcharts8kcjq72ah apexcharts-theme-light"
                                  style="width: 60px; height: 57.7px"
                                >
                                  <svg
                                    id="SvgjsSvg1388"
                                    width="60"
                                    height="57.7"
                                    xmlns="http://www.w3.org/2000/svg"
                                    version="1.1"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    xmlns:svgjs="http://svgjs.dev"
                                    class="apexcharts-svg"
                                    xmlns:data="ApexChartsNS"
                                    transform="translate(0, 0)"
                                    style="background: transparent"
                                  >
                                    <g
                                      id="SvgjsG1390"
                                      class="apexcharts-inner apexcharts-graphical"
                                      transform="translate(-10, -10)"
                                    >
                                      <defs id="SvgjsDefs1389">
                                        <clipPath id="gridRectMask8kcjq72ah">
                                          <rect
                                            id="SvgjsRect1392"
                                            width="86"
                                            height="87"
                                            x="-3"
                                            y="-1"
                                            rx="0"
                                            ry="0"
                                            opacity="1"
                                            stroke-width="0"
                                            stroke="none"
                                            stroke-dasharray="0"
                                            fill="#fff"
                                          ></rect>
                                        </clipPath>
                                        <clipPath
                                          id="forecastMask8kcjq72ah"
                                        ></clipPath>
                                        <clipPath
                                          id="nonForecastMask8kcjq72ah"
                                        ></clipPath>
                                        <clipPath
                                          id="gridRectMarkerMask8kcjq72ah"
                                        >
                                          <rect
                                            id="SvgjsRect1393"
                                            width="84"
                                            height="89"
                                            x="-2"
                                            y="-2"
                                            rx="0"
                                            ry="0"
                                            opacity="1"
                                            stroke-width="0"
                                            stroke="none"
                                            stroke-dasharray="0"
                                            fill="#fff"
                                          ></rect>
                                        </clipPath>
                                      </defs>
                                      <g
                                        id="SvgjsG1394"
                                        class="apexcharts-radialbar"
                                      >
                                        <g id="SvgjsG1395">
                                          <g
                                            id="SvgjsG1396"
                                            class="apexcharts-tracks"
                                          >
                                            <g
                                              id="SvgjsG1397"
                                              class="apexcharts-radialbar-track apexcharts-track"
                                              rel="1"
                                            >
                                              <path
                                                id="apexcharts-radialbarTrack-0"
                                                d="M 40 19.336585365853654 A 20.663414634146346 20.663414634146346 0 1 1 39.9963935538176 19.336585680575453"
                                                fill="none"
                                                fill-opacity="1"
                                                stroke="rgba(228,230,232,0.85)"
                                                stroke-opacity="1"
                                                stroke-linecap="round"
                                                stroke-width="4.760097560975613"
                                                stroke-dasharray="0"
                                                class="apexcharts-radialbar-area"
                                                data:pathOrig="M 40 19.336585365853654 A 20.663414634146346 20.663414634146346 0 1 1 39.9963935538176 19.336585680575453"
                                              ></path>
                                            </g>
                                          </g>
                                          <g id="SvgjsG1399">
                                            <g
                                              id="SvgjsG1403"
                                              class="apexcharts-series apexcharts-radial-series"
                                              seriesName="seriesx1"
                                              rel="1"
                                              data:realIndex="0"
                                            >
                                              <path
                                                id="SvgjsPath1404"
                                                d="M 40 19.336585365853654 A 20.663414634146346 20.663414634146346 0 1 1 23.28294639915962 52.1456503839557"
                                                fill="none"
                                                fill-opacity="0.85"
                                                stroke="rgba(105,108,255,0.85)"
                                                stroke-opacity="1"
                                                stroke-linecap="round"
                                                stroke-width="4.907317073170734"
                                                stroke-dasharray="0"
                                                class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                data:angle="234"
                                                data:value="65"
                                                index="0"
                                                j="0"
                                                data:pathOrig="M 40 19.336585365853654 A 20.663414634146346 20.663414634146346 0 1 1 23.28294639915962 52.1456503839557"
                                              ></path>
                                            </g>
                                            <circle
                                              id="SvgjsCircle1400"
                                              r="16.283365853658538"
                                              cx="40"
                                              cy="40"
                                              class="apexcharts-radialbar-hollow"
                                              fill="transparent"
                                            ></circle>
                                            <g
                                              id="SvgjsG1401"
                                              class="apexcharts-datalabels-group"
                                              transform="translate(0, 0) scale(1)"
                                              style="opacity: 1"
                                            >
                                              <text
                                                id="SvgjsText1402"
                                                font-family="Public Sans"
                                                x="40"
                                                y="45"
                                                text-anchor="middle"
                                                dominant-baseline="auto"
                                                font-size="12px"
                                                font-weight="400"
                                                fill="#646e78"
                                                class="apexcharts-text apexcharts-datalabel-value"
                                                style="
                                                  font-family: 'Public Sans';
                                                "
                                              >
                                                $65
                                              </text>
                                            </g>
                                          </g>
                                        </g>
                                      </g>
                                      <line
                                        id="SvgjsLine1405"
                                        x1="0"
                                        y1="0"
                                        x2="80"
                                        y2="0"
                                        stroke="#b6b6b6"
                                        stroke-dasharray="0"
                                        stroke-width="1"
                                        stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs"
                                      ></line>
                                      <line
                                        id="SvgjsLine1406"
                                        x1="0"
                                        y1="0"
                                        x2="80"
                                        y2="0"
                                        stroke-dasharray="0"
                                        stroke-width="0"
                                        stroke-linecap="butt"
                                        class="apexcharts-ycrosshairs-hidden"
                                      ></line>
                                    </g>
                                    <g
                                      id="SvgjsG1391"
                                      class="apexcharts-annotations"
                                    ></g>
                                  </svg>
                                  <div class="apexcharts-legend"></div>
                                </div>
                              </div>
                              <div class="resize-triggers">
                                <div class="expand-trigger">
                                  <div style="width: 61px; height: 59px"></div>
                                </div>
                                <div class="contract-trigger"></div>
                              </div>
                            </div>
                            <div>
                              <h6 class="mb-0">Income this week</h6>
                              <small>$39k less than last week</small>
                            </div>
                          </div>
                          <div class="resize-triggers">
                            <div class="expand-trigger">
                              <div style="width: 398px; height: 383px"></div>
                            </div>
                            <div class="contract-trigger"></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ Expense Overview -->

                <!-- Transactions -->
                <div class="col-md-6 col-lg-4 order-2 mb-6">
                  <div class="card h-100">
                    <div
                      class="card-header d-flex align-items-center justify-content-between"
                    >
                      <h5 class="card-title m-0 me-2">Transactions</h5>
                      <div class="dropdown">
                        <button
                          class="btn text-muted p-0"
                          type="button"
                          id="transactionID"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="bx bx-dots-vertical-rounded bx-lg"></i>
                        </button>
                        <div
                          class="dropdown-menu dropdown-menu-end"
                          aria-labelledby="transactionID"
                        >
                          <a class="dropdown-item" href="javascript:void(0);"
                            >Last 28 Days</a
                          >
                          <a class="dropdown-item" href="javascript:void(0);"
                            >Last Month</a
                          >
                          <a class="dropdown-item" href="javascript:void(0);"
                            >Last Year</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="card-body pt-4">
                      <ul class="p-0 m-0">
                        <li class="d-flex align-items-center mb-6">
                          <div class="avatar flex-shrink-0 me-3">
                            <img
                              src="../../assets/img/icons/unicons/paypal.png"
                              alt="User"
                              class="rounded"
                            />
                          </div>
                          <div
                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2"
                          >
                            <div class="me-2">
                              <small class="d-block">Paypal</small>
                              <h6 class="fw-normal mb-0">Send money</h6>
                            </div>
                            <div
                              class="user-progress d-flex align-items-center gap-2"
                            >
                              <h6 class="fw-normal mb-0">+82.6</h6>
                              <span class="text-muted">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex align-items-center mb-6">
                          <div class="avatar flex-shrink-0 me-3">
                            <img
                              src="../../assets/img/icons/unicons/wallet.png"
                              alt="User"
                              class="rounded"
                            />
                          </div>
                          <div
                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2"
                          >
                            <div class="me-2">
                              <small class="d-block">Wallet</small>
                              <h6 class="fw-normal mb-0">Mac'D</h6>
                            </div>
                            <div
                              class="user-progress d-flex align-items-center gap-2"
                            >
                              <h6 class="fw-normal mb-0">+270.69</h6>
                              <span class="text-muted">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex align-items-center mb-6">
                          <div class="avatar flex-shrink-0 me-3">
                            <img
                              src="../../assets/img/icons/unicons/chart.png"
                              alt="User"
                              class="rounded"
                            />
                          </div>
                          <div
                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2"
                          >
                            <div class="me-2">
                              <small class="d-block">Transfer</small>
                              <h6 class="fw-normal mb-0">Refund</h6>
                            </div>
                            <div
                              class="user-progress d-flex align-items-center gap-2"
                            >
                              <h6 class="fw-normal mb-0">+637.91</h6>
                              <span class="text-muted">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex align-items-center mb-6">
                          <div class="avatar flex-shrink-0 me-3">
                            <img
                              src="../../assets/img/icons/unicons/cc-primary.png"
                              alt="User"
                              class="rounded"
                            />
                          </div>
                          <div
                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2"
                          >
                            <div class="me-2">
                              <small class="d-block">Credit Card</small>
                              <h6 class="fw-normal mb-0">Ordered Food</h6>
                            </div>
                            <div
                              class="user-progress d-flex align-items-center gap-2"
                            >
                              <h6 class="fw-normal mb-0">-838.71</h6>
                              <span class="text-muted">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex align-items-center mb-6">
                          <div class="avatar flex-shrink-0 me-3">
                            <img
                              src="../../assets/img/icons/unicons/wallet.png"
                              alt="User"
                              class="rounded"
                            />
                          </div>
                          <div
                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2"
                          >
                            <div class="me-2">
                              <small class="d-block">Wallet</small>
                              <h6 class="fw-normal mb-0">Starbucks</h6>
                            </div>
                            <div
                              class="user-progress d-flex align-items-center gap-2"
                            >
                              <h6 class="fw-normal mb-0">+203.33</h6>
                              <span class="text-muted">USD</span>
                            </div>
                          </div>
                        </li>
                        <li class="d-flex align-items-center">
                          <div class="avatar flex-shrink-0 me-3">
                            <img
                              src="../../assets/img/icons/unicons/cc-warning.png"
                              alt="User"
                              class="rounded"
                            />
                          </div>
                          <div
                            class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2"
                          >
                            <div class="me-2">
                              <small class="d-block">Mastercard</small>
                              <h6 class="fw-normal mb-0">Ordered Food</h6>
                            </div>
                            <div
                              class="user-progress d-flex align-items-center gap-2"
                            >
                              <h6 class="fw-normal mb-0">-92.45</h6>
                              <span class="text-muted">USD</span>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Transactions -->
                <!-- Activity Timeline -->
                <div class="col-md-12 col-lg-6 order-4 order-lg-3">
                  <div class="card h-100">
                    <div class="card-header d-flex justify-content-between">
                      <h5 class="card-title m-0 me-2">Activity Timeline</h5>
                      <div class="dropdown">
                        <button
                          class="btn text-muted p-0"
                          type="button"
                          id="timelineWapper"
                          data-bs-toggle="dropdown"
                          aria-haspopup="true"
                          aria-expanded="false"
                        >
                          <i class="bx bx-dots-vertical-rounded bx-lg"></i>
                        </button>
                        <div
                          class="dropdown-menu dropdown-menu-end"
                          aria-labelledby="timelineWapper"
                        >
                          <a class="dropdown-item" href="javascript:void(0);"
                            >Select All</a
                          >
                          <a class="dropdown-item" href="javascript:void(0);"
                            >Refresh</a
                          >
                          <a class="dropdown-item" href="javascript:void(0);"
                            >Share</a
                          >
                        </div>
                      </div>
                    </div>
                    <div class="card-body pt-2">
                      <ul class="timeline mb-0">
                        <li class="timeline-item timeline-item-transparent">
                          <span
                            class="timeline-point timeline-point-primary"
                          ></span>
                          <div class="timeline-event">
                            <div class="timeline-header mb-3">
                              <h6 class="mb-0">12 Invoices have been paid</h6>
                              <small class="text-muted">12 min ago</small>
                            </div>
                            <p class="mb-2">
                              Invoices have been paid to the company
                            </p>
                            <div class="d-flex align-items-center mb-1">
                              <div class="badge bg-lighter rounded-2">
                                <img
                                  src="../../assets//img/icons/misc/pdf.png"
                                  alt="img"
                                  width="15"
                                  class="me-2"
                                />
                                <span class="h6 mb-0 text-body"
                                  >invoices.pdf</span
                                >
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent">
                          <span
                            class="timeline-point timeline-point-success"
                          ></span>
                          <div class="timeline-event">
                            <div class="timeline-header mb-3">
                              <h6 class="mb-0">Client Meeting</h6>
                              <small class="text-muted">45 min ago</small>
                            </div>
                            <p class="mb-2">
                              Project meeting with john @10:15am
                            </p>
                            <div
                              class="d-flex justify-content-between flex-wrap gap-2"
                            >
                              <div class="d-flex flex-wrap align-items-center">
                                <div class="avatar avatar-sm me-2">
                                  <img
                                    src="../../assets/img/avatars/1.png"
                                    alt="Avatar"
                                    class="rounded-circle"
                                  />
                                </div>
                                <div>
                                  <p class="mb-0 small fw-medium">
                                    Lester McCarthy (Client)
                                  </p>
                                  <small>CEO of ThemeSelection</small>
                                </div>
                              </div>
                            </div>
                          </div>
                        </li>
                        <li class="timeline-item timeline-item-transparent">
                          <span
                            class="timeline-point timeline-point-info"
                          ></span>
                          <div class="timeline-event">
                            <div class="timeline-header mb-3">
                              <h6 class="mb-0">
                                Create a new project for client
                              </h6>
                              <small class="text-muted">2 Day Ago</small>
                            </div>
                            <p class="mb-2">6 team members in a project</p>
                            <ul class="list-group list-group-flush">
                              <li
                                class="list-group-item d-flex justify-content-between align-items-center flex-wrap p-0"
                              >
                                <div
                                  class="d-flex flex-wrap align-items-center"
                                >
                                  <ul
                                    class="list-unstyled users-list d-flex align-items-center avatar-group m-0 me-2"
                                  >
                                    <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar pull-up"
                                      aria-label="Vinnie Mostowy"
                                      data-bs-original-title="Vinnie Mostowy"
                                    >
                                      <img
                                        class="rounded-circle"
                                        src="../../assets/img/avatars/5.png"
                                        alt="Avatar"
                                      />
                                    </li>
                                    <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar pull-up"
                                      aria-label="Allen Rieske"
                                      data-bs-original-title="Allen Rieske"
                                    >
                                      <img
                                        class="rounded-circle"
                                        src="../../assets/img/avatars/12.png"
                                        alt="Avatar"
                                      />
                                    </li>
                                    <li
                                      data-bs-toggle="tooltip"
                                      data-popup="tooltip-custom"
                                      data-bs-placement="top"
                                      class="avatar pull-up"
                                      aria-label="Julee Rossignol"
                                      data-bs-original-title="Julee Rossignol"
                                    >
                                      <img
                                        class="rounded-circle"
                                        src="../../assets/img/avatars/6.png"
                                        alt="Avatar"
                                      />
                                    </li>
                                    <li class="avatar">
                                      <span
                                        class="avatar-initial rounded-circle pull-up text-heading"
                                        data-bs-toggle="tooltip"
                                        data-bs-placement="bottom"
                                        data-bs-original-title="3 more"
                                        >+3</span
                                      >
                                    </li>
                                  </ul>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!--/ Activity Timeline -->
                <!-- pill table -->
                <div class="col-md-6 order-3 order-lg-4 mb-6 mb-lg-0">
                  <div class="card text-center h-100">
                    <div class="card-header nav-align-top">
                      <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button
                            type="button"
                            class="nav-link active"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-pills-browser"
                            aria-controls="navs-pills-browser"
                            aria-selected="true"
                          >
                            Browser
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button
                            type="button"
                            class="nav-link"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-pills-os"
                            aria-controls="navs-pills-os"
                            aria-selected="false"
                            tabindex="-1"
                          >
                            Operating System
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button
                            type="button"
                            class="nav-link"
                            role="tab"
                            data-bs-toggle="tab"
                            data-bs-target="#navs-pills-country"
                            aria-controls="navs-pills-country"
                            aria-selected="false"
                            tabindex="-1"
                          >
                            Country
                          </button>
                        </li>
                      </ul>
                    </div>
                    <div class="tab-content pt-0 pb-4">
                      <div
                        class="tab-pane fade show active"
                        id="navs-pills-browser"
                        role="tabpanel"
                      >
                        <div class="table-responsive text-start text-nowrap">
                          <table class="table table-borderless">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Browser</th>
                                <th>Visits</th>
                                <th class="w-50">Data In Percentage</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img
                                      src="../../assets/img/icons/brands/chrome.png"
                                      alt="Chrome"
                                      height="24"
                                      class="me-3"
                                    />
                                    <span class="text-heading">Chrome</span>
                                  </div>
                                </td>
                                <td class="text-heading">8.92k</td>
                                <td>
                                  <div
                                    class="d-flex justify-content-between align-items-center gap-4"
                                  >
                                    <div
                                      class="progress w-100"
                                      style="height: 10px"
                                    >
                                      <div
                                        class="progress-bar bg-success"
                                        role="progressbar"
                                        style="width: 64.75%"
                                        aria-valuenow="64.75"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                      ></div>
                                    </div>
                                    <small class="fw-medium">64.75%</small>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img
                                      src="../../assets/img/icons/brands/safari.png"
                                      alt="Safari"
                                      height="24"
                                      class="me-3"
                                    />
                                    <span class="text-heading">Safari</span>
                                  </div>
                                </td>
                                <td class="text-heading">1.29k</td>
                                <td>
                                  <div
                                    class="d-flex justify-content-between align-items-center gap-4"
                                  >
                                    <div
                                      class="progress w-100"
                                      style="height: 10px"
                                    >
                                      <div
                                        class="progress-bar bg-primary"
                                        role="progressbar"
                                        style="width: 18.43%"
                                        aria-valuenow="18.43"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                      ></div>
                                    </div>
                                    <small class="fw-medium">18.43%</small>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img
                                      src="../../assets/img/icons/brands/firefox.png"
                                      alt="Firefox"
                                      height="24"
                                      class="me-3"
                                    />
                                    <span class="text-heading">Firefox</span>
                                  </div>
                                </td>
                                <td class="text-heading">328</td>
                                <td>
                                  <div
                                    class="d-flex justify-content-between align-items-center gap-4"
                                  >
                                    <div
                                      class="progress w-100"
                                      style="height: 10px"
                                    >
                                      <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 8.37%"
                                        aria-valuenow="8.37"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                      ></div>
                                    </div>
                                    <small class="fw-medium">8.37%</small>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img
                                      src="../../assets/img/icons/brands/edge.png"
                                      alt="Edge"
                                      height="24"
                                      class="me-3"
                                    />
                                    <span class="text-heading">Edge</span>
                                  </div>
                                </td>
                                <td class="text-heading">142</td>
                                <td>
                                  <div
                                    class="d-flex justify-content-between align-items-center gap-4"
                                  >
                                    <div
                                      class="progress w-100"
                                      style="height: 10px"
                                    >
                                      <div
                                        class="progress-bar bg-warning"
                                        role="progressbar"
                                        style="width: 6.12%"
                                        aria-valuenow="6.12"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                      ></div>
                                    </div>
                                    <small class="fw-medium">6.12%</small>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img
                                      src="../../assets/img/icons/brands/opera.png"
                                      alt="Opera"
                                      height="24"
                                      class="me-3"
                                    />
                                    <span class="text-heading">Opera</span>
                                  </div>
                                </td>
                                <td class="text-heading">82</td>
                                <td>
                                  <div
                                    class="d-flex justify-content-between align-items-center gap-4"
                                  >
                                    <div
                                      class="progress w-100"
                                      style="height: 10px"
                                    >
                                      <div
                                        class="progress-bar bg-danger"
                                        role="progressbar"
                                        style="width: 2.12%"
                                        aria-valuenow="1.94"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                      ></div>
                                    </div>
                                    <small class="fw-medium">2.12%</small>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>6</td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img
                                      src="../../assets/img/icons/brands/uc.png"
                                      alt="uc"
                                      height="24"
                                      class="me-3"
                                    />
                                    <span class="text-heading">UC Browser</span>
                                  </div>
                                </td>
                                <td class="text-heading">328</td>
                                <td>
                                  <div
                                    class="d-flex justify-content-between align-items-center gap-4"
                                  >
                                    <div
                                      class="progress w-100"
                                      style="height: 10px"
                                    >
                                      <div
                                        class="progress-bar bg-danger"
                                        role="progressbar"
                                        style="width: 20.14%"
                                        aria-valuenow="1.94"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                      ></div>
                                    </div>
                                    <small class="fw-medium">20.14%</small>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div
                        class="tab-pane fade"
                        id="navs-pills-os"
                        role="tabpanel"
                      >
                        <div class="table-responsive text-start text-nowrap">
                          <table class="table table-borderless">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>System</th>
                                <th>Visits</th>
                                <th class="w-50">Data In Percentage</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img
                                      src="../../assets/img/icons/brands/windows.png"
                                      alt="Windows"
                                      height="24"
                                      class="me-3"
                                    />
                                    <span class="text-heading">Windows</span>
                                  </div>
                                </td>
                                <td class="text-heading">875.24k</td>
                                <td>
                                  <div
                                    class="d-flex justify-content-between align-items-center gap-4"
                                  >
                                    <div
                                      class="progress w-100"
                                      style="height: 10px"
                                    >
                                      <div
                                        class="progress-bar bg-success"
                                        role="progressbar"
                                        style="width: 61.5%"
                                        aria-valuenow="61.50"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                      ></div>
                                    </div>
                                    <small class="fw-medium">61.50%</small>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img
                                      src="../../assets/img/icons/brands/mac.png"
                                      alt="Mac"
                                      height="24"
                                      class="me-3"
                                    />
                                    <span class="text-heading">Mac</span>
                                  </div>
                                </td>
                                <td class="text-heading">89.68k</td>
                                <td>
                                  <div
                                    class="d-flex justify-content-between align-items-center gap-4"
                                  >
                                    <div
                                      class="progress w-100"
                                      style="height: 10px"
                                    >
                                      <div
                                        class="progress-bar bg-primary"
                                        role="progressbar"
                                        style="width: 16.67%"
                                        aria-valuenow="16.67"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                      ></div>
                                    </div>
                                    <small class="fw-medium">16.67%</small>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img
                                      src="../../assets/img/icons/brands/ubuntu.png"
                                      alt="Ubuntu"
                                      height="24"
                                      class="me-3"
                                    />
                                    <span class="text-heading">Ubuntu</span>
                                  </div>
                                </td>
                                <td class="text-heading">37.68k</td>
                                <td>
                                  <div
                                    class="d-flex justify-content-between align-items-center gap-4"
                                  >
                                    <div
                                      class="progress w-100"
                                      style="height: 10px"
                                    >
                                      <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 12.82%"
                                        aria-valuenow="12.82"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                      ></div>
                                    </div>
                                    <small class="fw-medium">12.82%</small>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img
                                      src="../../assets/img/icons/brands/chrome.png"
                                      alt="Chrome"
                                      height="24"
                                      class="me-3"
                                    />
                                    <span class="text-heading">Chrome</span>
                                  </div>
                                </td>
                                <td class="text-heading">8.34k</td>
                                <td>
                                  <div
                                    class="d-flex justify-content-between align-items-center gap-4"
                                  >
                                    <div
                                      class="progress w-100"
                                      style="height: 10px"
                                    >
                                      <div
                                        class="progress-bar bg-warning"
                                        role="progressbar"
                                        style="width: 6.25%"
                                        aria-valuenow="6.25"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                      ></div>
                                    </div>
                                    <small class="fw-medium">6.25%</small>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img
                                      src="../../assets/img/icons/brands/cent.png"
                                      alt="Cent"
                                      height="24"
                                      class="me-3"
                                    />
                                    <span class="text-heading">Cent</span>
                                  </div>
                                </td>
                                <td class="text-heading">2.25k</td>
                                <td>
                                  <div
                                    class="d-flex justify-content-between align-items-center gap-4"
                                  >
                                    <div
                                      class="progress w-100"
                                      style="height: 10px"
                                    >
                                      <div
                                        class="progress-bar bg-danger"
                                        role="progressbar"
                                        style="width: 2.76%"
                                        aria-valuenow="2.76"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                      ></div>
                                    </div>
                                    <small class="fw-medium">2.76%</small>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>6</td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <img
                                      src="../../assets/img/icons/brands/linux.png"
                                      alt="linux"
                                      height="24"
                                      class="me-3"
                                    />
                                    <span class="text-heading">Linux</span>
                                  </div>
                                </td>
                                <td class="text-heading">328k</td>
                                <td>
                                  <div
                                    class="d-flex justify-content-between align-items-center gap-4"
                                  >
                                    <div
                                      class="progress w-100"
                                      style="height: 10px"
                                    >
                                      <div
                                        class="progress-bar bg-danger"
                                        role="progressbar"
                                        style="width: 20.14%"
                                        aria-valuenow="2.76"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                      ></div>
                                    </div>
                                    <small class="fw-medium">20.14%</small>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                      <div
                        class="tab-pane fade"
                        id="navs-pills-country"
                        role="tabpanel"
                      >
                        <div class="table-responsive text-start text-nowrap">
                          <table class="table table-borderless">
                            <thead>
                              <tr>
                                <th>No</th>
                                <th>Country</th>
                                <th>Visits</th>
                                <th class="w-50">Data In Percentage</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <i
                                      class="fis fi fi-us rounded-circle fs-4 me-3"
                                    ></i>
                                    <span class="text-heading">USA</span>
                                  </div>
                                </td>
                                <td class="text-heading">87.24k</td>
                                <td>
                                  <div
                                    class="d-flex justify-content-between align-items-center gap-4"
                                  >
                                    <div
                                      class="progress w-100"
                                      style="height: 10px"
                                    >
                                      <div
                                        class="progress-bar bg-success"
                                        role="progressbar"
                                        style="width: 38.12%"
                                        aria-valuenow="38.12"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                      ></div>
                                    </div>
                                    <small class="fw-medium">38.12%</small>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <i
                                      class="fis fi fi-br rounded-circle fs-4 me-3"
                                    ></i>
                                    <span class="text-heading">Brazil</span>
                                  </div>
                                </td>
                                <td class="text-heading">42.68k</td>
                                <td>
                                  <div
                                    class="d-flex justify-content-between align-items-center gap-4"
                                  >
                                    <div
                                      class="progress w-100"
                                      style="height: 10px"
                                    >
                                      <div
                                        class="progress-bar bg-primary"
                                        role="progressbar"
                                        style="width: 28.23%"
                                        aria-valuenow="28.23"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                      ></div>
                                    </div>
                                    <small class="fw-medium">28.23%</small>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <i
                                      class="fis fi fi-in rounded-circle fs-4 me-3"
                                    ></i>
                                    <span class="text-heading">India</span>
                                  </div>
                                </td>
                                <td class="text-heading">12.58k</td>
                                <td>
                                  <div
                                    class="d-flex justify-content-between align-items-center gap-4"
                                  >
                                    <div
                                      class="progress w-100"
                                      style="height: 10px"
                                    >
                                      <div
                                        class="progress-bar bg-info"
                                        role="progressbar"
                                        style="width: 14.82%"
                                        aria-valuenow="14.82"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                      ></div>
                                    </div>
                                    <small class="fw-medium">14.82%</small>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <i
                                      class="fis fi fi-au rounded-circle fs-4 me-3"
                                    ></i>
                                    <span class="text-heading">Australia</span>
                                  </div>
                                </td>
                                <td class="text-heading">4.13k</td>
                                <td>
                                  <div
                                    class="d-flex justify-content-between align-items-center gap-4"
                                  >
                                    <div
                                      class="progress w-100"
                                      style="height: 10px"
                                    >
                                      <div
                                        class="progress-bar bg-warning"
                                        role="progressbar"
                                        style="width: 12.72%"
                                        aria-valuenow="12.72"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                      ></div>
                                    </div>
                                    <small class="fw-medium">12.72%</small>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <i
                                      class="fis fi fi-fr rounded-circle fs-4 me-3"
                                    ></i>
                                    <span class="text-heading">France</span>
                                  </div>
                                </td>
                                <td class="text-heading">2.21k</td>
                                <td>
                                  <div
                                    class="d-flex justify-content-between align-items-center gap-4"
                                  >
                                    <div
                                      class="progress w-100"
                                      style="height: 10px"
                                    >
                                      <div
                                        class="progress-bar bg-danger"
                                        role="progressbar"
                                        style="width: 7.11%"
                                        aria-valuenow="7.11"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                      ></div>
                                    </div>
                                    <small class="fw-medium">7.11%</small>
                                  </div>
                                </td>
                              </tr>
                              <tr>
                                <td>6</td>
                                <td>
                                  <div class="d-flex align-items-center">
                                    <i
                                      class="fis fi fi-ca rounded-circle fs-4 me-3"
                                    ></i>
                                    <span class="text-heading">Canada</span>
                                  </div>
                                </td>
                                <td class="text-heading">22.35k</td>
                                <td>
                                  <div
                                    class="d-flex justify-content-between align-items-center gap-4"
                                  >
                                    <div
                                      class="progress w-100"
                                      style="height: 10px"
                                    >
                                      <div
                                        class="progress-bar bg-danger"
                                        role="progressbar"
                                        style="width: 15.13%"
                                        aria-valuenow="7.11"
                                        aria-valuemin="0"
                                        aria-valuemax="100"
                                      ></div>
                                    </div>
                                    <small class="fw-medium">15.13%</small>
                                  </div>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--/ pill table -->
              </div>
            </div>
            <!--/ Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl">
                <div
                  class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column"
                >
                  <div class="text-body">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    2024, made with ❤️ by
                    <a
                      href="https://themeselection.com"
                      target="_blank"
                      class="footer-link"
                      >ThemeSelection</a
                    >
                  </div>
                  <div class="d-none d-lg-inline-block">
                    <a
                      href="https://themeselection.com/license/"
                      class="footer-link me-4"
                      target="_blank"
                      >License</a
                    >
                    <a
                      href="https://themeselection.com/"
                      target="_blank"
                      class="footer-link me-4"
                      >More Themes</a
                    >

                    <a
                      href="https://demos.themeselection.com/sneat-bootstrap-html-admin-template/documentation/"
                      target="_blank"
                      class="footer-link me-4"
                      >Documentation</a
                    >

                    <a
                      href="https://themeselection.com/support/"
                      target="_blank"
                      class="footer-link d-none d-sm-inline-block"
                      >Support</a
                    >
                  </div>
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!--/ Content wrapper -->
        </div>

        <!--/ Layout container -->
      </div>
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div
      class="drag-target"
      style="
        touch-action: pan-y;
        user-select: none;
        -webkit-user-drag: none;
        -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
      "
    ></div>

    <!--/ Layout wrapper -->

    <div class="buy-now">
      <a
        href="https://themeselection.com/item/sneat-dashboard-pro-bootstrap/"
        target="_blank"
        class="btn btn-danger btn-buy-now"
        >Buy Now</a
      >
    </div>

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="../../assets/vendor/libs/jquery/jquery.js"></script>
    <script type="text/javascript" id="">
      console.log("TS:GTM Worked");
    </script>
    <script type="text/javascript" id="">
      (function (b, c, d) {
        var a = b.createElement("script");
        a.type = "text/javascript";
        a.src = "https://a.omappapi.com/app/js/api.min.js";
        a.async = !0;
        a.dataset.user = c;
        a.dataset.account = d;
        b.getElementsByTagName("head")[0].appendChild(a);
      })(document, 252882, 269977);
    </script>

    <script src="../../assets/vendor/libs/popper/popper.js"></script>
    <script src="../../assets/vendor/js/bootstrap.js"></script>
    <script src="../../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="../../assets/vendor/libs/hammer/hammer.js"></script>
    <script src="../../assets/vendor/libs/i18n/i18n.js"></script>
    <script src="../../assets/vendor/libs/typeahead-js/typeahead.js"></script>
    <script src="../../assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="../../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../../assets/js/dashboards-analytics.js"></script>

    <svg
      id="SvgjsSvg1407"
      width="2"
      height="0"
      xmlns="http://www.w3.org/2000/svg"
      version="1.1"
      xmlns:xlink="http://www.w3.org/1999/xlink"
      xmlns:svgjs="http://svgjs.dev"
      style="
        overflow: hidden;
        top: -100%;
        left: -100%;
        position: absolute;
        opacity: 0;
      "
    >
      <defs id="SvgjsDefs1408"></defs>
      <polyline id="SvgjsPolyline1409" points="0,0"></polyline>
      <path
        id="SvgjsPath1410"
        d="M-1 239.62599884271623L-1 239.62599884271623C-1 239.62599884271623 61.614583333333336 239.62599884271623 61.614583333333336 239.62599884271623C61.614583333333336 239.62599884271623 123.22916666666667 239.62599884271623 123.22916666666667 239.62599884271623C123.22916666666667 239.62599884271623 184.84375 239.62599884271623 184.84375 239.62599884271623C184.84375 239.62599884271623 246.45833333333334 239.62599884271623 246.45833333333334 239.62599884271623C246.45833333333334 239.62599884271623 308.0729166666667 239.62599884271623 308.0729166666667 239.62599884271623C308.0729166666667 239.62599884271623 369.6875 239.62599884271623 369.6875 239.62599884271623C369.6875 239.62599884271623 369.6875 239.62599884271623 369.6875 239.62599884271623 "
      ></path>
    </svg>

    <div id="template-customizer" class="bg-card" style="visibility: visible">
      <a
        href="javascript:void(0)"
        class="template-customizer-open-btn"
        tabindex="-1"
      ></a>
      <div
        class="p-6 m-0 lh-1 border-bottom template-customizer-header position-relative py-4"
      >
        <h6 class="template-customizer-t-panel_header mb-1">
          Template Customizer
        </h6>
        <p class="template-customizer-t-panel_sub_header mb-0 small">
          Customize and preview in real time
        </p>
        <div
          class="d-flex align-items-center gap-2 position-absolute end-0 top-0 mt-6 me-5"
        >
          <a
            href="javascript:void(0)"
            class="template-customizer-reset-btn text-heading"
            data-bs-toggle="tooltip"
            data-bs-placement="bottom"
            title="Reset Customizer"
            ><i class="bx bx-refresh bx-24px"></i
            ><span
              class="badge rounded-pill bg-danger badge-dot badge-notifications d-none"
            ></span
          ></a>
          <a
            href="javascript:void(0)"
            class="template-customizer-close-btn fw-light text-heading"
            tabindex="-1"
          >
            <i class="bx bx-x bx-lg"></i>
          </a>
        </div>
      </div>
      <div class="template-customizer-inner pt-6">
        <div class="template-customizer-theming">
          <h5 class="m-0 px-6 py-6">
            <span
              class="template-customizer-t-theming_header bg-label-primary rounded-1 py-1 px-3 small"
              >Theming</span
            >
          </h5>
          <div class="m-0 px-6 pb-6 template-customizer-style w-100">
            <label
              for="customizerStyle"
              class="form-label d-block template-customizer-t-style_label mb-2"
              >Style (Mode)</label
            >
            <div class="row px-1 template-customizer-styles-options">
              <div class="col-4 px-2">
                <div
                  class="form-check custom-option custom-option-icon checked"
                >
                  <label
                    class="form-check-label custom-option-content p-0"
                    for="customRadioIconlight"
                  >
                    <span class="custom-option-body mb-0">
                      <img
                        src="../../assets/img/customizer/light.svg"
                        alt="Light"
                        class="img-fluid scaleX-n1-rtl"
                      />
                    </span>
                    <input
                      name="customRadioIcon"
                      class="form-check-input d-none"
                      type="radio"
                      value="light"
                      id="customRadioIconlight"
                      checked="checked"
                    />
                  </label>
                </div>
                <label
                  class="form-check-label small text-nowrap text-body mt-1"
                  for="customRadioIconlight"
                  >Light</label
                >
              </div>
              <div class="col-4 px-2">
                <div class="form-check custom-option custom-option-icon">
                  <label
                    class="form-check-label custom-option-content p-0"
                    for="customRadioIcondark"
                  >
                    <span class="custom-option-body mb-0">
                      <img
                        src="../../assets/img/customizer/dark.svg"
                        alt="Dark"
                        class="img-fluid scaleX-n1-rtl"
                      />
                    </span>
                    <input
                      name="customRadioIcon"
                      class="form-check-input d-none"
                      type="radio"
                      value="dark"
                      id="customRadioIcondark"
                    />
                  </label>
                </div>
                <label
                  class="form-check-label small text-nowrap text-body mt-1"
                  for="customRadioIcondark"
                  >Dark</label
                >
              </div>
              <div class="col-4 px-2">
                <div class="form-check custom-option custom-option-icon">
                  <label
                    class="form-check-label custom-option-content p-0"
                    for="customRadioIconsystem"
                  >
                    <span class="custom-option-body mb-0">
                      <img
                        src="../../assets/img/customizer/system.svg"
                        alt="System"
                        class="img-fluid scaleX-n1-rtl"
                      />
                    </span>
                    <input
                      name="customRadioIcon"
                      class="form-check-input d-none"
                      type="radio"
                      value="system"
                      id="customRadioIconsystem"
                    />
                  </label>
                </div>
                <label
                  class="form-check-label small text-nowrap text-body mt-1"
                  for="customRadioIconsystem"
                  >System</label
                >
              </div>
            </div>
          </div>
          <div class="m-0 px-6 template-customizer-themes w-100">
            <label
              for="customizerTheme"
              class="form-label template-customizer-t-theme_label mb-2"
              >Themes</label
            >
            <div class="row px-1 template-customizer-themes-options">
              <div class="col-4 px-2">
                <div
                  class="form-check custom-option custom-option-icon checked"
                >
                  <label
                    class="form-check-label custom-option-content p-0"
                    for="themeRadiostheme-default"
                  >
                    <span class="custom-option-body mb-0">
                      <img
                        src="../../assets/img/customizer/default.svg"
                        alt="Default"
                        class="img-fluid scaleX-n1-rtl"
                      />
                    </span>
                    <input
                      name="themeRadios"
                      class="form-check-input d-none"
                      type="radio"
                      value="theme-default"
                      id="themeRadiostheme-default"
                      checked="checked"
                    />
                  </label>
                </div>
                <label
                  class="form-check-label small text-nowrap text-body mt-1"
                  for="themeRadiostheme-default"
                  >Default</label
                >
              </div>
              <div class="col-4 px-2">
                <div class="form-check custom-option custom-option-icon">
                  <label
                    class="form-check-label custom-option-content p-0"
                    for="themeRadiostheme-bordered"
                  >
                    <span class="custom-option-body mb-0">
                      <img
                        src="../../assets/img/customizer/border.svg"
                        alt="Bordered"
                        class="img-fluid scaleX-n1-rtl"
                      />
                    </span>
                    <input
                      name="themeRadios"
                      class="form-check-input d-none"
                      type="radio"
                      value="theme-bordered"
                      id="themeRadiostheme-bordered"
                    />
                  </label>
                </div>
                <label
                  class="form-check-label small text-nowrap text-body mt-1"
                  for="themeRadiostheme-bordered"
                  >Bordered</label
                >
              </div>
              <div class="col-4 px-2">
                <div class="form-check custom-option custom-option-icon">
                  <label
                    class="form-check-label custom-option-content p-0"
                    for="themeRadiostheme-semi-dark"
                  >
                    <span class="custom-option-body mb-0">
                      <img
                        src="../../assets/img/customizer/semi-dark.svg"
                        alt="Semi Dark"
                        class="img-fluid scaleX-n1-rtl"
                      />
                    </span>
                    <input
                      name="themeRadios"
                      class="form-check-input d-none"
                      type="radio"
                      value="theme-semi-dark"
                      id="themeRadiostheme-semi-dark"
                    />
                  </label>
                </div>
                <label
                  class="form-check-label small text-nowrap text-body mt-1"
                  for="themeRadiostheme-semi-dark"
                  >Semi Dark</label
                >
              </div>
            </div>
          </div>
        </div>
        <div class="template-customizer-layout">
          <hr class="m-0 px-6 my-6" />
          <h5 class="m-0 px-6 pb-6">
            <span
              class="template-customizer-t-layout_header bg-label-primary rounded-2 py-1 px-3 small"
              >Layout</span
            >
          </h5>
          <div class="m-0 px-6 pb-6 template-customizer-headerOptions w-100">
            <label
              for="customizerHeader"
              class="form-label template-customizer-t-layout_header_label mb-2"
              >Header Types</label
            >
            <div class="row px-1 template-customizer-header-options">
              <div class="col-4 px-2">
                <div
                  class="form-check custom-option custom-option-icon checked"
                >
                  <label
                    class="form-check-label custom-option-content p-0"
                    for="headerRadioIconfixed"
                  >
                    <span class="custom-option-body mb-0">
                      <img
                        src="../../assets/img/customizer/horizontal-fixed.svg"
                        alt="Fixed"
                        class="img-fluid scaleX-n1-rtl"
                      />
                    </span>
                    <input
                      name="headerRadioIcon"
                      class="form-check-input d-none"
                      type="radio"
                      value="fixed"
                      id="headerRadioIconfixed"
                      checked="checked"
                    />
                  </label>
                </div>
                <label
                  class="form-check-label small text-nowrap text-body mt-1"
                  for="headerRadioIconfixed"
                  >Fixed</label
                >
              </div>
              <div class="col-4 px-2">
                <div class="form-check custom-option custom-option-icon">
                  <label
                    class="form-check-label custom-option-content p-0"
                    for="headerRadioIconstatic"
                  >
                    <span class="custom-option-body mb-0">
                      <img
                        src="../../assets/img/customizer/horizontal-static.svg"
                        alt="Static"
                        class="img-fluid scaleX-n1-rtl"
                      />
                    </span>
                    <input
                      name="headerRadioIcon"
                      class="form-check-input d-none"
                      type="radio"
                      value="static"
                      id="headerRadioIconstatic"
                    />
                  </label>
                </div>
                <label
                  class="form-check-label small text-nowrap text-body mt-1"
                  for="headerRadioIconstatic"
                  >Static</label
                >
              </div>
            </div>
          </div>
          <div class="m-0 px-6 pb-6 template-customizer-content w-100">
            <label
              for="customizerContent"
              class="form-label template-customizer-t-content_label mb-2"
              >Content</label
            >
            <div class="row px-1 template-customizer-content-options">
              <div class="col-4 px-2">
                <div
                  class="form-check custom-option custom-option-icon checked"
                >
                  <label
                    class="form-check-label custom-option-content p-0"
                    for="contentRadioIconcompact"
                  >
                    <span class="custom-option-body mb-0">
                      <img
                        src="../../assets/img/customizer/compact.svg"
                        alt="Compact"
                        class="img-fluid scaleX-n1-rtl"
                      />
                    </span>
                    <input
                      name="contentRadioIcon"
                      class="form-check-input d-none"
                      type="radio"
                      value="compact"
                      id="contentRadioIconcompact"
                      checked="checked"
                    />
                  </label>
                </div>
                <label
                  class="form-check-label small text-nowrap text-body mt-1"
                  for="contentRadioIconcompact"
                  >Compact</label
                >
              </div>
              <div class="col-4 px-2">
                <div class="form-check custom-option custom-option-icon">
                  <label
                    class="form-check-label custom-option-content p-0"
                    for="contentRadioIconwide"
                  >
                    <span class="custom-option-body mb-0">
                      <img
                        src="../../assets/img/customizer/wide.svg"
                        alt="Wide"
                        class="img-fluid scaleX-n1-rtl"
                      />
                    </span>
                    <input
                      name="contentRadioIcon"
                      class="form-check-input d-none"
                      type="radio"
                      value="wide"
                      id="contentRadioIconwide"
                    />
                  </label>
                </div>
                <label
                  class="form-check-label small text-nowrap text-body mt-1"
                  for="contentRadioIconwide"
                  >Wide</label
                >
              </div>
            </div>
          </div>
          <div class="m-0 px-6 pb-6 template-customizer-directions w-100">
            <label
              for="customizerDirection"
              class="form-label template-customizer-t-direction_label mb-2"
              >Direction</label
            >
            <div class="row px-1 template-customizer-directions-options">
              <div class="col-4 px-2">
                <div
                  class="form-check custom-option custom-option-icon checked"
                >
                  <label
                    class="form-check-label custom-option-content p-0"
                    for="directionRadioIconltr"
                  >
                    <span class="custom-option-body mb-0">
                      <img
                        src="../../assets/img/customizer/ltr.svg"
                        alt="Left to Right (En)"
                        class="img-fluid scaleX-n1-rtl"
                      />
                    </span>
                    <input
                      name="directionRadioIcon"
                      class="form-check-input d-none"
                      type="radio"
                      value="ltr"
                      id="directionRadioIconltr"
                      checked="checked"
                    />
                  </label>
                </div>
                <label
                  class="form-check-label small text-nowrap text-body mt-1"
                  for="directionRadioIconltr"
                  >Left to Right (En)</label
                >
              </div>
              <div class="col-4 px-2">
                <div class="form-check custom-option custom-option-icon">
                  <label
                    class="form-check-label custom-option-content p-0"
                    for="directionRadioIconrtl"
                  >
                    <span class="custom-option-body mb-0">
                      <img
                        src="../../assets/img/customizer/rtl.svg"
                        alt="Right to Left (Ar)"
                        class="img-fluid scaleX-n1-rtl"
                      />
                    </span>
                    <input
                      name="directionRadioIcon"
                      class="form-check-input d-none"
                      type="radio"
                      value="rtl"
                      id="directionRadioIconrtl"
                    />
                  </label>
                </div>
                <label
                  class="form-check-label small text-nowrap text-body mt-1"
                  for="directionRadioIconrtl"
                  >Right to Left (Ar)</label
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </body>
</html>
