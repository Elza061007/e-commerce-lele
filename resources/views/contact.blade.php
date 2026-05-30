@extends('layouts.app')

@section('title', 'Kontak Kami - Lele Master')
@section('meta_description', 'Hubungi Lele Master untuk pemesanan ikan lele premium. Kami siap melayani Anda melalui WhatsApp, email, atau kunjungan langsung.')

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="page-header-content animate-on-scroll">
            <span class="hero-badge">Kontak Kami</span>
            <h1>Hubungi <span style="color:var(--accent-gold);">Kami</span></h1>
            <p>Kami siap membantu Anda. Jangan ragu untuk menghubungi kami kapan saja.</p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="section">
    <div class="container">
        <div class="contact-grid">
            <!-- Contact Info -->
            <div class="contact-info animate-on-scroll">
                <h2 style="margin-bottom:2rem;">Informasi <span style="color:var(--accent-gold);">Kontak</span></h2>
                
                <div class="contact-item glass">
                    <div class="contact-icon">
                        <i data-lucide="map-pin"></i>
                    </div>
                    <div>
                        <h4>Alamat</h4>
                        <p>Jl. Perikanan No. 88, Kelurahan Cibubur, Jakarta Timur 13720</p>
                    </div>
                </div>
                
                <div class="contact-item glass">
                    <div class="contact-icon">
                        <i data-lucide="phone"></i>
                    </div>
                    <div>
                        <h4>Telepon</h4>
                        <p>+62 812-3456-7890</p>
                        <p>+62 21-8765-4321</p>
                    </div>
                </div>
                
                <div class="contact-item glass">
                    <div class="contact-icon">
                        <i data-lucide="mail"></i>
                    </div>
                    <div>
                        <h4>Email</h4>
                        <p>info@lelemaster.id</p>
                        <p>order@lelemaster.id</p>
                    </div>
                </div>

                <div class="contact-item glass">
                    <div class="contact-icon">
                        <i data-lucide="clock"></i>
                    </div>
                    <div>
                        <h4>Jam Operasional</h4>
                        <p>Senin - Sabtu: 06:00 - 18:00 WIB</p>
                        <p>Minggu: 07:00 - 15:00 WIB</p>
                    </div>
                </div>

                <!-- Social Links -->
                <div style="margin-top:2rem;">
                    <h4 style="margin-bottom:1rem;">Ikuti Kami</h4>
                    <div style="display:flex; gap:1rem;">
                        <a href="#" class="social-link glass" style="width:44px; height:44px; display:flex; align-items:center; justify-content:center; border-radius:50%; text-decoration:none; transition: var(--transition-smooth);">
                            <i data-lucide="instagram" style="width:20px;height:20px;color:var(--accent-gold);"></i>
                        </a>
                        <a href="#" class="social-link glass" style="width:44px; height:44px; display:flex; align-items:center; justify-content:center; border-radius:50%; text-decoration:none; transition: var(--transition-smooth);">
                            <i data-lucide="facebook" style="width:20px;height:20px;color:var(--accent-gold);"></i>
                        </a>
                        <a href="https://wa.me/6281234567890" class="social-link glass" style="width:44px; height:44px; display:flex; align-items:center; justify-content:center; border-radius:50%; text-decoration:none; transition: var(--transition-smooth);" target="_blank">
                            <i data-lucide="message-circle" style="width:20px;height:20px;color:var(--accent-gold);"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form-wrap glass animate-on-scroll">
                <h3 style="margin-bottom:0.5rem;">Kirim Pesan</h3>
                <p style="margin-bottom:2rem;">Isi formulir di bawah ini dan kami akan segera menghubungi Anda.</p>
                
                <form id="contactForm" class="contact-form" action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Lengkap</label>
                        <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" placeholder="email@contoh.com" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">No. Telepon</label>
                            <input type="tel" id="phone" name="phone" placeholder="0812-xxxx-xxxx">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subjek</label>
                        <select id="subject" name="subject">
                            <option value="">Pilih Subjek</option>
                            <option value="pemesanan">Pemesanan Produk</option>
                            <option value="grosir">Harga Grosir</option>
                            <option value="kerjasama">Kerjasama Bisnis</option>
                            <option value="lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="message">Pesan</label>
                        <textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda di sini..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width:100%;">
                        <i data-lucide="send" style="width:18px;height:18px;margin-right:0.5rem;"></i>
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="section" style="padding-top:0;">
    <div class="container">
        <div class="map-wrapper glass animate-on-scroll" style="border-radius:1rem; overflow:hidden; height:400px;">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3663464268167!2d106.87!3d-6.2!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTInMDAuMCJTIDEwNsKwNTInMTIuMCJF!5e0!3m2!1sid!2sid!4v1600000000000!5m2!1sid!2sid" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </div>
</section>
@endsection
