@extends('layouts.app')

@section('content')
<section class="max-w-6xl mx-auto px-6 py-16">
  <h1 class="text-3xl font-bold mb-8">Projets & Références</h1>
  <div class="grid md:grid-cols-3 gap-8">
    @foreach($projects as $project)
      <a href="{{ route('projects.show',$project->slug) }}" class="block rounded-lg overflow-hidden shadow-sm border border-slate-100 hover:shadow-md transition">
        <div class="aspect-[4/3] bg-slate-100 flex items-center justify-center text-slate-400 text-sm">
          @if($project->image_couverture)
            <img src="{{ asset('storage/'.$project->image_couverture) }}" alt="{{ $project->titre }}" class="w-full h-full object-cover">
          @else Image
          @endif
        </div>
        <div class="p-4">
          <h2 class="font-semibold">{{ $project->titre }}</h2>
          <p class="text-xs text-slate-500 mt-1">{{ $project->secteur }}</p>
        </div>
      </a>
    @endforeach
  </div>
  <div class="mt-10">
    {{ $projects->links() }}
  </div>
</section>
@endsection