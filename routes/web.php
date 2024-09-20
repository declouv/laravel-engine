<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\KanbanController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard-analystics');
    } else {
        return redirect()->route('loginView');
    }
});

// AUTH
Route::middleware(['guest'])->group(function () {
    Route::get('login', [AuthController::class, 'loginView'])->name('loginView');
    Route::post('login', [AuthController::class, 'login'])->name('login');
});

Route::get('register', [AuthController::class, 'registerView'])->name('registerView');

Route::middleware(['auth'])->group(function () {
    // DASHBOARD
    foreach (['analystics', 'crm', 'ecommerce', 'logistics', 'academy'] as $dashboard) {
        Route::get("dashboard-{$dashboard}", [PageController::class, "dashboard" . ucfirst($dashboard)])->name("dashboard-{$dashboard}");
    }

    // FRONT PAGES
    foreach (['landing', 'pricing', 'payment', 'checkout', 'help', 'help-articles'] as $fp) {
        Route::get("frontpage-{$fp}", [PageController::class, "frontpage" . str_replace('-', '', ucfirst($fp))])->name("frontpage-{$fp}");
    }

    // LAYOUTS
    foreach (['collapsed-menu', 'content-navbar', 'content-nav-sidebar', 'horizontal', 'without-menu', 'without-navbar', 'fluid', 'container', 'blank'] as $l) {
        Route::get("layouts-{$l}", [PageController::class, "layouts" . str_replace('-', '', ucfirst($l))])->name("layouts-{$l}");
    }

    // EMAIL
    Route::get('email', [PageController::class, 'email'])->name('email');
    Route::post('email', [EmailController::class, 'store'])->name('email.store');
    Route::put('email/readed', [EmailController::class, 'readed'])->name('email.readed');
    Route::put('email/unreaded', [EmailController::class, 'unreaded'])->name('email.unreaded');
    Route::put('email/spam', [EmailController::class, 'spam'])->name('email.spam');
    Route::put('email/draft', [EmailController::class, 'draft'])->name('email.draft');
    Route::put('email/trash', [EmailController::class, 'trash'])->name('email.trash');
    Route::put('email/star', [EmailController::class, 'star'])->name('email.stared');
    Route::delete('email', [EmailController::class, 'delete'])->name('email.delete');

    // CHAT
    Route::get('chat', [PageController::class, 'chat'])->name('chat');
    // CALENDAR
    Route::get('calendar', [PageController::class, 'calendar'])->name('calendar');
    // KANBAN
    Route::get('kanban', [KanbanController::class, 'index'])->name('kanban');
    Route::post('kanban/boardstore', [KanbanController::class, 'boardStore'])->name('board.store');
    Route::post('kanban/itemstore', [KanbanController::class, 'itemStore'])->name('item.store');

    //
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
