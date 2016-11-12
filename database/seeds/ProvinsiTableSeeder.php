<?php

use Illuminate\Database\Seeder;

class ProvinsiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinsi = array(
            array( 'nama' => 'Aceh' ),
            array( 'nama' => 'Sumatera Utara' ),
            array( 'nama' => 'Sumatera Barat' ),
            array( 'nama' => 'Riau' ),
            array( 'nama' => 'Jambi' ),
            array( 'nama' => 'Sumatera Selatan' ),
            array( 'nama' => 'Bengkulu' ),
            array( 'nama' => 'Lampung' ),
            array( 'nama' => 'Kepulauan Bangka Belitung' ),
            array( 'nama' => 'Kepulauan Riau' ),
            array( 'nama' => 'Dki Jakarta' ),
            array( 'nama' => 'Jawa Barat' ),
            array( 'nama' => 'Jawa Tengah' ),
            array( 'nama' => 'Di Yogyakarta' ),
            array( 'nama' => 'Jawa Timur' ),
            array( 'nama' => 'Banten' ),
            array( 'nama' => 'Bali' ),
            array( 'nama' => 'Nusa Tenggara Barat' ),
            array( 'nama' => 'Nusa Tenggara Timur' ),
            array( 'nama' => 'Kalimantan Barat' ),
            array( 'nama' => 'Kalimantan Tengah' ),
            array( 'nama' => 'Kalimantan Selatan' ),
            array( 'nama' => 'Kalimantan Timur' ),
            array( 'nama' => 'Kalimantan Utara' ),
            array( 'nama' => 'Sulawesi Utara' ),
            array( 'nama' => 'Sulawesi Tengah' ),
            array( 'nama' => 'Sulawesi Selatan' ),
            array( 'nama' => 'Sulawesi Tenggara' ),
            array( 'nama' => 'Gorontalo' ),
            array( 'nama' => 'Sulawesi Barat' ),
            array( 'nama' => 'Maluku' ),
            array( 'nama' => 'Maluku Utara' ),
            array( 'nama' => 'Papua Barat' ),
            array( 'nama' => 'Papua' ),
        );

        foreach ($provinsi as $item) {
            DB::table('provinsi')->insert([
                'nama' => $item['nama'],
            ]);
        }
    }
}
