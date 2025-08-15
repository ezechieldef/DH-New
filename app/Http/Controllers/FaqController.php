<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FaqController extends Controller
{
    /**
     * Display the FAQ page.
     */
    public function index(): View
    {
        $faqs = Faq::active()->ordered()->get();
        $categories = $faqs->pluck('category')->unique()->filter();

        return view('pages.faq', compact('faqs', 'categories'));
    }
}
