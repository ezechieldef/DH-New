@extends('layouts.app')
@section('content')
<section class="max-w-6xl mx-auto px-6 py-16">
    <h1 class="text-3xl font-bold mb-10">{{ __('messages.nav.services') }}</h1>
    <div class="grid md:grid-cols-3 gap-6">
        @forelse($services as $service)
            <a href="{{ route('services.show', [app()->getLocale(), $service->slug]) }}"
               class="block bg-white border rounded-lg p-6 hover:shadow-md transition">
                <h2 class="font-semibold text-lg">{{ $service->titre }}</h2>
                <p class="mt-2 text-sm text-slate-600">{{ $service->excerpt }}</p>
            </a>
        @empty
            <p class="text-slate-500">Aucun service disponible.</p>
        @endforelse
    </div>
</section>
@endsection