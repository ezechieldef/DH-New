@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto px-4 md:px-0 py-12 md:py-16">
    <h1 class="text-3xl md:text-4xl font-bold mb-8">{{ __('messages.pages.process.title') }}</h1>
    <ol class="relative border-l border-slate-200 pl-6 space-y-10">
        @foreach ([
            ['title'=>__('messages.pages.process.steps.discovery'), 'text'=>__('messages.pages.process.steps.discovery_text')],
            ['title'=>__('messages.pages.process.steps.design'), 'text'=>__('messages.pages.process.steps.design_text')],
            ['title'=>__('messages.pages.process.steps.development'), 'text'=>__('messages.pages.process.steps.development_text')],
            ['title'=>__('messages.pages.process.steps.qa'), 'text'=>__('messages.pages.process.steps.qa_text')],
            ['title'=>__('messages.pages.process.steps.delivery'), 'text'=>__('messages.pages.process.steps.delivery_text')],
            ['title'=>__('messages.pages.process.steps.iteration'), 'text'=>__('messages.pages.process.steps.iteration_text')],
        ] as $i => $step)
            <li class="ml-4">
                <div class="absolute -left-[9px] w-4 h-4 rounded-full bg-brand-600 border-2 border-white shadow"></div>
                <h3 class="font-semibold text-slate-800">{{ sprintf('%02d', $i+1) }}. {{ $step['title'] }}</h3>
                <p class="mt-2 text-sm text-slate-600 leading-relaxed">{{ $step['text'] }}</p>
            </li>
        @endforeach
    </ol>
</div>
@endsection