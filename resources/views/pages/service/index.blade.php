<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Layanan - Tokabe.id</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white antialiased text-gray-900 font-sans">
    <x-navbar theme="dark" />
    <main>
<div class="min-h-screen bg-white pt-28 pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight mb-4">
                {!! __('Our Services Header') !!}
            </h1>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                {!! strip_tags(__('service_title_html')) !!}
            </p>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            @foreach($services as $index => $item)
                @php
                    $judul = is_array($item->judul) ? ($item->judul[app()->getLocale()] ?? $item->judul['id'] ?? $item->judul['en'] ?? collect($item->judul)->first() ?? '') : $item->judul;
                    $deskripsi = is_array($item->deskripsi) ? ($item->deskripsi[app()->getLocale()] ?? $item->deskripsi['id'] ?? $item->deskripsi['en'] ?? collect($item->deskripsi)->first() ?? '') : $item->deskripsi;
                    $cleanDesc = strip_tags($deskripsi);
                    $shortDesc = \Illuminate\Support\Str::limit($cleanDesc, 120, '...');
                @endphp
                <a href="{{ route('services.show', $item->id) }}" class="group block" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="relative rounded-3xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-500 transform group-hover:-translate-y-2 bg-gray-50 h-full flex flex-col">
                        <!-- Image Container -->
                        <div class="w-full h-48 overflow-hidden relative">
                            <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors z-10"></div>
                            
                            @if(Str::endsWith($item->gambar, ['.mp4', '.webm', '.ogg']))
                                <video autoplay loop muted playsinline class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-in-out">
                                    <source src="{{ asset('storage/image_service/' . $item->gambar) }}" type="video/mp4">
                                </video>
                            @elseif($item->gambar)
                                <img src="{{ asset('storage/image_service/' . $item->gambar) }}" 
                                     alt="{{ $judul }}" 
                                     class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-in-out"
                                     loading="lazy">
                            @else
                                <div class="w-full h-full bg-gray-200 flex items-center justify-center">
                                    <i class="{{ $item->ikon ?? 'fas fa-desktop' }} text-4xl text-gray-400"></i>
                                </div>
                            @endif
                        </div>
                        
                        <!-- Content -->
                        <div class="p-6 text-center bg-white border-t-4 border-green-400 flex-grow flex flex-col justify-between">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-green-500 transition-colors line-clamp-2">
                                    {{ $judul }}
                                </h3>
                                <p class="text-gray-500 text-sm font-medium line-clamp-3">
                                    {{ $shortDesc }}
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

    </div>
</div>
    </main>
    <x-footer />
</body>
</html>
