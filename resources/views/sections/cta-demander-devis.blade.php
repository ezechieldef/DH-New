<section class="">
    <div class="max-w-7xl mx-auto px-4 md:px-6 text-center">
        <div
            class="relative rounded-3xl border border-slate-200 bg-slate-800 text-white p-12 md:p-16 overflow-hidden shadow-soft">
            <div class="absolute inset-0 opacity-10 bg-[radial-gradient(circle_at_30%_30%,white,transparent_60%)]">
            </div>
            <h2 class="text-3xl md:text-6xl font-bold tracking-tight mb-6">Il est temps d'amorcer votre <span
                    class="text-brand-500"> projet</span> !</h2>
            <p class="text-base md:text-lg text-white/90 max-w-2xl mx-auto leading-relaxed">Discutons de vos objectifs
                et identifions ensemble les leviers techniques qui créeront le plus de valeur.</p>
            <div class="mt-10 flex flex-wrap justify-center gap-4">
                <a href="{{ route('quote.create', app()->getLocale()) }}"
                    class="inline-flex items-center gap-2 px-8 py-3 rounded-lg bg-white text-slate-900 font-medium shadow-soft hover:bg-white/90 transition">{{ __('messages.cta.get_quote') }}</a>
                <a href="{{ route('contact.create', app()->getLocale()) }}"
                    class="inline-flex items-center gap-2 px-8 py-3 rounded-lg border border-white/40 text-white font-medium hover:bg-white/10 transition">{{ __('messages.nav.contact') }}
                    →</a>
            </div>
        </div>
    </div>
</section>
