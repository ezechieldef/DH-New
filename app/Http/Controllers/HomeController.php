<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Project;
use App\Models\Post;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the home page.
     */
    public function index(): View
    {
        $featuredServices = Service::active()->featured()->ordered()->take(3)->get();
        $featuredProjects = Project::active()->featured()->ordered()->take(3)->get();
        $latestPosts = Post::published()->latest()->take(3)->get();
        $testimonials = Testimonial::active()->ordered()->take(5)->get();

        return view('pages.home', compact(
            'featuredServices',
            'featuredProjects',
            'latestPosts',
            'testimonials'
        ));
    }
}
