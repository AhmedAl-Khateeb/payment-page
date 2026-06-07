<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AboutUs;

class AboutUsSeeder extends Seeder
{
    public function run(): void
    {
        AboutUs::insert([
            [
                'date' => '2009-2011',
                'title' => 'Our Humble Beginnings',
                'description' => 'We started our journey with a small idea and big dreams.',
                'image' => 'front/assets/img/about/1.jpg',
                'is_inverted' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'date' => 'March 2011',
                'title' => 'An Agency is Born',
                'description' => 'The company officially launched and started growing rapidly.',
                'image' => 'front/assets/img/about/2.jpg',
                'is_inverted' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'date' => 'December 2015',
                'title' => 'Transition to Full Service',
                'description' => 'We expanded our services to cover full solutions.',
                'image' => 'front/assets/img/about/3.jpg',
                'is_inverted' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'date' => 'July 2020',
                'title' => 'Phase Two Expansion',
                'description' => 'We scaled the company and entered new markets.',
                'image' => 'front/assets/img/about/4.jpg',
                'is_inverted' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}