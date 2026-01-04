<?php

namespace App\Services;

use App\Models\HeroBanner;

class HeroBannerService
{
    public static function get($page)
    {
        $banner = HeroBanner::where('page_name', $page)
            ->where('status', 1)
            ->first();

        return [
            'title'    => $banner->title ?? ucfirst($page),
            'subtitle' => $banner->subtitle ?? '',
            'image'    => $banner->image ?? 'default.jpg',
            'folder'   => 'background-image/',
        ];
    }
}
?>