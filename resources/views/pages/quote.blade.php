@extends('layouts.app')

@section('content')
<section class="max-w-4xl mx-auto px-6 py-16">
  <h1 class="text-3xl font-bold mb-6">Demande de devis</h1>
  <p class="text-slate-600 mb-10">
    Remplissez ce formulaire et notre équipe vous contactera rapidement pour analyser votre besoin.
  </p>
  <div id="quote-form">
    <quote-form></quote-form>
  </div>
</section>
@endsection