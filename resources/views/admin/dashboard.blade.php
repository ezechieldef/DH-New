@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 md:px-0 py-12 md:py-16 space-y-10">
    <h1 class="text-3xl md:text-4xl font-bold">{{ __('messages.admin.dashboard') }}</h1>

    <div class="grid md:grid-cols-3 gap-6">
        @foreach ([
            ['label'=>__('messages.admin.metrics.users'),'value'=>42],
            ['label'=>__('messages.admin.metrics.projects'),'value'=>17],
            ['label'=>__('messages.admin.metrics.posts'),'value'=>12],
        ] as $card)
            <div class="p-6 rounded-xl border bg-white shadow-sm">
                <p class="text-sm text-slate-500 mb-2">{{ $card['label'] }}</p>
                <p class="text-3xl font-semibold text-slate-800">{{ $card['value'] }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection