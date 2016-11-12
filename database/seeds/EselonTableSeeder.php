<?php

use Illuminate\Database\Seeder;

class EselonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $eselon = array(
            array( 'nama' => 'Eselon I' ),
            array( 'nama' => 'Eselon II' ),
            array( 'nama' => 'Eselon III' ),
            array( 'nama' => 'Eselon IV' ),
        );

        foreach ($eselon as $item) {
            DB::table('eselon')->insert([
                'nama' => $item['nama'],
            ]);
        }
    }
}
