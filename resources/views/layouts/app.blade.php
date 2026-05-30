<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('meta_description', 'Lele Master - Supplier Ikan Lele Premium. Kualitas terbaik langsung dari kolam budidaya.')">
    <title>@yield('title', 'Lele Master - Premium Catfish E-Commerce')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <!-- Lucide Icons CDN -->
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar" id="navbar">
        <div class="container nav-container">
            <a href="{{ route('home') }}" class="nav-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Lele Master Logo">
                <span>Lele<span style="color: var(--accent-gold);">Master</span></span>
            </a>
            <button class="nav-toggle" id="navToggle" aria-label="Toggle navigation">
                <span class="hamburger"></span>
            </button>
            <div class="nav-links" id="navLinks">
                <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Beranda</a>
                <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">Tentang Kami</a>
                <a href="{{ route('products') }}" class="{{ request()->routeIs('products') ? 'active' : '' }}">Produk</a>
                <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Kontak</a>
                <a href="{{ route('products') }}" class="btn btn-primary btn-sm">Belanja Sekarang</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <div class="footer-brand">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" style="height:40px; border-radius:8px; margin-bottom:1rem;">
                        <h4>Lele Master</h4>
                    </div>
                    <p style="margin-top: 1rem;">Supplier ikan lele premium terpercaya dengan kualitas terbaik langsung dari kolam budidaya modern kami.</p>
                </div>
                <div class="footer-col">
                    <h4>Menu</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('home') }}">Beranda</a></li>
                        <li><a href="{{ route('about') }}">Tentang Kami</a></li>
                        <li><a href="{{ route('products') }}">Produk</a></li>
                        <li><a href="{{ route('contact') }}">Kontak</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Produk</h4>
                    <ul class="footer-links">
                        <li><a href="{{ route('products') }}">Lele Segar Premium</a></li>
                        <li><a href="{{ route('products') }}">Fillet Lele</a></li>
                        <li><a href="{{ route('products') }}">Lele Asap</a></li>
                        <li><a href="{{ route('products') }}">Bibit Lele Unggul</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Hubungi Kami</h4>
                    <ul class="footer-links">
                        <li><i data-lucide="map-pin" style="width:16px;height:16px;display:inline;vertical-align:middle;margin-right:0.5rem;color:var(--accent-gold);"></i>Jl. Perikanan No. 88, Jakarta</li>
                        <li><i data-lucide="phone" style="width:16px;height:16px;display:inline;vertical-align:middle;margin-right:0.5rem;color:var(--accent-gold);"></i>+62 812-3456-7890</li>
                        <li><i data-lucide="mail" style="width:16px;height:16px;display:inline;vertical-align:middle;margin-right:0.5rem;color:var(--accent-gold);"></i>info@lelemaster.id</li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; {{ date('Y') }} Lele Master. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Mobile nav toggle
        const navToggle = document.getElementById('navToggle');
        const navLinks = document.getElementById('navLinks');
        if (navToggle) {
            navToggle.addEventListener('click', function() {
                navLinks.classList.toggle('active');
                navToggle.classList.toggle('active');
            });
        }

        // Initialize Lucide icons
        lucide.createIcons();

        // Scroll animation
        const observerOptions = { threshold: 0.1, rootMargin: '0px 0px -50px 0px' };
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-up');
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        document.querySelectorAll('.animate-on-scroll').forEach(el => observer.observe(el));
    </script>
</body>
</html>
