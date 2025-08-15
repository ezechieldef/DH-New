@props(['steps' => []])

@php
  $default = [
    ['titre'=>'Découverte','desc'=>"Analyse du besoin, clarification des objectifs."],
    ['titre'=>'Conception','desc'=>"Architecture technique & UX/UI."],
    ['titre'=>'Développement','desc'=>"Sprints agiles, revues régulières."],
    ['titre'=>'Tests & QA','desc'=>"Validation qualité, performance, sécurité."],
    ['titre'=>'Déploiement','desc'=>"Mise en production contrôlée."],
    ['titre'=>'Suivi & Évolution','desc'=>"Maintenance, optimisation continue."]
  ];
  $steps = count($steps) ? $steps : $default;
@endphp

<div class="relative pl-6 before:content-[''] before:absolute before:top-0 before:left-2 before:h-full before:w-px before:bg-gradient-to-b before:from-indigo-300 before:to-indigo-600">
  @foreach($steps as $i => $s)
    <div class="relative mb-10 last:mb-0">
      <div class="absolute -left-[6px] top-0 w-4 h-4 rounded-full bg-white border-2 border-indigo-500"></div>
      <h3 class="text-lg font-semibold">{{ ($i+1) . '. ' . $s['titre'] }}</h3>
      <p class="mt-2 text-sm text-slate-600">{{ $s['desc'] }}</p>
    </div>
  @endforeach
</div>