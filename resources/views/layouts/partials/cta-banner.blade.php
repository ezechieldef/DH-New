<section class="bg-blue-600 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl font-bold text-white mb-4">{{ __('messages.cta.title') }}</h2>
        <p class="text-xl text-blue-100 mb-8">{{ __('messages.cta.subtitle') }}</p>
        <a href="{{ route('quote.create', app()->getLocale()) }}" 
           class="inline-block bg-white text-blue-600 font-semibold px-8 py-3 rounded-lg hover:bg-gray-100 transition-colors duration-200">
            {{ __('messages.cta.button') }}
        </a>
    </div>
</section>