@props(['lokasi', 'lokasiooh'])

@php
    // SIHIR MIMI: Kita buat data dummy cadangan biar 3 kotak tetap terisi penuh dan estetik jika data OOH kosong!
    $dummyOoh = [
        (object)[
            'id' => 1,
            'nama' => 'Jl. Gatot Subroto (Simpang Majestik)',
            'kota' => 'Medan Prime',
            'tipe' => 'Videotron',
            'ukuran' => '4m x 8m',
            'gambar' => 'https://images.unsplash.com/photo-1506146332389-18140dc7b2fb?q=80&w=800&auto=format&fit=crop'
        ],
        (object)[
            'id' => 2,
            'nama' => 'Jl. Jend. Sudirman (Kawasan CBD)',
            'kota' => 'Medan Center',
            'tipe' => 'Billboard',
            'ukuran' => '5m x 10m',
            'gambar' => 'https://images.unsplash.com/photo-1542204165-65bf26472b9b?q=80&w=800&auto=format&fit=crop'
        ],
        (object)[
            'id' => 3,
            'nama' => 'Jl. S. Parman (Cambridge Area)',
            'kota' => 'Medan Premium',
            'tipe' => 'Videotron',
            'ukuran' => '4m x 6m',
            'gambar' => 'https://images.unsplash.com/photo-1517502884422-41eaead166d4?q=80&w=800&auto=format&fit=crop'
        ]
    ];

    $oohData = (is_countable($lokasiooh) && count($lokasiooh) >= 3) ? collect($lokasiooh)->take(3) : $dummyOoh;
@endphp

<style>
    .tab-container-relative {
        position: relative;
        width: 100%;
    }
    
    /* Tab Transitions (Buttery-Smooth Cross-Fade) */
    .tab-content {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transform: translateY(15px) scale(0.985);
        transition: opacity 0.5s cubic-bezier(0.16, 1, 0.3, 1), 
                    transform 0.5s cubic-bezier(0.16, 1, 0.3, 1),
                    visibility 0.5s;
        display: grid;
        grid-template-columns: repeat(1, minmax(0, 1fr));
    }
    
    @media (min-width: 768px) {
        .tab-content {
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }
    }
    
    .tab-content.active {
        position: relative;
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
        transform: translateY(0) scale(1);
    }

    /* Tab switcher pill styling */
    .tab-btn {
        transition: all 0.3s ease;
    }
    
    @keyframes slideInUpAdv {
        0% { opacity: 0; transform: translateY(30px); }
        100% { opacity: 1; transform: translateY(0); }
    }
    .adv-observe {
        opacity: 0;
        transform: translateY(30px);
    }
    .adv-active {
        animation: slideInUpAdv 1s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }
    .adv-delay-1 { animation-delay: 0.1s; }
    .adv-delay-2 { animation-delay: 0.2s; }
</style>

<section id="advertising-inventory" class="py-16 bg-gradient-to-br from-[#1A0F07] via-[#2C1A0E] to-[#5C3317] overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Section Header -->
        <div class="text-center mb-10 flex flex-col items-center">
            <span class="adv-observe adv-element adv-delay-1 text-[#D4A574] font-bold tracking-widest text-sm uppercase mb-2 block">
                {{ __('Premium Inventory') }}
            </span>
            <h2 class="adv-observe adv-element adv-delay-1 text-3xl md:text-4xl font-black text-white leading-tight uppercase tracking-tight">
                {{ __('LOKASI STRATEGIS PERIKLANAN') }}
            </h2>
            <div class="adv-observe adv-element adv-delay-1 w-24 h-1.5 bg-gradient-to-r from-[#D4A574] to-[#A0522D] mt-4 rounded-full shadow-sm"></div>
        </div>

        <!-- Tab Switcher (DOOH / OOH) -->
        <div class="flex justify-center mb-10 adv-observe adv-element adv-delay-2">
            <div class="inline-flex p-1.5 bg-white/10 border border-white/20 backdrop-blur-md rounded-full shadow-inner relative">
                <!-- Sliding Background -->
                <div id="tab-slider" class="absolute top-1.5 bottom-1.5 left-1.5 w-[calc(50%-6px)] bg-white rounded-full transition-all duration-300 ease-out z-0"></div>
                
                <button id="btn-dooh" onclick="switchTab('dooh')" class="tab-btn px-8 py-3 text-sm font-bold uppercase tracking-wider rounded-full relative z-10 text-[#2C1A0E] transition-colors duration-300">
                    DOOH (Digital)
                </button>
                <button id="btn-ooh" onclick="switchTab('ooh')" class="tab-btn px-8 py-3 text-sm font-bold uppercase tracking-wider rounded-full relative z-10 text-white/80 hover:text-white transition-colors duration-300">
                    OOH (Billboard)
                </button>
            </div>
        </div>

        <!-- Tab Content Wrapper -->
        <div class="tab-container-relative">
            <!-- DOOH Content Tab -->
            <div id="content-dooh" class="tab-content active gap-8 lg:gap-10">
                @foreach($lokasi->take(3) as $item)
                @php
                    $namaData = $item->nama ?: $item->getRawOriginal('nama');
                    $namaArray = is_string($namaData) && str_starts_with($namaData, '{') ? json_decode($namaData, true) : $namaData;
                    $namaDOOH = is_array($namaArray) ? ($namaArray[app()->getLocale()] ?? $namaArray['id'] ?? $namaArray['en'] ?? collect($namaArray)->first() ?? '') : $namaArray;
                    if (empty(trim($namaDOOH))) {
                        $namaDOOH = $item->provinsi . ' - ' . $item->media;
                    }
                @endphp
                <div onclick="window.location.href='{{ route('dooh.detail', $item->id) }}'" class="cursor-pointer bg-gradient-to-br from-[#2C1A0E] via-[#5C3317] to-[#8B5E3C] rounded-3xl overflow-hidden shadow-xl border border-white/25 hover:-translate-y-2 hover:shadow-2xl transition-all duration-500 group flex flex-col justify-between">
                    <div>
                        <div class="w-full aspect-[16/10] overflow-hidden bg-gray-900 relative">
                            <img src="{{ $item->gambar ? (Str::startsWith($item->gambar, 'http') ? $item->gambar : asset('storage/image_lokasi/' . $item->gambar)) : 'https://images.unsplash.com/photo-1542204165-65bf26472b9b?q=80&w=600&auto=format&fit=crop' }}" 
                                 alt="{{ \App\Helpers\SeoHelper::getImageAlt('dooh', $namaDOOH, $item->kota ?? 'Medan') }}" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <span class="absolute top-4 left-4 px-3 py-1.5 bg-black/70 backdrop-blur-md text-[#D4A574] text-xs font-bold uppercase tracking-widest rounded-full shadow-md">
                                {{ $item->wilayah ?? $item->kota ?? 'Medan' }}
                            </span>
                        </div>

                        <div class="p-6">
                            <h3 class="text-lg font-bold text-white mb-3 line-clamp-2 uppercase tracking-wide group-hover:text-[#D4A574] transition-colors">
                                {{ __($namaDOOH) }}
                            </h3>
                            <div class="grid grid-cols-2 gap-4 border-t border-white/20 pt-4 text-xs sm:text-sm text-gray-200">
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-layer-group text-[#D4A574]"></i>
                                    <span>{{ $item->media ?? $item->tipe ?? $item->type ?? 'Videotron' }}</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-expand-arrows-alt text-[#D4A574]"></i>
                                    <span>{{ $item->size ?? $item->ukuran ?? '-' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-6 pb-6 pt-1">
                        <a href="{{ route('dooh.detail', $item->id) }}" class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-[#F5E6C8] to-[#D4A569] text-[#1F1611] font-bold text-sm uppercase tracking-wider rounded-full hover:from-[#D4A569] hover:to-[#C8902A] hover:scale-105 hover:shadow-lg hover:shadow-[#D4A569]/40 transition-all duration-300 group/btn shadow-sm">
                            {{ __('View Detail') }} 
                            <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover/btn:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- OOH Content Tab -->
            <div id="content-ooh" class="tab-content gap-8 lg:gap-10">
                @foreach($oohData as $index => $item)
                @php
                    $namaData = $item->nama ?: ($item->getRawOriginal ? $item->getRawOriginal('nama') : '');
                    $namaArray = is_string($namaData) && str_starts_with($namaData, '{') ? json_decode($namaData, true) : $namaData;
                    $namaOOH = is_array($namaArray) ? ($namaArray[app()->getLocale()] ?? $namaArray['id'] ?? $namaArray['en'] ?? collect($namaArray)->first() ?? '') : $namaArray;
                    if (empty(trim($namaOOH))) {
                        $namaOOH = ($item->provinsi ?? '') . ' - ' . ($item->media ?? '');
                    }
                @endphp
                <div onclick="window.location.href='{{ route('ooh.detail', $item->id) }}'" class="cursor-pointer bg-gradient-to-br from-[#2C1A0E] via-[#5C3317] to-[#8B5E3C] rounded-3xl overflow-hidden shadow-xl border border-white/25 hover:-translate-y-2 hover:shadow-2xl transition-all duration-500 group flex flex-col justify-between">
                    <div>
                        <div class="w-full aspect-[16/10] overflow-hidden bg-gray-900 relative">
                            <img src="{{ Str::startsWith($item->gambar, 'http') ? $item->gambar : asset('storage/image_lokasiooh/' . $item->gambar) }}" 
                                 alt="{{ \App\Helpers\SeoHelper::getImageAlt('ooh', $namaOOH, $item->kota ?? 'Medan') }}" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                            <span class="absolute top-4 left-4 px-3 py-1.5 bg-black/70 backdrop-blur-md text-[#D4A574] text-xs font-bold uppercase tracking-widest rounded-full shadow-md">
                                {{ $item->kota ?? 'Medan' }}
                            </span>
                        </div>

                        <div class="p-6">
                            <h3 class="text-lg font-bold text-white mb-3 line-clamp-2 uppercase tracking-wide group-hover:text-[#D4A574] transition-colors">
                                {{ __($namaOOH) }}
                            </h3>
                            <div class="grid grid-cols-2 gap-4 border-t border-white/20 pt-4 text-xs sm:text-sm text-gray-200">
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-layer-group text-[#D4A574]"></i>
                                    <span>{{ $item->tipe ?? $item->type ?? 'Billboard' }}</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <i class="fas fa-expand-arrows-alt text-[#D4A574]"></i>
                                    <span>{{ $item->ukuran ?? $item->size ?? '-' }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="px-6 pb-6 pt-1">
                        <a href="{{ route('ooh.detail', $item->id) }}" class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-[#F5E6C8] to-[#D4A569] text-[#1F1611] font-bold text-sm uppercase tracking-wider rounded-full hover:from-[#D4A569] hover:to-[#C8902A] hover:scale-105 hover:shadow-lg hover:shadow-[#D4A569]/40 transition-all duration-300 group/btn shadow-sm">
                            {{ __('View Detail') }} 
                            <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover/btn:translate-x-1"></i>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>
</section>

<script>
    function switchTab(type) {
        const btnDooh = document.getElementById('btn-dooh');
        const btnOoh = document.getElementById('btn-ooh');
        const contentDooh = document.getElementById('content-dooh');
        const contentOoh = document.getElementById('content-ooh');
        const slider = document.getElementById('tab-slider');

        if (type === 'dooh') {
            btnDooh.classList.remove('text-white/80', 'hover:text-white');
            btnDooh.classList.add('text-[#2C1A0E]');
            btnOoh.classList.remove('text-[#2C1A0E]');
            btnOoh.classList.add('text-white/80', 'hover:text-white');
            
            slider.style.left = '6px';
            slider.style.width = 'calc(50% - 6px)';

            contentOoh.classList.remove('active');
            contentDooh.classList.add('active');
        } else {
            btnOoh.classList.remove('text-white/80', 'hover:text-white');
            btnOoh.classList.add('text-[#2C1A0E]');
            btnDooh.classList.remove('text-[#2C1A0E]');
            btnDooh.classList.add('text-white/80', 'hover:text-white');
            
            slider.style.left = 'calc(50% + 0px)';
            slider.style.width = 'calc(50% - 6px)';

            contentDooh.classList.remove('active');
            contentOoh.classList.add('active');
        }
    }

    // Intersection Observer for Animation
    document.addEventListener("DOMContentLoaded", function() {
        const advTargets = document.querySelectorAll('.adv-observe');
        const observerOptions = { root: null, threshold: 0.1 };

        const advObserver = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('adv-active');
                    obs.unobserve(entry.target); 
                }
            });
        }, observerOptions);

        advTargets.forEach(target => {
            advObserver.observe(target);
        });
    });
</script>
