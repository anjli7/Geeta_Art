<?php

namespace App\Http\Controllers;

use App\Models\HomeSlider;
use App\Services\HeroBannerService;
use App\Models\Category;

class PageController extends Controller
{
    public function index()
    {
        $sliders = HomeSlider::where('status', 1)
            ->orderBy('sort_order')
            ->get();

        $categories = Category::where('status', 1)->get();

        return view('pages.index', compact('sliders', 'categories'));
    }
    public function about()
    {
        $hero = HeroBannerService::getPage('about');
        return view('pages.about', compact('hero'));
    }
    public function customisation()
    {
        $hero = HeroBannerService::getPage('customisation');
        return view('pages.customisation', compact('hero'));
    }
    public function customerservice()
    {
        $hero = HeroBannerService::getPage('customer-service');
        return view('pages.customerservice', compact('hero'));
    }
}
