<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('ordre')->get();
        return view('services.index', compact('services'));
    }

    public function show(string $slug)
    {
        $service = Service::whereSlug($slug)->firstOrFail();
        // services connexes
        $related = Service::where('id', '!=', $service->id)->limit(4)->get();
        return view('services.show', compact('service', 'related'));
    }
}