<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function show($slug)
    {
        // Get page for SEO data
        $page = Page::where('slug', $slug)->where('published', true)->firstOrFail();
        
        // Determine which template to use based on slug
        $template = $page->getTemplateName();
        
        // Return the appropriate blade template with SEO data
        return view("pages.{$template}", compact('page'));
    }
}
