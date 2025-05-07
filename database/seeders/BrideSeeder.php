<?php

namespace Database\Seeders;

use App\Models\Bride;
use Illuminate\Database\Seeder;

class BrideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bride::create([
            'wedding_id'        => 1,
            'name'              => 'Chintya Putri Nursyifa',
            'child'             => 'Putri Kelima dari',
            'name_father'       => 'Bpk Umar',
            'name_mother'       => 'Ibu Mutoharoh',
            'instagram'         => 'https://www.instagram.com/chintyapn/',
            'bank_id'           => 6,
            'acc_name'          => 'Chintya Putri Nursyifa',
            'acc_number'        => 13385064110,
            'gender'            => 'Female',
            'photo'             => 'MTRT1634.JPG',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);

        Bride::create([
            'wedding_id'        => 1,
            'name'              => 'Achmad Valupi',
            'child'             => 'Putra Pertama dari',
            'name_father'       => 'Alm. Bpk Halim, S.S',
            'name_mother'       => 'Ibu Suyati',
            'instagram'         => 'https://www.instagram.com/anaksuwung/',
            'bank_id'           => 2,
            'acc_name'          => 'Achmad Valupi',
            'acc_number'        => 0241130116,
            'gender'            => 'Male',
            'photo'             => 'MTRT1596.JPG',
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
