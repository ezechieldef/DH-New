@extends('layouts.app')
@section('content')
<section class="max-w-3xl mx-auto px-6 py-16">
    <a href="{{ route('blog.index', app()->getLocale()) }}" class="text-sm text-indigo-600 hover:underline">&larr; {{ __('messages.nav.blog') }}</a>
    <h1 class="text-3xl font-bold mt-4">{{ $post->titre }}</h1>
    @if($post->publie_at)
        <p class="mt-2 text-xs text-slate-500">{{ $post->publie_at->format('d/m/Y') }}</p>
    @endif
    <article class="prose prose-indigo mt-8 max-w-none">
        {!! $post->contenu !!}
    </article>
    @if($related->count())
        <div class="mt-16">
            <h2 class="text-xl font-semibold mb-4">Articles liés</h2>
            <div class="grid md:grid-cols-3 gap-4">
                @foreach($related as $r)
                    <a href="{{ route('blog.show', [app()->getLocale(), $r->slug]) }}" class="block text-sm bg-white border rounded-md p-4 hover:shadow">
                        {{ $r->titre }}
                    </a>
                @endforeach
            </div>
        </div>
    @endif
</section>
@endsection