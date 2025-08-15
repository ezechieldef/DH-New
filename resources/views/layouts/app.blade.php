<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.partials.meta', [
        'title' => $title ?? null,
        'description' => $description ?? null,
        'image' => $image ?? null,
        'structuredData' => $structuredData ?? null
    ])

    {{-- Styles --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50 text-gray-900 antialiased">
    @include('layouts.partials.header')

    <main>
        {{ $slot }}
    </main>

    @if(!isset($hideCta) || !$hideCta)
        @include('layouts.partials.cta-banner')
    @endif

    @include('layouts.partials.footer')
</body>
</html>