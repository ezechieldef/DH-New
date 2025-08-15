@extends('layouts.app')
@section('content')
<section class="max-w-6xl mx-auto px-6 py-16">
    <h1 class="text-3xl font-bold mb-10">{{ __('messages.nav.projects') }}</h1>
    <div class="grid md:grid-cols-3 gap-6">
        @forelse($projects as $project)
            <a href="{{ route('projects.show', [app()->getLocale(), $project->slug]) }}" class="group bg-white border rounded-lg overflow-hidden hover:shadow-md transition">
                <div class="h-40 bg-slate-200 flex items-center justify-center text-slate-500 text-sm">Image</div>
                <div class="p-5">
                    <h2 class="font-semibold text-lg group-hover:text-indigo-600">{{ $project->titre }}</h2>
                    @if($project->secteur)
                        <p class="text-xs uppercase tracking-wide text-slate-500 mt-2">{{ $project->secteur }}</p>
                    @endif
                </div>
            </a>
        @empty
            <p class="text-slate-500">Aucun projet.</p>
        @endforelse
    </div>
</section>
@endsection