<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Project;
use App\Models\Post;
use App\Models\Testimonial;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.home', [
            'services' => Service::query()->orderBy('ordre')->limit(6)->get(),
            'projects' => Project::query()->orderBy('ordre')->limit(6)->get(),
            'posts'    => Post::query()->latest('publié_at')->limit(3)->get(),
            'testimonials' => Testimonial::query()->orderBy('ordre')->limit(5)->get(),
        ]);
    }
}