<?php

namespace Database\Seeders;

use App\Models\Galery;
use Illuminate\Database\Seeder;

class GalerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Galery::create([
            'wedding_id'        => 1,
            'gallery1'          => 'pr1.jpg',
            'gallery2'          => 'pr2.jpg',
            'gallery3'          => 'pr3.jpg',
            'gallery4'          => 'gal1.jpg',
            'gallery5'          => 'gal2.jpg',
            'gallery6'          => 'gal3.jpg',
            'gallery7'          => 'DSC08612.jpg',
            'gallery8'          => 'DSC08603.jpg',
            'gallery9'          => 'DSC08616.jpg',
            'gallery10'          => '01JQY454ABMH83H1H98T36WZHJ.jpg',
            'gallery11'          => '01JQY454AD64KW989YFJW5Q87N.jpg',
            'gallery12'          => '01JQY454AEGW4G547ZN8NE7ZTA.jpg',
            'gallery13'          => 'DSC01937.jpg',
            'gallery14'          => 'DSC01938.jpg',
            'gallery15'          => 'DSC01940.jpg',
            'gallery16'          => 'DSC02327.jpg',
            'gallery17'          => 'DSC02368.jpg',
            'gallery18'          => 'DSC02352.jpg',
            'gallery19'          => 'DSC02774.jpg',
            'gallery20'          => 'DSC02792.jpg',
            'gallery21'          => 'DSC02797.jpg',
            #'video'             => 'https://www.youtube.com/embed/syMFHd5Gxxk',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
