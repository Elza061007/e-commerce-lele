@extends('layouts.app')

@section('title', 'Produk Kami - Lele Master')
@section('meta_description', 'Jelajahi koleksi produk ikan lele premium dari Lele Master. Lele segar, fillet, lele asap, dan bibit unggul tersedia untuk Anda.')

@section('content')
<!-- Page Header -->
<section class="page-header">
    <div class="container">
        <div class="page-header-content animate-on-scroll">
            <span class="hero-badge">Toko Ikan Lele</span>
            <h1>Produk <span style="color:var(--accent-gold);">Kami</span></h1>
            <p>Pilihan ikan lele premium berkualitas tinggi untuk kebutuhan Anda</p>
        </div>
    </div>
</section>

<!-- Products Section -->
<section class="section">
    <div class="container">
        <!-- Filter Bar -->
        <div class="filter-bar glass animate-on-scroll" style="display:flex; gap:1rem; padding:1rem 1.5rem; margin-bottom:3rem; overflow-x:auto; flex-wrap:wrap;">
            <button class="filter-btn active" data-filter="all">Semua</button>
            <button class="filter-btn" data-filter="segar">Segar</button>
            <button class="filter-btn" data-filter="olahan">Olahan</button>
            <button class="filter-btn" data-filter="bibit">Bibit</button>
            <button class="filter-btn" data-filter="paket">Paket</button>
        </div>

        <!-- Products Grid -->
        <div class="products-grid">
            @foreach($products as $product)
            <div class="product-card glass animate-on-scroll">
                <div class="product-img">
                    <img src="{{ asset('images/' . $product['image']) }}" alt="{{ $product['name'] }}">
                    <span class="product-badge">{{ $product['badge'] }}</span>
                </div>
                <div class="product-info">
                    <h3 style="font-size:1.25rem; margin-bottom:0.5rem;">{{ $product['name'] }}</h3>
                    <p style="font-size:0.95rem;">{{ $product['desc'] }}</p>
                    <div class="product-footer">
                        <span class="product-price">{{ $product['price'] }}</span>
                        <a href="https://wa.me/6281234567890?text=Halo, saya ingin memesan {{ $product['name'] }}" class="btn btn-primary btn-sm" target="_blank">
                            <i data-lucide="shopping-cart" style="width:16px;height:16px;margin-right:0.5rem;"></i>
                            Pesan
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Bulk Order CTA -->
<section class="section" style="background: var(--primary-blue);">
    <div class="container" style="text-align:center;">
        <div class="animate-on-scroll" style="max-width:700px; margin:0 auto;">
            <span class="hero-badge">Pesanan Besar</span>
            <h2>Butuh Dalam Jumlah Besar?</h2>
            <p style="margin:1.5rem 0 2.5rem;">Kami melayani pemesanan dalam jumlah besar untuk restoran, katering, dan bisnis Anda. Dapatkan harga spesial untuk pembelian grosir.</p>
            <a href="{{ route('contact') }}" class="btn btn-primary">
                <i data-lucide="phone" style="width:18px;height:18px;margin-right:0.5rem;"></i>
                Hubungi untuk Harga Grosir
            </a>
        </div>
    </div>
</section>
@endsection
