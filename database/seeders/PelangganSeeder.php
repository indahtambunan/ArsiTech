<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        \DB::table('pelanggan')->truncate();
        \DB::table('pelanggan')->insert([
            [
                'nama_depan'    => 'Pelanggan',
                'nama_belakang' => 'Kondang',
                'jenis_kelamin' => 'Pria',
                'tanggal_lahir' => '1998-12-23',
                'alamat'        => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure eius deleniti eveniet laboriosam doloribus id aut cupiditate, maiores, similique fugiat autem itaque natus nesciunt qui esse excepturi! Ipsa, doloribus unde?',
                'no_hp'         => '082235867711',
                'user_id'       => '4'
            ],
            [
                'nama_depan'    => 'Pelanggan',
                'nama_belakang' => 'Kondang 2',
                'jenis_kelamin' => 'Wanita',
                'tanggal_lahir' => '1989-12-23',
                'alamat'        => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure eius deleniti eveniet laboriosam doloribus id aut cupiditate, maiores, similique fugiat autem itaque natus nesciunt qui esse excepturi! Ipsa, doloribus unde?',
                'no_hp'         => '082472383842',
                'user_id'       => '5'
            ]
        ]);
    }
}
