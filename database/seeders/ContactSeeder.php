<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contact;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $defaultPhone = '628115239999';

        $contacts = [
            [
                'name' => 'Footer Phone',
                'phone' => $defaultPhone,
                'message' => 'Halo Admin Tokabe',
            ],
            [
                'name' => 'Navbar Contact',
                'phone' => $defaultPhone,
                'message' => 'Halo Admin Tokabe',
            ],
            [
                'name' => 'Hero Contact',
                'phone' => $defaultPhone,
                'message' => 'Halo Admin Tokabe',
            ],
            [
                'name' => 'DOOH Contact',
                'phone' => $defaultPhone,
                'message' => 'Halo Admin Tokabe, saya mau menanyakan tentang DOOH',
            ],
            [
                'name' => 'OOH Contact',
                'phone' => $defaultPhone,
                'message' => 'Halo Admin Tokabe, saya mau menanyakan tentang OOH',
            ],
            [
                'name' => 'Periklanan Contact',
                'phone' => $defaultPhone,
                'message' => 'Halo Admin Tokabe, saya mau menanyakan tentang DOOH Advertising dan OOH Billboard / Baliho 🙏',
            ],
            [
                'name' => 'Linktree Contact',
                'phone' => $defaultPhone,
                'message' => 'Halo Admin Tokabe',
            ],
            [
                'name' => 'Event Organizer Contact',
                'phone' => $defaultPhone,
                'message' => 'Halo Admin Tokabe, saya tertarik dengan layanan Event Organizer',
            ]
        ];

        foreach ($contacts as $contact) {
            Contact::firstOrCreate(['name' => $contact['name']], $contact);
        }
    }
}
