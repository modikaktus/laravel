<?php

use Illuminate\Database\Seeder;

class JenisUnitKesehatanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenisUnitKesehatan = array(
            array( 'nama' => 'Rumah Sakit' ),
            array( 'nama' => 'Puskesmas' ),
            array( 'nama' => 'Poliklinik' ),
            array( 'nama' => 'Balai' ),
            array( 'nama' => 'Kantor Kesehatan Pelabuhan' ),
        );

        foreach ($jenisUnitKesehatan as $item) {
            DB::table('jenis_unit_kesehatan')->insert([
                'nama' => $item['nama'],
            ]);
        }
    }
}
