<?php

use Illuminate\Database\Seeder;

class KpTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kp = array(
            array( 'nama' => 'Kenaikan Pangkat Pilihan' ),
            array( 'nama' => 'Kenaikan Pangkat Reguler' ),
            array( 'nama' => 'Kenaikan Pangkat Anumerta' ),
            array( 'nama' => 'Kenaikan Pangkat Pengabdian' ),
            array( 'nama' => 'Kenaikan Pangkat Prajurit Wajib' ),
        );

        foreach ($kp as $item) {
            DB::table('kp')->insert([
                'nama' => $item['nama'],
            ]);
        }
    }
}
