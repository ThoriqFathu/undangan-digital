<?php

namespace Database\Seeders;

use App\Models\Invitation;
use App\Models\Order;
use App\Models\Template;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // $template = Template::create([
        //     'name' => 'Minimalist White',
        //     'slug' => 'minimalist-white',
        //     'view_name' => 'minimalist-white',
        //     'price' => 25000,
        // ]);

        // $order = Order::create([
        //     'invoice_number' => 'INV-001',
        //     'customer_name' => 'Budi',
        //     'customer_phone' => '08123456789',
        //     'amount' => 25000,
        //     'status' => 'paid',
        // ]);

        // Invitation::create([
        //     'order_id' => $order->id,
        //     'template_id' => $template->id,
        //     'slug' => 'budi-siti',
        //     'customer_name' => 'Budi',
        //     'status' => 'published',
        //     'payload' => [
        //         'groom_name' => 'Budi',
        //         'bride_name' => 'Siti',
        //     ]
        // ]);

        $template = Template::create([
            'name' => 'Premium Classic',
            'slug' => 'premium-classic',
            'view_name' => 'premium-classic',
            'price' => 50000,
        ]);

        $order = Order::create([
            'invoice_number' => 'INV-001',
            'customer_name' => 'Muhammad Fathuthoriq',
            'customer_phone' => '08123456789',
            'amount' => 50000,
            'status' => 'paid',
        ]);

        Invitation::create([
            'order_id' => $order->id,
            'template_id' => $template->id,
            'slug' => 'aqilah-thoriq',
            'customer_name' => 'Muhammad Fathuthoriq',
            'status' => 'published',
            'payload' => [

                'cover' => [
                    'title' => 'The Wedding Of',
                    'groom_name' => 'Muhammad Fathuthoriq',
                    'bride_name' => 'Dwi Aqilah Pradita',
                    'cover_image' => 'covers/cover.jpg',
                ],

                'groom' => [
                    'name' => 'Muhammad Fathuthoriq',
                    'nickname' => 'Thoriq',
                    'photo' => 'groom.jpg',
                    'father' => 'Heru Amidarma',
                    'mother' => 'Asmawati (Almh)',
                    'instagram' => '',
                ],

                'bride' => [
                    'name' => 'Dwi Aqilah Pradita',
                    'nickname' => 'Aqilah',
                    'photo' => 'bride.jpg',
                    'father' => 'Drs. Didik',
                    'mother' => 'Sri Hartati, S.Pd',
                    'instagram' => '',
                ],

                'event' => [
                    'akad' => [
                        'date' => '2026-06-28',
                        'time' => '08:00',
                        'venue' => '',
                        'address' => '',
                        'maps_url' => '',
                    ],

                    'resepsi' => [
                        'date' => '2026-06-28',
                        'time' => '10:00',
                        'venue' => '',
                        'address' => '',
                        'maps_url' => '',
                    ],
                ],

                'countdown_date' => '2026-06-28 08:00:00',

                'gallery' => [
                    [
                        'image' => 'gallery/1.jpeg',
                    ],
                    [
                        'image' => 'gallery/2.jpeg',
                    ],
                ],

                'love_story' => [
                    [
                        'date' => '2022-01-01',
                        'title' => 'Pertama Bertemu',
                        'description' => 'APertemuan mungkin sebuah kebetulan, namun saling memilih adalah sebuah pilihan. Berawal dari [sebutkan awal kenal, misal: teman kerja / dikenalkan sahabat], kini kami siap melangkah bersama menuju babak baru kehidupan.',
                    ],
                ],

                'gift' => [
                    [
                        'bank' => 'BCA',
                        'account_number' => '1234567890',
                        'account_name' => 'Muhammad Fathuthoriq',
                    ],
                ],

                'music' => [
                    'file' => 'music/song.mp3',
                ],
            ],
        ]);
    }
}
