@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 md:px-0 py-12 md:py-16">
    <a href="{{ route('services.index', app()->getLocale()) }}" class="text-sm text-slate-500 hover:text-brand-600 flex items-center gap-1 mb-6">
        ← {{ __('messages.actions.back') }}
    </a>
    <h1 class="text-3xl md:text-4xl font-bold mb-6">{{ $service['name'] ?? ucfirst($slug ?? 'Service') }}</h1>
    <article class="prose prose-slate max-w-none">
        <p>{{ $service['description'] ?? __('messages.placeholder.lorem_long') }}</p>
        <h2>{{ __('messages.pages.services.deliverables') }}</h2>
        <ul>
            <li>{{ __('messages.placeholder.deliverable') }} 1</li>
            <li>{{ __('messages.placeholder.deliverable') }} 2</li>
            <li>{{ __('messages.placeholder.deliverable') }} 3</li>
        </ul>
        <h2>{{ __('messages.pages.services.process_short') }}</h2>
        <p>{{ __('messages.placeholder.lorem_medium') }}</p>
    </article>
</div>
@endsection