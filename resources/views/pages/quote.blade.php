@extends('layouts.app')
@section('content')
<section class="max-w-3xl mx-auto px-6 py-16">
    <h1 class="text-3xl font-bold mb-8">{{ __('messages.nav.quote') }}</h1>
    <form method="POST" action="{{ route('quote.store', app()->getLocale()) }}" class="space-y-6 bg-white p-6 rounded-lg shadow-sm">
        @csrf
        <div>
            <label class="block text-sm font-medium mb-1">Nom *</label>
            <input name="nom" value="{{ old('nom') }}" required class="w-full border rounded-md px-3 py-2">
        </div>
        <div class="grid md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium mb-1">Email *</label>
                <input type="email" name="email" value="{{ old('email') }}" required class="w-full border rounded-md px-3 py-2">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Téléphone</label>
                <input name="telephone" value="{{ old('telephone') }}" class="w-full border rounded-md px-3 py-2">
            </div>
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Entreprise</label>
            <input name="entreprise" value="{{ old('entreprise') }}" class="w-full border rounded-md px-3 py-2">
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Type de projet</label>
            <input name="type_projet" value="{{ old('type_projet') }}" class="w-full border rounded-md px-3 py-2">
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Message</label>
            <textarea name="message" rows="5" class="w-full border rounded-md px-3 py-2">{{ old('message') }}</textarea>
        </div>
        <button class="px-5 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-500">Envoyer</button>
    </form>
</section>
@endsection