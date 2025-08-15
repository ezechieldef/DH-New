<footer class="mt-16 border-t bg-white">
    <div class="max-w-7xl mx-auto px-6 py-12 grid md:grid-cols-3 gap-8 text-sm">
        <div>
            <h3 class="font-semibold text-slate-700 mb-2">D-HARVEST</h3>
            <p class="text-slate-500 leading-relaxed">Des services Premium, notre standard pour vous.</p>
        </div>
        <div>
            <h3 class="font-semibold text-slate-700 mb-2">Navigation</h3>
            <ul class="space-y-1">
                <li><a class="hover:text-indigo-600" href="{{ route('services.index', app()->getLocale()) }}">{{ __('messages.nav.services') }}</a></li>
                <li><a class="hover:text-indigo-600" href="{{ route('projects.index', app()->getLocale()) }}">{{ __('messages.nav.projects') }}</a></li>
                <li><a class="hover:text-indigo-600" href="{{ route('blog.index', app()->getLocale()) }}">{{ __('messages.nav.blog') }}</a></li>
                <li><a class="hover:text-indigo-600" href="{{ route('faq.index', app()->getLocale()) }}">{{ __('messages.nav.faq') }}</a></li>
            </ul>
        </div>
        <div>
            <h3 class="font-semibold text-slate-700 mb-2">Contact</h3>
            <p class="text-slate-500">Email : contact@example.com</p>
            <p class="text-slate-500 mt-2">&copy; {{ date('Y') }} D-HARVEST.</p>
        </div>
    </div>
</footer>