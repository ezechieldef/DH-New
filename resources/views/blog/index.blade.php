@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto px-4 md:px-0 py-12 md:py-16">
    <h1 class="text-3xl md:text-4xl font-bold mb-10">{{ __('messages.pages.blog.title') }}</h1>

    <div class="space-y-10">
        @foreach ($posts ?? range(1,5) as $p)
            @php
                $title = is_array($p) ? $p['title'] : "Article $p";
            @endphp
            <article class="flex flex-col gap-4 md:flex-row md:items-center">
                <div class="w-full md:w-48 aspect-video bg-slate-100 rounded-lg flex items-center justify-center text-slate-400 text-sm">
                    Img
                </div>
                <div class="flex-1">
                    <h2 class="text-xl font-semibold text-slate-800">
                        <a class="hover:text-brand-600 transition"
                           href="{{ route('blog.show',[app()->getLocale(),'slug'=>Str::slug($title)]) }}">
                            {{ $title }}
                        </a>
                    </h2>
                    <p class="mt-2 text-sm text-slate-600 leading-relaxed">
                        {{ __('messages.placeholder.lorem_short') }}
                    </p>
                    <div class="mt-3 flex items-center gap-4 text-xs text-slate-500">
                        <span>{{ now()->subDays(is_numeric($p)?$p:1)->format('d/m/Y') }}</span>
                        <span>•</span>
                        <span>{{ __('messages.blog.read_time', ['minutes'=>5]) }}</span>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</div>
@endsection