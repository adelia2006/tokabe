@props(['partners'])

<style>
    /* ─── Slider Animations ─── */
    @keyframes slider-left {
        0%   { transform: translateX(0); }
        100% { transform: translateX(-50%); }
    }
    @keyframes slider-right {
        0%   { transform: translateX(-50%); }
        100% { transform: translateX(0); }
    }

    .slider-track-left {
        display: flex;
        width: max-content;
        animation: slider-left 40s linear infinite;
    }
    .slider-track-right {
        display: flex;
        width: max-content;
        animation: slider-right 40s linear infinite;
    }

    .slider-wrapper:hover .slider-track-left,
    .slider-wrapper:hover .slider-track-right {
        animation-play-state: paused;
    }

    /* ─── Logo Pill ─── */
    .logo-pill {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 220px;
        height: 80px;
        flex-shrink: 0;
        margin: 0 6px;
        border: 1px solid rgba(212, 160, 23, 0.2);
        border-radius: 6px;
        background: rgba(255,255,255,0.02);
        white-space: nowrap;
        transition: background 0.2s, border-color 0.2s;
        cursor: default;
        overflow: hidden;
        padding: 12px 18px;
    }
    .logo-pill:hover {
        background: rgba(212, 160, 23, 0.07);
        border-color: rgba(212, 160, 23, 0.4);
    }
    .logo-pill img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        filter: brightness(0.95);
        transition: filter 0.2s;
    }
    .logo-pill:hover img {
        filter: brightness(1.1);
    }
</style>

<section id="partners" class="py-10 lg:py-16 border-y border-[#2e1a09] overflow-hidden bg-[#2C1A0E]">

    <div class="max-w-7xl mx-auto px-6 mb-10 text-center">
        <p style="font-size:0.65rem; letter-spacing:0.3em; text-transform:uppercase; color:#c9922a; font-family:'Poppins',sans-serif; font-weight:600; margin-bottom:10px;">
            {{ __('partners_already_used') }}
        </p>
        <h2 style="font-size:clamp(1.6rem, 3.5vw, 2.8rem); font-weight:900; color:#f2ebe2; letter-spacing:0.04em; text-transform:uppercase; line-height:1.1; font-family:'Poppins',sans-serif; margin-bottom:16px;">
            {{ __('partners_best_in_business') }}
        </h2>
        <!-- Ornament line with pointed ends -->
        <div style="display:flex; align-items:center; justify-content:center; margin: 0 auto;">
            <svg width="400" height="1" viewBox="0 0 400 1" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="0" y1="0.5" x2="400" y2="0.5" stroke="url(#goldGrad2)" stroke-width="1"/>
                <defs>
                    <linearGradient id="goldGrad2" x1="0" y1="0" x2="400" y2="0" gradientUnits="userSpaceOnUse">
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

    @if($partners->count() > 0)
        @php
            $topRow    = $partners->where('posisi', 'Atas');
            $bottomRow = $partners->where('posisi', 'Bawah');

            if ($bottomRow->count() == 0) { $bottomRow = $topRow; }
            if ($topRow->count() == 0)    { $topRow = $bottomRow; }
        @endphp

        {{-- ── Row 1 ── --}}
        <div class="mb-4">
            <div class="slider-wrapper overflow-hidden">
                <div class="slider-track-left" style="gap:0;">
                    @for ($i = 0; $i < 2; $i++)
                        @foreach ($topRow as $partner)
                            <div class="logo-pill">
                                <img
                                    src="{{ $partner->gambar ? asset('storage/image_partner/' . $partner->gambar) : 'https://via.placeholder.com/120x40?text=Logo' }}"
                                    alt="{{ \App\Helpers\SeoHelper::getImageAlt('partner', $partner->judul ?? 'Partner') }}"
                                />
                            </div>
                        @endforeach
                    @endfor
                </div>
            </div>
        </div>

        {{-- ── Row 2 ── --}}
        <div>
            <div class="slider-wrapper overflow-hidden">
                <div class="slider-track-right" style="gap:0;">
                    @for ($i = 0; $i < 2; $i++)
                        @foreach ($bottomRow as $partner)
                            <div class="logo-pill">
                                <img
                                    src="{{ $partner->gambar ? asset('storage/image_partner/' . $partner->gambar) : 'https://via.placeholder.com/120x40?text=Logo' }}"
                                    alt="{{ \App\Helpers\SeoHelper::getImageAlt('partner', $partner->judul ?? 'Partner') }}"
                                />
                            </div>
                        @endforeach
                    @endfor
                </div>
            </div>
        </div>

    @endif
</section>
