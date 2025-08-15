@php
    $title = config('app.branding.slogan');
    $description = __('messages.footer.description');
    
    $structuredDataService = new \App\Services\StructuredData();
    $structuredData = $structuredDataService->organization();
@endphp

<x-layout.app :title="$title" :description="$description" :structured-data="$structuredData">
    {{-- Hero Section --}}
    <section class="bg-gradient-to-r from-blue-600 to-purple-700 text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">
                    {{ config('app.branding.slogan') }}
                </h1>
                <p class="text-xl md:text-2xl text-blue-100 mb-8 max-w-3xl mx-auto">
                    {{ __('messages.footer.description') }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('services.index', app()->getLocale()) }}" 
                       class="btn-primary bg-white text-blue-600 hover:bg-gray-100">
                        {{ __('messages.learn_more') }}
                    </a>
                    <a href="{{ route('quote.create', app()->getLocale()) }}" 
                       class="btn-outline border-white text-white hover:bg-white hover:text-blue-600">
                        {{ __('messages.get_quote') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Featured Services --}}
    @if($featuredServices->count() > 0)
    <section class="py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Nos Services Premium</h2>
                <p class="text-xl text-gray-600">Des solutions sur mesure pour votre croissance</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($featuredServices as $service)
                <div class="bg-white rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow duration-300">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">{{ $service->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ $service->description }}</p>
                        @if($service->price)
                        <p class="text-2xl font-bold text-blue-600 mb-4">À partir de {{ number_format($service->price, 0, ',', ' ') }}€</p>
                        @endif
                        <a href="{{ route('services.show', [app()->getLocale(), $service->slug]) }}" 
                           class="text-blue-600 font-medium hover:text-blue-800">
                            {{ __('messages.learn_more') }} →
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    {{-- Latest Posts --}}
    @if($latestPosts->count() > 0)
    <section class="py-16 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Articles Récents</h2>
                <p class="text-xl text-gray-600">Découvrez nos dernières actualités et conseils</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($latestPosts as $post)
                <article class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition-shadow duration-300">
                    @if($post->featured_image)
                    <img src="{{ $post->featured_image }}" alt="{{ $post->title }}" class="w-full h-48 object-cover">
                    @endif
                    <div class="p-6">
                        <h3 class="text-xl font-semibold mb-2">{{ $post->title }}</h3>
                        <p class="text-gray-600 mb-4">{{ $post->excerpt }}</p>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">{{ $post->published_at->format('d M Y') }}</span>
                            <a href="{{ route('blog.show', [app()->getLocale(), $post->slug]) }}" 
                               class="text-blue-600 font-medium hover:text-blue-800">
                                {{ __('messages.read_more') }} →
                            </a>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>
    @endif
</x-layout.app>