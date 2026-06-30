<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\About::create([
            'title' => [
                'id' => 'Lebih dari ratusan lokasi di Sumatera',
                'en' => 'More than hundreds of locations in Sumatera'
            ],
            'description' => [
                'id' => 'Tokabe.id adalah agensi periklanan terbaik di Medan, Sumatera. Kami membantu Anda merancang, mengelola, dan memaksimalkan jangkauan bisnis melalui layanan Videotron (DOOH), Billboard (OOH), dan Brand Activation yang inovatif.',
                'en' => 'Tokabe.id is the best advertising agency in Medan, Sumatra. We help you design, manage, and maximize your business reach through innovative Videotron (DOOH), Billboard (OOH), and Brand Activation services.'
            ],
            'image_dooh' => 'https://images.unsplash.com/photo-1542204165-65bf26472b9b?q=80&w=600&auto=format&fit=crop',
            'dooh_target' => 18,
            'image_ooh' => 'https://images.unsplash.com/photo-1551836022-d5d88e9218df?q=80&w=600&auto=format&fit=crop',
            'ooh_target' => 271,
        ]);
    }
}
