@extends('layouts.app')

@section('content')
<section class="max-w-3xl mx-auto px-6 py-16 prose prose-indigo">
  <a href="{{ route('blog.index') }}" class="no-underline text-indigo-600 text-sm">&larr; Retour</a>
  <h1>{{ $post->titre }}</h1>
  <p class="text-sm text-slate-500">{{ optional($post->publie_at)->format('d/m/Y') }}</p>
  @if($post->image)
    <img src="{{ asset('storage/'.$post->image) }}" alt="{{ $post->titre }}" class="rounded-lg">
  @endif
  {!! $post->contenu !!}
</section>
@endsection