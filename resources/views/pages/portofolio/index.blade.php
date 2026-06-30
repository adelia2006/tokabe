<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('Tokabe.id - Portofolio & Project Showcase') }}</title>
    <meta name="description" content="{{ __('Lihat karya dan proyek terbaik dari Tokabe.id: Pemasangan Videotron, Billboard OOH, dan Event Organizer di Sumatera.') }}">
    <meta name="keywords" content="Portofolio Tokabe, Proyek videotron, Event organizer Medan, Iklan billboard Sumatera">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    
    <meta property="og:title" content="{{ __('Tokabe.id - Portofolio & Project Showcase') }}">
    <meta property="og:description" content="{{ __('Lihat karya dan proyek terbaik dari Tokabe.id: Pemasangan Videotron, Billboard OOH, dan Event Organizer di Sumatera.') }}">
    <meta property="og:image" content="{{ asset('images/LogoTKB.jpg') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F9F0D6] antialiased text-gray-900 font-sans">
    <x-navbar />
    <main>
        <!-- Header Hero Section -->
        <div class="bg-gradient-to-br from-[#1A0F07] via-[#2C1A0E] to-[#5C3317] pt-40 pb-24 text-center relative overflow-hidden">
            <!-- Decorative subtle glowing blur circles -->
            <div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 rounded-full bg-white opacity-5 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-[#D4A574] opacity-10 blur-3xl"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white uppercase tracking-tight mb-4 drop-shadow-md">
                    {!! nl2br(__('Our Recent Portofolio')) !!}
                </h1>
                <p class="text-base sm:text-lg lg:text-xl text-[#F5EFE7] max-w-3xl mx-auto font-light leading-relaxed drop-shadow-sm">
                    {{ __('Showcasing Videotron Advertising Installations and Experiential Brand Activation Across Sumatra') }}
                </p>
            </div>
        </div>

        <!-- Categories Grid Minimalis (Style Shopee) -->
        <div class="bg-gray-50 py-12 sm:py-16">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-3 sm:gap-4 lg:gap-5 px-2 sm:px-0">
            @forelse($categories as $index => $item)
                <a href="{{ route('portofolio.list', $item->id) }}" class="group block" data-aos="fade-up" data-aos-delay="{{ ($index % 5) * 100 }}">
                    <div class="bg-gradient-to-br from-[#2C1A0E] via-[#5C3317] to-[#8B5E3C] rounded-3xl overflow-hidden shadow-xl border border-white/25 hover:-translate-y-2 hover:shadow-2xl transition-all duration-500 flex flex-col h-full text-left">
                        
                        <!-- Image Container (Square Full Width) -->
                        <div class="w-full aspect-square overflow-hidden bg-gray-900 flex-shrink-0">
                            @php
                                $namaKatData = $item->nama_kategori ?: ($item->getRawOriginal ? $item->getRawOriginal('nama_kategori') : '');
                                if (is_string($namaKatData) && str_starts_with($namaKatData, '{')) {
                                    $namaKatArray = json_decode($namaKatData, true);
                                } else {
                                    $namaKatArray = $namaKatData;
                                }
                                if (is_array($namaKatArray)) {
                                    $namaKategori = $namaKatArray[app()->getLocale()] ?? $namaKatArray['id'] ?? $namaKatArray['en'] ?? collect($namaKatArray)->first() ?? '';
                                } else {
                                    $namaKategori = $namaKatArray;
                                }
                            @endphp
                            <img src="{{ $item->image ? asset('storage/' . $item->image) : asset('images/default-category.jpg') }}" 
                                 alt="{{ \App\Helpers\SeoHelper::getImageAlt('event', $namaKategori) }}" 
                                 class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-in-out"
                                 loading="lazy">
                        </div>
                        
                        <!-- Content Minimalis -->
                        <div class="p-3 sm:p-4 flex-grow flex flex-col justify-center">
                            <h3 class="text-xs sm:text-sm font-bold text-white group-hover:text-[#D4A574] transition-colors truncate mb-1">
                                {{ __($namaKategori) }}
                            </h3>
                            <p class="text-[10px] sm:text-xs text-gray-400 truncate">
                                {{ $item->portofolios()->count() }} {{ __('Proyek') }}
                            </p>
                        </div>
                    </div>
                </a>
            @empty
                <div class="col-span-2 md:col-span-3 lg:col-span-4 xl:col-span-5 text-center py-16 bg-white rounded-xl border border-dashed border-gray-300 shadow-sm">
                    <i class="fas fa-folder-open text-4xl text-gray-300 mb-3"></i>
                    <p class="text-sm sm:text-base text-gray-500 font-medium">{{ __('Kategori portofolio belum tersedia.') }}</p>
                </div>
            @endforelse
        </div>

    </div>
</div>
    </main>
    <x-footer />
</body>
</html>