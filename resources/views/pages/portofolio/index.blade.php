<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portofolio | Tokabe.id</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white antialiased text-gray-900 font-sans">
    <x-navbar />
    <main>
        <!-- Header Hero Section -->
        <div class="bg-gradient-to-br from-[#042611] via-[#0C5130] to-[#4CAF50] pt-40 pb-24 text-center relative overflow-hidden">
            <!-- Decorative subtle glowing blur circles -->
            <div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 rounded-full bg-white opacity-5 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-green-300 opacity-10 blur-3xl"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white uppercase tracking-tight mb-4 drop-shadow-md">
                    {!! nl2br(__('Our Recent Portofolio')) !!}
                </h1>
                <p class="text-base sm:text-lg lg:text-xl text-green-100 max-w-3xl mx-auto font-light leading-relaxed drop-shadow-sm">
                    {{ __('Showcasing Videotron Advertising Installations and Experiential Brand Activation Across Sumatra') }}
                </p>
            </div>
        </div>

        <!-- Categories Grid Section -->
        <div class="bg-white py-16 sm:py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Categories Grid -->
                <div class="flex flex-wrap justify-center gap-6 md:gap-8">
            @forelse($categories as $index => $item)
                <a href="{{ route('portofolio.list', $item->id) }}" class="group block w-full md:w-[calc(50%-16px)] lg:w-[calc(25%-24px)] flex flex-col" data-aos="fade-up" data-aos-delay="{{ $index * 100 }}">
                    <div class="relative rounded-[24px] overflow-hidden shadow-xl border border-green-800/50 transform group-hover:-translate-y-3 group-hover:shadow-2xl transition-all duration-500 bg-gradient-to-br from-[#042611] via-[#0C5130] to-[#4CAF50] h-full flex flex-col">
                        <!-- Image Container -->
                        <div class="w-full aspect-[16/10] overflow-hidden relative flex-shrink-0 bg-gray-900">
                            <div class="absolute inset-0 bg-black/10 group-hover:bg-transparent transition-colors z-10"></div>
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
                                 class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700 ease-in-out"
                                 loading="lazy">
                        </div>
                        
                        <!-- Content -->
                        <div class="p-4 sm:p-5 text-center bg-transparent flex-grow flex flex-col justify-between gap-4">
                            <h3 class="text-base sm:text-lg font-bold text-white group-hover:text-green-300 transition-colors uppercase tracking-wide">
                                {{ __($namaKategori) }}
                            </h3>
                            <p class="text-xs sm:text-sm text-green-100 font-medium flex justify-center items-center gap-2 mt-auto">
                                <i class="fas fa-folder-open text-green-300"></i>
                                {{ $item->portofolios()->count() }} {{ __('Projects') }}
                            </p>
                        </div>
                    </div>
                </a>
            @empty
                <div class="col-span-1 md:col-span-2 lg:col-span-3 text-center py-20 bg-gray-50 rounded-3xl border-2 border-dashed border-gray-200">
                    <i class="fas fa-box-open text-6xl text-gray-300 mb-4"></i>
                    <p class="text-xl text-gray-500 font-medium">{{ __('No portfolio categories available yet.') }}</p>
                </div>
            @endforelse
        </div>

    </div>
</div>
    </main>
    <x-footer />
</body>
</html>