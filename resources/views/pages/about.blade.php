@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 md:px-0 py-12 md:py-16 space-y-10">
    <header>
        <h1 class="text-3xl md:text-4xl font-bold mb-4">{{ __('messages.pages.about.title') }}</h1>
        <p class="text-lg text-slate-600 leading-relaxed">
            {{ __('messages.pages.about.intro') }}
        </p>
    </header>

    <section class="prose prose-slate max-w-none">
        <h2>{{ __('messages.pages.about.mission_title') }}</h2>
        <p>{{ __('messages.pages.about.mission_body') }}</p>

        <h2>{{ __('messages.pages.about.values_title') }}</h2>
        <ul>
            <li>{{ __('messages.pages.about.values_quality') }}</li>
            <li>{{ __('messages.pages.about.values_transparency') }}</li>
            <li>{{ __('messages.pages.about.values_partnership') }}</li>
            <li>{{ __('messages.pages.about.values_innovation') }}</li>
        </ul>
    </section>
</div>
@endsection