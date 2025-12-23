<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Sitemap\Sitemap;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\BlogDescription;



class SitemapController extends Controller
{
    public function generate()
    {
        $routes = app('router')->getRoutes();
        // dd($routes);
        return response()->view('sitemap', [
            'routes' =>$routes,
        ])->header('Content-Type', 'text/xml');
    }


//     public function blog_generate()
//     {
//         $blogs = BlogDescription::latest()->get();

//         return response()->view('blog-sitemap', [
//             'blogs' => $blogs,
//         ])->header('Content-Type', 'text/xml');
//     }
}
