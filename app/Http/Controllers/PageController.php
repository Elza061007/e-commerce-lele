<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function products()
    {
        $products = [
            [
                'name' => 'Lele Segar Premium',
                'desc' => 'Ikan lele segar pilihan, langsung dari kolam budidaya kami. Ukuran jumbo, kualitas terbaik.',
                'price' => 'Rp 35.000/kg',
                'image' => 'product1.png',
                'badge' => 'Best Seller',
            ],
            [
                'name' => 'Fillet Lele',
                'desc' => 'Fillet lele tanpa tulang, siap masak. Praktis dan higienis untuk keluarga Anda.',
                'price' => 'Rp 55.000/kg',
                'image' => 'product2.png',
                'badge' => 'Premium',
            ],
            [
                'name' => 'Lele Asap',
                'desc' => 'Lele asap tradisional dengan cita rasa khas. Tahan lama dan cocok untuk berbagai olahan.',
                'price' => 'Rp 65.000/kg',
                'image' => 'product1.png',
                'badge' => 'Populer',
            ],
            [
                'name' => 'Bibit Lele Unggul',
                'desc' => 'Bibit lele berkualitas tinggi untuk budidaya. Pertumbuhan cepat dan daya tahan kuat.',
                'price' => 'Rp 500/ekor',
                'image' => 'catfish.png',
                'badge' => 'Budidaya',
            ],
            [
                'name' => 'Lele Organik',
                'desc' => 'Lele organik yang dibudidayakan tanpa bahan kimia. Sehat dan ramah lingkungan.',
                'price' => 'Rp 45.000/kg',
                'image' => 'product2.png',
                'badge' => 'Organik',
            ],
            [
                'name' => 'Paket Lele Keluarga',
                'desc' => 'Paket hemat 5kg lele segar pilihan. Cocok untuk kebutuhan keluarga seminggu.',
                'price' => 'Rp 150.000/paket',
                'image' => 'product1.png',
                'badge' => 'Hemat',
            ],
        ];

        return view('products', compact('products'));
    }

    public function contact()
    {
        return view('contact');
    }
}
