<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    @include('layouts.partials.meta', [
        'title' => $title ?? 'Développement & Solutions Numériques Sur Mesure | Ton Entreprise',
        'description' => $description ?? 'Conception et développement d’applications web & mobile, maintenance, refonte et accompagnement technique.'
    ])
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="antialiased text-slate-800 bg-white">
    @include('layouts.partials.header')
    <main>
        {{ $slot ?? '' }}
        @yield('content')
    </main>
    @include('layouts.partials.footer')
    @include('layouts.partials.cta-banner')
</body>
</html>