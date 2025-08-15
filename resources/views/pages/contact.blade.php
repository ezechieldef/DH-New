@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 md:px-0 py-12 md:py-16">
    <h1 class="text-3xl md:text-4xl font-bold mb-6">{{ __('messages.pages.contact.title') }}</h1>

    <form action="{{ route('contact.store', app()->getLocale()) }}" method="POST" class="space-y-6 bg-white p-6 rounded-xl border shadow-sm">
        @csrf
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">{{ __('messages.forms.name') }}</label>
            <input name="name" type="text" value="{{ old('name') }}"
                   class="w-full rounded-md border-slate-300 focus:border-brand-500 focus:ring-brand-500">
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">{{ __('messages.forms.email') }}</label>
            <input name="email" type="email" value="{{ old('email') }}"
                   class="w-full rounded-md border-slate-300 focus:border-brand-500 focus:ring-brand-500">
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">{{ __('messages.forms.message') }}</label>
            <textarea name="message" rows="5"
                      class="w-full rounded-md border-slate-300 focus:border-brand-500 focus:ring-brand-500">{{ old('message') }}</textarea>
        </div>
        <button class="px-6 py-3 rounded-md bg-brand-600 text-white font-medium hover:bg-brand-500 transition">
            {{ __('messages.forms.send') }}
        </button>
    </form>
</div>
@endsection