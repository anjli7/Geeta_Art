<?php

namespace App\Http\Controllers\User;

use App\Services\HeroBannerService;
use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use App\Models\HeroBanner;

use function Laravel\Prompts\table;

class ProductController extends Controller
{


    public function category($slug)
    {
        // 1️⃣ Category
        $category = Category::where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();

        // 2️⃣ Banner
        $hero = HeroBannerService::getCategory($slug);

        // 3️⃣ Products (relation use)
        $groupedProducts = $category->products()
            ->where('status', 1)
            ->get()
            ->groupBy('type');

        return view('pages.category', compact(
            'category',
            'hero',
            'groupedProducts'
        ));
    }

    public function show($slug)
    {
        $product = Product::where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();

        return view('pages.single-product', compact('product'));
    }


    //    private function loadCategoryPage($category)
    // {
    //     $hero = HeroBannerService::get($category);

    //     $groupedProducts = Product::where('category', $category)
    //         ->where('status', 1)
    //         ->get()
    //         ->groupBy('type');

    //     return compact('hero', 'groupedProducts');

    // }

    // public function sofas()
    // {
    //     return view('pages.sofas',
    //         $this->loadCategoryPage('sofa')
    //     );
    // }

    // public function tables()
    // {
    //     return view('pages.table', 
    //     $this->loadCategoryPage('table'));
    // }

    // public function chairs()
    // {
    //     return view('pages.chairs', 
    //     $this->loadCategoryPage('chair'));
    // }

    // public function wardrobe()
    // {
    //     return view('pages.wardrobe', 
    //     $this->loadCategoryPage('wardrobe'));
    // }

    // public function tvunit()
    // {
    //     return view('pages.tvunit', 
    //     $this->loadCategoryPage('tvunit'));
    // }

    // public function officeFurniture()
    // {
    //     return view('pages.office-furniture', 
    //     $this->loadCategoryPage('office-furniture'));
    // }

    // public function beds()
    // {
    //     return view('pages.beds', 
    //     $this->loadCategoryPage('beds'));
    // }

    // public function bookshelf()
    // {
    //     return view('pages.bookshelf', 
    //     $this->loadCategoryPage('bookshelf'));
    // }


    // public function show($slug)
    // {
    //     $product = Product::where('slug', $slug)->firstOrFail();
    //     return view('pages.single-product', compact('product'));
    // }
}
