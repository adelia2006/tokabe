<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>TOKABE – Advertising & Creative Agency</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;0,900;1,700&family=Inter:wght@300;400;500;600&family=DM+Sans:wght@400;500&display=swap" rel="stylesheet">
<script>
tailwind.config = {
  theme: {
    extend: {
      colors: {
        brown: {
          50: '#faf7f4',
          100: '#f2ebe2',
          200: '#e4d4be',
          300: '#d4b896',
          400: '#c09a6e',
          500: '#a97e50',
          600: '#8c6340',
          700: '#6e4c30',
          800: '#4f3520',
          900: '#2e1e10',
          950: '#1a0f06',
        },
        gold: {
          50: '#fffbeb',
          100: '#fef3c7',
          200: '#fde68a',
          300: '#fcd34d',
          400: '#fbbf24',
          500: '#d4a017',
          600: '#b8860b',
          700: '#966d09',
          800: '#7a5607',
          900: '#5c3e05',
        }
      },
      fontFamily: {
        display: ['Playfair Display', 'Georgia', 'serif'],
        body: ['Inter', 'system-ui', 'sans-serif'],
        sans2: ['DM Sans', 'sans-serif'],
      },
    }
  }
}
</script>
<style>
  * { box-sizing: border-box; }
  html { scroll-behavior: smooth; }

  /* ─── Scrollbar ─────────────────── */
  ::-webkit-scrollbar { width: 6px; }
  ::-webkit-scrollbar-track { background: #1a0f06; }
  ::-webkit-scrollbar-thumb { background: #d4a017; border-radius: 3px; }

  /* ─── Navbar scroll effect ──────── */
  #navbar { transition: background 0.4s, box-shadow 0.4s, padding 0.4s; }
  #navbar.scrolled { background: rgba(46,30,16,0.97) !important; box-shadow: 0 2px 32px rgba(0,0,0,0.35); padding-top: 0.6rem; padding-bottom: 0.6rem; }

  /* ─── Gold text ─────────────────── */
  .text-gold { color: #d4a017; }
  .text-gold-light { color: #fbbf24; }
  .border-gold { border-color: #d4a017; }

  /* ─── Buttons ───────────────────── */
  .btn-gold {
    background: linear-gradient(135deg, #d4a017, #b8860b);
    color: #1a0f06;
    font-family: 'DM Sans', sans-serif;
    font-weight: 600;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    font-size: 0.78rem;
    padding: 0.85rem 2.2rem;
    border-radius: 0;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
    clip-path: polygon(0 0, calc(100% - 12px) 0, 100% 12px, 100% 100%, 12px 100%, 0 calc(100% - 12px));
  }
  .btn-gold:hover { background: linear-gradient(135deg, #fbbf24, #d4a017); transform: translateY(-2px); box-shadow: 0 8px 24px rgba(212,160,23,0.35); }
  .btn-outline-gold {
    border: 1.5px solid #d4a017;
    color: #d4a017;
    font-family: 'DM Sans', sans-serif;
    font-weight: 500;
    letter-spacing: 0.06em;
    text-transform: uppercase;
    font-size: 0.78rem;
    padding: 0.8rem 2rem;
    clip-path: polygon(0 0, calc(100% - 12px) 0, 100% 12px, 100% 100%, 12px 100%, 0 calc(100% - 12px));
    transition: all 0.3s;
  }
  .btn-outline-gold:hover { background: rgba(212,160,23,0.12); transform: translateY(-2px); }

  /* ─── Dropdown ──────────────────── */
  .dropdown:hover .dropdown-menu { opacity: 1; visibility: visible; transform: translateY(0); }
  .dropdown-menu {
    opacity: 0; visibility: hidden;
    transform: translateY(-8px);
    transition: all 0.25s ease;
    position: absolute; top: calc(100% + 12px); left: -24px;
    background: #2e1e10; border: 1px solid rgba(212,160,23,0.2);
    min-width: 200px; z-index: 999; padding: 0.5rem 0;
  }
  .dropdown-menu a { display: block; padding: 0.6rem 1.25rem; color: #e4d4be; font-size: 0.85rem; transition: all 0.2s; }
  .dropdown-menu a:hover { background: rgba(212,160,23,0.1); color: #d4a017; padding-left: 1.6rem; }

  /* ─── Logo Slider ───────────────── */
  @keyframes slide-left { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }
  @keyframes slide-right { 0% { transform: translateX(-50%); } 100% { transform: translateX(0); } }
  .slider-track-left { animation: slide-left 28s linear infinite; display: flex; width: max-content; }
  .slider-track-right { animation: slide-right 32s linear infinite; display: flex; width: max-content; }
  .slider-wrapper:hover .slider-track-left,
  .slider-wrapper:hover .slider-track-right { animation-play-state: paused; }
  .logo-pill {
    display: flex; align-items: center; gap: 10px;
    padding: 0.6rem 1.6rem;
    border: 1px solid rgba(212,160,23,0.15);
    margin: 0 10px;
    filter: grayscale(1) opacity(0.55);
    transition: filter 0.3s ease, border-color 0.3s;
    cursor: default;
    white-space: nowrap;
    font-family: 'DM Sans', sans-serif;
    font-size: 0.82rem;
    font-weight: 500;
    letter-spacing: 0.04em;
    color: #e4d4be;
    background: rgba(255,255,255,0.03);
  }
  .logo-pill:hover { filter: grayscale(0) opacity(1); border-color: rgba(212,160,23,0.55); }

  /* ─── Service Cards ─────────────── */
  .service-card {
    border: 1px solid rgba(212,160,23,0.12);
    background: rgba(255,255,255,0.025);
    padding: 2.5rem 2rem;
    transition: all 0.4s ease;
    position: relative;
    overflow: hidden;
    cursor: pointer;
  }
  .service-card::before {
    content: '';
    position: absolute; bottom: 0; left: 0;
    width: 100%; height: 3px;
    background: linear-gradient(90deg, #d4a017, #fbbf24);
    transform: scaleX(0); transform-origin: left;
    transition: transform 0.4s ease;
  }
  .service-card::after {
    content: '';
    position: absolute; inset: 0;
    background: linear-gradient(135deg, rgba(212,160,23,0.04), transparent);
    opacity: 0;
    transition: opacity 0.4s;
  }
  .service-card:hover { border-color: rgba(212,160,23,0.4); transform: translateY(-6px); }
  .service-card:hover::before { transform: scaleX(1); }
  .service-card:hover::after { opacity: 1; }
  .service-icon {
    width: 56px; height: 56px;
    border: 1.5px solid rgba(212,160,23,0.3);
    display: flex; align-items: center; justify-content: center;
    margin-bottom: 1.5rem;
    clip-path: polygon(0 0, calc(100% - 8px) 0, 100% 8px, 100% 100%, 8px 100%, 0 calc(100% - 8px));
    transition: all 0.3s;
  }
  .service-card:hover .service-icon { background: rgba(212,160,23,0.15); border-color: #d4a017; }

  /* ─── Map Section ───────────────── */
  .map-region { cursor: pointer; transition: fill 0.3s, filter 0.3s; }
  .map-region:hover { filter: brightness(1.3); }
  .map-region.active { filter: brightness(1.4); }

  /* ─── Location Cards ────────────── */
  .location-card { transition: all 0.35s cubic-bezier(0.4, 0, 0.2, 1); }
  .location-card:hover { transform: translateX(4px); }

  /* ─── Portfolio Cards ───────────── */
  .portfolio-card { transition: all 0.4s ease; overflow: hidden; }
  .portfolio-card:hover .portfolio-overlay { opacity: 1; }
  .portfolio-card:hover img { transform: scale(1.06); }
  .portfolio-overlay { opacity: 0; transition: opacity 0.4s; }

  /* ─── Section fade-in ───────────── */
  .fade-up { opacity: 0; transform: translateY(32px); transition: opacity 0.7s ease, transform 0.7s ease; }
  .fade-up.visible { opacity: 1; transform: translateY(0); }

  /* ─── Horizontal rule ornament ─── */
  .ornament { display: flex; align-items: center; gap: 1rem; }
  .ornament::before, .ornament::after { content: ''; flex: 1; height: 1px; background: linear-gradient(90deg, transparent, rgba(212,160,23,0.4), transparent); }

  /* ─── Hamburger ─────────────────── */
  #mobile-menu { transition: max-height 0.4s ease, opacity 0.4s; max-height: 0; opacity: 0; overflow: hidden; }
  #mobile-menu.open { max-height: 600px; opacity: 1; }

  /* ─── Map tooltip ───────────────── */
  #map-tooltip {
    pointer-events: none;
    position: absolute;
    background: #2e1e10;
    border: 1px solid #d4a017;
    color: #e4d4be;
    padding: 6px 14px;
    font-size: 0.78rem;
    font-family: 'DM Sans', sans-serif;
    white-space: nowrap;
    opacity: 0;
    transition: opacity 0.2s;
    z-index: 100;
  }

  /* ─── Carousel ──────────────────── */
  .carousel-track { display: flex; transition: transform 0.55s cubic-bezier(0.4,0,0.2,1); }

  /* ─── Tab filter ────────────────── */
  .filter-tab { transition: all 0.25s; }
  .filter-tab.active {
    background: #d4a017;
    color: #1a0f06;
    border-color: #d4a017;
  }

  /* ─── Stats counter ─────────────── */
  .stat-badge {
    font-family: 'Playfair Display', serif;
    font-size: 2.8rem;
    font-weight: 900;
    color: #d4a017;
    line-height: 1;
  }
</style>
</head>
<body class="bg-brown-950 text-brown-100 font-body overflow-x-hidden">

<!-- ══════════════════════════════════════════════
     NAVBAR
══════════════════════════════════════════════ -->
<nav id="navbar" class="fixed top-0 left-0 right-0 z-50 px-6 py-5" style="background: linear-gradient(180deg, rgba(26,15,6,0.95) 0%, transparent 100%);">
  <div class="max-w-7xl mx-auto flex items-center justify-between">
    <!-- Logo -->
    <a href="#" class="flex items-center gap-3 group">
      <div class="relative">
        <div class="w-10 h-10 border border-gold-500" style="clip-path: polygon(0 0, calc(100% - 8px) 0, 100% 8px, 100% 100%, 8px 100%, 0 calc(100% - 8px)); background: linear-gradient(135deg, #d4a017, #b8860b); display:flex; align-items:center; justify-content:center;">
          <span style="font-family:'Playfair Display',serif; font-weight:900; color:#1a0f06; font-size:1rem; letter-spacing:-0.5px;">T</span>
        </div>
      </div>
      <div>
        <span style="font-family:'Playfair Display',serif; font-size:1.35rem; font-weight:900; color:#f2ebe2; letter-spacing:0.08em;">TOKABE</span>
        <div style="font-family:'DM Sans',sans-serif; font-size:0.58rem; letter-spacing:0.22em; color:#d4a017; text-transform:uppercase; margin-top:-2px;">Creative Agency</div>
      </div>
    </a>

    <!-- Desktop Nav -->
    <div class="hidden lg:flex items-center gap-8">
      <a href="#beranda" class="text-brown-200 hover:text-gold-400 transition-colors text-sm font-medium tracking-wide">Beranda</a>
      <!-- Layanan Dropdown -->
      <div class="dropdown relative">
        <button class="text-brown-200 hover:text-gold-400 transition-colors text-sm font-medium tracking-wide flex items-center gap-1">
          Layanan
          <svg class="w-3.5 h-3.5 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="dropdown-menu">
          <a href="#layanan">DOOH – Digital Out-of-Home</a>
          <a href="#layanan">OOH – Out-of-Home</a>
          <a href="#layanan">Event Organizer</a>
          <a href="#layanan">Videografi</a>
          <a href="#layanan">Fotografi</a>
        </div>
      </div>
      <a href="#portofolio" class="text-brown-200 hover:text-gold-400 transition-colors text-sm font-medium tracking-wide">Portofolio</a>
      <a href="#legalitas" class="text-brown-200 hover:text-gold-400 transition-colors text-sm font-medium tracking-wide">Legalitas</a>
      <a href="#kontak" class="btn-gold ml-4">Konsultasi Gratis</a>
    </div>

    <!-- Hamburger -->
    <button id="hamburger" class="lg:hidden p-2 text-brown-200 hover:text-gold-400 transition-colors" aria-label="Menu">
      <svg id="ham-icon" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
      <svg id="close-icon" class="w-6 h-6 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
    </button>
  </div>

  <!-- Mobile Menu -->
  <div id="mobile-menu" class="lg:hidden">
    <div class="max-w-7xl mx-auto mt-4 pb-6 border-t border-brown-800 pt-6 flex flex-col gap-4">
      <a href="#beranda" class="text-brown-200 hover:text-gold-400 text-sm font-medium">Beranda</a>
      <a href="#layanan" class="text-brown-200 hover:text-gold-400 text-sm font-medium">DOOH & OOH</a>
      <a href="#layanan" class="text-brown-200 hover:text-gold-400 text-sm font-medium">Event Organizer</a>
      <a href="#layanan" class="text-brown-200 hover:text-gold-400 text-sm font-medium">Videografi</a>
      <a href="#layanan" class="text-brown-200 hover:text-gold-400 text-sm font-medium">Fotografi</a>
      <a href="#portofolio" class="text-brown-200 hover:text-gold-400 text-sm font-medium">Portofolio</a>
      <a href="#legalitas" class="text-brown-200 hover:text-gold-400 text-sm font-medium">Legalitas</a>
      <a href="#kontak" class="btn-gold inline-block text-center mt-2">Konsultasi Gratis</a>
    </div>
  </div>
</nav>


<!-- ══════════════════════════════════════════════
     1. HERO SECTION
══════════════════════════════════════════════ -->
<section id="beranda" class="relative min-h-screen flex items-center overflow-hidden">
  <!-- Background -->
  <div class="absolute inset-0" style="background: linear-gradient(135deg, #1a0f06 0%, #2e1e10 40%, #1a0f06 100%);"></div>
  <!-- Grid overlay -->
  <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(rgba(212,160,23,0.5) 1px, transparent 1px), linear-gradient(90deg, rgba(212,160,23,0.5) 1px, transparent 1px); background-size: 80px 80px;"></div>
  <!-- Radial glow -->
  <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[900px] h-[900px] rounded-full opacity-10" style="background: radial-gradient(circle, #d4a017 0%, transparent 70%);"></div>

  <div class="max-w-7xl mx-auto px-6 py-32 pt-40 relative z-10 w-full">
    <div class="grid lg:grid-cols-2 gap-12 items-center">
      <!-- Left: Copy -->
      <div>
        <!-- Eyebrow -->
        <div class="flex items-center gap-3 mb-8">
          <div class="w-12 h-px bg-gold-500"></div>
          <span style="font-family:'DM Sans',sans-serif; font-size:0.7rem; letter-spacing:0.3em; text-transform:uppercase; color:#d4a017; font-weight:500;">Sumatera Utara #1 Creative Agency</span>
        </div>

        <!-- Headline -->
        <h1 style="font-family:'Playfair Display',serif; font-size:clamp(2.8rem,5.5vw,5rem); font-weight:900; line-height:1.05; color:#f2ebe2; letter-spacing:-0.01em;">
          Solusi Iklan<br>
          <span class="relative inline-block">
            <span style="color:#d4a017;">Tanpa Batas</span>
            <span class="absolute -bottom-1 left-0 w-full h-0.5" style="background: linear-gradient(90deg, #d4a017, transparent);"></span>
          </span><br>
          <span class="italic" style="color:#c09a6e; font-size:85%;">Di Mana Pun Anda</span>
        </h1>

        <!-- Sub headline -->
        <p class="mt-6 text-brown-300 leading-relaxed max-w-lg" style="font-size:1.05rem; font-family:'Inter',sans-serif; font-weight:300;">
          TOKABE menghadirkan ekosistem periklanan terpadu — dari layar digital billboard, event spektakuler, hingga karya visual sinematik — untuk brand Anda yang ingin mendominasi pasar Sumatera Utara.
        </p>

        <!-- CTA Buttons -->
        <div class="flex flex-wrap gap-4 mt-10">
          <a href="#layanan" class="btn-gold">Eksplorasi Layanan</a>
          <a href="#portofolio" class="btn-outline-gold">Lihat Portofolio</a>
        </div>

        <!-- Stats row -->
        <div class="flex gap-10 mt-14 pt-8 border-t border-brown-800">
          <div>
            <div class="stat-badge">80+</div>
            <div style="font-size:0.72rem; letter-spacing:0.12em; text-transform:uppercase; color:#8c6340; margin-top:4px; font-family:'DM Sans',sans-serif;">Titik Iklan</div>
          </div>
          <div class="border-l border-brown-800 pl-10">
            <div class="stat-badge">120+</div>
            <div style="font-size:0.72rem; letter-spacing:0.12em; text-transform:uppercase; color:#8c6340; margin-top:4px; font-family:'DM Sans',sans-serif;">Klien Aktif</div>
          </div>
          <div class="border-l border-brown-800 pl-10">
            <div class="stat-badge">12</div>
            <div style="font-size:0.72rem; letter-spacing:0.12em; text-transform:uppercase; color:#8c6340; margin-top:4px; font-family:'DM Sans',sans-serif;">Kabupaten/Kota</div>
          </div>
        </div>
      </div>

      <!-- Right: Visual -->
      <div class="relative hidden lg:block">
        <!-- Main visual frame -->
        <div class="relative" style="aspect-ratio: 4/5; max-width: 440px; margin-left: auto;">
          <!-- Large billboard mockup -->
          <div class="absolute inset-0 border border-gold-700 opacity-30" style="clip-path: polygon(0 0, calc(100% - 20px) 0, 100% 20px, 100% 100%, 20px 100%, 0 calc(100% - 20px));"></div>
          <div class="absolute inset-2 overflow-hidden" style="clip-path: polygon(0 0, calc(100% - 18px) 0, 100% 18px, 100% 100%, 18px 100%, 0 calc(100% - 18px));">
            <!-- Simulated billboard scene -->
            <div class="absolute inset-0" style="background: linear-gradient(180deg, #0a0a12 0%, #1a1020 50%, #2e1e10 100%);">
              <!-- Night city silhouette -->
              <div class="absolute bottom-0 left-0 right-0" style="height: 40%;">
                <svg viewBox="0 0 440 200" preserveAspectRatio="none" class="w-full h-full">
                  <rect x="0" y="80" width="40" height="120" fill="#1a1020"/>
                  <rect x="10" y="60" width="20" height="140" fill="#231528"/>
                  <rect x="50" y="100" width="30" height="100" fill="#1a1020"/>
                  <rect x="90" y="40" width="50" height="160" fill="#2a1835"/>
                  <rect x="100" y="30" width="30" height="170" fill="#1a1020"/>
                  <rect x="150" y="70" width="35" height="130" fill="#231528"/>
                  <rect x="195" y="50" width="45" height="150" fill="#1a1020"/>
                  <rect x="200" y="20" width="20" height="180" fill="#2a1835"/>
                  <rect x="250" y="85" width="40" height="115" fill="#231528"/>
                  <rect x="300" y="55" width="55" height="145" fill="#1a1020"/>
                  <rect x="310" y="35" width="25" height="165" fill="#2a1835"/>
                  <rect x="360" y="75" width="35" height="125" fill="#231528"/>
                  <rect x="400" y="90" width="40" height="110" fill="#1a1020"/>
                  <!-- Windows as small rects -->
                  <rect x="15" y="70" width="5" height="4" fill="#d4a017" opacity="0.8"/>
                  <rect x="25" y="80" width="5" height="4" fill="#fbbf24" opacity="0.7"/>
                  <rect x="95" y="55" width="6" height="5" fill="#d4a017" opacity="0.9"/>
                  <rect x="108" y="45" width="5" height="4" fill="#fbbf24" opacity="0.6"/>
                  <rect x="155" y="80" width="6" height="5" fill="#d4a017" opacity="0.7"/>
                  <rect x="165" y="90" width="5" height="4" fill="#fbbf24" opacity="0.8"/>
                  <rect x="205" y="30" width="5" height="5" fill="#d4a017" opacity="0.9"/>
                  <rect x="213" y="50" width="6" height="4" fill="#fbbf24" opacity="0.7"/>
                  <rect x="255" y="95" width="6" height="4" fill="#d4a017" opacity="0.8"/>
                  <rect x="305" y="65" width="5" height="5" fill="#fbbf24" opacity="0.9"/>
                  <rect x="320" y="45" width="6" height="4" fill="#d4a017" opacity="0.7"/>
                  <rect x="365" y="85" width="5" height="5" fill="#fbbf24" opacity="0.8"/>
                </svg>
              </div>
              <!-- Stars -->
              <div class="absolute inset-0" style="background: radial-gradient(ellipse at 30% 20%, rgba(212,160,23,0.06) 0%, transparent 60%);">
                <svg class="absolute inset-0 w-full h-full opacity-60" viewBox="0 0 440 500">
                  <circle cx="30" cy="30" r="1" fill="white" opacity="0.6"/>
                  <circle cx="80" cy="15" r="1.2" fill="white" opacity="0.8"/>
                  <circle cx="150" cy="40" r="0.8" fill="white" opacity="0.5"/>
                  <circle cx="220" cy="20" r="1" fill="white" opacity="0.7"/>
                  <circle cx="300" cy="35" r="1.2" fill="white" opacity="0.6"/>
                  <circle cx="380" cy="18" r="0.8" fill="white" opacity="0.9"/>
                  <circle cx="420" cy="50" r="1" fill="white" opacity="0.5"/>
                  <circle cx="60" cy="70" r="0.8" fill="white" opacity="0.4"/>
                  <circle cx="180" cy="55" r="1" fill="#fbbf24" opacity="0.8"/>
                  <circle cx="350" cy="60" r="0.9" fill="white" opacity="0.6"/>
                </svg>
              </div>
              <!-- Central billboard in scene -->
              <div class="absolute top-1/4 left-1/2 -translate-x-1/2 -translate-y-1/2 text-center" style="width:60%;">
                <div class="border border-gold-500 p-4" style="background: rgba(26,15,6,0.8);">
                  <div style="font-family:'Playfair Display',serif; font-size:1.1rem; font-weight:900; color:#d4a017; letter-spacing:0.1em;">TOKABE</div>
                  <div style="font-size:0.6rem; color:#c09a6e; letter-spacing:0.2em; text-transform:uppercase; margin-top:2px;">ADVERTISING</div>
                </div>
                <div class="w-1 bg-brown-600 mx-auto" style="height: 40px;"></div>
              </div>
            </div>
          </div>

          <!-- DOOH badge -->
          <div class="absolute -right-6 top-16 py-3 px-5" style="background: linear-gradient(135deg, #d4a017, #b8860b); clip-path: polygon(0 0, calc(100% - 8px) 0, 100% 8px, 100% 100%, 0 100%);">
            <div style="font-family:'DM Sans',sans-serif; font-size:0.65rem; font-weight:700; color:#1a0f06; letter-spacing:0.15em;">DOOH</div>
          </div>

          <!-- Location tag -->
          <div class="absolute -left-6 bottom-20 border border-brown-700 py-2 px-4 flex items-center gap-2" style="background: rgba(46,30,16,0.95);">
            <svg class="w-3 h-3 text-gold-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/></svg>
            <span style="font-size:0.68rem; color:#c09a6e; font-family:'DM Sans',sans-serif;">Medan, Sumatera Utara</span>
          </div>
        </div>

        <!-- Decorative circles -->
        <div class="absolute -top-8 -right-8 w-48 h-48 rounded-full border border-gold-800 opacity-20"></div>
        <div class="absolute -bottom-12 -left-12 w-64 h-64 rounded-full border border-gold-900 opacity-15"></div>
      </div>
    </div>
  </div>

  <!-- Scroll indicator -->
  <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex flex-col items-center gap-2 opacity-50">
    <span style="font-size:0.6rem; letter-spacing:0.2em; text-transform:uppercase; color:#8c6340; font-family:'DM Sans',sans-serif;">Scroll</span>
    <div class="w-px h-12 relative overflow-hidden" style="background: rgba(212,160,23,0.2);">
      <div class="absolute top-0 w-full" style="height:50%; background: #d4a017; animation: slide-line 2s ease-in-out infinite;"></div>
    </div>
  </div>
</section>

<style>
@keyframes slide-line { 0% { transform: translateY(-100%); } 100% { transform: translateY(300%); } }
</style>


<!-- ══════════════════════════════════════════════
     2. PARTNERSHIP / SOCIAL PROOF
══════════════════════════════════════════════ -->
<section class="py-20 border-y border-brown-900 overflow-hidden fade-up">
  <div class="max-w-7xl mx-auto px-6 mb-10">
    <div class="ornament">
      <span style="font-size:0.7rem; letter-spacing:0.25em; text-transform:uppercase; color:#8c6340; font-family:'DM Sans',sans-serif;">Dipercaya oleh</span>
    </div>
  </div>

  <!-- BUMN Row -->
  <div class="mb-4">
    <div style="font-size:0.62rem; letter-spacing:0.2em; text-transform:uppercase; color:#6e4c30; text-align:center; margin-bottom:12px; font-family:'DM Sans',sans-serif;">BUMN Partners</div>
    <div class="slider-wrapper overflow-hidden">
      <div class="slider-track-left">
        <!-- Row 1 repeated twice for seamless loop -->
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">PT</span>&nbsp;Pertamina</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">PT</span>&nbsp;PLN (Persero)</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">BNI</span>&nbsp;46</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">BRI</span>&nbsp;Group</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">PT</span>&nbsp;Telkom Indonesia</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">PT</span>&nbsp;Pos Indonesia</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">PT</span>&nbsp;Pegadaian</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">Bank</span>&nbsp;Mandiri</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">PT</span>&nbsp;Pertamina</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">PT</span>&nbsp;PLN (Persero)</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">BNI</span>&nbsp;46</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">BRI</span>&nbsp;Group</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">PT</span>&nbsp;Telkom Indonesia</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">PT</span>&nbsp;Pos Indonesia</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">PT</span>&nbsp;Pegadaian</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">Bank</span>&nbsp;Mandiri</div>
      </div>
    </div>
  </div>

  <!-- Government Row -->
  <div>
    <div style="font-size:0.62rem; letter-spacing:0.2em; text-transform:uppercase; color:#6e4c30; text-align:center; margin-bottom:12px; font-family:'DM Sans',sans-serif;">Instansi Pemerintahan</div>
    <div class="slider-wrapper overflow-hidden">
      <div class="slider-track-right">
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">Pemprov</span>&nbsp;Sumatra Utara</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">Pemkot</span>&nbsp;Medan</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">Kab.</span>&nbsp;Deli Serdang</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">Kab.</span>&nbsp;Simalungun</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">Pemkot</span>&nbsp;Pematangsiantar</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">Kab.</span>&nbsp;Karo</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">Pemkot</span>&nbsp;Binjai</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">DPRD</span>&nbsp;Sumut</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">Pemprov</span>&nbsp;Sumatra Utara</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">Pemkot</span>&nbsp;Medan</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">Kab.</span>&nbsp;Deli Serdang</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">Kab.</span>&nbsp;Simalungun</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">Pemkot</span>&nbsp;Pematangsiantar</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">Kab.</span>&nbsp;Karo</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">Pemkot</span>&nbsp;Binjai</div>
        <div class="logo-pill"><span style="font-weight:700; color:#d4a017;">DPRD</span>&nbsp;Sumut</div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     3. SERVICES OVERVIEW
══════════════════════════════════════════════ -->
<section id="layanan" class="py-28 max-w-7xl mx-auto px-6 fade-up">
  <div class="mb-16">
    <div style="font-size:0.7rem; letter-spacing:0.3em; text-transform:uppercase; color:#d4a017; font-family:'DM Sans',sans-serif; margin-bottom:12px;">Apa yang Kami Lakukan</div>
    <h2 style="font-family:'Playfair Display',serif; font-size:clamp(2rem,3.5vw,3rem); font-weight:900; color:#f2ebe2; line-height:1.1; max-width: 520px;">Layanan Kami, <em class="italic" style="color:#c09a6e;">Dampaknya Nyata</em></h2>
    <p class="text-brown-400 mt-4 max-w-xl leading-relaxed text-sm">Dari layar digital raksasa hingga momen live yang tak terlupakan, TOKABE menyediakan solusi kreatif 360° untuk pertumbuhan brand Anda.</p>
  </div>

  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5">

    <!-- DOOH -->
    <div class="service-card">
      <div class="service-icon">
        <svg class="w-6 h-6 text-gold-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
      </div>
      <div style="font-size:0.62rem; letter-spacing:0.18em; text-transform:uppercase; color:#d4a017; font-family:'DM Sans',sans-serif; margin-bottom:8px;">Periklanan Digital</div>
      <h3 style="font-family:'Playfair Display',serif; font-size:1.4rem; font-weight:700; color:#f2ebe2; margin-bottom:12px;">DOOH</h3>
      <p class="text-brown-400 text-sm leading-relaxed mb-6">Digital Out-of-Home — Billboard LED, videotron, dan layar digital interaktif di titik-titik lalu lintas tertinggi Sumatera Utara.</p>
      <a href="#peta" class="flex items-center gap-2 text-xs font-medium tracking-widest text-gold-500 uppercase hover:gap-4 transition-all">
        Lihat Titik Lokasi
        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
      </a>
    </div>

    <!-- OOH -->
    <div class="service-card">
      <div class="service-icon">
        <svg class="w-6 h-6 text-gold-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/></svg>
      </div>
      <div style="font-size:0.62rem; letter-spacing:0.18em; text-transform:uppercase; color:#d4a017; font-family:'DM Sans',sans-serif; margin-bottom:8px;">Periklanan Konvensional</div>
      <h3 style="font-family:'Playfair Display',serif; font-size:1.4rem; font-weight:700; color:#f2ebe2; margin-bottom:12px;">OOH</h3>
      <p class="text-brown-400 text-sm leading-relaxed mb-6">Out-of-Home klasik — Billboard cetak, baliho, spanduk, dan media luar ruang konvensional yang terbukti efektif menjangkau massa.</p>
      <a href="#peta" class="flex items-center gap-2 text-xs font-medium tracking-widest text-gold-500 uppercase hover:gap-4 transition-all">
        Lihat Titik Lokasi
        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
      </a>
    </div>

    <!-- Event Organizer -->
    <div class="service-card">
      <div class="service-icon">
        <svg class="w-6 h-6 text-gold-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
      </div>
      <div style="font-size:0.62rem; letter-spacing:0.18em; text-transform:uppercase; color:#d4a017; font-family:'DM Sans',sans-serif; margin-bottom:8px;">Event & Eksperiensi</div>
      <h3 style="font-family:'Playfair Display',serif; font-size:1.4rem; font-weight:700; color:#f2ebe2; margin-bottom:12px;">Event Organizer</h3>
      <p class="text-brown-400 text-sm leading-relaxed mb-6">Dari pameran corporate, peluncuran produk, konser, hingga festival budaya — kami wujudkan setiap momen menjadi pengalaman tak terlupakan.</p>
      <a href="#portofolio" class="flex items-center gap-2 text-xs font-medium tracking-widest text-gold-500 uppercase hover:gap-4 transition-all">
        Lihat Karya Kami
        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
      </a>
    </div>

    <!-- Videografi & Fotografi -->
    <div class="service-card">
      <div class="service-icon">
        <svg class="w-6 h-6 text-gold-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10l4.553-2.069A1 1 0 0121 8.82v6.36a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/></svg>
      </div>
      <div style="font-size:0.62rem; letter-spacing:0.18em; text-transform:uppercase; color:#d4a017; font-family:'DM Sans',sans-serif; margin-bottom:8px;">Produksi Visual</div>
      <h3 style="font-family:'Playfair Display',serif; font-size:1.4rem; font-weight:700; color:#f2ebe2; margin-bottom:12px;">Video & Foto</h3>
      <p class="text-brown-400 text-sm leading-relaxed mb-6">Konten visual sinematik — dari TVC, corporate video, dokumenter, foto produk, hingga aerial drone photography yang memukau.</p>
      <a href="#portofolio" class="flex items-center gap-2 text-xs font-medium tracking-widest text-gold-500 uppercase hover:gap-4 transition-all">
        Lihat Karya Kami
        <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
      </a>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     4. INTERACTIVE MAP SECTION
══════════════════════════════════════════════ -->
<section id="peta" class="py-28 border-t border-brown-900 fade-up" style="background: linear-gradient(180deg, #1a0f06 0%, #2e1e10 50%, #1a0f06 100%);">
  <div class="max-w-7xl mx-auto px-6">

    <!-- Header -->
    <div class="text-center mb-16">
      <div style="font-size:0.7rem; letter-spacing:0.3em; text-transform:uppercase; color:#d4a017; font-family:'DM Sans',sans-serif; margin-bottom:12px;">Jangkauan Wilayah</div>
      <h2 style="font-family:'Playfair Display',serif; font-size:clamp(1.8rem,3vw,2.8rem); font-weight:900; color:#f2ebe2; line-height:1.1;">
        Peta Lokasi Iklan<br>
        <em class="italic" style="color:#c09a6e;">Sumatera Utara</em>
      </h2>
      <p class="text-brown-400 mt-4 text-sm max-w-lg mx-auto">Klik pada wilayah di peta untuk melihat ketersediaan titik iklan DOOH dan OOH kami.</p>
    </div>

    <div class="grid lg:grid-cols-2 gap-8 items-start">

      <!-- Left: Map -->
      <div class="relative" id="map-container">
        <div id="map-tooltip" class="absolute" style="top:0;left:0;"></div>
        <svg id="sumut-map" viewBox="0 0 600 700" class="w-full" style="max-height:600px;">
          <!-- Sumatra Utara region SVG - simplified kabupaten/kota outlines -->
          <!-- Kabupaten Nias -->
          <g class="map-region" data-region="Kepulauan Nias" onclick="selectRegion('Kepulauan Nias')" onmouseenter="showTooltip(event,'Kepulauan Nias')" onmouseleave="hideTooltip()">
            <path d="M40 120 L80 100 L90 130 L70 155 L40 145 Z" fill="#3d2510" stroke="#d4a017" stroke-width="1.2" opacity="0.8"/>
            <path d="M55 155 L85 150 L80 175 L55 170 Z" fill="#3d2510" stroke="#d4a017" stroke-width="1.2" opacity="0.8"/>
            <text x="60" y="135" text-anchor="middle" fill="#a0896e" font-size="7" font-family="DM Sans" opacity="0.8">Nias</text>
          </g>

          <!-- Kabupaten Nias Utara -->
          <g class="map-region" data-region="Nias Utara" onclick="selectRegion('Nias Utara')" onmouseenter="showTooltip(event,'Nias Utara')" onmouseleave="hideTooltip()">
            <path d="M40 120 L80 100 L75 80 L45 90 L38 110 Z" fill="#3d2510" stroke="#d4a017" stroke-width="1.2" opacity="0.8"/>
            <text x="58" y="102" text-anchor="middle" fill="#a0896e" font-size="6.5" font-family="DM Sans" opacity="0.8">Nias Utara</text>
          </g>

          <!-- Kabupaten Tapanuli Utara -->
          <g class="map-region" data-region="Tapanuli Utara" onclick="selectRegion('Tapanuli Utara')" onmouseenter="showTooltip(event,'Tapanuli Utara')" onmouseleave="hideTooltip()">
            <path d="M310 280 L370 265 L385 305 L375 340 L320 335 L300 310 Z" fill="#3d2510" stroke="#d4a017" stroke-width="1.2" opacity="0.8"/>
            <text x="342" y="308" text-anchor="middle" fill="#a0896e" font-size="7" font-family="DM Sans" opacity="0.8">Taput</text>
          </g>

          <!-- Kabupaten Tapanuli Tengah -->
          <g class="map-region" data-region="Tapanuli Tengah" onclick="selectRegion('Tapanuli Tengah')" onmouseenter="showTooltip(event,'Tapanuli Tengah')" onmouseleave="hideTooltip()">
            <path d="M190 290 L250 275 L265 315 L250 350 L195 345 L180 320 Z" fill="#3d2510" stroke="#d4a017" stroke-width="1.2" opacity="0.8"/>
            <text x="222" y="318" text-anchor="middle" fill="#a0896e" font-size="7" font-family="DM Sans" opacity="0.8">Tapteng</text>
          </g>

          <!-- Kota Sibolga -->
          <g class="map-region" data-region="Sibolga" onclick="selectRegion('Sibolga')" onmouseenter="showTooltip(event,'Kota Sibolga')" onmouseleave="hideTooltip()">
            <path d="M175 330 L195 325 L200 345 L180 350 Z" fill="#5c3820" stroke="#d4a017" stroke-width="1.5" opacity="0.9"/>
            <text x="187" y="342" text-anchor="middle" fill="#d4a017" font-size="6" font-family="DM Sans" font-weight="600" opacity="0.9">Sibolga</text>
          </g>

          <!-- Kab Tapanuli Selatan -->
          <g class="map-region" data-region="Tapanuli Selatan" onclick="selectRegion('Tapanuli Selatan')" onmouseenter="showTooltip(event,'Tapanuli Selatan')" onmouseleave="hideTooltip()">
            <path d="M230 395 L310 385 L330 430 L310 460 L240 455 L215 430 Z" fill="#3d2510" stroke="#d4a017" stroke-width="1.2" opacity="0.8"/>
            <text x="270" y="428" text-anchor="middle" fill="#a0896e" font-size="7" font-family="DM Sans" opacity="0.8">Tapsel</text>
          </g>

          <!-- Kab Mandailing Natal -->
          <g class="map-region" data-region="Mandailing Natal" onclick="selectRegion('Mandailing Natal')" onmouseenter="showTooltip(event,'Mandailing Natal')" onmouseleave="hideTooltip()">
            <path d="M225 460 L305 455 L325 510 L300 555 L240 550 L210 510 Z" fill="#3d2510" stroke="#d4a017" stroke-width="1.2" opacity="0.8"/>
            <text x="265" y="510" text-anchor="middle" fill="#a0896e" font-size="7" font-family="DM Sans" opacity="0.8">Madina</text>
          </g>

          <!-- Kab Labuhanbatu -->
          <g class="map-region" data-region="Labuhanbatu" onclick="selectRegion('Labuhanbatu')" onmouseenter="showTooltip(event,'Labuhanbatu')" onmouseleave="hideTooltip()">
            <path d="M400 360 L460 350 L475 395 L455 425 L400 420 L380 390 Z" fill="#3d2510" stroke="#d4a017" stroke-width="1.2" opacity="0.8"/>
            <text x="427" y="392" text-anchor="middle" fill="#a0896e" font-size="7" font-family="DM Sans" opacity="0.8">Labuhanbatu</text>
          </g>

          <!-- Kab Asahan -->
          <g class="map-region" data-region="Asahan" onclick="selectRegion('Asahan')" onmouseenter="showTooltip(event,'Asahan')" onmouseleave="hideTooltip()">
            <path d="M375 295 L435 285 L460 325 L450 360 L380 365 Z" fill="#3d2510" stroke="#d4a017" stroke-width="1.2" opacity="0.8"/>
            <text x="413" y="330" text-anchor="middle" fill="#a0896e" font-size="7" font-family="DM Sans" opacity="0.8">Asahan</text>
          </g>

          <!-- Kab Simalungun -->
          <g class="map-region" data-region="Simalungun" onclick="selectRegion('Simalungun')" onmouseenter="showTooltip(event,'Simalungun')" onmouseleave="hideTooltip()">
            <path d="M340 235 L415 222 L440 270 L430 300 L370 310 L340 280 Z" fill="#3d2510" stroke="#d4a017" stroke-width="1.2" opacity="0.8"/>
            <text x="385" y="268" text-anchor="middle" fill="#a0896e" font-size="7" font-family="DM Sans" opacity="0.8">Simalungun</text>
          </g>

          <!-- Kota Pematangsiantar -->
          <g class="map-region" data-region="Pematangsiantar" onclick="selectRegion('Pematangsiantar')" onmouseenter="showTooltip(event,'Kota P. Siantar')" onmouseleave="hideTooltip()">
            <path d="M375 258 L395 252 L400 270 L380 275 Z" fill="#5c3820" stroke="#d4a017" stroke-width="1.8" opacity="0.95"/>
            <text x="387" y="266" text-anchor="middle" fill="#d4a017" font-size="5.5" font-family="DM Sans" font-weight="700">Siantar</text>
          </g>

          <!-- Kab Karo -->
          <g class="map-region" data-region="Karo" onclick="selectRegion('Karo')" onmouseenter="showTooltip(event,'Kabupaten Karo')" onmouseleave="hideTooltip()">
            <path d="M295 190 L355 178 L375 220 L360 250 L305 255 L285 220 Z" fill="#3d2510" stroke="#d4a017" stroke-width="1.2" opacity="0.8"/>
            <text x="330" y="220" text-anchor="middle" fill="#a0896e" font-size="7" font-family="DM Sans" opacity="0.8">Karo</text>
          </g>

          <!-- Kab Deli Serdang (large area) -->
          <g class="map-region" data-region="Deli Serdang" onclick="selectRegion('Deli Serdang')" onmouseenter="showTooltip(event,'Deli Serdang')" onmouseleave="hideTooltip()">
            <path d="M290 135 L360 120 L395 165 L375 195 L340 200 L295 195 L270 165 Z" fill="#4a2c14" stroke="#d4a017" stroke-width="1.3" opacity="0.85"/>
            <text x="325" y="165" text-anchor="middle" fill="#c09a6e" font-size="7.5" font-family="DM Sans" font-weight="500" opacity="0.9">Deli Serdang</text>
          </g>

          <!-- Kota Medan (highlight) -->
          <g class="map-region" data-region="Medan" onclick="selectRegion('Medan')" onmouseenter="showTooltip(event,'Kota Medan')" onmouseleave="hideTooltip()">
            <path d="M295 130 L325 115 L345 130 L340 155 L310 158 L290 145 Z" fill="#6e4c30" stroke="#d4a017" stroke-width="2.2" opacity="1"/>
            <text x="315" y="140" text-anchor="middle" fill="#fbbf24" font-size="8.5" font-family="DM Sans" font-weight="700">MEDAN</text>
            <!-- Pulse dot -->
            <circle cx="315" cy="138" r="4" fill="#d4a017" opacity="0.3">
              <animate attributeName="r" from="4" to="10" dur="2s" repeatCount="indefinite" />
              <animate attributeName="opacity" from="0.3" to="0" dur="2s" repeatCount="indefinite" />
            </circle>
            <circle cx="315" cy="138" r="3" fill="#d4a017"/>
          </g>

          <!-- Kota Binjai -->
          <g class="map-region" data-region="Binjai" onclick="selectRegion('Binjai')" onmouseenter="showTooltip(event,'Kota Binjai')" onmouseleave="hideTooltip()">
            <path d="M270 128 L293 122 L295 140 L272 145 Z" fill="#5c3820" stroke="#d4a017" stroke-width="1.5" opacity="0.9"/>
            <text x="282" y="137" text-anchor="middle" fill="#d4a017" font-size="5.5" font-family="DM Sans" font-weight="600">Binjai</text>
          </g>

          <!-- Kab Langkat -->
          <g class="map-region" data-region="Langkat" onclick="selectRegion('Langkat')" onmouseenter="showTooltip(event,'Langkat')" onmouseleave="hideTooltip()">
            <path d="M180 80 L275 68 L292 120 L260 135 L220 130 L175 105 Z" fill="#3d2510" stroke="#d4a017" stroke-width="1.2" opacity="0.8"/>
            <text x="232" y="105" text-anchor="middle" fill="#a0896e" font-size="7.5" font-family="DM Sans" opacity="0.8">Langkat</text>
          </g>

          <!-- Kab Humbang Hasundutan -->
          <g class="map-region" data-region="Humbang Hasundutan" onclick="selectRegion('Humbang Hasundutan')" onmouseenter="showTooltip(event,'Humbang Hasundutan')" onmouseleave="hideTooltip()">
            <path d="M248 270 L305 260 L308 300 L295 330 L250 330 L230 310 Z" fill="#3d2510" stroke="#d4a017" stroke-width="1.2" opacity="0.8"/>
            <text x="270" y="300" text-anchor="middle" fill="#a0896e" font-size="6.5" font-family="DM Sans" opacity="0.8">Humbahas</text>
          </g>

          <!-- Kab Pakpak Bharat -->
          <g class="map-region" data-region="Pakpak Bharat" onclick="selectRegion('Pakpak Bharat')" onmouseenter="showTooltip(event,'Pakpak Bharat')" onmouseleave="hideTooltip()">
            <path d="M218 235 L265 225 L275 265 L248 275 L215 268 Z" fill="#3d2510" stroke="#d4a017" stroke-width="1.2" opacity="0.8"/>
            <text x="245" y="256" text-anchor="middle" fill="#a0896e" font-size="6.5" font-family="DM Sans" opacity="0.8">Pakpak Bharat</text>
          </g>

          <!-- Kab Samosir -->
          <g class="map-region" data-region="Samosir" onclick="selectRegion('Samosir')" onmouseenter="showTooltip(event,'Samosir – Danau Toba')" onmouseleave="hideTooltip()">
            <path d="M295 255 L345 242 L355 278 L338 308 L298 312 Z" fill="#2e4a5e" stroke="#d4a017" stroke-width="1.2" opacity="0.8"/>
            <text x="320" y="282" text-anchor="middle" fill="#a0d4e8" font-size="6.5" font-family="DM Sans" opacity="0.9">Samosir</text>
          </g>

          <!-- Kab Toba -->
          <g class="map-region" data-region="Toba" onclick="selectRegion('Toba')" onmouseenter="showTooltip(event,'Kabupaten Toba')" onmouseleave="hideTooltip()">
            <path d="M350 265 L390 255 L400 298 L380 325 L350 320 L335 295 Z" fill="#3d2510" stroke="#d4a017" stroke-width="1.2" opacity="0.8"/>
            <text x="367" y="295" text-anchor="middle" fill="#a0896e" font-size="7" font-family="DM Sans" opacity="0.8">Toba</text>
          </g>

          <!-- Kab Padang Lawas -->
          <g class="map-region" data-region="Padang Lawas" onclick="selectRegion('Padang Lawas')" onmouseenter="showTooltip(event,'Padang Lawas')" onmouseleave="hideTooltip()">
            <path d="M320 430 L380 422 L400 468 L380 495 L325 490 L305 460 Z" fill="#3d2510" stroke="#d4a017" stroke-width="1.2" opacity="0.8"/>
            <text x="352" y="462" text-anchor="middle" fill="#a0896e" font-size="6.5" font-family="DM Sans" opacity="0.8">Padang Lawas</text>
          </g>

          <!-- Kota Tanjungbalai -->
          <g class="map-region" data-region="Tanjungbalai" onclick="selectRegion('Tanjungbalai')" onmouseenter="showTooltip(event,'Kota Tanjungbalai')" onmouseleave="hideTooltip()">
            <path d="M450 365 L470 360 L475 380 L455 385 Z" fill="#5c3820" stroke="#d4a017" stroke-width="1.5" opacity="0.9"/>
            <text x="462" y="376" text-anchor="middle" fill="#d4a017" font-size="5" font-family="DM Sans" font-weight="600">T.Balai</text>
          </g>

          <!-- Compass indicator -->
          <g transform="translate(530, 60)">
            <circle cx="0" cy="0" r="22" fill="rgba(26,15,6,0.85)" stroke="#d4a017" stroke-width="1"/>
            <polygon points="0,-16 4,4 0,0 -4,4" fill="#d4a017"/>
            <polygon points="0,16 4,-4 0,0 -4,-4" fill="#6e4c30"/>
            <text x="0" y="-22" text-anchor="middle" fill="#d4a017" font-size="9" font-family="DM Sans" font-weight="700">U</text>
          </g>

          <!-- Legend -->
          <g transform="translate(20, 580)">
            <rect x="0" y="0" width="140" height="70" fill="rgba(26,15,6,0.85)" stroke="#4a2c14" stroke-width="0.5" rx="2"/>
            <text x="70" y="16" text-anchor="middle" fill="#d4a017" font-size="7" font-family="DM Sans" letter-spacing="0.1em">PETA SUMATERA UTARA</text>
            <rect x="12" y="24" width="10" height="8" fill="#6e4c30" stroke="#d4a017" stroke-width="1"/>
            <text x="28" y="31" fill="#c09a6e" font-size="7" font-family="DM Sans">Kota Metropolitan</text>
            <rect x="12" y="38" width="10" height="8" fill="#3d2510" stroke="#d4a017" stroke-width="1"/>
            <text x="28" y="45" fill="#c09a6e" font-size="7" font-family="DM Sans">Kabupaten/Kota</text>
            <rect x="12" y="52" width="10" height="8" fill="#2e4a5e" stroke="#d4a017" stroke-width="1"/>
            <text x="28" y="59" fill="#c09a6e" font-size="7" font-family="DM Sans">Danau Toba / Kepulauan</text>
          </g>
        </svg>
      </div>

      <!-- Right: Info Panel -->
      <div class="lg:sticky lg:top-32">
        <div id="region-default" class="text-center py-12">
          <div class="w-16 h-16 border border-gold-800 mx-auto flex items-center justify-content-center mb-5" style="clip-path: polygon(0 0,calc(100% - 10px) 0,100% 10px,100% 100%,10px 100%,0 calc(100% - 10px)); display:flex; align-items:center; justify-content:center;">
            <svg class="w-7 h-7 text-gold-600" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
          </div>
          <p class="text-brown-500 text-sm" style="font-family:'DM Sans',sans-serif;">Klik salah satu wilayah di peta untuk melihat ketersediaan lokasi iklan</p>
        </div>

        <div id="region-panel" class="hidden">
          <!-- Header -->
          <div class="mb-6 pb-5 border-b border-brown-800">
            <div style="font-size:0.65rem; letter-spacing:0.2em; text-transform:uppercase; color:#d4a017; font-family:'DM Sans',sans-serif; margin-bottom:6px;">Wilayah Terpilih</div>
            <h3 id="region-name" style="font-family:'Playfair Display',serif; font-size:1.8rem; font-weight:700; color:#f2ebe2;"></h3>
            <div id="region-stats" class="flex gap-5 mt-3"></div>
          </div>

          <!-- Filter tabs -->
          <div class="flex gap-2 mb-5">
            <button class="filter-tab active px-4 py-1.5 border text-xs font-medium tracking-widest uppercase border-gold-700 text-brown-300 font-sans2" onclick="filterLocations('all', this)" style="font-family:'DM Sans',sans-serif;">Semua</button>
            <button class="filter-tab px-4 py-1.5 border text-xs font-medium tracking-widest uppercase border-brown-700 text-brown-400 font-sans2" onclick="filterLocations('DOOH', this)" style="font-family:'DM Sans',sans-serif;">DOOH</button>
            <button class="filter-tab px-4 py-1.5 border text-xs font-medium tracking-widest uppercase border-brown-700 text-brown-400 font-sans2" onclick="filterLocations('OOH', this)" style="font-family:'DM Sans',sans-serif;">OOH</button>
          </div>

          <!-- Location list -->
          <div id="location-list" class="space-y-3 max-h-72 overflow-y-auto pr-1" style="scrollbar-width:thin; scrollbar-color: #d4a017 #2e1e10;"></div>

          <div class="mt-6">
            <a href="#kontak" class="btn-gold w-full text-center block">Tanyakan Ketersediaan →</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     5. STRATEGIC LOCATIONS CAROUSEL
══════════════════════════════════════════════ -->
<section id="portofolio-lokasi" class="py-28 border-t border-brown-900 overflow-hidden fade-up">
  <div class="max-w-7xl mx-auto px-6 mb-12">
    <div class="flex items-end justify-between">
      <div>
        <div style="font-size:0.7rem; letter-spacing:0.3em; text-transform:uppercase; color:#d4a017; font-family:'DM Sans',sans-serif; margin-bottom:12px;">Titik Strategis</div>
        <h2 style="font-family:'Playfair Display',serif; font-size:clamp(1.8rem,3vw,2.8rem); font-weight:900; color:#f2ebe2; line-height:1.1;">Lokasi Terbaik <em class="italic" style="color:#c09a6e;">Kami</em></h2>
      </div>
      <div class="flex gap-2">
        <button id="prev-btn" class="w-11 h-11 border border-brown-700 flex items-center justify-center text-brown-400 hover:border-gold-600 hover:text-gold-500 transition-all" aria-label="Previous">
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
        </button>
        <button id="next-btn" class="w-11 h-11 border border-brown-700 flex items-center justify-center text-brown-400 hover:border-gold-600 hover:text-gold-500 transition-all" aria-label="Next">
          <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
        </button>
      </div>
    </div>
  </div>

  <div id="carousel-viewport" class="overflow-hidden px-6" style="max-width: 100vw;">
    <div id="carousel-track" class="carousel-track gap-5" style="display:flex;">

      <!-- Card 1 -->
      <div class="portfolio-card flex-shrink-0 relative" style="width: clamp(260px,30vw,340px); aspect-ratio: 3/4;">
        <div class="absolute inset-0" style="background: linear-gradient(180deg, #1a2a3a 0%, #2e1e10 100%);">
          <svg class="w-full h-full opacity-30" viewBox="0 0 340 450">
            <rect width="340" height="450" fill="#1a2a3a"/>
            <rect x="40" y="60" width="260" height="150" fill="#0d1a24" stroke="#d4a017" stroke-width="2"/>
            <text x="170" y="145" text-anchor="middle" fill="#d4a017" font-size="28" font-family="Playfair Display" font-weight="900">TOKABE</text>
            <text x="170" y="170" text-anchor="middle" fill="#8c6340" font-size="11" font-family="DM Sans" letter-spacing="3">LED BILLBOARD</text>
            <rect x="155" y="210" width="30" height="200" fill="#3d2510"/>
            <rect x="100" y="280" width="140" height="15" fill="#2e1e10"/>
          </svg>
        </div>
        <div class="portfolio-overlay absolute inset-0" style="background: rgba(26,15,6,0.7);"></div>
        <div class="absolute top-4 left-4 flex gap-2">
          <span class="px-3 py-1 text-xs font-bold tracking-widest uppercase" style="background: #d4a017; color: #1a0f06; font-family:'DM Sans',sans-serif;">DOOH</span>
        </div>
        <div class="absolute bottom-0 left-0 right-0 p-5">
          <div class="text-xs text-gold-500 mb-1 tracking-widest uppercase" style="font-family:'DM Sans',sans-serif;">Jl. Gatot Subroto, Medan</div>
          <h4 style="font-family:'Playfair Display',serif; font-size:1.05rem; font-weight:700; color:#f2ebe2;">Billboard LED 10×5m</h4>
          <div class="flex gap-4 mt-2">
            <div class="text-brown-400 text-xs"><span class="text-gold-400 font-semibold">2.1Jt</span>/hari impresi</div>
            <div class="text-brown-400 text-xs"><span class="text-gold-400 font-semibold">24 Jam</span> Operasional</div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="portfolio-card flex-shrink-0 relative" style="width: clamp(260px,30vw,340px); aspect-ratio: 3/4;">
        <div class="absolute inset-0" style="background: linear-gradient(180deg, #2a1e0a 0%, #3d2510 100%);">
          <svg class="w-full h-full opacity-25" viewBox="0 0 340 450">
            <rect width="340" height="450" fill="#2a1e0a"/>
            <ellipse cx="170" cy="100" rx="130" ry="80" fill="#1a1206" stroke="#d4a017" stroke-width="1.5"/>
            <text x="170" y="90" text-anchor="middle" fill="#d4a017" font-size="20" font-family="Playfair Display" font-weight="700">GRAND</text>
            <text x="170" y="112" text-anchor="middle" fill="#fbbf24" font-size="24" font-family="Playfair Display" font-weight="900">LAUNCHING</text>
            <circle cx="60" cy="300" r="30" fill="#2a1e0a" stroke="#d4a017" stroke-width="1"/>
            <circle cx="170" cy="320" r="40" fill="#2a1e0a" stroke="#d4a017" stroke-width="1"/>
            <circle cx="280" cy="300" r="30" fill="#2a1e0a" stroke="#d4a017" stroke-width="1"/>
          </svg>
        </div>
        <div class="portfolio-overlay absolute inset-0" style="background: rgba(26,15,6,0.7);"></div>
        <div class="absolute top-4 left-4">
          <span class="px-3 py-1 text-xs font-bold tracking-widest uppercase border border-gold-600 text-gold-500" style="font-family:'DM Sans',sans-serif;">EVENT</span>
        </div>
        <div class="absolute bottom-0 left-0 right-0 p-5">
          <div class="text-xs text-gold-500 mb-1 tracking-widest uppercase" style="font-family:'DM Sans',sans-serif;">Hermes Palace, Medan</div>
          <h4 style="font-family:'Playfair Display',serif; font-size:1.05rem; font-weight:700; color:#f2ebe2;">Product Launch — BUMN 2024</h4>
          <div class="flex gap-4 mt-2">
            <div class="text-brown-400 text-xs"><span class="text-gold-400 font-semibold">5.000+</span> Pengunjung</div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="portfolio-card flex-shrink-0 relative" style="width: clamp(260px,30vw,340px); aspect-ratio: 3/4;">
        <div class="absolute inset-0" style="background: linear-gradient(180deg, #0f1a1f 0%, #1e2e30 100%);">
          <svg class="w-full h-full opacity-30" viewBox="0 0 340 450">
            <rect width="340" height="450" fill="#0f1a1f"/>
            <rect x="20" y="200" width="300" height="220" fill="#0a1215"/>
            <rect x="60" y="20" width="220" height="180" fill="#0a1215" stroke="#5b9eae" stroke-width="1"/>
            <circle cx="170" cy="110" r="60" fill="#0f1a1f" stroke="#5b9eae" stroke-width="0.5" stroke-dasharray="4,4"/>
            <circle cx="170" cy="110" r="20" fill="#5b9eae" opacity="0.3"/>
            <line x1="170" y1="50" x2="170" y2="170" stroke="#5b9eae" stroke-width="0.5" opacity="0.5"/>
            <line x1="110" y1="110" x2="230" y2="110" stroke="#5b9eae" stroke-width="0.5" opacity="0.5"/>
          </svg>
        </div>
        <div class="portfolio-overlay absolute inset-0" style="background: rgba(26,15,6,0.7);"></div>
        <div class="absolute top-4 left-4">
          <span class="px-3 py-1 text-xs font-bold tracking-widest uppercase border border-gold-600 text-gold-500" style="font-family:'DM Sans',sans-serif;">FOTO</span>
        </div>
        <div class="absolute bottom-0 left-0 right-0 p-5">
          <div class="text-xs text-gold-500 mb-1 tracking-widest uppercase" style="font-family:'DM Sans',sans-serif;">Danau Toba, Samosir</div>
          <h4 style="font-family:'Playfair Display',serif; font-size:1.05rem; font-weight:700; color:#f2ebe2;">Drone Aerial — Pariwisata Sumut</h4>
          <div class="flex gap-4 mt-2">
            <div class="text-brown-400 text-xs"><span class="text-gold-400 font-semibold">4K</span> Ultra HD</div>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="portfolio-card flex-shrink-0 relative" style="width: clamp(260px,30vw,340px); aspect-ratio: 3/4;">
        <div class="absolute inset-0" style="background: linear-gradient(180deg, #1a0a12 0%, #2e1020 100%);">
          <svg class="w-full h-full opacity-25" viewBox="0 0 340 450">
            <rect width="340" height="450" fill="#1a0a12"/>
            <rect x="0" y="380" width="340" height="70" fill="#250f1a"/>
            <rect x="0" y="340" width="340" height="42" fill="#1e0c14"/>
            <polygon points="170,50 340,380 0,380" fill="#1a0a12" stroke="#c0306e" stroke-width="1.5"/>
            <circle cx="170" cy="220" r="50" fill="#250f1a" stroke="#d4a017" stroke-width="1"/>
            <polygon points="160,210 185,222 160,234" fill="#d4a017"/>
            <text x="170" y="420" text-anchor="middle" fill="#d4a017" font-size="14" font-family="Playfair Display" font-weight="700">SINEMATIK</text>
          </svg>
        </div>
        <div class="portfolio-overlay absolute inset-0" style="background: rgba(26,15,6,0.7);"></div>
        <div class="absolute top-4 left-4">
          <span class="px-3 py-1 text-xs font-bold tracking-widest uppercase border border-gold-600 text-gold-500" style="font-family:'DM Sans',sans-serif;">VIDEO</span>
        </div>
        <div class="absolute bottom-0 left-0 right-0 p-5">
          <div class="text-xs text-gold-500 mb-1 tracking-widest uppercase" style="font-family:'DM Sans',sans-serif;">Studio TOKABE, Medan</div>
          <h4 style="font-family:'Playfair Display',serif; font-size:1.05rem; font-weight:700; color:#f2ebe2;">TVC Ramadan — Bank Sumut 2024</h4>
          <div class="flex gap-4 mt-2">
            <div class="text-brown-400 text-xs"><span class="text-gold-400 font-semibold">5M+</span> Total Tayangan</div>
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="portfolio-card flex-shrink-0 relative" style="width: clamp(260px,30vw,340px); aspect-ratio: 3/4;">
        <div class="absolute inset-0" style="background: linear-gradient(180deg, #1a2a10 0%, #2a3e10 100%);">
          <svg class="w-full h-full opacity-25" viewBox="0 0 340 450">
            <rect width="340" height="450" fill="#1a2a10"/>
            <rect x="30" y="180" width="280" height="240" fill="#131e0c" stroke="#7ab650" stroke-width="1"/>
            <rect x="80" y="30" width="60" height="160" fill="#131e0c" stroke="#d4a017" stroke-width="1.5"/>
            <rect x="200" y="60" width="60" height="130" fill="#131e0c" stroke="#d4a017" stroke-width="1.5"/>
            <text x="170" y="305" text-anchor="middle" fill="#d4a017" font-size="18" font-family="Playfair Display" font-weight="900">OOH</text>
            <text x="170" y="328" text-anchor="middle" fill="#8c6340" font-size="9" font-family="DM Sans" letter-spacing="2">BALIHO STRATEGIS</text>
          </svg>
        </div>
        <div class="portfolio-overlay absolute inset-0" style="background: rgba(26,15,6,0.7);"></div>
        <div class="absolute top-4 left-4">
          <span class="px-3 py-1 text-xs font-bold tracking-widest uppercase" style="background: #6e4c30; color: #fbbf24; font-family:'DM Sans',sans-serif;">OOH</span>
        </div>
        <div class="absolute bottom-0 left-0 right-0 p-5">
          <div class="text-xs text-gold-500 mb-1 tracking-widest uppercase" style="font-family:'DM Sans',sans-serif;">Simpang Pos, Medan</div>
          <h4 style="font-family:'Playfair Display',serif; font-size:1.05rem; font-weight:700; color:#f2ebe2;">Baliho Ukuran 8×12m</h4>
          <div class="flex gap-4 mt-2">
            <div class="text-brown-400 text-xs"><span class="text-gold-400 font-semibold">1.8Jt</span>/hari impresi</div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Dots -->
  <div class="flex justify-center gap-2 mt-8" id="carousel-dots"></div>
</section>


<!-- ══════════════════════════════════════════════
     6. CTA SECTION
══════════════════════════════════════════════ -->
<section class="py-28 border-t border-brown-900 relative overflow-hidden fade-up" style="background: linear-gradient(135deg, #2e1e10 0%, #4a2c14 50%, #2e1e10 100%);">
  <!-- Grid overlay -->
  <div class="absolute inset-0 opacity-5" style="background-image: linear-gradient(rgba(212,160,23,0.5) 1px, transparent 1px), linear-gradient(90deg, rgba(212,160,23,0.5) 1px, transparent 1px); background-size: 60px 60px;"></div>

  <!-- Diagonal accent -->
  <div class="absolute -right-32 top-0 bottom-0 w-64" style="background: linear-gradient(90deg, transparent, rgba(212,160,23,0.05)); transform: skewX(-15deg);"></div>

  <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
    <div class="inline-flex items-center gap-3 mb-8">
      <div class="w-16 h-px" style="background: linear-gradient(90deg, transparent, #d4a017);"></div>
      <span style="font-size:0.7rem; letter-spacing:0.3em; text-transform:uppercase; color:#d4a017; font-family:'DM Sans',sans-serif;">Portofolio TOKABE</span>
      <div class="w-16 h-px" style="background: linear-gradient(90deg, #d4a017, transparent);"></div>
    </div>

    <h2 style="font-family:'Playfair Display',serif; font-size:clamp(2rem,4.5vw,3.8rem); font-weight:900; color:#f2ebe2; line-height:1.1; letter-spacing:-0.01em;">
      Lihat Bagaimana Brand<br>
      <em class="italic" style="color:#d4a017;">Tumbuh Bersama Kami</em>
    </h2>

    <p class="text-brown-300 mt-6 text-base leading-relaxed max-w-2xl mx-auto" style="font-weight:300;">
      Lebih dari 120 brand telah mempercayakan visibilitas mereka kepada TOKABE — dari startup lokal hingga perusahaan BUMN terkemuka di Sumatera Utara.
    </p>

    <div class="flex flex-wrap justify-center gap-4 mt-10">
      <a href="#" class="btn-gold text-sm">Lihat Semua Portofolio →</a>
      <a href="#kontak" class="btn-outline-gold text-sm">Konsultasi Sekarang</a>
    </div>

    <!-- Trust indicators -->
    <div class="flex flex-wrap justify-center gap-10 mt-14 pt-8 border-t border-brown-800">
      <div class="text-center">
        <div style="font-family:'Playfair Display',serif; font-size:2rem; font-weight:900; color:#d4a017;">8+</div>
        <div style="font-size:0.68rem; letter-spacing:0.12em; text-transform:uppercase; color:#8c6340; font-family:'DM Sans',sans-serif; margin-top:4px;">Tahun Berpengalaman</div>
      </div>
      <div class="border-l border-brown-800 pl-10 text-center">
        <div style="font-family:'Playfair Display',serif; font-size:2rem; font-weight:900; color:#d4a017;">500+</div>
        <div style="font-size:0.68rem; letter-spacing:0.12em; text-transform:uppercase; color:#8c6340; font-family:'DM Sans',sans-serif; margin-top:4px;">Proyek Selesai</div>
      </div>
      <div class="border-l border-brown-800 pl-10 text-center">
        <div style="font-family:'Playfair Display',serif; font-size:2rem; font-weight:900; color:#d4a017;">12</div>
        <div style="font-size:0.68rem; letter-spacing:0.12em; text-transform:uppercase; color:#8c6340; font-family:'DM Sans',sans-serif; margin-top:4px;">Kab/Kota Cakupan</div>
      </div>
      <div class="border-l border-brown-800 pl-10 text-center">
        <div style="font-family:'Playfair Display',serif; font-size:2rem; font-weight:900; color:#d4a017;">98%</div>
        <div style="font-size:0.68rem; letter-spacing:0.12em; text-transform:uppercase; color:#8c6340; font-family:'DM Sans',sans-serif; margin-top:4px;">Klien Puas</div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     LEGALITAS (placeholder section)
══════════════════════════════════════════════ -->
<section id="legalitas" class="py-20 border-t border-brown-900 fade-up">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid md:grid-cols-2 gap-12 items-center">
      <div>
        <div style="font-size:0.7rem; letter-spacing:0.3em; text-transform:uppercase; color:#d4a017; font-family:'DM Sans',sans-serif; margin-bottom:12px;">Legalitas & Kepercayaan</div>
        <h2 style="font-family:'Playfair Display',serif; font-size:clamp(1.6rem,2.8vw,2.4rem); font-weight:900; color:#f2ebe2; line-height:1.1;">Terdaftar Resmi, <em class="italic" style="color:#c09a6e;">Beroperasi Legal</em></h2>
        <p class="text-brown-400 mt-4 text-sm leading-relaxed">TOKABE adalah perusahaan advertising yang terdaftar secara resmi di Indonesia, dengan seluruh perizinan operasional yang lengkap dan transparan.</p>
      </div>
      <div class="grid grid-cols-2 gap-4">
        <div class="service-card text-center py-6">
          <div class="text-gold-500 mb-3">
            <svg class="w-8 h-8 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
          </div>
          <div style="font-family:'DM Sans',sans-serif; font-size:0.72rem; color:#a0896e; letter-spacing:0.08em; text-transform:uppercase;">NIB Terdaftar</div>
          <div class="text-brown-200 text-xs mt-1">Nomor Induk Berusaha</div>
        </div>
        <div class="service-card text-center py-6">
          <div class="text-gold-500 mb-3">
            <svg class="w-8 h-8 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
          </div>
          <div style="font-family:'DM Sans',sans-serif; font-size:0.72rem; color:#a0896e; letter-spacing:0.08em; text-transform:uppercase;">PT Resmi</div>
          <div class="text-brown-200 text-xs mt-1">Perseroan Terbatas</div>
        </div>
        <div class="service-card text-center py-6">
          <div class="text-gold-500 mb-3">
            <svg class="w-8 h-8 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"/></svg>
          </div>
          <div style="font-family:'DM Sans',sans-serif; font-size:0.72rem; color:#a0896e; letter-spacing:0.08em; text-transform:uppercase;">NPWP Aktif</div>
          <div class="text-brown-200 text-xs mt-1">Wajib Pajak Terdaftar</div>
        </div>
        <div class="service-card text-center py-6">
          <div class="text-gold-500 mb-3">
            <svg class="w-8 h-8 mx-auto" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
          </div>
          <div style="font-family:'DM Sans',sans-serif; font-size:0.72rem; color:#a0896e; letter-spacing:0.08em; text-transform:uppercase;">Izin Reklame</div>
          <div class="text-brown-200 text-xs mt-1">Dari Pemda Setempat</div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     KONTAK
══════════════════════════════════════════════ -->
<section id="kontak" class="py-28 border-t border-brown-900 fade-up">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid lg:grid-cols-2 gap-16">
      <div>
        <div style="font-size:0.7rem; letter-spacing:0.3em; text-transform:uppercase; color:#d4a017; font-family:'DM Sans',sans-serif; margin-bottom:12px;">Hubungi Kami</div>
        <h2 style="font-family:'Playfair Display',serif; font-size:clamp(1.8rem,3vw,2.8rem); font-weight:900; color:#f2ebe2; line-height:1.1;">Mulai Kampanye <em class="italic" style="color:#c09a6e;">Anda Hari Ini</em></h2>
        <p class="text-brown-400 mt-4 text-sm leading-relaxed max-w-md">Tim ahli kami siap membantu Anda merancang strategi iklan yang tepat sasaran untuk brand Anda di Sumatera Utara.</p>

        <div class="mt-10 space-y-5">
          <div class="flex items-start gap-4">
            <div class="w-10 h-10 flex-shrink-0 border border-gold-800 flex items-center justify-center" style="clip-path: polygon(0 0,calc(100% - 6px) 0,100% 6px,100% 100%,6px 100%,0 calc(100% - 6px));">
              <svg class="w-4 h-4 text-gold-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
            </div>
            <div>
              <div class="text-gold-500 text-xs tracking-widest uppercase mb-1" style="font-family:'DM Sans',sans-serif;">Alamat</div>
              <div class="text-brown-200 text-sm">Jl. Contoh No. 123, Medan Baru<br>Kota Medan, Sumatera Utara 20154</div>
            </div>
          </div>
          <div class="flex items-start gap-4">
            <div class="w-10 h-10 flex-shrink-0 border border-gold-800 flex items-center justify-center" style="clip-path: polygon(0 0,calc(100% - 6px) 0,100% 6px,100% 100%,6px 100%,0 calc(100% - 6px));">
              <svg class="w-4 h-4 text-gold-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
            </div>
            <div>
              <div class="text-gold-500 text-xs tracking-widest uppercase mb-1" style="font-family:'DM Sans',sans-serif;">WhatsApp / Telepon</div>
              <div class="text-brown-200 text-sm">+62 812-3456-7890</div>
            </div>
          </div>
          <div class="flex items-start gap-4">
            <div class="w-10 h-10 flex-shrink-0 border border-gold-800 flex items-center justify-center" style="clip-path: polygon(0 0,calc(100% - 6px) 0,100% 6px,100% 100%,6px 100%,0 calc(100% - 6px));">
              <svg class="w-4 h-4 text-gold-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
            </div>
            <div>
              <div class="text-gold-500 text-xs tracking-widest uppercase mb-1" style="font-family:'DM Sans',sans-serif;">Email</div>
              <div class="text-brown-200 text-sm">info@tokabe.co.id</div>
            </div>
          </div>
        </div>
      </div>

      <!-- Form -->
      <div class="border border-brown-800 p-8" style="background: rgba(46,30,16,0.4);">
        <h3 style="font-family:'DM Sans',sans-serif; font-size:0.72rem; letter-spacing:0.2em; text-transform:uppercase; color:#d4a017; margin-bottom:20px;">Kirim Pesan</h3>
        <div class="space-y-4">
          <div class="grid grid-cols-2 gap-4">
            <div>
              <label class="block text-brown-400 text-xs mb-2 tracking-wider uppercase" style="font-family:'DM Sans',sans-serif;">Nama</label>
              <input type="text" placeholder="Nama Anda" class="w-full bg-transparent border border-brown-800 text-brown-200 text-sm px-4 py-3 focus:outline-none focus:border-gold-600 transition-colors" placeholder="Nama Anda">
            </div>
            <div>
              <label class="block text-brown-400 text-xs mb-2 tracking-wider uppercase" style="font-family:'DM Sans',sans-serif;">Perusahaan</label>
              <input type="text" class="w-full bg-transparent border border-brown-800 text-brown-200 text-sm px-4 py-3 focus:outline-none focus:border-gold-600 transition-colors" placeholder="PT. Nama Perusahaan">
            </div>
          </div>
          <div>
            <label class="block text-brown-400 text-xs mb-2 tracking-wider uppercase" style="font-family:'DM Sans',sans-serif;">Nomor WhatsApp</label>
            <input type="text" class="w-full bg-transparent border border-brown-800 text-brown-200 text-sm px-4 py-3 focus:outline-none focus:border-gold-600 transition-colors" placeholder="+62 8xx-xxxx-xxxx">
          </div>
          <div>
            <label class="block text-brown-400 text-xs mb-2 tracking-wider uppercase" style="font-family:'DM Sans',sans-serif;">Layanan yang Diminati</label>
            <select class="w-full bg-brown-900 border border-brown-800 text-brown-200 text-sm px-4 py-3 focus:outline-none focus:border-gold-600 transition-colors">
              <option>Digital Billboard (DOOH)</option>
              <option>Baliho / Spanduk (OOH)</option>
              <option>Event Organizer</option>
              <option>Videografi</option>
              <option>Fotografi</option>
              <option>Paket Lengkap</option>
            </select>
          </div>
          <div>
            <label class="block text-brown-400 text-xs mb-2 tracking-wider uppercase" style="font-family:'DM Sans',sans-serif;">Pesan</label>
            <textarea rows="4" class="w-full bg-transparent border border-brown-800 text-brown-200 text-sm px-4 py-3 focus:outline-none focus:border-gold-600 transition-colors resize-none" placeholder="Ceritakan kebutuhan iklan Anda..."></textarea>
          </div>
          <button class="btn-gold w-full" style="text-align:center;">Kirim Pesan via WhatsApp</button>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ══════════════════════════════════════════════
     FOOTER
══════════════════════════════════════════════ -->
<footer class="border-t border-brown-900 pt-16 pb-8" style="background: #1a0f06;">
  <div class="max-w-7xl mx-auto px-6">
    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-10 mb-14">

      <!-- Brand -->
      <div class="lg:col-span-2">
        <div class="flex items-center gap-3 mb-4">
          <div class="w-9 h-9 flex items-center justify-center" style="clip-path: polygon(0 0, calc(100% - 7px) 0, 100% 7px, 100% 100%, 7px 100%, 0 calc(100% - 7px)); background: linear-gradient(135deg, #d4a017, #b8860b);">
            <span style="font-family:'Playfair Display',serif; font-weight:900; color:#1a0f06; font-size:0.9rem;">T</span>
          </div>
          <span style="font-family:'Playfair Display',serif; font-size:1.2rem; font-weight:900; color:#f2ebe2; letter-spacing:0.08em;">TOKABE</span>
        </div>
        <p class="text-brown-500 text-sm leading-relaxed max-w-sm">Ekosistem periklanan terpadu Sumatera Utara — DOOH, OOH, Event Organizer, Videografi, dan Fotografi untuk brand yang ingin hadir bermakna.</p>
        <div class="flex gap-3 mt-6">
          <a href="#" class="w-9 h-9 border border-brown-800 flex items-center justify-center hover:border-gold-600 transition-colors group">
            <svg class="w-4 h-4 text-brown-500 group-hover:text-gold-500 transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.162-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738a.36.36 0 01.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.632-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.623 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001.012.001z"/></svg>
          </a>
          <a href="#" class="w-9 h-9 border border-brown-800 flex items-center justify-center hover:border-gold-600 transition-colors group">
            <svg class="w-4 h-4 text-brown-500 group-hover:text-gold-500 transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/></svg>
          </a>
          <a href="#" class="w-9 h-9 border border-brown-800 flex items-center justify-center hover:border-gold-600 transition-colors group">
            <svg class="w-4 h-4 text-brown-500 group-hover:text-gold-500 transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
          </a>
          <a href="#" class="w-9 h-9 border border-brown-800 flex items-center justify-center hover:border-gold-600 transition-colors group">
            <svg class="w-4 h-4 text-brown-500 group-hover:text-gold-500 transition-colors" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
          </a>
        </div>
      </div>

      <!-- Nav Links -->
      <div>
        <h4 style="font-family:'DM Sans',sans-serif; font-size:0.68rem; letter-spacing:0.2em; text-transform:uppercase; color:#d4a017; margin-bottom:16px;">Navigasi</h4>
        <ul class="space-y-2.5">
          <li><a href="#beranda" class="text-brown-500 hover:text-brown-200 text-sm transition-colors">Beranda</a></li>
          <li><a href="#layanan" class="text-brown-500 hover:text-brown-200 text-sm transition-colors">Layanan DOOH & OOH</a></li>
          <li><a href="#layanan" class="text-brown-500 hover:text-brown-200 text-sm transition-colors">Event Organizer</a></li>
          <li><a href="#layanan" class="text-brown-500 hover:text-brown-200 text-sm transition-colors">Videografi & Fotografi</a></li>
          <li><a href="#portofolio" class="text-brown-500 hover:text-brown-200 text-sm transition-colors">Portofolio</a></li>
          <li><a href="#legalitas" class="text-brown-500 hover:text-brown-200 text-sm transition-colors">Legalitas</a></li>
        </ul>
      </div>

      <!-- Contact -->
      <div>
        <h4 style="font-family:'DM Sans',sans-serif; font-size:0.68rem; letter-spacing:0.2em; text-transform:uppercase; color:#d4a017; margin-bottom:16px;">Kontak</h4>
        <ul class="space-y-2.5">
          <li class="text-brown-500 text-sm">Medan, Sumatera Utara</li>
          <li><a href="tel:+628123456789" class="text-brown-500 hover:text-brown-200 text-sm transition-colors">+62 812-3456-7890</a></li>
          <li><a href="mailto:info@tokabe.co.id" class="text-brown-500 hover:text-brown-200 text-sm transition-colors">info@tokabe.co.id</a></li>
          <li class="text-brown-500 text-sm">Senin–Jumat, 08.00–17.00</a></li>
        </ul>
      </div>
    </div>

    <!-- Bottom bar -->
    <div class="border-t border-brown-900 pt-6 flex flex-col sm:flex-row items-center justify-between gap-3">
      <div class="text-brown-700 text-xs" style="font-family:'DM Sans',sans-serif;">© 2025 TOKABE Creative Agency. Seluruh hak dilindungi.</div>
      <div class="flex gap-6">
        <a href="#" class="text-brown-700 hover:text-brown-400 text-xs transition-colors">Kebijakan Privasi</a>
        <a href="#" class="text-brown-700 hover:text-brown-400 text-xs transition-colors">Syarat & Ketentuan</a>
      </div>
    </div>
  </div>
</footer>


<!-- ══════════════════════════════════════════════
     JAVASCRIPT
══════════════════════════════════════════════ -->
<script>
// ── Navbar scroll ────────────────────
window.addEventListener('scroll', () => {
  const nav = document.getElementById('navbar');
  if (window.scrollY > 50) nav.classList.add('scrolled');
  else nav.classList.remove('scrolled');
});

// ── Hamburger ────────────────────────
const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobile-menu');
const hamIcon = document.getElementById('ham-icon');
const closeIcon = document.getElementById('close-icon');
hamburger.addEventListener('click', () => {
  mobileMenu.classList.toggle('open');
  hamIcon.classList.toggle('hidden');
  closeIcon.classList.toggle('hidden');
});

// ── Fade-up on scroll ─────────────────
const fadeEls = document.querySelectorAll('.fade-up');
const observer = new IntersectionObserver((entries) => {
  entries.forEach(e => {
    if (e.isIntersecting) { e.target.classList.add('visible'); observer.unobserve(e.target); }
  });
}, { threshold: 0.08 });
fadeEls.forEach(el => observer.observe(el));

// ── Map tooltip ──────────────────────
function showTooltip(e, name) {
  const tooltip = document.getElementById('map-tooltip');
  const container = document.getElementById('map-container');
  const rect = container.getBoundingClientRect();
  tooltip.textContent = name;
  tooltip.style.opacity = '1';
  tooltip.style.left = (e.clientX - rect.left + 10) + 'px';
  tooltip.style.top = (e.clientY - rect.top - 30) + 'px';
}
function hideTooltip() {
  document.getElementById('map-tooltip').style.opacity = '0';
}

// ── Map region data ──────────────────
const regionData = {
  'Medan': {
    dooh: [
      { name: 'Videotron Jl. Gatot Subroto', spec: '10×5m • LED P4', impresi: '2.1Jt' },
      { name: 'Billboard Simpang DJBC', spec: '8×4m • LED P6', impresi: '1.8Jt' },
      { name: 'Videotron Sun Plaza', spec: '6×3m • Indoor', impresi: '900Rb' },
      { name: 'Billboard Jl. Asia', spec: '10×4m • LED', impresi: '1.5Jt' },
    ],
    ooh: [
      { name: 'Baliho Jl. Imam Bonjol', spec: '12×6m • Cetak', impresi: '1.2Jt' },
      { name: 'Spanduk Simpang Aksara', spec: '6×2m', impresi: '800Rb' },
      { name: 'Billboard Pintu Tol Belmera', spec: '10×5m', impresi: '2.0Jt' },
    ]
  },
  'Deli Serdang': {
    dooh: [
      { name: 'Videotron Lubuk Pakam', spec: '8×4m • LED', impresi: '900Rb' },
      { name: 'Billboard Jl. Besar Batang Kuis', spec: '6×3m • LED', impresi: '600Rb' },
    ],
    ooh: [
      { name: 'Baliho Simpang Tanjung Morawa', spec: '10×5m', impresi: '1.1Jt' },
      { name: 'Spanduk Pasar Pancur Batu', spec: '5×2m', impresi: '400Rb' },
    ]
  },
  'Binjai': {
    dooh: [
      { name: 'Videotron Jl. Soekarno-Hatta Binjai', spec: '6×3m • LED', impresi: '700Rb' },
    ],
    ooh: [
      { name: 'Baliho Pusat Kota Binjai', spec: '8×4m', impresi: '600Rb' },
    ]
  },
  'Langkat': {
    dooh: [],
    ooh: [
      { name: 'Baliho Jl. KL Yos Sudarso Stabat', spec: '8×4m', impresi: '500Rb' },
      { name: 'Spanduk Pintu Masuk Bukit Lawang', spec: '4×2m', impresi: '250Rb' },
    ]
  },
  'Simalungun': {
    dooh: [
      { name: 'Billboard LED Jl. Lintas Sumatera', spec: '8×4m • LED', impresi: '800Rb' },
    ],
    ooh: [
      { name: 'Baliho Pasar Raya Siantar', spec: '10×4m', impresi: '750Rb' },
    ]
  },
  'Pematangsiantar': {
    dooh: [
      { name: 'Videotron Alun-alun P. Siantar', spec: '5×3m • LED', impresi: '600Rb' },
    ],
    ooh: [
      { name: 'Billboard Jl. Merdeka', spec: '6×3m', impresi: '450Rb' },
    ]
  },
  'Karo': {
    dooh: [],
    ooh: [
      { name: 'Baliho Jl. Jamin Ginting Kabanjahe', spec: '8×4m', impresi: '400Rb' },
      { name: 'Spanduk Pintu Berastagi', spec: '6×2m', impresi: '350Rb' },
    ]
  },
  'Asahan': {
    dooh: [
      { name: 'Videotron Kisaran City Center', spec: '6×3m • LED', impresi: '500Rb' },
    ],
    ooh: [
      { name: 'Baliho Jl. Sisingamangaraja Kisaran', spec: '8×4m', impresi: '480Rb' },
    ]
  },
  'Tapanuli Utara': {
    dooh: [],
    ooh: [
      { name: 'Baliho Pusat Kota Tarutung', spec: '6×3m', impresi: '350Rb' },
    ]
  },
  'Labuhanbatu': {
    dooh: [
      { name: 'LED Billboard Rantauprapat', spec: '8×4m • LED', impresi: '600Rb' },
    ],
    ooh: [
      { name: 'Baliho Pusat Perbelanjaan Rantauprapat', spec: '10×5m', impresi: '700Rb' },
    ]
  },
};

// Defaults for unmapped regions
const defaultData = {
  dooh: [{ name: 'Konsultasikan kebutuhan iklan DOOH Anda', spec: 'Hubungi tim kami', impresi: 'TBD' }],
  ooh: [{ name: 'Konsultasikan kebutuhan iklan OOH Anda', spec: 'Hubungi tim kami', impresi: 'TBD' }]
};

let currentFilter = 'all';
let currentRegion = null;

function selectRegion(name) {
  currentRegion = name;
  currentFilter = 'all';

  // Update active state on map
  document.querySelectorAll('.map-region').forEach(el => el.classList.remove('active'));
  document.querySelectorAll(`[data-region="${name}"]`).forEach(el => el.classList.add('active'));

  // Get data
  const data = regionData[name] || defaultData;

  // Update panel
  document.getElementById('region-default').classList.add('hidden');
  document.getElementById('region-panel').classList.remove('hidden');
  document.getElementById('region-name').textContent = name;

  const totalDOOH = data.dooh.length;
  const totalOOH = data.ooh.length;
  document.getElementById('region-stats').innerHTML = `
    <div class="flex items-center gap-2">
      <span style="background:#d4a017; color:#1a0f06; font-size:0.6rem; font-weight:700; letter-spacing:0.1em; padding: 2px 8px; font-family:'DM Sans',sans-serif;">DOOH</span>
      <span class="text-brown-300 text-sm font-medium">${totalDOOH} Titik</span>
    </div>
    <div class="flex items-center gap-2">
      <span style="border: 1px solid #d4a017; color:#d4a017; font-size:0.6rem; font-weight:700; letter-spacing:0.1em; padding: 2px 8px; font-family:'DM Sans',sans-serif;">OOH</span>
      <span class="text-brown-300 text-sm font-medium">${totalOOH} Titik</span>
    </div>
  `;

  // Reset filter tabs
  document.querySelectorAll('.filter-tab').forEach(t => t.classList.remove('active'));
  document.querySelector('.filter-tab').classList.add('active');
  currentFilter = 'all';

  renderLocations(data);
}

function filterLocations(type, btn) {
  currentFilter = type;
  document.querySelectorAll('.filter-tab').forEach(t => t.classList.remove('active'));
  btn.classList.add('active');
  const data = regionData[currentRegion] || defaultData;
  renderLocations(data);
}

function renderLocations(data) {
  const list = document.getElementById('location-list');
  list.innerHTML = '';

  let items = [];
  if (currentFilter === 'all') {
    items = [
      ...data.dooh.map(d => ({...d, type:'DOOH'})),
      ...data.ooh.map(d => ({...d, type:'OOH'}))
    ];
  } else if (currentFilter === 'DOOH') {
    items = data.dooh.map(d => ({...d, type:'DOOH'}));
  } else {
    items = data.ooh.map(d => ({...d, type:'OOH'}));
  }

  if (items.length === 0) {
    list.innerHTML = `<p class="text-brown-600 text-sm text-center py-6" style="font-family:'DM Sans',sans-serif;">Belum ada titik ${currentFilter} di wilayah ini.</p>`;
    return;
  }

  items.forEach((item, i) => {
    const card = document.createElement('div');
    card.className = 'location-card flex items-start gap-3 p-4 border border-brown-800 hover:border-brown-700';
    card.style.background = 'rgba(46,30,16,0.3)';
    card.style.animationDelay = (i * 0.06) + 's';
    card.innerHTML = `
      <span style="${item.type === 'DOOH' ? 'background:#d4a017; color:#1a0f06;' : 'border: 1px solid #d4a017; color:#d4a017; background:transparent;'} font-size:0.55rem; font-weight:700; letter-spacing:0.12em; padding: 3px 7px; white-space:nowrap; font-family:'DM Sans',sans-serif; flex-shrink:0; margin-top:2px;">${item.type}</span>
      <div class="flex-1 min-w-0">
        <div class="text-brown-200 text-xs font-medium truncate" style="font-family:'DM Sans',sans-serif;">${item.name}</div>
        <div class="flex gap-3 mt-1">
          <span class="text-brown-600 text-xs">${item.spec}</span>
          <span class="text-gold-600 text-xs font-medium">${item.impresi}/hari</span>
        </div>
      </div>
    `;
    list.appendChild(card);
  });
}

// ── Carousel ─────────────────────────
const track = document.getElementById('carousel-track');
const cards = track.querySelectorAll('.portfolio-card');
const prevBtn = document.getElementById('prev-btn');
const nextBtn = document.getElementById('next-btn');
const dotsContainer = document.getElementById('carousel-dots');
let currentSlide = 0;
const totalSlides = cards.length;

// Create dots
for (let i = 0; i < totalSlides; i++) {
  const dot = document.createElement('button');
  dot.className = 'w-1.5 h-1.5 rounded-full transition-all';
  dot.style.background = i === 0 ? '#d4a017' : '#4a2c14';
  dot.style.width = i === 0 ? '24px' : '6px';
  dot.setAttribute('aria-label', `Slide ${i+1}`);
  dot.addEventListener('click', () => goToSlide(i));
  dotsContainer.appendChild(dot);
}

function getCardWidth() {
  const card = cards[0];
  const style = window.getComputedStyle(card);
  return card.offsetWidth + parseInt(style.marginRight || 0) + 20;
}

function goToSlide(index) {
  currentSlide = index;
  const w = getCardWidth();
  track.style.transform = `translateX(-${index * w}px)`;

  dotsContainer.querySelectorAll('button').forEach((d, i) => {
    d.style.background = i === index ? '#d4a017' : '#4a2c14';
    d.style.width = i === index ? '24px' : '6px';
  });
}

prevBtn.addEventListener('click', () => goToSlide(Math.max(0, currentSlide - 1)));
nextBtn.addEventListener('click', () => goToSlide(Math.min(totalSlides - 1, currentSlide + 1)));

// Auto-advance
setInterval(() => { goToSlide((currentSlide + 1) % totalSlides); }, 4500);
</script>
</body>
</html>