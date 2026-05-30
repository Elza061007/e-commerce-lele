@extends('layouts.app')

@section('title', 'Tentang Kami - Lele Master')
@section('meta_description', 'Kenali Lele Master lebih dekat. Perusahaan budidaya ikan lele premium dengan pengalaman lebih dari 10 tahun dalam industri perikanan.')

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="page-header-content animate-on-scroll">
            <span class="hero-badge">Tentang Kami</span>
            <h1>Mengenal <span style="color:var(--accent-gold);">Lele Master</span></h1>
            <p>Perusahaan budidaya ikan lele premium dengan komitmen pada kualitas dan keberlanjutan</p>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="section">
    <div class="container">
        <div class="about-grid">
            <div class="about-image animate-on-scroll">
                <img src="{{ asset('images/farm.png') }}" alt="Kolam Budidaya Lele Master" class="about-img">
                <div class="about-img-overlay glass">
                    <div class="stat-number" style="font-size:2rem;">10+</div>
                    <div class="stat-label">Tahun Pengalaman</div>
                </div>
            </div>
            <div class="about-text animate-on-scroll">
                <h2>Cerita <span style="color:var(--accent-gold);">Kami</span></h2>
                <p style="margin-top:1.5rem;">Lele Master didirikan pada tahun 2014 dengan visi menjadi supplier ikan lele premium terdepan di Indonesia. Berawal dari kolam budidaya kecil, kami telah berkembang menjadi salah satu produsen ikan lele terbesar di wilayah Jabodetabek.</p>
                <p style="margin-top:1rem;">Kami menggunakan teknologi budidaya modern dan pakan berkualitas tinggi untuk memastikan setiap ikan yang kami hasilkan memenuhi standar kualitas tertinggi. Kolam budidaya kami dilengkapi dengan sistem sirkulasi air canggih yang menjamin kebersihan dan kesehatan ikan.</p>
                <div class="about-stats-row">
                    <div class="about-stat">
                        <i data-lucide="fish" style="width:24px;height:24px;color:var(--accent-gold);"></i>
                        <div>
                            <strong style="font-size:1.5rem;color:#fff;">5 Ton</strong>
                            <span>Kapasitas Harian</span>
                        </div>
                    </div>
                    <div class="about-stat">
                        <i data-lucide="users" style="width:24px;height:24px;color:var(--accent-gold);"></i>
                        <div>
                            <strong style="font-size:1.5rem;color:#fff;">10,000+</strong>
                            <span>Pelanggan</span>
                        </div>
                    </div>
                    <div class="about-stat">
                        <i data-lucide="map" style="width:24px;height:24px;color:var(--accent-gold);"></i>
                        <div>
                            <strong style="font-size:1.5rem;color:#fff;">20 Ha</strong>
                            <span>Lahan Budidaya</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision Mission -->
<section class="section" style="background: var(--primary-blue);">
    <div class="container">
        <div class="section-header animate-on-scroll" style="text-align:center; max-width:700px; margin:0 auto 3rem;">
            <span class="hero-badge">Visi & Misi</span>
            <h2>Menuju Masa Depan <span style="color:var(--accent-gold);">Perikanan Indonesia</span></h2>
        </div>
        <div class="vision-grid">
            <div class="vision-card glass animate-on-scroll">
                <div class="feature-icon">
                    <i data-lucide="eye"></i>
                </div>
                <h3>Visi Kami</h3>
                <p>Menjadi perusahaan budidaya ikan lele terdepan di Indonesia yang dikenal karena kualitas produk, inovasi, dan keberlanjutan lingkungan.</p>
            </div>
            <div class="vision-card glass animate-on-scroll">
                <div class="feature-icon">
                    <i data-lucide="target"></i>
                </div>
                <h3>Misi Kami</h3>
                <ul style="list-style:none; padding:0; text-align:left;">
                    <li style="padding:0.5rem 0; color:var(--text-muted); display:flex; align-items:start; gap:0.75rem;">
                        <i data-lucide="check-circle" style="width:18px;height:18px;color:var(--accent-gold);flex-shrink:0;margin-top:3px;"></i>
                        Menyediakan ikan lele berkualitas premium
                    </li>
                    <li style="padding:0.5rem 0; color:var(--text-muted); display:flex; align-items:start; gap:0.75rem;">
                        <i data-lucide="check-circle" style="width:18px;height:18px;color:var(--accent-gold);flex-shrink:0;margin-top:3px;"></i>
                        Menerapkan budidaya ramah lingkungan
                    </li>
                    <li style="padding:0.5rem 0; color:var(--text-muted); display:flex; align-items:start; gap:0.75rem;">
                        <i data-lucide="check-circle" style="width:18px;height:18px;color:var(--accent-gold);flex-shrink:0;margin-top:3px;"></i>
                        Memberdayakan masyarakat sekitar
                    </li>
                    <li style="padding:0.5rem 0; color:var(--text-muted); display:flex; align-items:start; gap:0.75rem;">
                        <i data-lucide="check-circle" style="width:18px;height:18px;color:var(--accent-gold);flex-shrink:0;margin-top:3px;"></i>
                        Berinovasi dalam teknologi perikanan
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Owner Section -->
<section class="section">
    <div class="container">
        <div class="section-header animate-on-scroll" style="text-align:center; max-width:700px; margin:0 auto 3rem;">
            <span class="hero-badge">Pemilik Perusahaan</span>
            <h2>Pendiri <span style="color:var(--accent-gold);">Lele Master</span></h2>
        </div>
        <div class="owner-card glass animate-on-scroll" style="max-width:800px; margin:0 auto; padding:3rem; text-align:center;">
            <div class="owner-avatar">
                <div class="owner-avatar-placeholder">
                    <i data-lucide="user" style="width:60px;height:60px;color:var(--accent-gold);"></i>
                </div>
            </div>
            <h3 style="margin-top:1.5rem; font-size:1.75rem;">H. Ahmad Surya</h3>
            <p style="color:var(--accent-gold); font-weight:600; margin-top:0.5rem;">Founder & CEO</p>
            <p style="margin-top:1.5rem; max-width:600px; margin-left:auto; margin-right:auto;">
                "Saya percaya bahwa ikan lele berkualitas dimulai dari budidaya yang benar. Dengan pengalaman lebih dari 15 tahun di dunia perikanan, saya mendirikan Lele Master untuk menghadirkan produk terbaik bagi masyarakat Indonesia."
            </p>
            <div style="display:flex; gap:1rem; justify-content:center; margin-top:2rem;">
                <a href="#" class="social-link glass" style="width:40px; height:40px; display:flex; align-items:center; justify-content:center; border-radius:50%; text-decoration:none;">
                    <i data-lucide="instagram" style="width:18px;height:18px;color:var(--accent-gold);"></i>
                </a>
                <a href="#" class="social-link glass" style="width:40px; height:40px; display:flex; align-items:center; justify-content:center; border-radius:50%; text-decoration:none;">
                    <i data-lucide="linkedin" style="width:18px;height:18px;color:var(--accent-gold);"></i>
                </a>
                <a href="#" class="social-link glass" style="width:40px; height:40px; display:flex; align-items:center; justify-content:center; border-radius:50%; text-decoration:none;">
                    <i data-lucide="facebook" style="width:18px;height:18px;color:var(--accent-gold);"></i>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection
