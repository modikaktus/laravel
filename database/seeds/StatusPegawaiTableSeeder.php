<?php

use Illuminate\Database\Seeder;

class StatusPegawaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $statusPegawai = array(
            // Kelompok 1
            array( 'nama' => 'Aktif' ),
            array( 'nama' => 'CLTN' ),
            array( 'nama' => 'Tugas Belajar' ),
            array( 'nama' => 'Pemberhentian Sementara' ),
            array( 'nama' => 'Penerima Uang Tunggu' ),
            array( 'nama' => 'Prajurit Wajib' ),
            array( 'nama' => 'Pejabat Negara' ),
            array( 'nama' => 'Kepala Desa' ),
            array( 'nama' => 'Sedang dalam Proses Banding BAPEK' ),
            array( 'nama' => 'Pegawai Titipan' ),
            array( 'nama' => 'Pengungsi' ),
            array( 'nama' => 'Perpanjangan CLTN' ),
            array( 'nama' => 'PNS yang dinyatakan hilang' ),
            array( 'nama' => 'PNS kena hukuman disiplin' ),
            array( 'nama' => 'Pemindahan dalam rangka penurunan Jabatan' ),
            array( 'nama' => 'Masa Persiapan Pensiun' ),
            array( 'nama' => 'Mencapai BUP' ),

            // Kelompok 2
            array( 'nama' => 'Diberhentikan' ),
            array( 'nama' => 'Punah' ),
            array( 'nama' => 'TMS Dari Pengadaan' ),
            array( 'nama' => 'Pembatalan NIP' ),
            array( 'nama' => 'Pemberhentian tanpa hak pensiun' ),
            array( 'nama' => 'Pemberhentian dengan hak pensiun' ),
            array( 'nama' => 'Pensiun' ),
        );

        foreach ($statusPegawai as $item) {
            DB::table('status_pegawai')->insert([
                'nama' => $item['nama'],
            ]);
        }
    }
}
