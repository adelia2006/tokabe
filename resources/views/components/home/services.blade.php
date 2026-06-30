<style>
    /* --- 1. Keyframes & Class buat Judul (Smooth Slide-Up) --- */
    @keyframes slideInUpSmooth {
        0% { opacity: 0; transform: translateY(40px); }
        100% { opacity: 1; transform: translateY(0); }
    }

    .smooth-element {
        opacity: 0; /* Sembunyikan sebelum animasi mulai */
    }

    .smooth-active {
        /* Pake timing curve ease-out exponential biar gerakannya "mahal", nge-glide lembut di akhir */
        animation: slideInUpSmooth 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }

    /* Delay cascaded/berurutan untuk teks judul */
    .title-delay-1 { animation-delay: 0.1s; } /* Subtitle */
    .title-delay-2 { animation-delay: 0.3s; } /* Main H2 */
    .title-delay-3 { animation-delay: 0.5s; } /* Yellow Bar */

    /* Custom styles for Swiper Pagination */
    .services-swiper .swiper-pagination {
        bottom: 0px !important;
        position: relative !important;
        margin-top: 24px;
    }
    .services-swiper .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        background-color: #9CA3AF; /* gray-400 */
        opacity: 0.6;
        transition: all 0.3s ease;
    }
    .services-swiper .swiper-pagination-bullet-active {
        background-color: #D4A574; /* gold */
        opacity: 1;
        width: 24px;
        border-radius: 5px;
    }
</style>

<section id="service" class="py-10 lg:py-16 bg-[#2C1A0E] relative">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Bagian Judul -->
        <div class="mb-12 lg:mb-16 text-center flex flex-col items-center">
            <div class="reveal-target-service smooth-element title-delay-1">
                <span class="text-[#D4A574] font-bold tracking-widest text-sm uppercase mb-2 block">
                    {{ __('WHAT DO WE DO?') }}
                </span>
                <h2 class="text-4xl sm:text-5xl lg:text-[64px] font-black leading-none tracking-tighter text-white mb-6">
                    {{ __('Get to Know Our Services.') }}
                </h2>
                <!-- Ornament line with pointed ends -->
                <div class="smooth-element title-delay-3 flex items-center justify-center mx-auto mt-6 w-full px-8">
                    <svg width="100%" height="1" class="max-w-[400px]" viewBox="0 0 400 1" preserveAspectRatio="none" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="0" y1="0.5" x2="400" y2="0.5" stroke="url(#goldGradSvc)" stroke-width="1"/>
                        <defs>
                            <linearGradient id="goldGradSvc" x1="0" y1="0" x2="400" y2="0" gradientUnits="userSpaceOnUse">
                                <stop offset="0%" stop-color="#b8860b" stop-opacity="0"/>
                                <stop offset="25%" stop-color="#d4a017"/>
                                <stop offset="50%" stop-color="#f0c040"/>
                                <stop offset="75%" stop-color="#d4a017"/>
                                <stop offset="100%" stop-color="#b8860b" stop-opacity="0"/>
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Desktop View (Swiper) -->
        <div class="relative group/slider hidden lg:block">
            <!-- Container Slider -->
            <div id="services-slider" class="swiper services-swiper w-full !pt-6 !pb-12 !-mt-6 !-mb-12">
                <div class="swiper-wrapper">
                    @foreach($services as $index => $item)
                    <div class="swiper-slide !h-auto flex">
                        @php
                            // Get title properly handling JSON arrays if any
                            $judul = is_array($item->judul) ? ($item->judul[app()->getLocale()] ?? $item->judul['id'] ?? $item->judul['en'] ?? collect($item->judul)->first() ?? '') : $item->judul;
                            
                            // Get description properly handling JSON arrays if any
                            $deskripsi = is_array($item->deskripsi) ? ($item->deskripsi[app()->getLocale()] ?? $item->deskripsi['id'] ?? $item->deskripsi['en'] ?? collect($item->deskripsi)->first() ?? '') : $item->deskripsi;
                            
                            // Clean description and limit it
                            $cleanDesc = strip_tags($deskripsi);
                            $shortDesc = \Illuminate\Support\Str::limit($cleanDesc, 90, '...');
                        @endphp
                        <div onclick="window.location.href='{{ route('services.show', $item->id) }}'" class="w-full h-full cursor-pointer bg-gradient-to-br from-[#2C1A0E] via-[#5C3317] to-[#8B5E3C] rounded-3xl overflow-hidden shadow-xl border border-white/25 hover:-translate-y-2 hover:shadow-2xl transition-all duration-500 group flex flex-col justify-between">
                            
                            <div>
                                <!-- Bagian Gambar / Media -->
                                <div class="w-full aspect-[16/10] overflow-hidden bg-gray-900 relative">
                                    @if(Str::endsWith($item->gambar, ['.mp4', '.webm', '.ogg']))
                                        <video autoplay loop muted playsinline class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                            <source src="{{ asset('storage/image_service/' . $item->gambar) }}" type="video/mp4">
                                        </video>
                                    @elseif($item->gambar)
                                        <img src="{{ asset('storage/image_service/' . $item->gambar) }}" alt="{{ \App\Helpers\SeoHelper::getImageAlt('service', $judul) }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                    @else
                                        <div class="w-full h-full flex items-center justify-center bg-[#2C1A0E]">
                                            <i class="{{ $item->ikon ?? 'fas fa-desktop' }} text-3xl text-white/50"></i>
                                        </div>
                                    @endif
                                </div>

                                <!-- Bagian Teks -->
                                <div class="p-6">
                                    <h3 class="text-lg font-bold text-white mb-3 line-clamp-2 uppercase tracking-wide group-hover:text-[#D4A574] transition-colors">
                                        {{ $judul }}
                                    </h3>
                                    
                                    <div class="border-t border-white/20 pt-4 text-xs sm:text-sm text-gray-200">
                                        <p class="line-clamp-2">
                                            {{ $shortDesc }}
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="px-6 pb-6 pt-1 mt-auto">
                                <a href="{{ route('services.show', $item->id) }}" class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-[#F5E6C8] to-[#D4A569] text-[#1F1611] font-bold text-sm uppercase tracking-wider rounded-full hover:from-[#D4A569] hover:to-[#C8902A] hover:scale-105 hover:shadow-lg hover:shadow-[#D4A569]/40 transition-all duration-300 group/btn shadow-sm">
                                    {{ __('Lihat Detail') }} 
                                    <i class="fas fa-arrow-right text-xs transition-transform duration-300 group-hover/btn:translate-x-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                
                <!-- Pagination Dots -->
                <div class="swiper-pagination"></div>
            </div>
        
            <!-- Navigation Buttons -->
            <button class="services-button-prev absolute left-2 lg:-left-5 top-1/2 -translate-y-1/2 z-10 bg-white border border-gray-200 text-gray-800 w-12 h-12 rounded-full shadow-lg flex items-center justify-center hover:bg-gray-100 transition-all opacity-0 group-hover/slider:opacity-100 hidden md:flex">
                <i class="fas fa-chevron-left text-sm"></i>
            </button>

            <button class="services-button-next absolute right-2 lg:-right-5 top-1/2 -translate-y-1/2 z-10 bg-white border border-gray-200 text-gray-800 w-12 h-12 rounded-full shadow-lg flex items-center justify-center hover:bg-gray-100 transition-all opacity-0 group-hover/slider:opacity-100 hidden md:flex">
                <i class="fas fa-chevron-right text-sm"></i>
            </button>
        </div>

        <!-- Mobile View (Scroll Stack) -->
        <div class="scroll-stack-scroller w-full relative block lg:hidden">
            <div class="scroll-stack-inner pt-4 px-2 pb-8">
                @foreach($services as $index => $item)
                @php
                    $judul = is_array($item->judul) ? ($item->judul[app()->getLocale()] ?? $item->judul['id'] ?? $item->judul['en'] ?? collect($item->judul)->first() ?? '') : $item->judul;
                    $deskripsi = is_array($item->deskripsi) ? ($item->deskripsi[app()->getLocale()] ?? $item->deskripsi['id'] ?? $item->deskripsi['en'] ?? collect($item->deskripsi)->first() ?? '') : $item->deskripsi;
                    $cleanDesc = strip_tags($deskripsi);
                    $shortDesc = \Illuminate\Support\Str::limit($cleanDesc, 90, '...');
                @endphp
                <div class="scroll-stack-card-wrapper relative w-full mb-[30px]">
                    <div class="scroll-stack-card w-full h-auto cursor-pointer bg-gradient-to-br from-[#2C1A0E] via-[#5C3317] to-[#8B5E3C] rounded-3xl overflow-hidden shadow-[0_0_30px_rgba(0,0,0,0.1)] border border-white/25 transform-origin-top will-change-transform flex flex-col justify-between" style="backface-visibility: hidden; transform-style: preserve-3d; transform: translateZ(0); perspective: 1000px;" onclick="window.location.href='{{ route('services.show', $item->id) }}'">
                        <div>
                            <!-- Bagian Gambar / Media -->
                            <div class="w-full aspect-[16/10] overflow-hidden bg-gray-900 relative">
                                @if(Str::endsWith($item->gambar, ['.mp4', '.webm', '.ogg']))
                                    <video autoplay loop muted playsinline class="w-full h-full object-cover">
                                        <source src="{{ asset('storage/image_service/' . $item->gambar) }}" type="video/mp4">
                                    </video>
                                @elseif($item->gambar)
                                    <img src="{{ asset('storage/image_service/' . $item->gambar) }}" alt="{{ \App\Helpers\SeoHelper::getImageAlt('service', $judul) }}" class="w-full h-full object-cover">
                                @else
                                    <div class="w-full h-full flex items-center justify-center bg-[#2C1A0E]">
                                        <i class="{{ $item->ikon ?? 'fas fa-desktop' }} text-3xl text-white/50"></i>
                                    </div>
                                @endif
                            </div>

                            <!-- Bagian Teks -->
                            <div class="p-6">
                                <h3 class="text-lg font-bold text-white mb-3 line-clamp-2 uppercase tracking-wide">
                                    {{ $judul }}
                                </h3>
                                
                                <div class="border-t border-white/20 pt-4 text-xs sm:text-sm text-gray-200">
                                    <p class="line-clamp-2">
                                        {{ $shortDesc }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="px-6 pb-6 pt-1 mt-auto">
                            <a href="{{ route('services.show', $item->id) }}" class="w-full inline-flex items-center justify-center gap-2 px-6 py-3 bg-gradient-to-r from-[#F5E6C8] to-[#D4A569] text-[#1F1611] font-bold text-sm uppercase tracking-wider rounded-full shadow-sm">
                                {{ __('Lihat Detail') }} 
                                <i class="fas fa-arrow-right text-xs"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="scroll-stack-end w-full h-px"></div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const textTargets = document.querySelectorAll('.smooth-element');
        
        const observerOptions = {
            root: null,
            threshold: 0.15 // Triggers relatively early so text starts flowing nicely
        };

        const serviceObserver = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    if (entry.target.classList.contains('smooth-element')) {
                         entry.target.classList.add('smooth-active');
                    }
                    obs.unobserve(entry.target);
                }
            });
        }, observerOptions);

        textTargets.forEach(target => {
            serviceObserver.observe(target);
        });

        // Swiper Logic
        const initSwiper = () => {
            const swiperConfig = {
                loop: true,
                slidesPerView: 1, 
                spaceBetween: 20,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.services-button-next',
                    prevEl: '.services-button-prev',
                },
                breakpoints: {
                    640: {
                        slidesPerView: 2,
                        spaceBetween: 24,
                    },
                    1024: {
                        slidesPerView: 3,
                        spaceBetween: 40,
                    }
                }
            };

            if (typeof Swiper !== 'undefined') {
                new Swiper('.services-swiper', swiperConfig);
            } else {
                const link = document.createElement('link');
                link.rel = 'stylesheet';
                link.href = 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css';
                document.head.appendChild(link);

                const script = document.createElement('script');
                script.src = 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js';
                script.onload = () => {
                    new Swiper('.services-swiper', swiperConfig);
                };
                document.body.appendChild(script);
            }
        };

        // Scroll Stack Logic for Mobile
        const initScrollStack = () => {
            const scroller = document.querySelector('.scroll-stack-scroller');
            if (!scroller) return;
            
            const cards = Array.from(document.querySelectorAll('.scroll-stack-card'));
            const wrappers = Array.from(document.querySelectorAll('.scroll-stack-card-wrapper'));
            if (!cards.length) return;
            
            const itemScale = 0.05; // 5% shrink per depth
            const itemStackDistance = 15; // 15px shift UP per depth
            const stackPosition = '22%'; // Pin position from top (diturunkan agar ada jarak dari navbar)
            const maxDepth = 3; // Max visual cards to show behind
            
            const parsePercentage = (value, containerHeight) => {
                if (typeof value === 'string' && value.includes('%')) {
                    return (parseFloat(value) / 100) * containerHeight;
                }
                return parseFloat(value);
            };

            const endElement = document.querySelector('.scroll-stack-end');
            let isUpdating = false;
            let lastTransforms = new Map();

            const updateCardTransforms = () => {
                if (!cards.length || isUpdating) return;
                isUpdating = true;

                const scrollTop = window.scrollY;
                const containerHeight = window.innerHeight;
                const stackPositionPx = parsePercentage(stackPosition, containerHeight);
                
                // Get the absolute trigger scroll points for each card
                const triggers = wrappers.map(w => w.getBoundingClientRect().top + window.scrollY - stackPositionPx);
                
                const lastTrigger = triggers.length > 0 ? triggers[triggers.length - 1] : 0;
                const pinEnd = lastTrigger + 80; // Release exactly 80px after the last card pins

                const effectiveScrollTop = Math.min(scrollTop, pinEnd);

                // Calculate continuous front index (F)
                let F = 0;
                for (let i = 0; i < cards.length; i++) {
                    if (effectiveScrollTop >= triggers[i]) {
                        if (i < cards.length - 1) {
                            const progress = (effectiveScrollTop - triggers[i]) / (triggers[i+1] - triggers[i]);
                            F = i + Math.max(0, Math.min(1, progress));
                        } else {
                            F = i; 
                        }
                    }
                }

                cards.forEach((card, i) => {
                    let translateY = 0;
                    let scale = 1;
                    let blur = 0;

                    if (scrollTop >= triggers[i]) {
                        // Card is pinned or releasing
                        const depth = Math.max(0, F - i);
                        const visualDepth = Math.min(maxDepth, depth);

                        // Baseline translate to keep the card exactly at stackPositionPx
                        let baseTranslateY = effectiveScrollTop - triggers[i];

                        // Offset the older cards upwards so they stack behind
                        translateY = baseTranslateY - (visualDepth * itemStackDistance);
                        
                        // Shrink older cards
                        scale = 1 - (visualDepth * itemScale);

                        // Blur older cards (semakin ke belakang semakin blur)
                        blur = visualDepth * 2.5; 
                    }

                    const newTransform = {
                        translateY: Math.round(translateY * 100) / 100,
                        scale: Math.round(scale * 1000) / 1000,
                        blur: Math.round(blur * 10) / 10
                    };

                    const lastTransform = lastTransforms.get(i);
                    const hasChanged = !lastTransform || 
                        Math.abs(lastTransform.translateY - newTransform.translateY) > 0.1 ||
                        Math.abs(lastTransform.scale - newTransform.scale) > 0.001 ||
                        Math.abs(lastTransform.blur - newTransform.blur) > 0.1;

                    if (hasChanged) {
                        card.style.transform = `translate3d(0, ${newTransform.translateY}px, 0) scale(${newTransform.scale})`;
                        card.style.filter = newTransform.blur > 0 ? `blur(${newTransform.blur}px)` : 'none';
                        lastTransforms.set(i, newTransform);
                    }
                });
                
                isUpdating = false;
            };

            // Setup Lenis Smooth Scroll
            const setupLenis = () => {
                let lenis;
                if (typeof Lenis !== 'undefined') {
                    lenis = new Lenis({
                        duration: 1.2,
                        easing: t => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
                        smoothWheel: true,
                        touchMultiplier: 2,
                        infinite: false,
                        lerp: 0.1,
                        syncTouch: true
                    });
                    lenis.on('scroll', updateCardTransforms);
                    const raf = (time) => {
                        lenis.raf(time);
                        requestAnimationFrame(raf);
                    };
                    requestAnimationFrame(raf);
                } else {
                    window.addEventListener('scroll', updateCardTransforms);
                }
                updateCardTransforms();
            };

            if (typeof Lenis === 'undefined') {
                const script = document.createElement('script');
                script.src = 'https://cdn.jsdelivr.net/npm/lenis@1.1.20/dist/lenis.min.js';
                script.onload = setupLenis;
                document.body.appendChild(script);
            } else {
                setupLenis();
            }
        };

        // Initialize based on screen size
        if (window.innerWidth >= 1024) {
            initSwiper();
        } else {
            initScrollStack();
        }

        // Handle resize events
        let resizeTimer;
        window.addEventListener('resize', () => {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(() => {
                // To safely switch between desktop and mobile, a page reload might be best,
                // but let's just initialize if it wasn't initialized.
                if (window.innerWidth >= 1024) {
                    if (!document.querySelector('.services-swiper').swiper) {
                        initSwiper();
                    }
                } else {
                    initScrollStack();
                }
            }, 250);
        });
    });
</script>