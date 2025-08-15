@php
    $title = 'Questions Fréquemment Posées (FAQ)';
    $description = 'Trouvez les réponses aux questions les plus courantes sur nos services et processus.';
    
    $structuredDataService = new \App\Services\StructuredData();
    $structuredData = $structuredDataService->faq($faqs);
@endphp

<x-layout.app :title="$title" :description="$description" :structured-data="$structuredData">
    <section class="py-16">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Header --}}
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $title }}</h1>
                <p class="text-xl text-gray-600">{{ $description }}</p>
            </div>

            {{-- FAQ Categories --}}
            @if($categories->count() > 0)
            <div class="mb-8">
                <div class="flex flex-wrap justify-center gap-2">
                    @foreach($categories as $category)
                    <span class="px-3 py-1 bg-blue-100 text-blue-800 rounded-full text-sm">
                        {{ ucfirst($category) }}
                    </span>
                    @endforeach
                </div>
            </div>
            @endif

            {{-- FAQ Items --}}
            <div class="space-y-6">
                @foreach($faqs as $faq)
                <div class="bg-white rounded-lg shadow-lg">
                    <div class="p-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">
                            {{ $faq->question }}
                        </h3>
                        <div class="text-gray-600 leading-relaxed">
                            {!! nl2br(e($faq->answer)) !!}
                        </div>
                        @if($faq->category)
                        <div class="mt-4">
                            <span class="px-2 py-1 bg-gray-100 text-gray-700 rounded text-xs">
                                {{ ucfirst($faq->category) }}
                            </span>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>

            @if($faqs->count() === 0)
            <div class="text-center py-12">
                <p class="text-gray-500 text-lg">Aucune FAQ disponible pour le moment.</p>
            </div>
            @endif

            {{-- Contact Section --}}
            <div class="mt-16 text-center">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">Vous ne trouvez pas votre réponse ?</h2>
                <p class="text-gray-600 mb-6">N'hésitez pas à nous contacter directement.</p>
                <a href="{{ route('contact.create', app()->getLocale()) }}" 
                   class="btn-primary">
                    {{ __('messages.contact_us') }}
                </a>
            </div>
        </div>
    </section>
</x-layout.app>