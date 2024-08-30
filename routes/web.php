<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard-analystics');
});

foreach (['analystics', 'crm', 'ecommerce', 'logistics', 'academy'] as $dashboard) {
    Route::get("/dashboard-{$dashboard}", [PageController::class, "dashboard" . ucfirst($dashboard)])->name("dashboard-{$dashboard}");
}

foreach (['landing','pricing','payment','checkout','help','help-articles'] as $fp) {
    Route::get("/frontpage-{$fp}", [PageController::class, "frontpage" . str_replace('-', '', ucfirst($fp))])->name("frontpage-{$fp}");
}

foreach (['collapsed-menu','content-navbar','content-nav-sidebar','horizontal','without-menu','without-navbar','fluid','container','blank'] as $l) {
    Route::get("/layouts-{$l}", [PageController::class, "layouts" . str_replace('-', '', ucfirst($l))])->name("layouts-{$l}");
}
// Collapsed menu
// Content navbar
// Content nav + Sidebar
// Horizontal
// Without menu
// Without navbar
// Fluid
// Container
// Blank
