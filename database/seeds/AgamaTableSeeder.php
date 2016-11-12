<?php

use Illuminate\Database\Seeder;

class AgamaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $agama = array(
            array( 'nama' => 'Islam' ),
            array( 'nama' => 'Kristen Katolik' ),
            array( 'nama' => 'Kristen Protestan' ),
            array( 'nama' => 'Budha' ),
            array( 'nama' => 'Hindu' ),
            array( 'nama' => 'Konghucu' ),
            array( 'nama' => 'Lainnya' ),
        );

        foreach ($agama as $item) {
            DB::table('agama')->insert([
                'nama' => $item['nama'],
            ]);
        }
    }
}
