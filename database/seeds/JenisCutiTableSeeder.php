<?php

use Illuminate\Database\Seeder;

class JenisCutiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenisCuti = array(
            array( 'nama' => 'Cuti Tahunan', ),
            array( 'nama' => 'Cuti Besar' ),
            array( 'nama' => 'Cuti Sakit' ),
            array( 'nama' => 'Cuti Bersalin' ),
            array( 'nama' => 'Cuti Alasan Penting' ),
            array( 'nama' => 'Cuti Di Luar Tanggungan Negara (CLTN)' ),
        );

        foreach ($jenisCuti as $item) {
            DB::table('jenis_cuti')->insert([
                'nama' => $item['nama'],
            ]);
        }
    }
}
