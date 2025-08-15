@extends('layouts.app')
@section('content')
<section class="max-w-4xl mx-auto px-6 py-16">
    <a href="{{ route('projects.index', app()->getLocale()) }}" class="text-sm text-indigo-600 hover:underline">&larr; {{ __('messages.nav.projects') }}</a>
    <h1 class="text-3xl font-bold mt-4">{{ $project->titre }}</h1>
    @if($project->secteur)
        <p class="mt-2 text-slate-500 text-sm">{{ $project->secteur }}</p>
    @endif
    <div class="mt-8 space-y-6">
        @if($project->description)
            <div>
                <h2 class="font-semibold text-lg mb-2">Description</h2>
                <p class="text-slate-600 leading-relaxed">{{ $project->description }}</p>
            </div>
        @endif
        @if($project->resultat)
            <div>
                <h2 class="font-semibold text-lg mb-2">Résultat</h2>
                <p class="text-slate-600 leading-relaxed">{{ $project->resultat }}</p>
            </div>
        @endif
    </div>
</section>
@endsection