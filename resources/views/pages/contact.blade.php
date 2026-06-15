<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('Tokabe.id - Contact Us') }}</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="icon" type="image/jpeg" href="{{ asset('images/LogoTKB.jpg') }}?v=2">
    <link rel="shortcut icon" type="image/jpeg" href="{{ asset('images/LogoTKB.jpg') }}?v=2">
</head>
<body class="bg-gray-50 antialiased text-gray-900 font-sans">
    <x-navbar theme="dark" />

    <main class="min-h-screen pt-28 pb-20">
        <!-- Header -->
        <div class="max-w-[1100px] mx-auto px-5 sm:px-6 lg:px-8 text-center">
            @php
                $contactTitle = __('Contact Us');
                $contactParts = explode(' ', $contactTitle);
                if (count($contactParts) > 1) {
                    $lastWordContact = array_pop($contactParts);
                    $firstWordsContact = implode(' ', $contactParts);
                } else {
                    $lastWordContact = $contactTitle;
                    $firstWordsContact = '';
                }
            @endphp
            <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 tracking-tight mb-4 uppercase">
                @if($firstWordsContact)<span class="text-gray-900">{{ $firstWordsContact }}</span> @endif<span class="text-green-500">{{ $lastWordContact }}</span>
            </h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto mb-4">
                {{ __('Get in touch with our team for any inquiries about advertising solutions in Medan and Sumatera.') }}
            </p>
            <div class="flex items-center justify-center text-sm text-gray-500 gap-2">
                <a href="{{ route('home') }}" class="hover:text-green-500 transition-colors">{{ __('Home') }}</a>
                <span>&gt;</span>
                <span class="text-green-600 font-medium">{{ __('Contact Us') }}</span>
            </div>
        </div>

        <!-- Contact Cards -->
        <div class="max-w-[1100px] mx-auto px-5 sm:px-6 lg:px-8 mt-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Email -->
                <div class="bg-gradient-to-br from-[#042611] via-[#0C5130] to-[#4CAF50] p-6 rounded-2xl shadow-xl border border-green-800/50 flex items-center gap-4 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 group">
                    <div class="w-14 h-14 bg-white/10 text-white rounded-xl flex items-center justify-center flex-shrink-0 shadow-inner group-hover:bg-white group-hover:text-[#0C5130] transition-colors">
                        <i class="fas fa-envelope text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-white text-lg">{{ __('Email Address') }}</h3>
                        <p class="text-gray-200 text-sm mt-1">info@tokabe.id</p>
                    </div>
                </div>

                <!-- Phone -->
                <a href="tel:+628115239999" class="bg-gradient-to-br from-[#042611] via-[#0C5130] to-[#4CAF50] p-6 rounded-2xl shadow-xl border border-green-800/50 flex items-center gap-4 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 group">
                    <div class="w-14 h-14 bg-white/10 text-white rounded-xl flex items-center justify-center flex-shrink-0 shadow-inner group-hover:bg-white group-hover:text-[#0C5130] transition-colors">
                        <i class="fas fa-phone-alt text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-white text-lg">{{ __('Phone number') }}</h3>
                        <p class="text-gray-200 text-sm mt-1">0811-5239-999</p>
                    </div>
                </a>

                <!-- Address -->
                <a href="https://maps.app.goo.gl/m2DKjqNtE15Muzqg6" target="_blank" class="bg-gradient-to-br from-[#042611] via-[#0C5130] to-[#4CAF50] p-6 rounded-2xl shadow-xl border border-green-800/50 flex items-center gap-4 hover:-translate-y-2 hover:shadow-2xl transition-all duration-300 group">
                    <div class="w-14 h-14 bg-white/10 text-white rounded-xl flex items-center justify-center flex-shrink-0 shadow-inner group-hover:bg-white group-hover:text-[#0C5130] transition-colors">
                        <i class="fas fa-map-marker-alt text-2xl"></i>
                    </div>
                    <div>
                        <h3 class="font-bold text-white text-lg">{{ __('Address') }}</h3>
                        <p class="text-gray-200 text-sm mt-1">Komplek Setiabudi Point No. D-10<br>Medan, Indonesia</p>
                    </div>
                </a>
            </div>
        </div>

        <!-- Form and Image -->
        <div class="max-w-[1100px] mx-auto px-5 sm:px-6 lg:px-8 mt-16 mb-20">
            <div class="bg-gradient-to-br from-[#042611] via-[#0C5130] to-[#4CAF50] rounded-3xl shadow-2xl border border-green-800/50 overflow-hidden max-w-3xl mx-auto">
                <div>
                    
                    <!-- Form Section -->
                    <div class="p-8 lg:p-12">
                        @php
                            $msgTitle = __('Send a Message');
                            $msgParts = explode(' ', $msgTitle);
                            if (count($msgParts) > 1) {
                                $lastWord = array_pop($msgParts);
                                $firstWords = implode(' ', $msgParts);
                            } else {
                                $lastWord = $msgTitle;
                                $firstWords = '';
                            }
                        @endphp
                        <h2 class="text-4xl md:text-5xl font-extrabold tracking-tight mb-8 text-center">
                            @if($firstWords)<span class="text-white">{{ $firstWords }}</span> @endif<span class="text-green-300">{{ $lastWord }}</span>
                        </h2>
                        
                        @if(session('success'))
                            <div class="mb-6 p-4 bg-green-50 text-green-700 rounded-xl border border-green-200">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST">
                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mb-5">
                                <div>
                                    <input type="text" name="name" value="{{ old('name') }}" placeholder="{{ __('Your Name...') }}" 
                                        class="w-full px-5 py-3.5 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-all placeholder-gray-400">
                                    @error('name')
                                        <p class="text-red-500 text-sm mt-1.5 ml-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <input type="text" name="phone" value="{{ old('phone') }}" placeholder="{{ __('Your WA Number...') }}" 
                                        class="w-full px-5 py-3.5 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-all placeholder-gray-400">
                                    @error('phone')
                                        <p class="text-red-500 text-sm mt-1.5 ml-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <input type="email" name="email" value="{{ old('email') }}" placeholder="{{ __('Your E-mail...') }}" 
                                        class="w-full px-5 py-3.5 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-all placeholder-gray-400">
                                    @error('email')
                                        <p class="text-red-500 text-sm mt-1.5 ml-1">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <input type="text" name="subject" value="{{ old('subject') }}" placeholder="{{ __('Subject...') }}" 
                                        class="w-full px-5 py-3.5 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-all placeholder-gray-400">
                                </div>
                            </div>
                            
                            <div class="mb-5">
                                <textarea name="message" rows="5" placeholder="{{ __('Your Message') }}" 
                                    class="w-full px-5 py-3.5 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition-all placeholder-gray-400 resize-none">{{ old('message') }}</textarea>
                                @error('message')
                                    <p class="text-red-500 text-sm mt-1.5 ml-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-6">
                                {!! NoCaptcha::display() !!}
                                @error('g-recaptcha-response')
                                    <p class="text-red-500 text-sm mt-1.5 ml-1">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="flex justify-center mt-4">
                                <button type="submit" class="w-full md:w-auto px-10 py-4 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-xl transition-colors flex items-center justify-center gap-2 group">
                                    {{ __('Send Message') }}
                                    <i class="fas fa-arrow-right transform group-hover:translate-x-1 transition-transform"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <x-footer />

    <!-- NoCaptcha JS -->
    {!! NoCaptcha::renderJs() !!}
</body>
</html>
