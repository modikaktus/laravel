<?php

use Illuminate\Database\Seeder;

class PegawaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pegawai = array(
            array( 'nip' => 'something', 'nama' => 'something' ),
        );

        foreach ($pegawai as $item) {
            DB::table('pegawai')->insert([
                'nip'  => $item['nip'],
                'nama' => $item['nama'],
            ]);
        }
    }
}
