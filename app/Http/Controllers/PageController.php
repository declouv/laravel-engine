<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    // Dashboard
    public function dashboardCrm() {
        return view('dashboard.crm',['title'=>'Dashboard Crm']);
    }
    public function dashboardAnalystics() {
        return view('dashboard.analystics',['title'=>'Dashboard Analystics']);
    }

    public function dashboardEcommerce() {
        $products = Product::all();
        return view('dashboard.ecommerce',compact('products'),['title'=>'Dashboard eCommerce']);
    }

    public function dashboardLogistics() {
        return view('dashboard.logistics',['title'=>'Dashboard Logistics']);
    }

    public function dashboardAcademy() {
        return view('dashboard.academy',['title'=>'Dashboard Academy']);
    }

    // Front page

    public function frontpageLanding() {
        return view('front-page.landing',['title'=>'Landing Page']);
    }
    public function frontpagePricing() {
        return view('front-page.pricing',['title'=>'Pricing']);
    }
    public function frontpagePayment() {
        return view('front-page.payment',['title'=>'Payment']);
    }
    public function frontpageCheckout() {
        return view('front-page.checkout',['title'=>'Checkout']);
    }
    public function frontpageHelp() {
        return view('front-page.help',['title'=>'Help Center']);
    }
    public function frontpageHelparticles() {
        return view('front-page.help-articles',['title'=>'Help Center Articles']);
    }


    public function layoutsCollapsedmenu() {
        return view('layouts.collapsed-menu',['title'=>'Collapsed Menu']);
    }
    public function layoutsContentnavbar() {
        return view('layouts.content-navbar',['title'=>'Content Navbar']);
    }
    public function layoutsContentnavsidebar() {
        return view('layouts.content-nav-sidebar',['title'=>'Content Nav + Sidebar']);
    }
    public function layoutshorizontal() {
        return view('layouts.horizontal',['title'=>'Horizontal']);
    }
    public function layoutswithoutmenu() {
        return view('layouts.without-menu',['title'=>'Without Menu']);
    }
    public function layoutswithoutnavbar() {
        return view('layouts.without-navbar',['title'=>'Without Navbar']);
    }
    public function layoutsfluid() {
        return view('layouts.fluid',['title'=>'Fluid']);
    }
    public function layoutscontainer() {
        return view('layouts.container',['title'=>'Container']);
    }
    public function layoutsblank() {
        return view('layouts.blank',['title'=>'Blank']);
    }

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
