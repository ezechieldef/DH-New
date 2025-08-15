@extends('layouts.app')

@section('content')
<section class="max-w-5xl mx-auto px-6 py-16">
  <h1 class="text-3xl font-bold mb-8">Blog & Actualités</h1>
  <div class="grid md:grid-cols-3 gap-8">
    @foreach($posts as $post)
      <article class="group">
        <a href="{{ route('blog.show',$post->slug) }}">
          <h2 class="text-xl font-semibold group-hover:text-indigo-600 transition">{{ $post->titre }}</h2>
          <p class="mt-2 text-sm text-slate-600 line-clamp-3">{{ $post->excerpt }}</p>
          <span class="mt-3 inline-block text-xs text-slate-400">{{ optional($post->publie_at)->format('d/m/Y') }}</span>
        </a>
      </article>
    @endforeach
  </div>
  <div class="mt-10">
    {{ $posts->links() }}
  </div>
</section>
@endsection