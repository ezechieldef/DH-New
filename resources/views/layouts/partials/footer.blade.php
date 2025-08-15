<footer class="mt-24 border-t border-slate-200 bg-gradient-to-b from-white to-slate-50/60">
    <div class="max-w-7xl mx-auto px-4 md:px-6 py-16">
        <div class="grid gap-12 md:grid-cols-4 lg:gap-20 text-sm">
            <div class="space-y-4">
                <div class="flex items-center gap-2">
                    <a href="{{ route('home', $locale) }}" class="relative flex items-center gap-2 group">
                        <img src="{{ asset('logo-dh-blanc.svg') }}"
                            style="max-height: 30px; filter: drop-shadow(0 0 1px rgba(0,0,0,0.5)); " alt="">
                        {{-- filter: brightness(0) invert(1) drop-shadow(0 0 1px #000); --}}
                        {{-- <span
                class="inline-flex h-9 w-9 items-center justify-center rounded-lg bg-gradient-to-br from-brand-500 to-brand-600 text-white font-bold shadow-soft ring-1 ring-inset ring-white/40">D</span> --}}
                        <div class="gap-0">

                            <label class="text-lg font-semibold  text-slate-800  transition whitespace-nowrap mb-0"
                                style="letter-spacing: 0.05em;">
                                D - HARVEST
                            </label>

                        </div>
                    </a>
                </div>
                <p class="text-slate-500 leading-relaxed max-w-xs">Des services Premium, notre standard pour vous.</p>
            </div>
            <div class="space-y-4">
                <h3 class="font-semibold text-slate-700 uppercase tracking-wide text-xs">
                    {{ __('messages.footer.navigation') }}</h3>
                <ul class="space-y-2">
                    <li><a class="footer-link"
                            href="{{ route('services.index', app()->getLocale()) }}">{{ __('messages.nav.services') }}</a>
                    </li>
                    <li><a class="footer-link"
                            href="{{ route('projects.index', app()->getLocale()) }}">{{ __('messages.nav.projects') }}</a>
                    </li>
                    <li><a class="footer-link"
                            href="{{ route('blog.index', app()->getLocale()) }}">{{ __('messages.nav.blog') }}</a></li>
                    <li><a class="footer-link"
                            href="{{ route('faq.index', app()->getLocale()) }}">{{ __('messages.nav.faq') }}</a></li>
                </ul>
            </div>
            <div class="space-y-4">
                <h3 class="font-semibold text-slate-700 uppercase tracking-wide text-xs">{{ __('messages.nav.about') }}
                </h3>
                <ul class="space-y-2">
                    <li><a class="footer-link"
                            href="{{ route('about', app()->getLocale()) }}">{{ __('messages.nav.about') }}</a></li>
                    <li><a class="footer-link" href="{{ route('process', app()->getLocale()) }}">Process</a></li>
                    <li><a class="footer-link"
                            href="{{ route('contact.create', app()->getLocale()) }}">{{ __('messages.nav.contact') }}</a>
                    </li>
                </ul>
            </div>
            <div class="space-y-4">
                <h3 class="font-semibold text-slate-700 uppercase tracking-wide text-xs">
                    {{ __('messages.footer.contact') }}</h3>
                <ul class="space-y-2 text-slate-500">
                    <li>Email : <a href="mailto:contact@d-harvest.com"
                            class="hover:text-brand-600">contact@d-harvest.com</a></li>
                    <li>WhatsApp : <a href="https://wa.me/22900000000" class="hover:text-brand-600" target="_blank"
                            rel="noopener">+229 XX XX XX XX</a></li>
                    <li>Bénin • Afrique</li>
                </ul>
            </div>
        </div>
        <div class="mt-16 flex flex-col md:flex-row items-center justify-between gap-6 text-xs text-slate-500">
            <p>&copy; {{ date('Y') }} {{ config('app.name', 'D-HARVEST') }}. All rights reserved.</p>
            <p class="inline-flex items-center gap-1">Innovation • Qualité • Fiabilité</p>
        </div>
    </div>
</footer>
