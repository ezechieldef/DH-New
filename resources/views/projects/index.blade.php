@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 md:px-0 py-12 md:py-16">
    <h1 class="text-3xl md:text-4xl font-bold mb-10">{{ __('messages.pages.projects.title') }}</h1>
    <div class="grid md:grid-cols-3 gap-8">
        @foreach ($projects ?? range(1,6) as $p)
            @php
                $title = is_array($p) ? $p['title'] : "Projet $p";
            @endphp
            <div class="group rounded-xl overflow-hidden border bg-white flex flex-col">
                <div class="aspect-video bg-slate-100 flex items-center justify-center text-slate-400 text-sm">
                    Cover
                </div>
                <div class="p-5 flex flex-col flex-1">
                    <h2 class="font-semibold text-slate-800 mb-2 group-hover:text-brand-600 transition">{{ $title }}</h2>
                    <p class="text-sm text-slate-600 flex-1">{{ __('messages.placeholder.lorem_short') }}</p>
                    <a href="{{ route('projects.show',[app()->getLocale(),'slug'=>Str::slug($title)]) }}"
                       class="mt-4 inline-flex text-brand-600 text-sm font-medium hover:underline">
                        {{ __('messages.actions.view_project') }} →
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection