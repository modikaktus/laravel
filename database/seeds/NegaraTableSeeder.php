<?php

use Illuminate\Database\Seeder;

class NegaraTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $negara = array(
            array( 'nama' => 'something', 'nama_resmi' => 'something' ),
        );

        foreach ($negara as $item) {
            DB::table('negara')->insert([
                'nama'       => $item['nama'],
                'nama_resmi' => $item['nama_resmi'],
            ]);
        }
    }
}
