@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto px-4 md:px-0 py-12 md:py-16">
    <a href="{{ route('blog.index', app()->getLocale()) }}" class="text-sm text-slate-500 hover:text-brand-600 flex items-center gap-1 mb-6">
        ← {{ __('messages.actions.back') }}
    </a>
    <h1 class="text-3xl md:text-4xl font-bold tracking-tight mb-4">{{ $post['title'] ?? ucfirst($slug ?? 'Article') }}</h1>
    <div class="text-sm text-slate-500 mb-8 flex items-center gap-4">
        <span>{{ now()->format('d/m/Y') }}</span>
        <span>•</span>
        <span>{{ __('messages.blog.read_time', ['minutes'=>5]) }}</span>
    </div>
    <article class="prose prose-slate max-w-none">
        <p>{{ $post['excerpt'] ?? __('messages.placeholder.lorem_medium') }}</p>
        <h2>Section 1</h2>
        <p>{{ __('messages.placeholder.lorem_long') }}</p>
        <h2>Section 2</h2>
        <p>{{ __('messages.placeholder.lorem_long') }}</p>
        <blockquote>
            <p>{{ __('messages.placeholder.quote') }}</p>
        </blockquote>
        <p>{{ __('messages.placeholder.lorem_medium') }}</p>
    </article>
</div>
@endsection