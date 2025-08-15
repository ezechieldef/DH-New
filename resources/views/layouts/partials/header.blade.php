@php
    $locale = app()->getLocale();
    $switchLocale = $locale === 'fr' ? 'en' : 'fr';
@endphp
<header class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between">
        <a href="{{ route('home', $locale) }}" class="font-bold text-indigo-600">D-HARVEST</a>

        <nav class="hidden md:flex gap-6 text-sm font-medium">
            <a href="{{ route('services.index', $locale) }}" class="hover:text-indigo-600">{{ __('messages.nav.services') }}</a>
            <a href="{{ route('projects.index', $locale) }}" class="hover:text-indigo-600">{{ __('messages.nav.projects') }}</a>
            <a href="{{ route('blog.index', $locale) }}" class="hover:text-indigo-600">{{ __('messages.nav.blog') }}</a>
            <a href="{{ route('faq.index', $locale) }}" class="hover:text-indigo-600">{{ __('messages.nav.faq') }}</a>
            <a href="{{ route('about', $locale) }}" class="hover:text-indigo-600">{{ __('messages.nav.about') }}</a>
            <a href="{{ route('contact.create', $locale) }}" class="hover:text-indigo-600">{{ __('messages.nav.contact') }}</a>
        </nav>

        <div class="flex items-center gap-4">
            <a href="{{ route('quote.create', $locale) }}" class="hidden md:inline-block px-4 py-2 bg-indigo-600 text-white rounded-md text-sm hover:bg-indigo-500">
                {{ __('messages.nav.quote') }}
            </a>
            <a href="{{ url($switchLocale) }}" class="text-xs uppercase tracking-wide text-slate-500 hover:text-indigo-600">
                {{ $switchLocale }}
            </a>
        </div>
    </div>
</header>