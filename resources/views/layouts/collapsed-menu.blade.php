<x-app>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container-xxl flex-grow-1 container-p-y">




        <!-- Layout Demo -->
        <div class="layout-demo-wrapper">
            <div class="layout-demo-placeholder">
                <img src="assets/img/layouts/layout-collapsed-menu-light.png" class="img-fluid" alt="Layout collapsed menu"
                    data-app-light-img="layouts/layout-collapsed-menu-light.png"
                    data-app-dark-img="layouts/layout-collapsed-menu-dark.png">
            </div>
            <div class="layout-demo-info">
                <h4>Layout collapsed menu</h4>
                <div class="alert alert-primary mt-6" role="alert">
                    <span class="fw-medium">Important:</span> If you have enabled localStorage then the menu
                    (navigation) will be synced with localStorage value.
                </div>
            </div>
        </div>
        <!--/ Layout Demo -->


    </div>
</x-app>
