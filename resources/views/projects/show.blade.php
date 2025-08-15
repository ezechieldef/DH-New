@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 md:px-0 py-12 md:py-16">
    <a href="{{ route('projects.index', app()->getLocale()) }}" class="text-sm text-slate-500 hover:text-brand-600 flex items-center gap-1 mb-6">
        ← {{ __('messages.actions.back') }}
    </a>
    <h1 class="text-3xl md:text-4xl font-bold mb-6">{{ $project['title'] ?? ucfirst($slug ?? 'Projet') }}</h1>
    <div class="rounded-xl overflow-hidden border mb-8">
        <div class="aspect-video bg-slate-100 flex items-center justify-center text-slate-400">Media</div>
    </div>
    <article class="prose prose-slate max-w-none">
        <p>{{ $project['description'] ?? __('messages.placeholder.lorem_long') }}</p>
        <h2>{{ __('messages.pages.projects.context') }}</h2>
        <p>{{ __('messages.placeholder.lorem_medium') }}</p>
        <h2>{{ __('messages.pages.projects.results') }}</h2>
        <ul>
            <li>{{ __('messages.placeholder.result') }} 1</li>
            <li>{{ __('messages.placeholder.result') }} 2</li>
            <li>{{ __('messages.placeholder.result') }} 3</li>
        </ul>
    </article>
</div>
@endsection