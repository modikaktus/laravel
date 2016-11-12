<?php

use Illuminate\Database\Seeder;

class PendidikanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pendidikan = array(
            array( 'nama' => 'SD atau sederajat' ),
            array( 'nama' => 'SMP atau sederajat' ),
            array( 'nama' => 'SMA atau sederajat' ),
            array( 'nama' => 'D-1/Diploma' ),
            array( 'nama' => 'D-2/Diploma' ),
            array( 'nama' => 'D-3/Diploma' ),
            array( 'nama' => 'D-4/Sarjana' ),
            array( 'nama' => 'S-1/Sarjana' ),
            array( 'nama' => 'S-2/Magister' ),
            array( 'nama' => 'S-3/Doktor' ),
        );

        foreach ($pendidikan as $item) {
            DB::table('pendidikan')->insert([
                'nama' => $item['nama'],
            ]);
        }
    }
}
