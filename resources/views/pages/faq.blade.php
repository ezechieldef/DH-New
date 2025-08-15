@extends('layouts.app')
@section('content')
<section class="max-w-4xl mx-auto px-6 py-16">
    <h1 class="text-3xl font-bold mb-10">FAQ</h1>
    <div class="space-y-6">
        @forelse($faqs as $faq)
            <div class="border rounded-lg p-5 bg-white shadow-sm">
                <h2 class="font-semibold text-lg">{{ $faq->question }}</h2>
                <p class="mt-2 text-slate-600">{{ $faq->reponse }}</p>
            </div>
        @empty
            <p class="text-slate-500">Aucune question pour le moment.</p>
        @endforelse
    </div>
</section>
@endsection