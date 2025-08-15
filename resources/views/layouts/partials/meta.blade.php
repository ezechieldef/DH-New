@php
    $baseTitle = 'Des services Premium, notre standard pour vous.';
    $brand = 'D-HARVEST';
    $fullTitle = ($title ?? $baseTitle).' | '.$brand;
    $metaDesc = $description
        ?? 'D-HARVEST : développement web & mobile sur mesure, maintenance, refonte, conseil technique. Des services Premium, notre standard pour vous.';
@endphp
<title>{{ $fullTitle }}</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="{{ $metaDesc }}">
<link rel="canonical" href="{{ url()->current() }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $fullTitle }}">
<meta property="og:description" content="{{ $metaDesc }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:site_name" content="D-HARVEST">
<meta name="twitter:card" content="summary_large_image">
<meta name="csrf-token" content="{{ csrf_token() }}">
@if(!empty($structured ?? null))
<script type="application/ld+json">
{!! json_encode($structured, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES) !!}
</script>
@endif