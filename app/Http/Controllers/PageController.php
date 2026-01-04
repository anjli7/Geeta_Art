<?php

namespace App\Http\Controllers;

use App\Services\HeroBannerService;

class PageController extends Controller
{
    public function about()
    {
        $hero = HeroBannerService::get('about');
        return view('pages.about', compact('hero'));
    }

    public function customisation()
    {
        $hero = HeroBannerService::get('customisation');
        return view('pages.customisation', compact('hero'));
    }

    public function customerservice()
    {
        $hero = HeroBannerService::get('customerservice');
        return view('pages.customerservice', compact('hero'));
    }
}
