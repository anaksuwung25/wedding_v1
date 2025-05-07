<?php

namespace Database\Seeders;

use App\Models\Detail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Detail::create([
            'wedding_id'        => 1,
            'type'              => 'Akad',
            'date'              => '2025-06-29 08:00:00',
            'address'           => 'Gedung Balai Desa Cikalongwetan',
            'maps'              => 'https://maps.app.goo.gl/ApwrW7fB6CBmC7Em6',
            'calendar'          => 'https://calendar.google.com/calendar/u/0/r/eventedit?text=Pernikahan+Chintya+%26+Valupi&details=Kami+sangat+berharap+anda+dapat+hadir+di+moment+bahagia+ini&location=Cikalongwetan+Bandung+Barat+(JIS)&dates=20250629T010000Z/20250629T080000Z&ctz=Asia/Jakarta',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
