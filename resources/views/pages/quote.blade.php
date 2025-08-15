@php
    $title = 'Demander un Devis';
    $description = 'Obtenez un devis personnalisé pour votre projet. Décrivez vos besoins et nous vous recontacterons rapidement.';
@endphp

<x-layout.app :title="$title" :description="$description">
    <section class="py-16">
        <div class="max-w-2xl mx-auto px-4 sm:px-6 lg:px-8">
            {{-- Header --}}
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">{{ $title }}</h1>
                <p class="text-xl text-gray-600">{{ $description }}</p>
            </div>

            {{-- Success Message --}}
            @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-6">
                {{ session('success') }}
            </div>
            @endif

            {{-- Quote Form --}}
            <div class="bg-white rounded-lg shadow-lg p-8">
                <form method="POST" action="{{ route('quote.store', app()->getLocale()) }}">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        {{-- Name --}}
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('messages.forms.name') }} <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="name" name="name" required 
                                   value="{{ old('name') }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            @error('name')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Email --}}
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('messages.forms.email') }} <span class="text-red-500">*</span>
                            </label>
                            <input type="email" id="email" name="email" required 
                                   value="{{ old('email') }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            @error('email')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Phone --}}
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('messages.forms.phone') }}
                            </label>
                            <input type="tel" id="phone" name="phone" 
                                   value="{{ old('phone') }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            @error('phone')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Company --}}
                        <div>
                            <label for="company" class="block text-sm font-medium text-gray-700 mb-2">
                                {{ __('messages.forms.company') }}
                            </label>
                            <input type="text" id="company" name="company" 
                                   value="{{ old('company') }}"
                                   class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            @error('company')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    {{-- Subject --}}
                    <div class="mt-6">
                        <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">
                            {{ __('messages.forms.subject') }} <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="subject" name="subject" required 
                               value="{{ old('subject') }}"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        @error('subject')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Message --}}
                    <div class="mt-6">
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                            {{ __('messages.forms.message') }} <span class="text-red-500">*</span>
                        </label>
                        <textarea id="message" name="message" rows="6" required 
                                  class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">{{ old('message') }}</textarea>
                        @error('message')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Budget --}}
                    <div class="mt-6">
                        <label for="budget" class="block text-sm font-medium text-gray-700 mb-2">
                            {{ __('messages.forms.budget') }} (EUR)
                        </label>
                        <input type="number" id="budget" name="budget" min="0" step="100"
                               value="{{ old('budget') }}"
                               class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        @error('budget')
                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Submit --}}
                    <div class="mt-8">
                        <button type="submit" class="w-full btn-primary text-center justify-center">
                            {{ __('messages.send_message') }}
                        </button>
                    </div>
                </form>

                {{-- Vue Component Mount Point --}}
                <div id="quote-form" class="mt-8" style="display: none;">
                    {{-- Vue QuoteForm component will be mounted here --}}
                </div>
            </div>
        </div>
    </section>
</x-layout.app>