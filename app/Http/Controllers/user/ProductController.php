<?php

namespace App\Http\Controllers\User;

use App\Services\HeroBannerService;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\HeroBanner;

use function Laravel\Prompts\table;

class ProductController extends Controller
{

       private function loadCategoryPage($category)
    {
        $hero = HeroBannerService::get($category);

        $products = Product::where('category', $category)
            ->where('status', 1)
            ->get()
            ->groupBy('type');

        return compact('hero', 'products');
    
    }

    public function sofas()
    {
        return view('pages.sofas',
            $this->loadCategoryPage('sofa')
        );
    }

    public function tables()
    {
        return view('pages.table', 
        $this->loadCategoryPage('table'));
    }

    public function chairs()
    {
        return view('pages.chairs', 
        $this->loadCategoryPage('chairs'));
    }

    public function wardrobe()
    {
        return view('pages.wardrobe', 
        $this->loadCategoryPage('wardrobe'));
    }

    public function tvunit()
    {
        return view('pages.tvunit', 
        $this->loadCategoryPage('tvunit'));
    }

    public function officeFurniture()
    {
        return view('pages.office-furniture', 
        $this->loadCategoryPage('office-furniture'));
    }

    public function beds()
    {
        return view('pages.beds', 
        $this->loadCategoryPage('beds'));
    }

    
    public function show($slug)
    {
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('pages.single-product', compact('product'));
    }
}
