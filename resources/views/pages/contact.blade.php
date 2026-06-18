<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('Tokabe.id - Contact Us & Help Center') }}</title>
    <meta name="description" content="{{ __('Hubungi Tokabe.id untuk solusi periklanan OOH, DOOH, dan Event Organizer di Sumatera. Kami siap membantu kampanye marketing bisnis Anda.') }}">
    <meta name="keywords" content="Hubungi Tokabe, Alamat Tokabe Medan, Kontak agensi iklan, Sewa reklame Medan">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:title" content="{{ __('Tokabe.id - Contact Us & Help Center') }}">
    <meta property="og:description" content="{{ __('Hubungi Tokabe.id untuk solusi periklanan OOH, DOOH, dan Event Organizer di Sumatera. Kami siap membantu kampanye marketing bisnis Anda.') }}">
    <meta property="og:image" content="{{ asset('images/LogoTKB.jpg') }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="icon" type="image/jpeg" href="{{ asset('images/LogoTKB.jpg') }}?v=2">
    <link rel="shortcut icon" type="image/jpeg" href="{{ asset('images/LogoTKB.jpg') }}?v=2">
</head>
<body class="bg-gray-50 antialiased text-gray-900 font-sans">
    <x-navbar />

    <main class="min-h-screen pb-20 bg-gray-50">
        <!-- Header Hero Section -->
        <div class="bg-gradient-to-br from-[#042611] via-[#0C5130] to-[#4CAF50] pt-40 pb-24 text-center relative overflow-hidden">
            <!-- Decorative subtle glowing blur circles -->
            <div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 rounded-full bg-white opacity-5 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-green-300 opacity-10 blur-3xl"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white uppercase tracking-tight mb-4 drop-shadow-md">
                    {{ __('Contact Us') }}
                </h1>
                <p class="text-base sm:text-lg lg:text-xl text-green-100 max-w-3xl mx-auto mb-0 font-light leading-relaxed drop-shadow-sm">
                    {{ __('Get in touch with our team for any inquiries about advertising solutions in Medan and Sumatera.') }}
                </p>
            </div>
        </div>

        <!-- Contact Section -->
        <div class="bg-white py-20 lg:py-28">
            <div class="max-w-[1100px] mx-auto px-5 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                    
                    <!-- Left Column: Info -->
                    <div class="lg:col-span-5" data-aos="fade-right" data-aos-duration="1000">
                        <span class="inline-flex items-center gap-1.5 px-3 py-1 bg-[#0c5130]/5 border border-[#0c5130]/20 text-[#0c5130] text-xs font-bold rounded-lg uppercase tracking-wider">
                            <i class="far fa-envelope text-xs"></i> {{ __('Contact') }}
                        </span>
                        
                        <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-gray-900 tracking-tight leading-tight mt-6 mb-4">
                            {{ __('How can we help you today?') }}
                        </h2>
                        
                        <p class="text-base sm:text-lg text-gray-500 font-light leading-relaxed mb-10">
                            {{ __('Our dedicated customer support team is just a message or call away.') }}
                        </p>
                        
                        <div class="flex flex-col gap-6">
                            <!-- Email Details -->
                            <div class="flex items-center gap-4 group">
                                <div class="w-12 h-12 rounded-2xl bg-[#0c5130]/5 flex items-center justify-center text-[#0c5130] shadow-sm border border-[#0c5130]/10 flex-shrink-0 group-hover:bg-[#0c5130] group-hover:text-white transition-all duration-300">
                                    <i class="fas fa-envelope text-lg"></i>
                                </div>
                                <div>
                                    <span class="block text-[11px] text-gray-400 font-bold uppercase tracking-wider">{{ __('Email:') }}</span>
                                    <a href="mailto:info@tokabe.id" class="text-base font-bold text-gray-800 hover:text-[#0c5130] transition-colors">info@tokabe.id</a>
                                </div>
                            </div>
                            
                            <!-- Phone Details -->
                            <div class="flex items-center gap-4 group">
                                <div class="w-12 h-12 rounded-2xl bg-[#0c5130]/5 flex items-center justify-center text-[#0c5130] shadow-sm border border-[#0c5130]/10 flex-shrink-0 group-hover:bg-[#0c5130] group-hover:text-white transition-all duration-300">
                                    <i class="fas fa-phone-alt text-lg"></i>
                                </div>
                                <div>
                                    <span class="block text-[11px] text-gray-400 font-bold uppercase tracking-wider">{{ __('Phone:') }}</span>
                                    <a href="tel:+628115239999" class="text-base font-bold text-gray-800 hover:text-[#0c5130] transition-colors">0811-5239-999</a>
                                </div>
                            </div>
                            
                            <!-- Location Details -->
                            <div class="flex items-start gap-4 group">
                                <div class="w-12 h-12 rounded-2xl bg-[#0c5130]/5 flex items-center justify-center text-[#0c5130] shadow-sm border border-[#0c5130]/10 flex-shrink-0 group-hover:bg-[#0c5130] group-hover:text-white transition-all duration-300 mt-0.5">
                                    <i class="fas fa-map-marker-alt text-lg"></i>
                                </div>
                                <div>
                                    <span class="block text-[11px] text-gray-400 font-bold uppercase tracking-wider">{{ __('Location:') }}</span>
                                    <a href="https://maps.app.goo.gl/m2DKjqNtE15Muzqg6" target="_blank" class="text-base font-bold text-gray-800 hover:text-[#0c5130] transition-colors leading-relaxed">
                                        Komplek Setiabudi Point No. D-10<br>Medan, Indonesia
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Right Column: Form Card -->
                    <div class="lg:col-span-7" data-aos="fade-left" data-aos-duration="1000">
                        <div class="bg-white rounded-[2rem] p-6 sm:p-8 lg:p-10 shadow-[0_10px_35px_rgba(0,0,0,0.05)] border border-gray-100/80">
                            
                            @if(session('success'))
                                <div class="mb-6 p-4 bg-green-50 text-green-700 rounded-2xl border border-green-100 text-sm">
                                    <i class="fas fa-check-circle mr-2"></i> {{ session('success') }}
                                </div>
                            @endif

                            <form action="{{ route('contact.store') }}" method="POST" id="contact-form">
                                @csrf
                                <input type="hidden" name="name" id="combined-name">
                                <input type="hidden" name="subject" value="Contact Form Inquiry">
                                
                                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mb-5">
                                    <div>
                                        <label for="first_name" class="block text-xs font-bold text-gray-700 mb-1.5 uppercase tracking-wide">{{ __('First name*') }}</label>
                                        <input type="text" id="first_name" required placeholder="Billy" 
                                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#0c5130]/10 focus:border-[#0c5130] outline-none transition-all placeholder-gray-400 text-gray-800 text-sm font-medium">
                                    </div>
                                    <div>
                                        <label for="last_name" class="block text-xs font-bold text-gray-700 mb-1.5 uppercase tracking-wide">{{ __('Last name*') }}</label>
                                        <input type="text" id="last_name" required placeholder="Jhons" 
                                            class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#0c5130]/10 focus:border-[#0c5130] outline-none transition-all placeholder-gray-400 text-gray-800 text-sm font-medium">
                                    </div>
                                </div>
                                
                                <div class="mb-5">
                                    <label for="email" class="block text-xs font-bold text-gray-700 mb-1.5 uppercase tracking-wide">{{ __('Work email*') }}</label>
                                    <input type="email" name="email" id="email" required value="{{ old('email') }}" placeholder="Enter email" 
                                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#0c5130]/10 focus:border-[#0c5130] outline-none transition-all placeholder-gray-400 text-gray-800 text-sm font-medium">
                                    @error('email')
                                        <p class="text-red-500 text-xs mt-1.5 ml-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="mb-5">
                                    <label for="phone" class="block text-xs font-bold text-gray-700 mb-1.5 uppercase tracking-wide">{{ __('Phone number*') }}</label>
                                    <div class="flex border border-gray-200 rounded-xl bg-gray-50 focus-within:ring-2 focus-within:ring-[#0c5130]/10 focus-within:border-[#0c5130] overflow-hidden transition-all">
                                        <div class="flex items-center gap-1 px-3 border-r border-gray-200 bg-gray-50 text-gray-500 text-sm font-semibold select-none">
                                            <span class="text-base">🇮🇩</span>
                                            <span>+62</span>
                                        </div>
                                        <input type="tel" name="phone" id="phone" required value="{{ old('phone') }}" placeholder="Enter phone number" 
                                            class="w-full px-4 py-3 bg-transparent outline-none placeholder-gray-400 text-gray-800 text-sm font-medium border-none">
                                    </div>
                                    @error('phone')
                                        <p class="text-red-500 text-xs mt-1.5 ml-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <div class="mb-6">
                                    <label for="message" class="block text-xs font-bold text-gray-700 mb-1.5 uppercase tracking-wide">{{ __('Message*') }}</label>
                                    <textarea name="message" id="message" required rows="4" placeholder="Enter a question, feedback, or suggestions..." 
                                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-[#0c5130]/10 focus:border-[#0c5130] outline-none transition-all placeholder-gray-400 text-gray-800 text-sm font-medium resize-none leading-relaxed">{{ old('message') }}</textarea>
                                    @error('message')
                                        <p class="text-red-500 text-xs mt-1.5 ml-1">{{ $message }}</p>
                                    @enderror
                                </div>
 
                                <div class="mb-6">
                                    {!! NoCaptcha::display() !!}
                                    @error('g-recaptcha-response')
                                        <p class="text-red-500 text-xs mt-1.5 ml-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                
                                <button type="submit" class="w-full md:w-auto px-8 py-3.5 bg-[#0C5130] hover:bg-[#042611] text-white font-bold rounded-xl shadow-lg shadow-green-950/10 hover:shadow-xl hover:shadow-green-950/20 hover:-translate-y-0.5 transition-all duration-300 uppercase tracking-wider text-xs sm:text-sm">
                                    {{ __('Submit') }}
                                </button>
                            </form>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

        <!-- FAQ Section -->
        <div class="bg-gray-50/50 border-t border-gray-100 py-20 lg:py-28">
            <div class="max-w-[1100px] mx-auto px-5 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                    
                    <!-- FAQ Left Column -->
                    <div class="lg:col-span-5" data-aos="fade-right" data-aos-duration="1000">
                        <h2 class="text-3xl sm:text-4xl font-black text-gray-900 tracking-tight leading-tight mb-4">
                            {{ __('Frequently asked question (FAQ)') }}
                        </h2>
                        
                        <p class="text-base sm:text-lg text-gray-500 font-light leading-relaxed mb-8">
                            {{ __('Got questions about our services? We\'ve got answers!') }}
                        </p>
                        
                        <a href="https://api.whatsapp.com/send/?phone=628115239999&text=Halo%20Admin" target="_blank" class="inline-flex items-center gap-2 px-6 py-3 bg-neutral-900 hover:bg-neutral-800 text-white font-bold text-sm uppercase tracking-wider rounded-xl shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all duration-300">
                            {{ __('Help Center') }} <i class="fas fa-external-link-alt text-xs"></i>
                        </a>
                    </div>
                    
                    <!-- FAQ Right Column (Accordion) -->
                    <div class="lg:col-span-7" data-aos="fade-left" data-aos-duration="1000">
                        <div class="flex flex-col">
                            
                            <!-- FAQ Item 1 -->
                            <div class="faq-item border border-gray-200 rounded-2xl bg-white shadow-sm overflow-hidden mb-4 transition-all duration-300">
                                <button class="faq-btn w-full px-6 py-5 flex justify-between items-center text-left text-gray-800 hover:text-[#0c5130] transition-colors font-semibold text-sm sm:text-base gap-4 focus:outline-none">
                                    <span>{{ __('What differentiates Tokabe from other advertising agencies?') }}</span>
                                    <svg class="faq-icon w-5 h-5 text-gray-400 transition-transform duration-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                    </svg>
                                </button>
                                <div class="faq-panel max-h-0 opacity-0 overflow-hidden transition-all duration-500 ease-in-out">
                                    <div class="px-6 pb-5 text-xs sm:text-sm text-gray-500 leading-relaxed font-light">
                                        {{ __('Tokabe provides the most strategic videotron (DOOH) and billboard (OOH) spaces across Medan and Sumatra with verified premium traffic, highly competitive packages, and integrated event IT solutions.') }}
                                    </div>
                                </div>
                            </div>
                            
                            <!-- FAQ Item 2 -->
                            <div class="faq-item border border-gray-200 rounded-2xl bg-white shadow-sm overflow-hidden mb-4 transition-all duration-300">
                                <button class="faq-btn w-full px-6 py-5 flex justify-between items-center text-left text-gray-800 hover:text-[#0c5130] transition-colors font-semibold text-sm sm:text-base gap-4 focus:outline-none">
                                    <span>{{ __('What kind of advertising spaces do you provide?') }}</span>
                                    <svg class="faq-icon w-5 h-5 text-gray-400 transition-transform duration-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                    </svg>
                                </button>
                                <div class="faq-panel max-h-0 opacity-0 overflow-hidden transition-all duration-500 ease-in-out">
                                    <div class="px-6 pb-5 text-xs sm:text-sm text-gray-500 leading-relaxed font-light">
                                        {{ __('We provide dynamic digital videotron (DOOH) screens, city-center giant billboards (OOH), prime vertical baliho formats, pedestrian bridges (JPO), and customized event activation branding displays.') }}
                                    </div>
                                </div>
                            </div>
                            
                            <!-- FAQ Item 3 -->
                            <div class="faq-item border border-gray-200 rounded-2xl bg-white shadow-sm overflow-hidden mb-4 transition-all duration-300">
                                <button class="faq-btn w-full px-6 py-5 flex justify-between items-center text-left text-gray-800 hover:text-[#0c5130] transition-colors font-semibold text-sm sm:text-base gap-4 focus:outline-none">
                                    <span>{{ __('How can I launch an advertising campaign with Tokabe?') }}</span>
                                    <svg class="faq-icon w-5 h-5 text-gray-400 transition-transform duration-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                    </svg>
                                </button>
                                <div class="faq-panel max-h-0 opacity-0 overflow-hidden transition-all duration-500 ease-in-out">
                                    <div class="px-6 pb-5 text-xs sm:text-sm text-gray-500 leading-relaxed font-light">
                                        {{ __('Simply fill out the form above or click the WhatsApp button to contact our sales team. We will guide you from selecting optimal site locations, advising on duration, up to ad creative deployment.') }}
                                    </div>
                                </div>
                            </div>
                            
                            <!-- FAQ Item 4 -->
                            <div class="faq-item border border-gray-200 rounded-2xl bg-white shadow-sm overflow-hidden mb-4 transition-all duration-300">
                                <button class="faq-btn w-full px-6 py-5 flex justify-between items-center text-left text-gray-800 hover:text-[#0c5130] transition-colors font-semibold text-sm sm:text-base gap-4 focus:outline-none">
                                    <span>{{ __('Does Tokabe handle event management or brand activation?') }}</span>
                                    <svg class="faq-icon w-5 h-5 text-gray-400 transition-transform duration-300 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                                    </svg>
                                </button>
                                <div class="faq-panel max-h-0 opacity-0 overflow-hidden transition-all duration-500 ease-in-out">
                                    <div class="px-6 pb-5 text-xs sm:text-sm text-gray-500 leading-relaxed font-light">
                                        {{ __('Yes! Tokabe is certified in BNSP Event Organizer and BNSP MICE operations. We deliver end-to-end corporate event planning, creative product launches, experiential brand activations, and custom event IT infrastructure.') }}
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </main>

    <x-footer />

    <!-- NoCaptcha JS -->
    {!! NoCaptcha::renderJs() !!}

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Form name combination logic
            const form = document.getElementById('contact-form');
            if (form) {
                form.addEventListener('submit', function(e) {
                    const firstName = document.getElementById('first_name').value.trim();
                    const lastName = document.getElementById('last_name').value.trim();
                    document.getElementById('combined-name').value = `${firstName} ${lastName}`.trim();
                });
            }

            // FAQ accordion logic
            const faqItems = document.querySelectorAll('.faq-item');
            faqItems.forEach(item => {
                const btn = item.querySelector('.faq-btn');
                const panel = item.querySelector('.faq-panel');
                const icon = item.querySelector('.faq-icon');
                
                btn.addEventListener('click', function() {
                    const isOpen = !panel.classList.contains('max-h-0');
                    
                    // Close all other FAQs first
                    faqItems.forEach(otherItem => {
                        const otherPanel = otherItem.querySelector('.faq-panel');
                        const otherIcon = otherItem.querySelector('.faq-icon');
                        otherPanel.classList.remove('max-h-[300px]', 'opacity-100', 'mt-2');
                        otherPanel.classList.add('max-h-0', 'opacity-0');
                        otherIcon.classList.remove('rotate-45', 'text-[#0c5130]');
                        otherItem.classList.remove('border-[#0c5130]/20', 'bg-[#0c5130]/5');
                    });
                    
                    // Toggle current FAQ
                    if (!isOpen) {
                        panel.classList.remove('max-h-0', 'opacity-0');
                        panel.classList.add('max-h-[300px]', 'opacity-100', 'mt-2');
                        icon.classList.add('rotate-45', 'text-[#0c5130]');
                        item.classList.add('border-[#0c5130]/20', 'bg-[#0c5130]/5');
                    }
                });
            });
            
            // Open the first FAQ item by default to match mockup
            if (faqItems.length > 0) {
                const firstItem = faqItems[0];
                const btn = firstItem.querySelector('.faq-btn');
                btn.click();
            }
        });
    </script>
</body>
</html>
