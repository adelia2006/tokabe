<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Legality | Tokabe.id</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#F9F0D6] antialiased text-gray-900 font-sans">
    <x-navbar />
    <main>
        <!-- Header Hero Section -->
        <div class="bg-gradient-to-br from-[#1A0F07] via-[#2C1A0E] to-[#5C3317] pt-40 pb-24 text-center relative overflow-hidden">
            <!-- Decorative subtle glowing blur circles -->
            <div class="absolute top-0 right-0 -mr-20 -mt-20 w-80 h-80 rounded-full bg-white opacity-5 blur-3xl"></div>
            <div class="absolute bottom-0 left-0 -ml-20 -mb-20 w-80 h-80 rounded-full bg-[#D4A574] opacity-10 blur-3xl"></div>
            
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10" data-aos="fade-up" data-aos-duration="1000">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black text-white uppercase tracking-tight mb-4 drop-shadow-md">
                    {!! nl2br(__('Company Legality')) !!}
                </h1>
                <p class="text-base sm:text-lg lg:text-xl text-[#F5EFE7] max-w-3xl mx-auto font-light leading-relaxed drop-shadow-sm">
                    {{ __('Official documents and certifications ensuring Tokabe.id operates with full compliance, trust, and professionalism.') }}
                </p>
            </div>
        </div>

        <!-- Grid Layout Section -->
        <div class="bg-[#F9F0D6] py-16 sm:py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <!-- Grid Layout for Certificates -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            
            <!-- NPWP -->
            <div class="bg-[#F9F0D6] rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 flex flex-col items-center justify-center border border-[#D4A569]/20 group" data-aos="fade-up" data-aos-delay="100">
                <div class="w-32 h-32 mb-6 flex items-center justify-center bg-gray-50 rounded-full p-4 group-hover:bg-[#F5EFE7] transition-colors">
                    <img src="{{ asset('images/npwp.png') }}" alt="{{ \App\Helpers\SeoHelper::getImageAlt('legal', 'NPWP Tokabe.id') }}" class="max-w-full max-h-full object-contain filter drop-shadow-sm" loading="lazy">
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">NPWP</h3>
                <p class="text-gray-500 font-medium text-center">40.705.xxx.x-xxx.000</p>
            </div>

            <!-- NIB -->
            <div class="bg-[#F9F0D6] rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 flex flex-col items-center justify-center border border-[#D4A569]/20 group" data-aos="fade-up" data-aos-delay="200">
                <div class="w-32 h-32 mb-6 flex items-center justify-center bg-gray-50 rounded-full p-4 group-hover:bg-[#F5EFE7] transition-colors">
                    <img src="{{ asset('images/nib.jpeg') }}" alt="{{ \App\Helpers\SeoHelper::getImageAlt('legal', 'NIB Tokabe.id') }}" class="max-w-full max-h-full object-contain filter drop-shadow-sm rounded-full" loading="lazy">
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">NIB</h3>
                <p class="text-gray-500 font-medium text-center">28042xxxxxx93</p>
            </div>

            <!-- AHU -->
            <div class="bg-[#F9F0D6] rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 flex flex-col items-center justify-center border border-[#D4A569]/20 group" data-aos="fade-up" data-aos-delay="300">
                <div class="w-32 h-32 mb-6 flex items-center justify-center bg-gray-50 rounded-full p-4 group-hover:bg-[#F5EFE7] transition-colors">
                    <img src="{{ asset('images/AHU-logo.png') }}" alt="{{ \App\Helpers\SeoHelper::getImageAlt('legal', 'AHU Kemenkumham Tokabe.id') }}" class="max-w-full max-h-full object-contain filter drop-shadow-sm" loading="lazy">
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">Kemenkumham AHU</h3>
                <p class="text-gray-500 font-medium text-center text-sm">AHU-003xxxx.AH.01.01. TAHUN 2023</p>
            </div>

            <!-- Kadin -->
            <div class="bg-[#F9F0D6] rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 flex flex-col items-center justify-center border border-[#D4A569]/20 group" data-aos="fade-up" data-aos-delay="400">
                <div class="w-32 h-32 mb-6 flex items-center justify-center bg-gray-50 rounded-full p-4 group-hover:bg-[#F5EFE7] transition-colors">
                    <img src="{{ asset('images/kadin.png') }}" alt="{{ \App\Helpers\SeoHelper::getImageAlt('legal', 'KADIN Tokabe.id') }}" class="max-w-full max-h-full object-contain filter drop-shadow-sm" loading="lazy">
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">KADIN</h3>
                <p class="text-gray-500 font-medium text-center">10201-24xxxxxx611</p>
            </div>

            <!-- BPJS -->
            <div class="bg-[#F9F0D6] rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 flex flex-col items-center justify-center border border-[#D4A569]/20 group" data-aos="fade-up" data-aos-delay="500">
                <div class="w-32 h-32 mb-6 flex items-center justify-center bg-gray-50 rounded-full p-4 group-hover:bg-[#F5EFE7] transition-colors">
                    <img src="{{ asset('images/bpjs.png') }}" alt="{{ \App\Helpers\SeoHelper::getImageAlt('legal', 'BPJS Ketenagakerjaan Tokabe.id') }}" class="max-w-full max-h-full object-contain filter drop-shadow-sm" loading="lazy">
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2">BPJS Ketenagakerjaan</h3>
                <p class="text-gray-500 font-medium text-center">24xxxx73</p>
            </div>

            <!-- BNSP EO -->
            <div class="bg-[#F9F0D6] rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 flex flex-col items-center justify-center border border-[#D4A569]/20 group" data-aos="fade-up" data-aos-delay="600">
                <div class="w-32 h-32 mb-6 flex items-center justify-center bg-gray-50 rounded-full p-4 group-hover:bg-[#F5EFE7] transition-colors">
                    <img src="{{ asset('images/Logo-BNSP.png') }}" alt="{{ \App\Helpers\SeoHelper::getImageAlt('legal', 'Sertifikasi BNSP Event Organizer Tokabe.id') }}" class="max-w-full max-h-full object-contain filter drop-shadow-sm" loading="lazy">
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2 text-center">BNSP Event Organizer</h3>
                <p class="text-gray-500 font-medium text-center text-sm">No. Reg EVN.2518.xxxx 2025</p>
            </div>

            <!-- BNSP MICE -->
            <div class="bg-white rounded-3xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 flex flex-col items-center justify-center border border-gray-100 group sm:col-span-2 md:col-span-3 lg:col-span-1 lg:col-start-2" data-aos="fade-up" data-aos-delay="700">
                <div class="w-32 h-32 mb-6 flex items-center justify-center bg-gray-50 rounded-full p-4 group-hover:bg-[#F5EFE7] transition-colors">
                    <img src="{{ asset('images/Logo-BNSP.png') }}" alt="{{ \App\Helpers\SeoHelper::getImageAlt('legal', 'Sertifikasi BNSP MICE Tokabe.id') }}" class="max-w-full max-h-full object-contain filter drop-shadow-sm" loading="lazy">
                </div>
                <h3 class="text-xl font-bold text-gray-800 mb-2 text-center">BNSP MICE</h3>
                <p class="text-gray-500 font-medium text-center text-sm">Meeting Incentive Convention Exhibition<br>No. Reg EVN.2518.xxxx 2025</p>
            </div>

        </div>
    </div>
</div>
    </main>
    <x-footer />
</body>
</html>
