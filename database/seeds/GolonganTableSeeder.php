<?php

use Illuminate\Database\Seeder;

class GolonganTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $golongan = array(
            array(
                'pangkat'  => 'Juru Muda',
                'golongan' => 'I',
                'ruang'    => 'A',
                'urutan'   => 1,
            ),
            array(
                'pangkat'  => 'Juru Muda Tingkat I',
                'golongan' => 'I',
                'ruang'    => 'B',
                'urutan'   => 2,
            ),
            array(
                'pangkat'  => 'Juru',
                'golongan' => 'I',
                'ruang'    => 'C',
                'urutan'   => 3,
            ),
            array(
                'pangkat'  => 'Juru Tingkat I',
                'golongan' => 'I',
                'ruang'    => 'D',
                'urutan'   => 4,
            ),

            array(
                'pangkat'  => 'Pengatur Muda',
                'golongan' => 'II',
                'ruang'    => 'A',
                'urutan'   => 5,
            ),
            array(
                'pangkat'  => 'Pengatur Muda Tingkat I',
                'golongan' => 'II',
                'ruang'    => 'B',
                'urutan'   => 6,
            ),
            array(
                'pangkat'  => 'Pengatur',
                'golongan' => 'II',
                'ruang'    => 'C',
                'urutan'   => 7,
            ),
            array(
                'pangkat'  => 'Pengatur Tingkat I',
                'golongan' => 'II',
                'ruang'    => 'D',
                'urutan'   => 8,
            ),

            array(
                'pangkat'  => 'Penata Muda',
                'golongan' => 'III',
                'ruang'    => 'A',
                'urutan'   => 9,
            ),
            array(
                'pangkat'  => 'Penata Muda Tingkat I',
                'golongan' => 'III',
                'ruang'    => 'B',
                'urutan'   => 10,
            ),
            array(
                'pangkat'  => 'Penata',
                'golongan' => 'III',
                'ruang'    => 'C',
                'urutan'   => 11,
            ),
            array(
                'pangkat'  => 'Penata Tingkat I',
                'golongan' => 'III',
                'ruang'    => 'D',
                'urutan'   => 12,
            ),

            array(
                'pangkat'  => 'Pembina',
                'golongan' => 'IV',
                'ruang'    => 'A',
                'urutan'   => 13,
            ),
            array(
                'pangkat'  => 'Pembina Tingkat I',
                'golongan' => 'IV',
                'ruang'    => 'B',
                'urutan'   => 14,
            ),
            array(
                'pangkat'  => 'Pembina Utama Muda',
                'golongan' => 'IV',
                'ruang'    => 'C',
                'urutan'   => 15,
            ),
            array(
                'pangkat'  => 'Pembina Utama Madya',
                'golongan' => 'IV',
                'ruang'    => 'D',
                'urutan'   => 16,
            ),
            array(
                'pangkat'  => 'Pembina Utama',
                'golongan' => 'IV',
                'ruang'    => 'E',
                'urutan'   => 17,
            ),
        );

        foreach ($golongan as $item) {
            DB::table('golongan')->insert([
                'pangkat'  => $item['pangkat'],
                'golongan' => $item['golongan'],
                'ruang'    => $item['ruang'],
                'urutan'   => $item['urutan'],
            ]);
        }
    }
}
