@props(['theme' => 'transparent'])

<style>
    @keyframes slideInDownNav {
        0% { opacity: 0; transform: translateY(-20px); }
        100% { opacity: 1; transform: translateY(0); }
    }
    .nav-anim {
        animation: slideInDownNav 0.6s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        opacity: 0; /* Mulai dari transparan */
    }
    .delay-100 { animation-delay: 0.1s; }
    .delay-200 { animation-delay: 0.2s; }
    .delay-300 { animation-delay: 0.3s; }
    .delay-400 { animation-delay: 0.4s; }
    .delay-500 { animation-delay: 0.5s; }
    .delay-600 { animation-delay: 0.6s; }
    .delay-700 { animation-delay: 0.7s; }
    .delay-800 { animation-delay: 0.8s; }
</style>

<nav id="main-navbar" class="fixed top-4 left-1/2 -translate-x-1/2 w-[95%] max-w-[1100px] z-50 rounded-[2rem] {{ $theme == 'dark' ? 'bg-black/90 border border-white/5 shadow-lg' : 'bg-white/10 backdrop-blur-md border border-white/20 shadow-sm' }} transition-all duration-500 ease-in-out" data-theme="{{ $theme }}">
    <div class="px-5 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16"> 
            
            <div class="flex-shrink-0 flex items-center nav-anim delay-100">
                <a href="/">
                    <img src="{{ asset('images/logo-tokabe.png') }}" 
                         alt="Tokabe.id" 
                         class="h-9 w-auto object-contain filter drop-shadow-md onError-fallback"
                         onerror="this.style.display='none'; document.getElementById('logo-text-fallback').style.display='block';">
                    <span id="logo-text-fallback" class="hidden text-xl font-bold text-white tracking-tight drop-shadow-md">
                        Tokabe<span class="text-green-400">.id</span>
                    </span>
                </a>
            </div>

            <!-- Desktop Navigation Menu -->
            <div class="hidden xl:flex space-x-7 items-center"> 
                <a href="{{ route('home') }}" class="nav-anim delay-200 text-white hover:text-green-400 font-medium text-[15px] transition-colors drop-shadow-sm">{{ __('Home') }}</a>
                <a href="{{ route('services.index') }}" class="nav-anim delay-300 text-white hover:text-green-400 font-medium text-[15px] transition-colors drop-shadow-sm">{{ __('Service') }}</a>
                
                <div class="relative dropdown-container nav-anim delay-400">
                    <button class="dropdown-btn inline-flex items-center text-white hover:text-green-400 font-medium text-[15px] transition-colors drop-shadow-sm focus:outline-none gap-1.5 group h-8">
                        {{ __('Periklanan') }}
                        <svg class="dropdown-arrow w-4 h-4 transition-transform duration-300 transform group-hover:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="dropdown-menu absolute left-1/2 -translate-x-1/2 top-full mt-3 w-max min-w-[220px] rounded-2xl bg-white/70 backdrop-blur-xl border border-white/60 p-2 shadow-2xl opacity-0 invisible scale-95 -translate-y-2 transition-all duration-300 origin-top z-50">
                        <a href="{{ route('services.show', 1) }}" class="block px-4 py-2.5 text-[14px] text-gray-900 hover:bg-green-500 hover:text-white rounded-xl transition-colors font-medium drop-shadow-sm whitespace-nowrap">
                            {{ __('DOOH / Videotron') }}
                        </a>
                        <a href="{{ route('services.show', 2) }}" class="block px-4 py-2.5 text-[14px] text-gray-900 hover:bg-green-500 hover:text-white rounded-xl transition-colors font-medium drop-shadow-sm whitespace-nowrap">
                            {{ __('OOH / Billboard / Baliho') }}
                        </a>
                    </div>
                </div>

                <a href="{{ route('portofolio') }}" class="nav-anim delay-500 text-white hover:text-green-400 font-medium text-[15px] transition-colors drop-shadow-sm">{{ __('Portofolio') }}</a>
                <a href="{{ route('legalitas') }}" class="nav-anim delay-600 text-white hover:text-green-400 font-medium text-[15px] transition-colors drop-shadow-sm">{{ __('Legality') }}</a>
                
                <a href="https://api.whatsapp.com/send/?phone=628115239999&text=Halo%20Admin" target="_blank" class="nav-anim delay-700 text-white hover:text-green-400 font-medium text-[15px] transition-colors drop-shadow-sm">{{ __('Contact') }}</a>
            </div>

            <!-- Desktop Language & Career Menu -->
            <div class="hidden xl:flex items-center space-x-4"> 
                
                <div class="relative dropdown-container nav-anim delay-800">
                    <button class="dropdown-btn inline-flex items-center text-white hover:text-green-400 font-medium text-[15px] transition-colors drop-shadow-sm focus:outline-none gap-1.5 group h-8">
                        <i class="fas fa-globe text-green-400 text-sm"></i>
                        {{ app()->getLocale() == 'en' ? 'Language' : 'Bahasa' }}
                        <svg class="dropdown-arrow w-4 h-4 transition-transform duration-300 transform group-hover:text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="dropdown-menu absolute right-0 top-full mt-3 w-max min-w-[150px] rounded-2xl bg-white/70 backdrop-blur-xl border border-white/60 p-2 shadow-2xl opacity-0 invisible scale-95 -translate-y-2 transition-all duration-300 origin-top-right z-50">
                        <div class="relative flex flex-col gap-1">
                            <!-- Sliding Background Indicator -->
                            <div id="lang-slider" class="absolute left-0 w-full h-[38px] bg-green-500 rounded-xl transition-transform duration-300 ease-out z-0 shadow-sm" style="transform: translateY({{ app()->getLocale() == 'en' ? '0' : '42px' }})"></div>
                            
                            <a href="{{ route('lang.switch', 'en') }}" onclick="document.getElementById('lang-slider').style.transform = 'translateY(0px)'" class="relative z-10 flex items-center justify-center h-[38px] px-4 text-[14px] rounded-xl transition-colors font-medium drop-shadow-sm whitespace-nowrap {{ app()->getLocale() == 'en' ? 'text-white' : 'text-gray-900 hover:text-green-900' }}">
                                English
                            </a>
                            <a href="{{ route('lang.switch', 'id') }}" onclick="document.getElementById('lang-slider').style.transform = 'translateY(42px)'" class="relative z-10 flex items-center justify-center h-[38px] px-4 text-[14px] rounded-xl transition-colors font-medium drop-shadow-sm whitespace-nowrap {{ app()->getLocale() == 'id' ? 'text-white' : 'text-gray-900 hover:text-green-900' }}">
                                Indonesia
                            </a>
                        </div>
                    </div>
                </div>

                <a href="https://loker.tokabe.id/" target="_blank" class="nav-anim delay-800 px-5 py-2.5 bg-gradient-to-r from-green-500 to-green-600 text-white text-[14px] font-semibold rounded-full hover:from-green-600 hover:to-green-700 hover:scale-105 transition-all duration-300 shadow-[0_0_15px_rgba(34,197,94,0.3)] flex items-center gap-2">
                    <i class="fas fa-briefcase"></i> {{ __('Career') }}
                </a>
            </div>

            <!-- Mobile Hamburger Button & Language Switcher -->
            <div class="xl:hidden flex items-center gap-3.5 nav-anim delay-200">
                <!-- Compact Language Switcher -->
                <div class="flex items-center text-[13px] font-semibold text-white bg-white/10 backdrop-blur-md py-1 px-3 rounded-full border border-white/10 shadow-sm">
                    <a href="{{ route('lang.switch', 'en') }}" class="transition-colors {{ app()->getLocale() == 'en' ? 'text-green-400 font-bold' : 'text-white/70 hover:text-green-400' }}">EN</a>
                    <span class="mx-1.5 text-white/20">|</span>
                    <a href="{{ route('lang.switch', 'id') }}" class="transition-colors {{ app()->getLocale() == 'id' ? 'text-green-400 font-bold' : 'text-white/70 hover:text-green-400' }}">ID</a>
                </div>

                <button id="mobile-menu-button" type="button" class="text-white hover:text-green-400 focus:outline-none rounded-lg p-1.5 transition-colors" aria-expanded="false">
                    <svg id="hamburger-icon" class="h-6 w-6 block" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                    <svg id="close-icon" class="h-6 w-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Navigation Drawer -->
    <div id="mobile-menu" class="xl:hidden px-6 pb-0 pt-0 max-h-0 opacity-0 overflow-hidden transition-all duration-500 ease-in-out mt-0 flex flex-col gap-3">
        <a href="{{ route('home') }}" class="text-white hover:text-green-400 font-medium text-[15px] transition-colors py-2 border-b border-white/5">{{ __('Home') }}</a>
        <a href="{{ route('services.index') }}" class="text-white hover:text-green-400 font-medium text-[15px] transition-colors py-2 border-b border-white/5">{{ __('Service') }}</a>
        
        <!-- Mobile Dropdown for Periklanan -->
        <div class="flex flex-col">
            <button id="mobile-dropdown-btn" class="flex justify-between items-center text-white hover:text-green-400 font-medium text-[15px] transition-colors py-2 border-b border-white/5 focus:outline-none w-full text-left">
                {{ __('Periklanan') }}
                <svg id="mobile-dropdown-arrow" class="w-4 h-4 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"></path>
                </svg>
            </button>
            <div id="mobile-dropdown-menu" class="max-h-0 opacity-0 overflow-hidden transition-all duration-300 ease-in-out flex flex-col pl-4 gap-2">
                <a href="{{ route('services.show', 1) }}" class="text-white/80 hover:text-white font-medium text-[14px] py-1.5 transition-colors">
                    {{ __('DOOH / Videotron') }}
                </a>
                <a href="{{ route('services.show', 2) }}" class="text-white/80 hover:text-white font-medium text-[14px] py-1.5 transition-colors">
                    {{ __('OOH / Billboard / Baliho') }}
                </a>
            </div>
        </div>

        <a href="{{ route('portofolio') }}" class="text-white hover:text-green-400 font-medium text-[15px] transition-colors py-2 border-b border-white/5">{{ __('Portofolio') }}</a>
        <a href="{{ route('legalitas') }}" class="text-white hover:text-green-400 font-medium text-[15px] transition-colors py-2 border-b border-white/5">{{ __('Legality') }}</a>
        <a href="https://api.whatsapp.com/send/?phone=628115239999&text=Halo%20Admin" target="_blank" class="text-white hover:text-green-400 font-medium text-[15px] transition-colors py-2 border-b border-white/5">{{ __('Contact') }}</a>

        <a href="https://loker.tokabe.id/" target="_blank" class="w-full text-center py-3 bg-gradient-to-r from-green-500 to-green-600 text-white text-[14px] font-semibold rounded-xl hover:from-green-600 hover:to-green-700 transition-all duration-300 shadow-[0_0_15px_rgba(34,197,94,0.3)] flex justify-center items-center gap-2 mt-2">
            <i class="fas fa-briefcase"></i> {{ __('Career') }}
        </a>
    </div>
</nav>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const navbar = document.getElementById('main-navbar');
        const mobileMenu = document.getElementById('mobile-menu');
        
        // Logika Hitam Transparan pas di-scroll
        window.addEventListener('scroll', function() {
            const isDarkTheme = navbar.getAttribute('data-theme') === 'dark';
            const isMobileMenuOpen = !mobileMenu.classList.contains('max-h-0');
            
            if (window.scrollY > 50) {
                navbar.classList.remove('bg-white/10', 'border-white/20', 'bg-black/90');
                navbar.classList.add('bg-green-950/80', 'backdrop-blur-md', 'border-white/10', 'shadow-lg');
            } else {
                if (isDarkTheme) {
                    navbar.classList.add('bg-black/90', 'border-white/5', 'shadow-lg');
                    navbar.classList.remove('bg-white/10', 'border-white/20', 'bg-green-950/80', 'backdrop-blur-md');
                } else {
                    // Jika menu mobile terbuka di atas scroll, biarkan tetap solid/backdrop blur
                    if (isMobileMenuOpen) {
                        navbar.classList.add('bg-green-950/80', 'backdrop-blur-md', 'border-white/10');
                        navbar.classList.remove('bg-white/10', 'border-white/20');
                    } else {
                        navbar.classList.add('bg-white/10', 'border-white/20');
                        navbar.classList.remove('bg-green-950/80', 'backdrop-blur-md', 'border-white/10', 'shadow-lg', 'bg-black/90');
                    }
                }
            }
        });

        // Logika Dropdown Desktop
        const dropdownContainers = document.querySelectorAll('.dropdown-container');
        dropdownContainers.forEach(container => {
            const btn = container.querySelector('.dropdown-btn');
            const menu = container.querySelector('.dropdown-menu');
            const arrow = container.querySelector('.dropdown-arrow');

            btn.addEventListener('click', function(e) {
                e.stopPropagation();
                const isOpen = !menu.classList.contains('opacity-0');
                closeAllDropdowns();
                if (!isOpen) {
                    menu.classList.remove('opacity-0', 'invisible', 'scale-95', '-translate-y-2');
                    menu.classList.add('opacity-100', 'scale-100', 'translate-y-0');
                    if(arrow) arrow.classList.add('rotate-180');
                }
            });
        });

        document.addEventListener('click', function() { closeAllDropdowns(); });

        function closeAllDropdowns() {
            dropdownContainers.forEach(container => {
                const menu = container.querySelector('.dropdown-menu');
                const arrow = container.querySelector('.dropdown-arrow');
                if (menu) {
                    menu.classList.remove('opacity-100', 'scale-100', 'translate-y-0');
                    menu.classList.add('opacity-0', 'invisible', 'scale-95', '-translate-y-2');
                }
                if(arrow) arrow.classList.remove('rotate-180');
            });
        }

        // Logika Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobile-menu-button');
        const hamburgerIcon = document.getElementById('hamburger-icon');
        const closeIcon = document.getElementById('close-icon');

        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', function() {
                const isExpanded = mobileMenuBtn.getAttribute('aria-expanded') === 'true';
                mobileMenuBtn.setAttribute('aria-expanded', !isExpanded);
                const isDarkTheme = navbar.getAttribute('data-theme') === 'dark';
                
                if (isExpanded) {
                    // Close menu
                    mobileMenu.classList.remove('max-h-[600px]', 'opacity-100', 'pb-6', 'pt-2', 'mt-2');
                    mobileMenu.classList.add('max-h-0', 'opacity-0', 'pb-0', 'pt-0', 'mt-0');
                    
                    // Reset bg jika di atas scroll
                    if (window.scrollY <= 50 && !isDarkTheme) {
                        navbar.classList.add('bg-white/10', 'border-white/20');
                        navbar.classList.remove('bg-green-950/80', 'backdrop-blur-md', 'border-white/10', 'shadow-lg');
                    }
                    
                    hamburgerIcon.classList.remove('hidden');
                    hamburgerIcon.classList.add('block');
                    closeIcon.classList.remove('block');
                    closeIcon.classList.add('hidden');
                } else {
                    // Open menu
                    mobileMenu.classList.remove('max-h-0', 'opacity-0', 'pb-0', 'pt-0', 'mt-0');
                    mobileMenu.classList.add('max-h-[600px]', 'opacity-100', 'pb-6', 'pt-2', 'mt-2');
                    
                    // Buat navbar jadi solid/backdrop blur saat menu mobile terbuka
                    if (window.scrollY <= 50 && !isDarkTheme) {
                        navbar.classList.remove('bg-white/10', 'border-white/20');
                        navbar.classList.add('bg-green-950/80', 'backdrop-blur-md', 'border-white/10');
                    }
                    
                    hamburgerIcon.classList.remove('hidden'); // Fix overlap check
                    hamburgerIcon.classList.add('hidden');
                    closeIcon.classList.remove('hidden');
                    closeIcon.classList.add('block');
                }
            });
        }

        // Logika Dropdown Mobile untuk Periklanan
        const mobileDropdownBtn = document.getElementById('mobile-dropdown-btn');
        const mobileDropdownMenu = document.getElementById('mobile-dropdown-menu');
        const mobileDropdownArrow = document.getElementById('mobile-dropdown-arrow');

        if (mobileDropdownBtn && mobileDropdownMenu) {
            mobileDropdownBtn.addEventListener('click', function(e) {
                e.stopPropagation();
                const isOpen = mobileDropdownMenu.classList.contains('opacity-100');
                if (isOpen) {
                    // Close dropdown
                    mobileDropdownMenu.classList.remove('max-h-[150px]', 'opacity-100', 'mt-2');
                    mobileDropdownMenu.classList.add('max-h-0', 'opacity-0');
                    if(mobileDropdownArrow) mobileDropdownArrow.classList.remove('rotate-180');
                } else {
                    // Open dropdown
                    mobileDropdownMenu.classList.remove('max-h-0', 'opacity-0');
                    mobileDropdownMenu.classList.add('max-h-[150px]', 'opacity-100', 'mt-2');
                    if(mobileDropdownArrow) mobileDropdownArrow.classList.add('rotate-180');
                }
            });
        }
    });
</script>