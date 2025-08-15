@extends('layouts.app')

@section('content')
<section class="max-w-4xl mx-auto px-6 py-16">
  <a href="{{ route('projects.index') }}" class="text-sm text-indigo-600">&larr; Tous les projets</a>
  <h1 class="text-3xl font-bold mt-4">{{ $project->titre }}</h1>
  <p class="text-slate-500 text-sm">{{ $project->secteur }}</p>

  <div class="mt-8 grid md:grid-cols-2 gap-8">
    <div>
      @if($project->image_couverture)
        <img src="{{ asset('storage/'.$project->image_couverture) }}" alt="{{ $project->titre }}" class="rounded-lg">
      @else
        <div class="aspect-[4/3] bg-slate-100 rounded-lg flex items-center justify-center text-slate-400">Image</div>
      @endif
    </div>
    <div class="prose prose-sm max-w-none">
      {!! nl2br(e($project->description)) !!}
      @if($project->resultat)
        <h3>Résultats</h3>
        <p>{!! nl2br(e($project->resultat)) !!}</p>
      @endif
      @if($project->lien_client)
        <p><a class="text-indigo-600 font-medium" href="{{ $project->lien_client }}" target="_blank" rel="noopener">Voir le site &rarr;</a></p>
      @endif
    </div>
  </div>

  @if($related->count())
    <div class="mt-16">
      <h2 class="text-xl font-semibold mb-6">Autres projets</h2>
      <div class="grid md:grid-cols-3 gap-6">
        @foreach($related as $p)
          <a href="{{ route('projects.show',$p->slug) }}" class="block text-sm hover:text-indigo-600">
            {{ $p->titre }}
          </a>
        @endforeach
      </div>
    </div>
  @endif
</section>
@endsection