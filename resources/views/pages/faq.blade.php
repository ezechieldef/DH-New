@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 md:px-0 py-12 md:py-16">
    <h1 class="text-3xl md:text-4xl font-bold mb-8">{{ __('messages.pages.faq.title') }}</h1>
    <div class="space-y-6">
        @foreach ([
            ['q'=>__('messages.pages.faq.q1'), 'a'=>__('messages.pages.faq.a1')],
            ['q'=>__('messages.pages.faq.q2'), 'a'=>__('messages.pages.faq.a2')],
            ['q'=>__('messages.pages.faq.q3'), 'a'=>__('messages.pages.faq.a3')],
        ] as $item)
            <div class="p-5 rounded-lg border bg-white shadow-sm">
                <h3 class="font-medium text-slate-800">{{ $item['q'] }}</h3>
                <p class="mt-2 text-sm text-slate-600 leading-relaxed">{{ $item['a'] }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection