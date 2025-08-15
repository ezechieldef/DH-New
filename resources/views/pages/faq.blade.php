@extends('layouts.app')

@section('content')
<section class="max-w-4xl mx-auto px-6 py-16">
  <h1 class="text-3xl font-bold mb-8">Foire aux questions</h1>
  <div class="divide-y divide-slate-200">
    @foreach($faqs as $faq)
      <details class="py-4 group">
        <summary class="cursor-pointer flex justify-between items-center">
          <span class="font-medium">{{ $faq->question }}</span>
          <span class="text-slate-400 group-open:rotate-180 transition">▼</span>
        </summary>
        <div class="mt-3 text-sm text-slate-600 leading-relaxed">
          {!! nl2br(e($faq->reponse)) !!}
        </div>
      </details>
    @endforeach
  </div>
</section>
@endsection