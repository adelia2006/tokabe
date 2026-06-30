<section id="about" class="py-10 lg:py-16 bg-[#2C1A0E] overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 lg:gap-24 items-center">
            
            <div class="pr-0 lg:pr-8 order-2 lg:order-1">
                <span class="inline-block py-1.5 px-4 rounded-full bg-[#D4A574]/20 text-[#F0C97A] text-sm font-semibold tracking-wider mb-6 uppercase">
                    {{ __('About Us') }}
                </span>
                <h2 class="text-4xl md:text-5xl lg:text-6xl font-bold text-white leading-tight mb-6">
                    {!! $about ? ($about->title[app()->getLocale()] ?? $about->title['id'] ?? '') : __('More than hundreds of locations in Sumatera') !!}
                </h2>
                <p class="text-gray-300 text-lg mb-8 leading-relaxed">
                    {{ $about ? ($about->description[app()->getLocale()] ?? $about->description['id'] ?? '') : __('Tokabe.id adalah agensi periklanan terbaik di Medan, Sumatera. Kami membantu Anda merancang, mengelola, dan memaksimalkan jangkauan bisnis melalui layanan Videotron (DOOH), Billboard (OOH), dan Brand Activation yang inovatif.') }}
                </p>
                <a href="#services" class="inline-flex items-center justify-center px-8 py-4 bg-gradient-to-r from-[#C8902A] via-[#F0C97A] to-[#C8902A] hover:from-[#F0C97A] hover:to-[#C8902A] text-[#1F1611] border-0 text-base font-semibold rounded-full shadow-[0_0_20px_rgba(212,165,105,0.4)] transition-all duration-300">
                    {{ __('Learn More') }} <i class="fa-solid fa-arrow-right ml-2"></i>
                </a>
            </div>

            <!-- Right Bento Grid -->
            <div class="grid grid-cols-2 gap-3 sm:gap-6 order-1 lg:order-2">
                <!-- Column 1 -->
                <div class="flex flex-col gap-3 sm:gap-6">
                    <!-- Image 1 -->
                    <div class="rounded-2xl sm:rounded-3xl overflow-hidden h-40 sm:h-80 shadow-lg">
                        <img src="{{ $about && $about->image_dooh ? (filter_var($about->image_dooh, FILTER_VALIDATE_URL) ? $about->image_dooh : asset('storage/image_about/' . $about->image_dooh)) : 'https://images.unsplash.com/photo-1542204165-65bf26472b9b?q=80&w=600&auto=format&fit=crop' }}" alt="DOOH Advertising" class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                    </div>
                    <!-- Card 1 -->
                    <div class="bg-[#3D2514] rounded-2xl sm:rounded-3xl p-4 sm:p-8 border border-white/10 shadow-lg flex flex-col justify-center items-start group hover:-translate-y-2 transition-transform duration-300 h-48 sm:h-72">
                        <div class="w-10 h-10 sm:w-14 sm:h-14 bg-[#D4A574]/20 text-[#F0C97A] rounded-full flex items-center justify-center text-lg sm:text-2xl mb-3 sm:mb-6">
                            <i class="fas fa-tv"></i>
                        </div>
                        <h3 class="text-sm sm:text-xl font-bold text-white mb-1 sm:mb-2 leading-tight">{{ __('Videotron (DOOH)') }}</h3>
                        <div class="flex items-baseline text-white mb-1 sm:mb-2">
                            <span class="rolling-counter text-2xl sm:text-4xl font-black" data-target="{{ $about->dooh_target ?? 18 }}">0</span>
                            <span class="text-[#D4A574] text-lg sm:text-xl font-bold ml-1">+</span>
                        </div>
                        <p class="text-gray-400 text-[10px] sm:text-sm leading-tight sm:leading-normal line-clamp-3 sm:line-clamp-none">{{ $about && $about->dooh_description ? ($about->dooh_description[app()->getLocale()] ?? $about->dooh_description['id'] ?? '') : __('Titik lokasi strategis tersebar di berbagai pusat keramaian.') }}</p>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="flex flex-col gap-3 sm:gap-6 mt-6 sm:mt-12">
                    <!-- Card 2 -->
                    <div class="bg-[#3D2514] rounded-2xl sm:rounded-3xl p-4 sm:p-8 border border-white/10 shadow-lg flex flex-col justify-center items-start group hover:-translate-y-2 transition-transform duration-300 h-48 sm:h-72">
                        <div class="w-10 h-10 sm:w-14 sm:h-14 bg-[#D4A574]/20 text-[#F0C97A] rounded-full flex items-center justify-center text-lg sm:text-2xl mb-3 sm:mb-6">
                            <i class="fas fa-layer-group"></i>
                        </div>
                        <h3 class="text-sm sm:text-xl font-bold text-white mb-1 sm:mb-2 leading-tight">{{ __('Billboard (OOH)') }}</h3>
                        <div class="flex items-baseline text-white mb-1 sm:mb-2">
                            <span class="rolling-counter text-2xl sm:text-4xl font-black" data-target="{{ $about->ooh_target ?? 271 }}">0</span>
                            <span class="text-[#D4A574] text-lg sm:text-xl font-bold ml-1">+</span>
                        </div>
                        <p class="text-gray-400 text-[10px] sm:text-sm leading-tight sm:leading-normal line-clamp-3 sm:line-clamp-none">{{ $about && $about->ooh_description ? ($about->ooh_description[app()->getLocale()] ?? $about->ooh_description['id'] ?? '') : __('Menjangkau audiens lebih luas dengan visibilitas maksimal.') }}</p>
                    </div>
                    <!-- Image 2 -->
                    <div class="rounded-2xl sm:rounded-3xl overflow-hidden h-40 sm:h-80 shadow-lg">
                        <img src="{{ $about && $about->image_ooh ? (filter_var($about->image_ooh, FILTER_VALIDATE_URL) ? $about->image_ooh : asset('storage/image_about/' . $about->image_ooh)) : 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?q=80&w=600&auto=format&fit=crop' }}" alt="OOH Advertising" class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const counters = document.querySelectorAll('.rolling-counter');
        const startCounting = (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const counter = entry.target;
                    const target = +counter.getAttribute('data-target');
                    const duration = 2000; 
                    const countPerFrame = target / (duration / 16); 
                    let current = 0;
                    const updateCounter = () => {
                        current += countPerFrame;
                        if (current >= target) { counter.innerText = target; } 
                        else { counter.innerText = Math.floor(current); requestAnimationFrame(updateCounter); }
                    };
                    requestAnimationFrame(updateCounter);
                    observer.unobserve(counter); 
                }
            });
        };
        const counterObserver = new IntersectionObserver(startCounting, { threshold: 0.3 });
        counters.forEach(counter => counterObserver.observe(counter));
    });
</script>