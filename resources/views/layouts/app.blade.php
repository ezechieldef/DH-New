<!DOCTYPE html>
<html lang="{{ str_replace('_','-',app()->getLocale()) }}">
<head>
    @include('layouts.partials.meta', [
        'title' => $title ?? null,
        'description' => $description ?? null,
        'structured' => $structured ?? null,
    ])
    <link rel="stylesheet" href="{{ asset('build/assets/app.css') }}">
</head>
<body class="antialiased bg-slate-50 text-slate-800">
    @include('layouts.partials.header')

    <main class="min-h-[60vh]">
        @include('layouts.partials.flash')
        @yield('content')
    </main>

    @include('layouts.partials.footer')

    <script src="{{ asset('build/assets/app.js') }}" defer></script>
</body>
</html>