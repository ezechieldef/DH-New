@extends('layouts.app')

@section('content')
    <section class="relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 md:px-6 pt-20 pb-24 relative">
            <div class="grid md:grid-cols-2 gap-14 ">
                <div class="relative z-10">
                    <div
                        class="inline-flex items-center gap-2 rounded-lg border border-white/60 bg-black/5 backdrop-blur-md px-4 py-1 text-xs font-medium text-white  mb-3">
                        <span class="h-1.5 w-1.5 inline-block rounded-full bg-brand-200 animate-pulse"></span>
                        {{ __('messages.tagline') }}
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-slate-900 leading-tight">
                        {!! __('messages.hero_title') !!}
                    </h1>
                    <p class="mt-6 text-lg text-slate-600 max-w-xl leading-relaxed">
                        {{ __('messages.hero_subtitle') }}
                    </p>
                    <div class="mt-10 flex flex-wrap gap-4">
                        <a href="{{ route('quote.create', app()->getLocale()) }}"
                            class="inline-flex items-center gap-2 px-7 py-3 rounded-lg bg-brand-600 text-white font-medium shadow-soft hover:bg-brand-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500 transition">
                            <span>{{ __('messages.cta.get_quote') }}</span>
                        </a>
                        <a href="{{ route('services.index', app()->getLocale()) }}"
                            class="inline-flex items-center gap-2 px-7 py-3 rounded-lg border border-slate-300/70 bg-white/70 backdrop-blur text-slate-700 font-medium hover:border-brand-300 hover:text-brand-700 transition">
                            {{ __('messages.cta.discover_services') }} →
                        </a>
                    </div>

                    <div class="mt-6 grid grid-cols-3 gap-2 max-w-lg text-sm">
                        <div class="space-y-1">
                            <p class="text-2xl font-semibold tracking-tight text-slate-900">+ 4<span>
                                    {{ __('messages.experience_years') }}</span> <span
                                    class="text-xs uppercase tracking-wide text-slate-500">{{ __('messages.experience_label') }}</span>
                            </p>
                        </div>
                        <div class="space-y-1">
                            <p class="text-2xl font-semibold tracking-tight text-slate-900">+ 100 <span
                                    class="text-xs uppercase tracking-wide text-slate-500">{{ __('messages.deliverables') }}</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="relative w-full h-[400px] mt-12">
                    <div
                        class="absolute right-[0] bottom-[20%] rounded-xl border border-slate-200/80 bg-white/40 p-4 backdrop-blur-md animate-up-down delay-0">
                        <p class="font-semibold text-slate-800 mb-1">{{ __('messages.architecture_title') }}</p>
                        <p>{{ __('messages.architecture_desc') }}</p>
                    </div>

                    <div
                        class="absolute left-[10%] bottom-[30%] rounded-xl border border-slate-200/80 bg-white/40 p-4 backdrop-blur-md animate-up-down delay-1">
                        <span
                            class="bg-brand-500 rounded-lg px-3 py-1 text-sm absolute top-[-20%] text-white font-bold ">{{ __('messages.premium_badge') }}</span>
                        <p class="font-semibold text-slate-800 mb-1">{{ __('messages.mobile_apps_title') }}</p>
                        <p>{{ __('messages.mobile_apps_desc') }}</p>
                    </div>

                    <div
                        class="absolute left-[30%] top-[15%] rounded-xl border border-slate-200/80 bg-white/40 p-4 backdrop-blur-md animate-down-up delay-2">
                        <p class="font-semibold text-slate-800 mb-1">{{ __('messages.accompagnement_title') }}</p>
                        <p>{{ __('messages.accompagnement_desc') }}</p>
                    </div>

                    <div
                        class="absolute left-[60%] top-[0%] rounded-xl border border-slate-200/80 bg-white/40 p-4 backdrop-blur-md animate-up-down delay-3">
                        <span
                            class="bg-brand-500 rounded-lg px-3 py-1 text-sm absolute top-[-20%] text-white font-bold ">{{ __('messages.premium_badge') }}</span>
                        <p class="font-semibold text-slate-800 mb-1">{{ __('messages.web_apps_title') }}</p>
                        <p>{{ __('messages.web_apps_desc') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="relative overflow-hidden">
        <div class="absolute inset-0 pointer-events-none opacity-60"
            style="mask-image:radial-gradient(circle at 30% 30%,black,transparent 70%);">
            <div
                class="absolute -top-48 -left-32 w-[40rem] h-[40rem] bg-gradient-to-br from-brand-200 via-brand-100 to-transparent rounded-full blur-3xl">
            </div>
            <div
                class="absolute top-1/2 -right-40 w-[42rem] h-[42rem] bg-gradient-to-br from-accent-200 via-accent-100 to-transparent rounded-full blur-3xl">
            </div>
        </div>
        <div class="max-w-7xl mx-auto px-4 md:px-6 pt-20 pb-24 relative">
            <div class="grid md:grid-cols-2 gap-14 items-center">
                <div class="relative z-10">
                    <div
                        class="inline-flex items-center gap-2 rounded-full border border-brand-300/60 bg-white/70 backdrop-blur px-4 py-1 text-xs font-medium text-brand-700 shadow-soft mb-6">
                        <span class="h-1.5 w-1.5 inline-block rounded-full bg-brand-500 animate-pulse"></span>
                        D-HARVEST • Software Excellence
                    </div>
                    <h1 class="text-4xl md:text-5xl font-bold tracking-tight text-slate-900 leading-tight">
                        Demander un devis,<br class="hidden md:block"> Parlez-nous de votre projet.
                    </h1>
                    <p class="mt-6 text-lg text-slate-600 max-w-xl leading-relaxed">
                        Conception et développement d'applications web & mobile sur mesure. Fiabilité, performance et
                        évolutivité pour accélérer votre croissance.
                    </p>
                    <div class="mt-10 flex flex-wrap gap-4">
                        <a href="{{ route('quote.create', app()->getLocale()) }}"
                            class="inline-flex items-center gap-2 px-7 py-3 rounded-full bg-brand-600 text-white font-medium shadow-soft hover:bg-brand-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500 transition">
                            <span>{{ __('messages.cta.get_quote') }}</span>
                        </a>
                        <a href="{{ route('services.index', app()->getLocale()) }}"
                            class="inline-flex items-center gap-2 px-7 py-3 rounded-full border border-slate-300/70 bg-white/70 backdrop-blur text-slate-700 font-medium hover:border-brand-300 hover:text-brand-700 transition">
                            {{ __('messages.cta.discover_services') }} →
                        </a>
                    </div>
                    <div class="mt-12 grid grid-cols-3 gap-8 max-w-lg text-sm">
                        <div class="space-y-1">
                            <p class="text-3xl font-semibold tracking-tight text-slate-900">5+<span
                                    class="text-brand-600">ans</span></p>
                            <p class="text-xs uppercase tracking-wide text-slate-500">Expérience</p>
                        </div>
                        <div class="space-y-1">
                            <p class="text-3xl font-semibold tracking-tight text-slate-900">100+<span
                                    class="text-brand-600">+</span></p>
                            <p class="text-xs uppercase tracking-wide text-slate-500">Livrables</p>
                        </div>
                        <div class="space-y-1">
                            <p class="text-3xl font-semibold tracking-tight text-slate-900">100%<span
                                    class="text-brand-600">+</span></p>
                            <p class="text-xs uppercase tracking-wide text-slate-500">Qualité</p>
                        </div>
                    </div>
                </div>
                <div class="relative">
                    <div class="relative rounded-3xl border border-slate-200/70 bg-white/60 backdrop-blur shadow-soft p-6">
                        <div
                            class="aspect-[4/3] rounded-2xl bg-grid-soft bg-[size:36px_36px] relative overflow-hidden flex items-center justify-center text-slate-500 font-medium">
                            <div
                                class="absolute inset-0 bg-gradient-to-br from-brand-100/60 via-transparent to-accent-100/60 mix-blend-multiply">
                            </div>
                            <span class="relative">(Visuel / Illustration)</span>
                        </div>
                        <div class="mt-6 grid grid-cols-2 gap-4 text-xs text-slate-600">
                            <div class="rounded-xl border border-slate-200/80 bg-white/70 p-4 backdrop-blur">
                                <p class="font-semibold text-slate-800 mb-1">Architecture</p>
                                <p>Scalable & robuste</p>
                            </div>
                            <div class="rounded-xl border border-slate-200/80 bg-white/70 p-4 backdrop-blur">
                                <p class="font-semibold text-slate-800 mb-1">Qualité</p>
                                <p>Tests & revues</p>
                            </div>
                            <div class="rounded-xl border border-slate-200/80 bg-white/70 p-4 backdrop-blur">
                                <p class="font-semibold text-slate-800 mb-1">Performance</p>
                                <p>Optimisation continue</p>
                            </div>
                            <div class="rounded-xl border border-slate-200/80 bg-white/70 p-4 backdrop-blur">
                                <p class="font-semibold text-slate-800 mb-1">Accompagnement</p>
                                <p>Conseil durable</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-12 md:py-20 border-t bg-white">
        <div class="max-w-7xl mx-auto px-4 md:px-6">
            <h2 class="text-sm font-medium tracking-wide text-slate-500 uppercase mb-6">Partenaires & Références</h2>
            <div class="grid grid-cols-2 md:grid-cols-6 gap-6 md:gap-10 items-center opacity-70">
                @foreach (range(1, 6) as $i)
                    <div
                        class="h-12 md:h-14 rounded-lg border border-slate-200 flex items-center justify-center text-slate-400 text-xs font-medium bg-slate-50/50">
                        Logo {{ $i }}</div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20 bg-gradient-to-b from-white to-slate-50/60">
        <div class="max-w-7xl mx-auto px-4 md:px-6">
            <div class="flex items-end justify-between mb-12 gap-8">
                <h2 class="text-2xl md:text-3xl font-bold tracking-tight text-slate-900">
                    {{ __('messages.sections.services') }}</h2>
                <a href="{{ route('services.index', app()->getLocale()) }}"
                    class="hidden md:inline-flex items-center gap-2 text-sm font-medium text-brand-700 hover:text-brand-600">Tout
                    voir →</a>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                @foreach (['Conseil & Audit', 'Développement sur mesure', 'Maintenance & Évolution'] as $service)
                    <div
                        class="group relative overflow-hidden rounded-2xl border border-slate-200 bg-white/70 backdrop-blur p-6 hover:border-brand-300 hover:shadow-soft transition flex flex-col">
                        <div
                            class="absolute -right-6 -top-6 h-20 w-20 rounded-full bg-gradient-to-br from-brand-200 to-brand-100 opacity-0 group-hover:opacity-100 blur-xl transition">
                        </div>
                        <h3 class="font-semibold text-slate-800 mb-3 group-hover:text-brand-700 transition">
                            {{ $service }}</h3>
                        <p class="text-sm text-slate-600 flex-1 leading-relaxed">
                            {{ __('messages.placeholder.lorem_short') }}</p>
                        <a href="{{ route('services.show', [app()->getLocale(), 'slug' => Str::slug($service)]) }}"
                            class="mt-5 inline-flex items-center gap-2 text-sm font-medium text-brand-700 group-hover:underline">{{ __('messages.actions.learn_more') }}
                            →</a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 md:px-6 grid md:grid-cols-2 gap-16 items-center">
            <div class="order-2 md:order-1">
                <h2 class="text-2xl md:text-3xl font-bold tracking-tight text-slate-900 mb-6">Méthode pragmatique &
                    collaborative</h2>
                <ol class="space-y-5 text-sm">
                    @foreach ([['Discovery', 'Analyse & cadrage initial'], ['Design', 'UX/UI & architecture'], ['Build', 'Développement itératif'], ['Qualité', 'Tests & revues'], ['Delivery', 'Mise en production'], ['Améliorations', 'Cycle continu']] as $i => $step)
                        <li class="relative pl-10">
                            <span
                                class="absolute left-0 top-0 h-7 w-7 rounded-full bg-gradient-to-br from-brand-500 to-brand-600 text-white text-xs font-semibold flex items-center justify-center shadow-soft">{{ $i + 1 }}</span>
                            <p class="font-medium text-slate-800">{{ $step[0] }}</p>
                            <p class="text-slate-500 mt-0.5">{{ $step[1] }}</p>
                        </li>
                    @endforeach
                </ol>
            </div>
            <div class="order-1 md:order-2 relative">
                <div class="rounded-3xl border border-slate-200 bg-white/60 backdrop-blur p-8 shadow-soft">
                    <p class="text-lg leading-relaxed text-slate-600">"Notre approche s'appuie sur une communication
                        continue, des cycles courts et une exigence forte de qualité afin de livrer rapidement de la valeur
                        mesurable."</p>
                    <div class="mt-6 flex items-center gap-3">
                        <div
                            class="h-10 w-10 rounded-full bg-gradient-to-br from-brand-500 to-brand-600 text-white flex items-center justify-center font-semibold">
                            D</div>
                        <div class="text-sm">
                            <p class="font-medium text-slate-800">D-HARVEST</p>
                            <p class="text-slate-500">Equipe</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20">
        <div class="max-w-4xl mx-auto px-4 md:px-6 text-center">
            <div
                class="relative rounded-3xl border border-slate-200 bg-gradient-to-br from-brand-600 to-brand-500 text-white p-12 md:p-16 overflow-hidden shadow-soft">
                <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_30%_30%,white,transparent_60%)]">
                </div>
                <h2 class="text-3xl md:text-4xl font-bold tracking-tight mb-6">Prêt à accélérer votre produit ?</h2>
                <p class="text-base md:text-lg text-white/90 max-w-2xl mx-auto leading-relaxed">Discutons de vos objectifs
                    et identifions ensemble les leviers techniques qui créeront le plus de valeur.</p>
                <div class="mt-10 flex flex-wrap justify-center gap-4">
                    <a href="{{ route('quote.create', app()->getLocale()) }}"
                        class="inline-flex items-center gap-2 px-8 py-3 rounded-full bg-white text-brand-700 font-medium shadow-soft hover:bg-white/90 transition">{{ __('messages.cta.get_quote') }}</a>
                    <a href="{{ route('contact.create', app()->getLocale()) }}"
                        class="inline-flex items-center gap-2 px-8 py-3 rounded-full border border-white/40 text-white font-medium hover:bg-white/10 transition">{{ __('messages.nav.contact') }}
                        →</a>
                </div>
            </div>
        </div>
    </section>
@endsection
