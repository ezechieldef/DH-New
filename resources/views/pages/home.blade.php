@extends('layouts.app')

@section('content')
    <section class="relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 py-24">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold tracking-tight">
                        Les Des servisces Premium, notre standard dpour vous.
                    </h1>
                    <p class="mt-6 text-lg text-slate-600">
                        D-HARVEST conçoit et développe des solutions logicielles sur mesure (web & mobile) fiables,
                        performantes et évolutives pour accélérer la croissance de votre entreprise.
                    </p>
                    <div class="mt-8 flex flex-wrap gap-4">
                        <a href="{{ route('quote.create', app()->getLocale()) }}"
                            class="rounded-md bg-green-500 text-white px-6 py-2 font-medium hover:bg-green-600">
                            {{ __('messages.cta_quote') }}
                        </a>
                        <a href="{{ route('services.index', app()->getLocale()) }}"
                            class="flex items-center text-slate-600 rounded   font-semibold py-2 px-4  bg-white !border-white/50">
                            <span>

                                {{ __('messages.nav.services') }} <i class="ti ti-arrow-right ms-1"></i>
                            </span>
                        </a>
                    </div>
                    <div class="mt-8 flex flex-wrap gap-6 text-sm text-slate-500">
                        <div class="flex items-center gap-2"><span class="font-semibold text-slate-800">+5</span> ans
                        </div>
                        <div class="flex items-center gap-2"><span class="font-semibold text-slate-800">+100</span>
                            livrables</div>
                        <div class="flex items-center gap-2"><span class="font-semibold text-slate-800">Qualité</span>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    {{-- <div
                            class="aspect-[4/3] rounded-2xl bg-gradient-to-br from-indigo-100 to-indigo-300 flex items-center justify-center text-indigo-800 font-semibold text-xl">
                            (Logo D-HARVEST à venir)
                        </div> --}}
                </div>
            </div>
        </div>
    </section>
    @foreach ([1, 2, 3, 4, 5, 6] as $item)
        <section class="relative overflow-hidden">
            <div class="max-w-7xl mx-auto px-6 py-24">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div>
                        <h1 class="text-4xl md:text-5xl font-bold tracking-tight">
                            Des services Premium, notre standard pour vous.
                        </h1>
                        <p class="mt-6 text-lg text-slate-600">
                            D-HARVEST conçoit et développe des solutions logicielles sur mesure (web & mobile) fiables,
                            performantes et évolutives pour accélérer la croissance de votre entreprise.
                        </p>
                        <div class="mt-8 flex flex-wrap gap-4">
                            <a href="{{ route('quote.create', app()->getLocale()) }}"
                                class="rounded-md bg-green-500 text-white px-6 py-2 font-medium hover:bg-green-600">
                                {{ __('messages.cta_quote') }}
                            </a>
                            <a href="{{ route('services.index', app()->getLocale()) }}"
                                class="flex items-center text-slate-600 rounded   font-semibold py-2 px-4  bg-white !border-white/50">
                                <span>

                                    {{ __('messages.nav.services') }} <i class="ti ti-arrow-right ms-1"></i>
                                </span>
                            </a>
                        </div>
                        <div class="mt-8 flex flex-wrap gap-6 text-sm text-slate-500">
                            <div class="flex items-center gap-2"><span class="font-semibold text-slate-800">+5</span> ans
                            </div>
                            <div class="flex items-center gap-2"><span class="font-semibold text-slate-800">+100</span>
                                livrables</div>
                            <div class="flex items-center gap-2"><span class="font-semibold text-slate-800">Qualité</span>
                            </div>
                        </div>
                    </div>
                    <div class="relative">
                        {{-- <div
                            class="aspect-[4/3] rounded-2xl bg-gradient-to-br from-indigo-100 to-indigo-300 flex items-center justify-center text-indigo-800 font-semibold text-xl">
                            (Logo D-HARVEST à venir)
                        </div> --}}
                    </div>
                </div>
            </div>
        </section>
    @endforeach
@endsection
