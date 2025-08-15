<header class="sticky top-0 z-50 glass-bg shadow-[0_1px_0_0_rgba(0,0,0,0.04)]">
    <div class="max-w-7xl mx-auto px-4 md:px-6 py-3 flex items-center justify-between gap-6">
        <a href="{{ route('home', $locale) }}" class="relative flex items-center gap-2 group">
            <img src="{{ asset('logo-dh-blanc.svg') }}"
                style="max-height: 30px; filter: drop-shadow(0 0 1px rgba(0,0,0,0.5)); " alt="">
            {{-- filter: brightness(0) invert(1) drop-shadow(0 0 1px #000); --}}
            {{-- <span
                class="inline-flex h-9 w-9 items-center justify-center rounded-lg bg-gradient-to-br from-brand-500 to-brand-600 text-white font-bold shadow-soft ring-1 ring-inset ring-white/40">D</span> --}}
            <div class="gap-0">

                <label class="text-lg font-semibold tracking-tight text-slate-800  transition whitespace-nowrap mb-0"
                    style="color:rgba(0,0,0,0.85);mix-blend-mode:plus-lighter;letter-spacing: 0.05em;">
                    D - HARVEST
                </label>

            </div>
        </a>

        <button id="nav-toggle"
            class="md:hidden inline-flex items-center justify-center h-10 w-10 rounded-lg border border-slate-200 text-slate-600 hover:text-brand-600 hover:border-brand-300 transition focus:outline-none focus:ring-2 focus:ring-brand-500 focus:ring-offset-2 bg-white/60"
            aria-label="Menu" aria-expanded="false">
            <svg class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>


        <nav id="nav-desktop"
            class="hidden md:flex gap-5 items-center text-sm border py-1 px-1 rounded-full uppercase font-semibold text-black/80 nav-desktop bg-dark-mode">
            <a href="{{ route('home', $locale) }}" class="nav-link">{{ __('messages.nav.home') }}</a>
            <a href="{{ route('services.index', $locale) }}" class="nav-link">{{ __('messages.nav.services') }}</a>
            <a href="{{ route('projects.index', $locale) }}" class="nav-link ">{{ __('messages.nav.projects') }}</a>
            <a href="{{ route('blog.index', $locale) }}" class="nav-link">{{ __('messages.nav.blog') }}</a>
            <a href="{{ route('faq.index', $locale) }}" class="nav-link">{{ __('messages.nav.faq') }}</a>
            <a href="{{ route('about', $locale) }}" class="nav-link">{{ __('messages.nav.about') }}</a>
            <a href="{{ route('contact.create', $locale) }}" class="nav-link">{{ __('messages.nav.contact') }}</a>
        </nav>

        <div class="hidden md:flex items-center gap-4">
            <a href="{{ route('quote.create', $locale) }}"
                class="inline-flex items-center gap-2 group px-3 py-2 rounded-lg bg-brand-600 text-white text-sm font-medium shadow-soft hover:bg-brand-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-brand-500 transition">
                <i class="ti ti-bubble"></i>
                <span>{{ __('messages.nav.quote') }}</span>
            </a>
            <a href="{{ url($switchLocale) }}"
                class=" font-semibold tracking-wide text-sm text-slate-500 px-3 py-2 rounded-lg hover:bg-white uppercase border hover:shadow">
                <i class="ti ti-world me-1"></i>

                {{ $switchLocale }}
            </a>
        </div>
    </div>
    <!-- Mobile panel -->
    <div id="nav-mobile"
        class="md:hidden hidden px-4 pb-6 origin-top animate-in fade-in slide-in-from-top-2 duration-150">
        <div class="rounded-2xl border border-slate-200 bg-white/80 backdrop-blur p-6 shadow-soft">
            <div class="flex flex-col gap-4 text-sm font-medium">
                <a href="{{ route('services.index', $locale) }}"
                    class="mobile-link">{{ __('messages.nav.services') }}</a>
                <a href="{{ route('projects.index', $locale) }}"
                    class="mobile-link">{{ __('messages.nav.projects') }}</a>
                <a href="{{ route('blog.index', $locale) }}" class="mobile-link">{{ __('messages.nav.blog') }}</a>
                <a href="{{ route('faq.index', $locale) }}" class="mobile-link">{{ __('messages.nav.faq') }}</a>
                <a href="{{ route('about', $locale) }}" class="mobile-link">{{ __('messages.nav.about') }}</a>
                <a href="{{ route('contact.create', $locale) }}"
                    class="mobile-link">{{ __('messages.nav.contact') }}</a>
            </div>
            <div class="mt-6 flex flex-wrap items-center gap-4">
                <a href="{{ route('quote.create', $locale) }}"
                    class="inline-flex w-full justify-center items-center gap-2 px-5 py-2.5 rounded-full bg-brand-600 text-white text-sm font-medium shadow-soft hover:bg-brand-500 transition">{{ __('messages.nav.quote') }}</a>
                <a href="{{ url($switchLocale) }}"
                    class="text-xs font-semibold tracking-wide text-slate-500 hover:text-brand-600 uppercase">
                    <i class="ti ti-world"></i>
                    {{ $switchLocale }}</a>
            </div>
        </div>
    </div>
</header>
