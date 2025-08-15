@extends('layouts.app')
@section('content')
<section class="max-w-5xl mx-auto px-6 py-16">
    <h1 class="text-3xl font-bold mb-10">{{ __('messages.nav.blog') }}</h1>
    <div class="grid md:grid-cols-3 gap-6">
        @forelse($posts as $post)
            <a href="{{ route('blog.show', [app()->getLocale(), $post->slug]) }}" class="block bg-white border rounded-lg p-5 hover:shadow-md transition">
                <h2 class="font-semibold text-lg">{{ $post->titre }}</h2>
                @if($post->excerpt)
                    <p class="mt-2 text-sm text-slate-600">{{ $post->excerpt }}</p>
                @endif
                @if($post->publie_at)
                    <p class="mt-3 text-xs text-slate-400">{{ $post->publie_at->format('d/m/Y') }}</p>
                @endif
            </a>
        @empty
            <p class="text-slate-500">Aucun article.</p>
        @endforelse
    </div>
    <div class="mt-10">
        {{ $posts->links() }}
    </div>
</section>
@endsection