<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'nama' => 'Sedotan Stainless',
            'ringkasan' => 'Sedotan yang terbuat dari bahan stainless steel',
            'deskripsi' => 'Sedotan ini terbuat dari bahan baja anti karat sehingga dapat digunakan berkali-kali. Oleh karena itu, sedotan ini dapat mengurangi jumlah sampah yang disebabkan oleh sedotan plastik'
        ]);
        Product::create([
            'nama' => 'Tumblr',
            'ringkasan' => 'Tempat Minum yang dapat digunakan berulang kali',
            'deskripsi' => 'Tempat minum yang umum digunakan, benda ini jauh lebih baik digunakan daripada kemasan air mineral untuk penggunaan jangka panjang. Selain itu, penggunaan botol ini sebagai ganti kemasan air mineral dapat mengurangi sampah plastik'
        ]);
        Product::create([
            'nama' => 'Reusable Bag',
            'ringkasan' => 'Tas kemasan yang umumnya terbuat dari kain',
            'deskripsi' => 'Tas ini biasanya digunakan oleh perusahaan besar untuk mengemas produk mereka. Secara tidak langsung, menggunakan tas seperti ini dapat mengurangi limbah tas plastik sekali pakai karena dapat digunakan berulang kali.'
        ]);
    }
}
