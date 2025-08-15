<?php

namespace App\Http\Controllers;

use App\Models\QuoteRequest;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Validator;

class QuoteController extends Controller
{
    /**
     * Show the quote request form.
     */
    public function create(): View
    {
        return view('pages.quote');
    }

    /**
     * Store a new quote request.
     */
    public function store(Request $request): RedirectResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:255',
            'company' => 'nullable|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'services' => 'nullable|array',
            'budget' => 'nullable|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        QuoteRequest::create($validator->validated());

        // TODO: Send email notification (placeholder)
        // TODO: Add to queue for processing

        return back()->with('success', 'Votre demande de devis a été envoyée avec succès!');
    }
}
