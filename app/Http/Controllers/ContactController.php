<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function create()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nom'     => 'required|string|max:120',
            'email'   => 'required|email',
            'sujet'   => 'nullable|string|max:150',
            'message' => 'required|string|min:10',
        ]);

        // (Option future) : Mail::to(config('mail.from.address'))->send(new ContactMessageMailable($data));
        Log::info('Contact message reçu', $data);

        return back()->with('status', 'Message envoyé avec succès.');
    }
}