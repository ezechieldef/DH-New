<header class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-6">
            {{-- Logo --}}
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="{{ route('home', app()->getLocale()) }}" class="text-2xl font-bold text-gray-900">
                    {{ config('app.name') }}
                </a>
            </div>

            {{-- Desktop Navigation --}}
            <nav class="hidden md:flex space-x-8">
                <a href="{{ route('home', app()->getLocale()) }}" 
                   class="text-gray-500 hover:text-gray-900 px-3 py-2 text-sm font-medium">
                    {{ __('messages.nav.home') }}
                </a>
                <a href="{{ route('about', app()->getLocale()) }}" 
                   class="text-gray-500 hover:text-gray-900 px-3 py-2 text-sm font-medium">
                    {{ __('messages.nav.about') }}
                </a>
                <a href="{{ route('services.index', app()->getLocale()) }}" 
                   class="text-gray-500 hover:text-gray-900 px-3 py-2 text-sm font-medium">
                    {{ __('messages.nav.services') }}
                </a>
                <a href="{{ route('projects.index', app()->getLocale()) }}" 
                   class="text-gray-500 hover:text-gray-900 px-3 py-2 text-sm font-medium">
                    {{ __('messages.nav.projects') }}
                </a>
                <a href="{{ route('blog.index', app()->getLocale()) }}" 
                   class="text-gray-500 hover:text-gray-900 px-3 py-2 text-sm font-medium">
                    {{ __('messages.nav.blog') }}
                </a>
                <a href="{{ route('faq.index', app()->getLocale()) }}" 
                   class="text-gray-500 hover:text-gray-900 px-3 py-2 text-sm font-medium">
                    {{ __('messages.nav.faq') }}
                </a>
                <a href="{{ route('contact.create', app()->getLocale()) }}" 
                   class="text-gray-500 hover:text-gray-900 px-3 py-2 text-sm font-medium">
                    {{ __('messages.nav.contact') }}
                </a>
            </nav>

            {{-- Language & CTA --}}
            <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0 space-x-4">
                {{-- Language Switcher --}}
                <div class="flex space-x-2">
                    <a href="{{ request()->fullUrlWithQuery(['lang' => 'fr']) }}" 
                       class="text-sm {{ app()->getLocale() === 'fr' ? 'font-bold text-blue-600' : 'text-gray-500 hover:text-gray-900' }}">
                        FR
                    </a>
                    <span class="text-gray-300">|</span>
                    <a href="{{ request()->fullUrlWithQuery(['lang' => 'en']) }}" 
                       class="text-sm {{ app()->getLocale() === 'en' ? 'font-bold text-blue-600' : 'text-gray-500 hover:text-gray-900' }}">
                        EN
                    </a>
                </div>

                {{-- Quote Button --}}
                <a href="{{ route('quote.create', app()->getLocale()) }}" 
                   class="btn-primary">
                    {{ __('messages.nav.quote') }}
                </a>
            </div>

            {{-- Mobile menu button --}}
            <div class="md:hidden">
                <button type="button" class="text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-blue-500">
                    <span class="sr-only">Open menu</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>