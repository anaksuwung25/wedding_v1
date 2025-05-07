<?php

namespace Database\Seeders;

use App\Models\Gift;
use Illuminate\Database\Seeder;

class GiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gift::create([
            'wedding_id'        => 1,
            'name'              => 'Rumah Chintya',
            'address'           => 'Perum Cimanggu Permai no.25, Kec. Cikalong Wetan, Kabupaten Bandung Barat, Jawa Barat 40556
            ',
            'maps'              => 'https://maps.app.goo.gl/ApwrW7fB6CBmC7Em6',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
