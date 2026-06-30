<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php
        $catData = $category->nama_kategori ?: ($category->getRawOriginal ? $category->getRawOriginal('nama_kategori') : '');
        $catArray = is_string($catData) && str_starts_with($catData, '{') ? json_decode($catData, true) : $catData;
        $namaKat = is_array($catArray) ? ($catArray[app()->getLocale()] ?? $catArray['id'] ?? $catArray['en'] ?? collect($catArray)->first() ?? '') : $catArray;
    @endphp
    <title>Portofolio - {{ $namaKat }} | Tokabe.id</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F9F0D6] antialiased text-gray-900 font-sans">
    <x-navbar theme="dark" />
    <main>
<div class="min-h-screen bg-[#F9F0D6] pt-28 pb-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Header -->
        <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight mb-4">
                {{ $namaKat }} <span class="text-[#8B5E3C] uppercase">{{ __('Projects') }}</span>
            </h1>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                {{ __('Explore our successful projects and installations in this category.') }}
            </p>
        </div>

        <!-- Portofolio Grid Minimalis (Style Shopee) -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-3 sm:gap-4 lg:gap-6 px-2 sm:px-0">
            @forelse($portfolios as $index => $item)
                @php
                    $judulData = $item->judul ?? $item->title ?? '';
                    if (is_string($judulData) && str_starts_with($judulData, '{')) {
                        $judulArray = json_decode($judulData, true);
                    } else {
                        $judulArray = $judulData;
                    }
                    if (is_array($judulArray)) {
                        $judulText = $judulArray[app()->getLocale()] ?? $judulArray['id'] ?? $judulArray['en'] ?? collect($judulArray)->first() ?? '';
                    } else {
                        $judulText = $judulArray;
                    }
                @endphp
                <a href="{{ route('portofolio.detail', $item->id) }}" class="group block" data-aos="fade-up" data-aos-delay="{{ ($index % 5) * 100 }}">
                    <div class="bg-gradient-to-br from-[#2C1A0E] via-[#5C3317] to-[#8B5E3C] rounded-3xl overflow-hidden shadow-xl border border-white/25 hover:-translate-y-2 hover:shadow-2xl transition-all duration-500 flex flex-col h-full text-left">
                        
                        <!-- Image Container (Square / 1:1) -->
                        <div class="w-full aspect-square overflow-hidden bg-gray-900 relative flex-shrink-0">
                            @if($item->gambar)
                                <img src="{{ asset('storage/image_portofolio/' . $item->gambar) }}" 
                                     alt="{{ \App\Helpers\SeoHelper::getImageAlt('event', $judulText) }}" 
                                     class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-in-out"
                                     loading="lazy">
                            @elseif($item->firstImage)
                                <img src="{{ asset('storage/' . $item->firstImage->image) }}" 
                                     alt="{{ \App\Helpers\SeoHelper::getImageAlt('event', $judulText) }}" 
                                     class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500 ease-in-out"
                                     loading="lazy">
                            @else
                                <div class="w-full h-full flex items-center justify-center">
                                    <i class="fas fa-image text-2xl text-gray-700"></i>
                                </div>
                            @endif
                        </div>
                        
                        <!-- Content Minimalis -->
                        <div class="p-3 sm:p-4 flex-col flex flex-grow justify-center">
                            <h3 class="text-xs sm:text-sm font-bold text-white group-hover:text-[#D4A574] transition-colors truncate mb-1">
                                {{ $judulText }}
                            </h3>
                            <p class="text-[10px] sm:text-xs text-gray-400 truncate">
                                {{ $item->tanggal ? \Carbon\Carbon::parse($item->tanggal)->format('d M Y') : $item->created_at->format('d M Y') }}
                            </p>
                        </div>
                    </div>
                </a>
            @empty
                <div class="col-span-2 md:col-span-3 lg:col-span-4 xl:col-span-5 text-center py-20 bg-white rounded-xl border border-dashed border-gray-300 shadow-sm">
                    <i class="fas fa-box-open text-4xl text-gray-300 mb-3"></i>
                    <p class="text-sm sm:text-base text-gray-500 font-medium">{{ __('Belum ada portofolio di kategori ini.') }}</p>
                </div>
            @endforelse
        </div>

        <!-- Back Button -->
        <div class="mt-16 text-center">
            <a href="{{ route('portofolio') }}" class="inline-flex items-center gap-2 px-8 py-3 bg-gray-900 text-white font-bold rounded-full hover:bg-[#5C3317] hover:text-white transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                <i class="fas fa-arrow-left"></i> {{ __('Back to Categories') }}
            </a>
        </div>

    </div>
</div>
    </main>
    <x-footer />
</body>
</html>