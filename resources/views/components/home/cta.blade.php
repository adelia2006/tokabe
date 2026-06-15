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

<section id="portofolio-cta" class="pt-0 pb-16 lg:pt-0 lg:pb-24 bg-white relative">
    <div class="max-w-[1400px] w-full mx-auto px-6 sm:px-8 lg:px-12 relative z-10">
        
        <div class="partner-target partner-reveal p-delay-1 bg-gradient-to-r from-green-600 to-[#1e824c] rounded-[32px] p-10 md:p-16 flex flex-col md:flex-row items-center justify-center gap-10 lg:gap-20 shadow-2xl relative overflow-hidden max-w-6xl mx-auto">
            <!-- Decorative circle/gradient like image 3 -->
            <div class="absolute top-0 right-0 -mr-20 -mt-20 w-64 h-64 rounded-full bg-white opacity-10 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-64 h-64 rounded-full bg-green-300 opacity-20 blur-3xl"></div>
            
            <div class="text-white max-w-xl mb-8 md:mb-0 relative z-10 text-center md:text-left flex-1">
                <span class="text-green-200 font-bold tracking-widest text-sm md:text-base uppercase mb-3 block">
                    {{ __('EXPLORE OUR CREATIVITY') }}
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black leading-tight mb-4 tracking-tight">
                    {{ __('Discover Our Amazing Portofolio') }}
                </h2>
                <p class="text-green-50 text-base md:text-lg font-light leading-relaxed">
                    {{ __('Dive into a showcase of our finest projects. From breathtaking outdoor campaigns to immersive brand activities, see how we bring ideas to life.') }}
                </p>
            </div>
            
            <div class="relative z-10 shrink-0 mt-4 md:mt-0 relative group">
                <!-- Cursor Icon -->
                <i class="fa-solid fa-arrow-pointer absolute -bottom-8 -right-6 text-white text-4xl animate-bounce z-20 pointer-events-none" style="filter: drop-shadow(0px 4px 6px rgba(0,0,0,0.4));"></i>
                
                <a href="{{ route('portofolio') }}" class="inline-flex items-center gap-3 bg-[#51eb46] text-green-950 font-black px-10 py-5 rounded-full shadow-[0_0_30px_rgba(81,235,70,0.8)] hover:bg-[#45d13b] hover:shadow-[0_0_50px_rgba(81,235,70,1)] transform hover:-translate-y-1 hover:scale-110 transition-all duration-300 text-xl md:text-2xl relative z-10">
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