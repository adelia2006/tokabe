<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('Tokabe.id - Advertising Agency Solutions in Medan, Sumatera') }}</title>
    <meta name="description" content="{{ __('Tokabe.id adalah agensi periklanan terbaik di Medan, Sumatera. Kami menyediakan layanan sewa Videotron (DOOH), Billboard (OOH), Event Organizer, dan Brand Activation.') }}">
    <meta name="keywords" content="Sewa videotron Medan, Billboard Sumatera, Event organizer Medan, Advertising agency Sumatera, Jasa OOH Medan">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url('/') }}">
    
    <meta property="og:title" content="{{ __('Tokabe.id - Advertising Agency Solutions in Medan, Sumatera') }}">
    <meta property="og:description" content="{{ __('Tokabe.id adalah agensi periklanan terbaik di Medan, Sumatera. Kami menyediakan layanan sewa Videotron (DOOH), Billboard (OOH), Event Organizer, dan Brand Activation.') }}">
    <meta property="og:image" content="{{ asset('images/LogoTKB.jpg') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">

    <!-- JSON-LD Schema Markup -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "AdvertisingAgency",
      "name": "Tokabe.id",
      "image": "{{ asset('images/LogoTKB.jpg') }}",
      "@id": "{{ url('/') }}",
      "url": "{{ url('/') }}",
      "description": "Tokabe.id Videotron DOOH, OOH, Event Organizer, Brand Activity, Sponsor Agency.",
      "address": {
        "@type": "PostalAddress",
        "addressLocality": "Medan",
        "addressRegion": "Sumatera Utara",
        "addressCountry": "ID"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 3.5952,
        "longitude": 98.6722
      }
    }
    </script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="icon" type="image/jpeg" href="{{ asset('images/LogoTKB.jpg') }}?v=2">
    <link rel="shortcut icon" type="image/jpeg" href="{{ asset('images/LogoTKB.jpg') }}?v=2">

    <style>
        body { font-family: 'Poppins', sans-serif; }
    </style>
</head>
<body class="bg-white antialiased text-gray-900">

    <x-navbar />

    <main>
        <x-home.hero :heroes="$heroes" />

        <x-home.services :services="$services" />


        <x-home.map />

        <x-home.advertising-sites :lokasi="$lokasi" :lokasiooh="$lokasiooh" />

        <x-home.cta />

        <x-home.partners :partners="$partners" />
    </main>

    <x-footer />

</body>
</html>