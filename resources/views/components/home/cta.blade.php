<style>
    /* Animasi Reveal Smooth buat Section Partner */
    @keyframes revealUpPartner {
        0% { opacity: 0; transform: translateY(50px); filter: blur(5px); }
        100% { opacity: 1; transform: translateY(0); filter: blur(0); }
    }
    .partner-reveal {
        opacity: 0;
        transform: translateY(50px);
    }
    .partner-active {
        animation: revealUpPartner 1.2s cubic-bezier(0.16, 1, 0.3, 1) forwards;
    }
    .p-delay-1 { animation-delay: 0.1s; }
    .p-delay-2 { animation-delay: 0.3s; }
    .p-delay-3 { animation-delay: 0.5s; }
</style>

<section id="portofolio-cta" class="py-12 lg:py-16 bg-[#F9F0D6] relative">
    <div class="max-w-7xl w-full mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        
        <div class="partner-target partner-reveal p-delay-1 bg-gradient-to-r from-[#5C3317] to-[#2C1A0E] rounded-[24px] py-10 px-8 md:py-12 md:px-14 flex flex-col md:flex-row items-center justify-between gap-8 lg:gap-12 shadow-2xl relative overflow-hidden max-w-5xl mx-auto">
            <!-- Decorative circle/gradient like image 3 -->
            <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 rounded-full bg-white opacity-10 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-64 h-64 rounded-full bg-[#D4A574] opacity-20 blur-3xl"></div>
            
            <div class="text-white max-w-xl mb-6 md:mb-0 relative z-10 text-center md:text-left flex-1">
                <span class="text-[#D4A574] font-bold tracking-widest text-xs md:text-sm uppercase mb-2 block">
                    {{ __('EXPLORE OUR CREATIVITY') }}
                </span>
                <h2 class="text-2xl sm:text-3xl lg:text-4xl font-extrabold leading-tight mb-3 tracking-tight">
                    {{ __('Discover Our Amazing Portofolio') }}
                </h2>
                <p class="text-[#F5EFE7] text-sm md:text-base font-light leading-relaxed">
                    {{ __('Dive into a showcase of our finest projects. From breathtaking outdoor campaigns to immersive brand activities, see how we bring ideas to life.') }}
                </p>
            </div>
            
            <div class="relative z-10 shrink-0 mt-2 md:mt-0 relative group">
                <!-- Cursor Icon -->
                <i class="fa-solid fa-arrow-pointer absolute -bottom-5 -right-3 text-white text-2xl animate-bounce z-20 pointer-events-none" style="filter: drop-shadow(0px 3px 5px rgba(0,0,0,0.3));"></i>
                
                <a href="{{ route('portofolio') }}" class="inline-flex items-center gap-2 bg-gradient-to-r from-[#C8902A] via-[#F0C97A] to-[#C8902A] text-[#1F1611] font-extrabold px-8 py-4 rounded-full shadow-[0_0_25px_rgba(212,165,105,0.6)] hover:shadow-[0_0_40px_rgba(240,201,122,0.8)] hover:from-[#F0C97A] hover:to-[#C8902A] transform hover:-translate-y-1 hover:scale-105 transition-all duration-300 text-base md:text-lg relative z-10">
                    {{ __('Discover More') }} <i class="fas fa-arrow-right"></i>
                </a>
            </div>
        </div>

    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const partnerTargets = document.querySelectorAll('.partner-target');
        
        const observerPartner = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('partner-active');
                    obs.unobserve(entry.target); 
                }
            });
        }, { threshold: 0.1 });

        partnerTargets.forEach(target => observerPartner.observe(target));
    });
</script>