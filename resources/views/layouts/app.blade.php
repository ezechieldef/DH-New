<!DOCTYPE html>
@php
    $locale = app()->getLocale();
    $switchLocale = $locale === 'fr' ? 'en' : 'fr';
@endphp
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<link href='https://fonts.googleapis.com/css?family=Karla' rel='stylesheet'>

<head>
    @include('layouts.partials.meta', [
        'title' => $title ?? null,
        'description' => $description ?? null,
        'structured' => $structured ?? null,
    ])
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-slate-50 text-slate-800 font-sans selection:bg-brand-600/90 selection:text-white">
    @include('layouts.partials.bg-cloud')
    @include('layouts.partials.header')

    <main class="min-h-[100vh]">
        @include('layouts.partials.flash')
        @yield('content')
    </main>

    @include('layouts.partials.footer')
    <style>
        .nav-link {
            @apply relative text-slate-600 hover:text-slate-900 transition;
        }

        .nav-link:after {
            content: "";
            @apply absolute left-1/2 -translate-x-1/2 -bottom-1 w-0 h-0.5 bg-brand-600 transition-all;
        }

        .nav-link:hover:after {
            @apply w-4;
        }

        .mobile-link {
            @apply rounded-md px-3 py-2 -mx-3 text-slate-700 hover:bg-slate-100 hover:text-slate-900 transition;
        }

        .footer-link {
            @apply text-slate-500 hover:text-slate-700 transition;
        }
    </style>
    @include('layouts.partials.scripts')
    @stack('styles')
</body>

</html>
