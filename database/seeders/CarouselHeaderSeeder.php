<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CarouselHeader;

class CarouselHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarouselHeader::create([
            'gambar' => 'placeholder-1200x600.png'
        ]);
        CarouselHeader::create([
            'gambar' => 'placeholder-1200x600.png'
        ]);
        CarouselHeader::create([
            'gambar' => 'placeholder-1200x600.png'
        ]);
    }
}
