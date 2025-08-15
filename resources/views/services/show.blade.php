@extends('layouts.app')
@section('content')
<section class="max-w-4xl mx-auto px-6 py-16">
    <a href="{{ route('services.index', app()->getLocale()) }}" class="text-sm text-indigo-600 hover:underline">&larr; {{ __('messages.nav.services') }}</a>
    <h1 class="text-3xl font-bold mt-4">{{ $service->titre }}</h1>
    @if($service->excerpt)
        <p class="mt-4 text-slate-600">{{ $service->excerpt }}</p>
    @endif
    <article class="prose prose-indigo mt-8 max-w-none">
        {!! nl2br(e($service->description)) !!}
    </article>
</section>
@endsection