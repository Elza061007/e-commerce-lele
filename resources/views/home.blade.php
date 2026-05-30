@extends('layouts.app')

@section('title', 'Lele Master - Premium Catfish E-Commerce')
@section('meta_description', 'Lele Master adalah supplier ikan lele premium terpercaya. Dapatkan ikan lele segar berkualitas tinggi langsung dari kolam budidaya modern kami.')

@section('content')
<!-- Hero Section -->
<section class="hero" id="hero">
    <div class="hero-bg"></div>
    <div class="container">
        <div class="hero-content animate-on-scroll">
            <span class="hero-badge">🐟 #1 Supplier Lele Premium Indonesia</span>
            <h1 class="hero-title">Ikan Lele Segar & Premium untuk Anda</h1>
            <p class="hero-desc">Dapatkan ikan lele berkualitas tinggi langsung dari kolam budidaya modern kami. Segar, higienis, dan dikirim langsung ke lokasi Anda.</p>
            <div class="hero-btns">
                <a href="{{ route('products') }}" class="btn btn-primary">
                    <i data-lucide="shopping-cart" style="width:18px;height:18px;margin-right:0.5rem;"></i>
                    Lihat Produk
                </a>
                <a href="{{ route('contact') }}" class="btn btn-outline">
                    <i data-lucide="phone" style="width:18px;height:18px;margin-right:0.5rem;"></i>
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>
    <!-- Floating Stats -->
    <div class="hero-stats">
        <div class="stat-card glass animate-on-scroll">
            <div class="stat-number">10K+</div>
            <div class="stat-label">Pelanggan Puas</div>
        </div>
        <div class="stat-card glass animate-on-scroll">
            <div class="stat-number">5 Ton</div>
            <div class="stat-label">Produksi Harian</div>
        </div>
        <div class="stat-card glass animate-on-scroll">
            <div class="stat-number">100%</div>
            <div class="stat-label">Segar & Alami</div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="section" id="features">
    <div class="container">
        <div class="section-header animate-on-scroll" style="text-align:center; max-width:700px; margin:0 auto 3rem;">
            <span class="hero-badge">Mengapa Memilih Kami</span>
            <h2>Keunggulan <span style="color:var(--accent-gold);">Lele Master</span></h2>
            <p>Kami berkomitmen memberikan produk ikan lele terbaik dengan standar kualitas tinggi</p>
        </div>
        <div class="features-grid">
            <div class="feature-card glass animate-on-scroll">
                <div class="feature-icon">
                    <i data-lucide="award"></i>
                </div>
                <h3 class="feature-title">Kualitas Premium</h3>
                <p>Ikan lele kami dibudidayakan dengan standar kualitas tertinggi menggunakan pakan terbaik.</p>
            </div>
            <div class="feature-card glass animate-on-scroll">
                <div class="feature-icon">
                    <i data-lucide="truck"></i>
                </div>
                <h3 class="feature-title">Pengiriman Cepat</h3>
                <p>Pengiriman dalam kondisi segar dengan armada berpendingin ke seluruh Jabodetabek.</p>
            </div>
            <div class="feature-card glass animate-on-scroll">
                <div class="feature-icon">
                    <i data-lucide="shield-check"></i>
                </div>
                <h3 class="feature-title">Terjamin Segar</h3>
                <p>Garansi kesegaran 100%. Jika tidak puas, kami berikan penggantian produk.</p>
            </div>
            <div class="feature-card glass animate-on-scroll">
                <div class="feature-icon">
                    <i data-lucide="leaf"></i>
                </div>
                <h3 class="feature-title">Ramah Lingkungan</h3>
                <p>Budidaya berkelanjutan yang menjaga kelestarian lingkungan sekitar.</p>
            </div>
            <div class="feature-card glass animate-on-scroll">
                <div class="feature-icon">
                    <i data-lucide="headphones"></i>
                </div>
                <h3 class="feature-title">Layanan 24/7</h3>
                <p>Tim kami siap membantu Anda kapan saja melalui WhatsApp atau telepon.</p>
            </div>
            <div class="feature-card glass animate-on-scroll">
                <div class="feature-icon">
                    <i data-lucide="tag"></i>
                </div>
                <h3 class="feature-title">Harga Kompetitif</h3>
                <p>Langsung dari produsen, tanpa perantara. Dapatkan harga terbaik di kelasnya.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section cta-section">
    <div class="cta-bg"></div>
    <div class="container" style="position:relative; z-index:2;">
        <div class="cta-content animate-on-scroll" style="text-align:center; max-width:700px; margin:0 auto;">
            <h2>Siap Memesan Lele Premium?</h2>
            <p style="margin: 1.5rem 0 2.5rem;">Hubungi kami sekarang atau kunjungi halaman produk kami untuk melihat semua pilihan yang tersedia.</p>
            <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
                <a href="{{ route('products') }}" class="btn btn-primary">
                    <i data-lucide="shopping-bag" style="width:18px;height:18px;margin-right:0.5rem;"></i>
                    Lihat Semua Produk
                </a>
                <a href="https://wa.me/6281234567890" class="btn btn-outline" target="_blank">
                    <i data-lucide="message-circle" style="width:18px;height:18px;margin-right:0.5rem;"></i>
                    Chat WhatsApp
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
