@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 md:px-0 py-12 md:py-16">
    <h1 class="text-3xl md:text-4xl font-bold mb-6">{{ __('messages.pages.quote.title') }}</h1>

    <form action="{{ route('quote.store', app()->getLocale()) }}" method="POST" class="space-y-6 bg-white p-6 rounded-xl border shadow-sm">
        @csrf
        <div class="grid md:grid-cols-2 gap-6">
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">{{ __('messages.forms.company') }}</label>
                <input name="company" type="text" value="{{ old('company') }}"
                       class="w-full rounded-md border-slate-300 focus:border-brand-500 focus:ring-brand-500">
            </div>
            <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">{{ __('messages.forms.email') }}</label>
                <input name="email" type="email" value="{{ old('email') }}"
                       class="w-full rounded-md border-slate-300 focus:border-brand-500 focus:ring-brand-500">
            </div>
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">{{ __('messages.forms.budget') }}</label>
            <select name="budget" class="w-full rounded-md border-slate-300 focus:border-brand-500 focus:ring-brand-500">
                <option value="">{{ __('messages.forms.choose') }}</option>
                <option>< 5k</option>
                <option>5k - 15k</option>
                <option>15k - 30k</option>
                <option>> 30k</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-slate-700 mb-1">{{ __('messages.forms.details') }}</label>
            <textarea name="details" rows="6"
                      class="w-full rounded-md border-slate-300 focus:border-brand-500 focus:ring-brand-500">{{ old('details') }}</textarea>
        </div>
        <button class="px-6 py-3 rounded-md bg-brand-600 text-white font-medium hover:bg-brand-500 transition">
            {{ __('messages.forms.request_quote') }}
        </button>
    </form>
</div>
@endsection