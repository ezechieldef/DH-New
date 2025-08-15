<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function process()
    {
        // Vue présentant le processus / méthodologie
        return view('pages.process');
    }

    public function about()
    {
        return view('pages.about');
    }
}