@extends('layouts.app')
@section('content')
<section class="max-w-3xl mx-auto px-6 py-16">
    <h1 class="text-3xl font-bold mb-8">Contact</h1>
    <form method="POST" action="{{ route('contact.store', app()->getLocale()) }}" class="space-y-6 bg-white p-6 rounded-lg shadow-sm">
        @csrf
        <div>
            <label class="block text-sm font-medium mb-1">Nom *</label>
            <input name="nom" value="{{ old('nom') }}" required class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-indigo-300">
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Email *</label>
            <input type="email" name="email" value="{{ old('email') }}" required class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-indigo-300">
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Sujet</label>
            <input name="sujet" value="{{ old('sujet') }}" class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-indigo-300">
        </div>
        <div>
            <label class="block text-sm font-medium mb-1">Message *</label>
            <textarea name="message" rows="5" required class="w-full border rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-indigo-300">{{ old('message') }}</textarea>
        </div>
        <button class="px-5 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-500">Envoyer</button>
    </form>
</section>
@endsection