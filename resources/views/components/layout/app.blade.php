@props(['title' => null, 'description' => null, 'image' => null, 'structuredData' => null, 'hideCta' => false])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.meta', [
        'title' => $title,
        'description' => $description,
        'image' => $image,
        'structuredData' => $structuredData
    ])

    {{-- Styles --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 antialiased">
    @include('layouts.partials.header')

    <main>
        {{ $slot }}
    </main>

    @unless($hideCta)
        @include('layouts.partials.cta-banner')
    @endunless

    @include('layouts.partials.footer')
</body>
</html>