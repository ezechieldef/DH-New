<?php

namespace App\Http\Controllers;

use App\Models\QuoteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuoteController extends Controller
{
    public function create()
    {
        return view('pages.quote');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:150',
            'email' => 'required|email',
            'telephone' => 'nullable|string|max:50',
            'entreprise' => 'nullable|string|max:150',
            'budget' => 'nullable|string|max:50',
            'delai' => 'nullable|string|max:100',
            'description_projet' => 'required|string|min:20',
            'rgpd' => 'accepted'
        ]);

        $quote = QuoteRequest::create($validated + ['statut' => 'nouveau']);

        // Envoi email simple (à adapter)
        Mail::raw("Nouvelle demande devis #{$quote->id}", function($m) use ($quote) {
            $m->to(config('mail.from.address'))
              ->subject('Demande de devis #' . $quote->id);
        });

        if ($request->expectsJson()) {
            return response()->json(['ok' => true]);
        }

        return redirect()->route('quote.create')->with('success', 'Votre demande a été envoyée.');
    }
}