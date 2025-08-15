<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Services\StructuredData;

class FaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::where('actif', true)->orderBy('ordre')->get();
        $structured = StructuredData::faq($faqs);
        return view('pages.faq', compact('faqs','structured'));
    }
}