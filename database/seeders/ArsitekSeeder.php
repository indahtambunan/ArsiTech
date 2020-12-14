<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ArsitekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \DB::table('arsitek')->truncate();
        \DB::table('arsitek')->insert([
            [
                'nik'           => '12418348138',
                'nama_depan'    => 'Arsitek',
                'nama_belakang' => 'Kondang',
                'jenis_kelamin' => 'Pria',
                'tanggal_lahir' => '1978-12-23',
                'alamat'        => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure eius deleniti eveniet laboriosam doloribus id aut cupiditate, maiores, similique fugiat autem itaque natus nesciunt qui esse excepturi! Ipsa, doloribus unde?',
                'no_hp'         => '082235867711',
                'ktp'           => '124921499124',
                'user_id'       => '2'
            ],
            [
                'nik'           => '12418348138',
                'nama_depan'    => 'Arsitek',
                'nama_belakang' => 'Kondang 2',
                'jenis_kelamin' => 'Wanita',
                'tanggal_lahir' => '1988-12-23',
                'alamat'        => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure eius deleniti eveniet laboriosam doloribus id aut cupiditate, maiores, similique fugiat autem itaque natus nesciunt qui esse excepturi! Ipsa, doloribus unde?',
                'no_hp'         => '082472383842',
                'ktp'           => '183481388124',
                'user_id'       => '3'
            ]
        ]);
    }
}
