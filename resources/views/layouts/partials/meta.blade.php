@php
    $appName = config('app.name', 'D-HARVEST');
    $pageTitle = ($title ?? null)
        ? $title . ' | ' . $appName
        : $appName;
    $desc = $description
        ?? 'Nous accompagnons les entreprises dans la conception, le développement et l’évolution de solutions logicielles sur mesure.';
@endphp
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>{{ $pageTitle }}</title>
<meta name="description" content="{{ $desc }}">

<link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
<link rel="alternate" hreflang="fr" href="{{ url('fr') }}">
<link rel="alternate" hreflang="en" href="{{ url('en') }}">

<meta property="og:type" content="website">
<meta property="og:title" content="{{ $pageTitle }}">
<meta property="og:description" content="{{ $desc }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:site_name" content="{{ $appName }}">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $pageTitle }}">
<meta name="twitter:description" content="{{ $desc }}">

@if(!empty($structured))
    <script type="application/ld+json">
        {!! json_encode($structured, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT) !!}
    </script>
@endif