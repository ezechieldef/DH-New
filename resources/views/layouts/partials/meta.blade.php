<?php
    $title = $title ?? config('app.branding.slogan');
    $description = $description ?? config('app.branding.slogan');
    $image = $image ?? null;
    $structuredData = $structuredData ?? null;
?>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ $title }} - {{ config('app.name') }}</title>
<meta name="description" content="{{ $description }}">

{{-- OpenGraph / Facebook --}}
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:url" content="{{ request()->url() }}">
<meta property="og:site_name" content="{{ config('app.name') }}">
@if($image)
<meta property="og:image" content="{{ $image }}">
@endif

{{-- Twitter Card --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ $description }}">
@if($image)
<meta name="twitter:image" content="{{ $image }}">
@endif

{{-- Structured Data --}}
@if($structuredData)
<script type="application/ld+json">
{!! json_encode($structuredData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endif

{{-- Fonts --}}
<link rel="preconnect" href="https://fonts.bunny.net">
<link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />