<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container-xxl d-flex align-items-stretch flex-grow-1 p-0">


        <div class="flex-shrink-1 flex-grow-0 w-px-350 border-end container-p-x container-p-y">
          <div class="layout-example-sidebar layout-example-content-inner">
            Sidebar
          </div>
        </div>

        <div class="flex-shrink-1 flex-grow-1 container-p-x container-p-y">
          <!-- Layout Demo -->
          <div class="layout-demo-wrapper">
            <div class="layout-demo-placeholder">
              <img src="../../assets/img/layouts/layout-content-navbar-and-sidebar-light.png" class="img-fluid" alt="Layout content navbar + sidebar" data-app-light-img="layouts/layout-content-navbar-and-sidebar-light.png" data-app-dark-img="layouts/layout-content-navbar-and-sidebar-dark.png">
            </div>
            <div class="layout-demo-info">
              <h4>Layout content navbar + sidebar</h4>
              <p>Container layout sets a <code>max-width</code> at each responsive breakpoint.</p>
            </div>
          </div>
          <!--/ Layout Demo -->
        </div>

                  </div>
</x-app>
