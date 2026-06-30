<section id="cta-section" class="py-10 lg:py-16 bg-[#2C1A0E] relative overflow-hidden border-t border-white/5">
    @php
        $globalContact = \App\Models\Contact::first();
        $ctaPhone = isset($globalContact) && $globalContact->phone ? $globalContact->phone : '628115239999';
        $ctaMessage = urlencode("Halo, saya tertarik untuk memulai kampanye periklanan dengan Tokabe.id");
    @endphp

    <!-- Dekorasi background ringan -->
    <div class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 rounded-full bg-[#D4A574] opacity-5 blur-[100px] pointer-events-none"></div>
    <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-96 h-96 rounded-full bg-white opacity-5 blur-[100px] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-12 lg:gap-20">
            
            <!-- Left Side: Content -->
            <div class="w-full lg:w-1/2 text-left">
                <h2 class="text-3xl md:text-5xl lg:text-5xl font-black text-white leading-[1.15] mb-6 tracking-tight">
                    Mulai Kampanye <br class="hidden sm:block"/>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#D4A574] to-[#F0C97A]">Periklanan Anda</span>
                </h2>
                <p class="text-gray-400 text-base md:text-lg mb-10 leading-relaxed max-w-lg">
                    Lebih dari sekadar iklan. Kami menciptakan pengalaman visual yang tak terlupakan melalui Videotron DOOH, Billboard, dan Aktivasi Merek di seluruh Sumatera. Konsultasikan kebutuhan Anda sekarang.
                </p>
                
                <div class="flex flex-wrap items-center gap-4">
                    <a href="https://api.whatsapp.com/send/?phone={{ $ctaPhone }}&text={{ $ctaMessage }}" target="_blank" class="px-8 py-3.5 bg-[#D4A574] text-[#1F1611] font-bold rounded-lg shadow-[0_0_15px_rgba(212,165,116,0.3)] hover:shadow-[0_0_25px_rgba(212,165,116,0.5)] hover:bg-[#F0C97A] hover:-translate-y-1 transition-all duration-300">
                        Hubungi Kami
                    </a>
                    <a href="{{ route('portofolio') }}" class="px-8 py-3.5 bg-transparent border border-gray-600 text-gray-300 font-semibold rounded-lg hover:border-[#D4A574] hover:text-[#D4A574] hover:-translate-y-1 transition-all duration-300">
                        Lihat Portofolio
                    </a>
                </div>
            </div>

            <!-- Right Side: Graphic/Card -->
            <div class="w-full lg:w-1/2 flex justify-end">
                <div class="w-full max-w-lg bg-[#F5EFE7] rounded-3xl shadow-2xl relative group overflow-hidden border border-[#D4A574]/20 @if(!isset($globalContact) || !$globalContact->cta_image) p-10 md:p-16 @endif">
                    <!-- Subtle hover gradient inside card -->
                    <div class="absolute inset-0 bg-gradient-to-tr from-[#D4A574]/10 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 z-20"></div>
                    
                    <div class="aspect-[4/3] flex flex-col items-center justify-center relative z-10 w-full">
                        @if(isset($globalContact) && $globalContact->cta_image)
                            <img src="{{ Storage::url($globalContact->cta_image) }}" alt="Tokabe Advertising" class="absolute inset-0 w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        @else
                            <div class="relative">
                                <div class="absolute -inset-4 bg-[#D4A574]/20 rounded-full blur-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-700"></div>
                                <i class="fa-solid fa-bullseye text-8xl md:text-[140px] text-[#2C1A0E] group-hover:scale-110 group-hover:-rotate-3 transition-transform duration-500 relative z-10 drop-shadow-xl"></i>
                            </div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>