@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 md:px-0 py-12 md:py-16">
    <h1 class="text-3xl md:text-4xl font-bold mb-10">{{ __('messages.pages.services.title') }}</h1>
    <div class="grid md:grid-cols-3 gap-8">
        @foreach ($services ?? ['Conseil','Développement','Architecture','Audit','UX/UI','Support'] as $service)
            <div class="p-6 rounded-xl border bg-white hover:shadow-md transition flex flex-col">
                <h2 class="font-semibold text-slate-800 mb-2">{{ $service }}</h2>
                <p class="text-sm text-slate-600 flex-1">{{ __('messages.placeholder.lorem_medium') }}</p>
                <a href="{{ route('services.show',[app()->getLocale(),'slug'=>Str::slug($service)]) }}"
                   class="mt-4 inline-flex text-brand-600 text-sm font-medium hover:underline">{{ __('messages.actions.learn_more') }} →</a>
            </div>
        @endforeach
    </div>
</div>
@endsection