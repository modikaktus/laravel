<?php

use Illuminate\Database\Seeder;

class JenisPegawaiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenisPegawai = array(
            array( 'nama' => 'PNS Pusat yg bekerja di Departemen/Lembaga' ),
            array( 'nama' => 'PNS Pusat DPB di Instansi lain' ),
            array( 'nama' => 'PNS Pusat DPK di Instansi lain' ),
            array( 'nama' => 'PNS Pusat DPB di Pemerintah Provinsi' ),
            array( 'nama' => 'PNS Pusat DPK di Pemerintah Provinsi' ),
            array( 'nama' => 'PNS Pusat DPB di Pemerintah Kabupaten/Kota' ),
            array( 'nama' => 'PNS Pusat DPK di Pemerintah Kabupaten/Kota' ),
            array( 'nama' => 'PNS Pusat DPB di BUMN/Badan lain' ),
            array( 'nama' => 'PNS Pusat DPK di BUMN/Badan lain' ),
            array( 'nama' => 'PNS Daerah Provinsi yg bekerja di Provinsi' ),
            array( 'nama' => 'PNS Daerah Provinsi DPB di Instansi lain' ),
            array( 'nama' => 'PNS Daerah Provinsi DPK di Instansi lain' ),
            array( 'nama' => 'PNS Daerah Provinsi DPB di BUMN/BUMD' ),
            array( 'nama' => 'PNS Daerah Provinsi DPK di BUMN/BUMD' ),
            array( 'nama' => 'PNS Daerah Kab./Kota yg bekerja di Kab./Kota' ),
            array( 'nama' => 'PNS Daerah Kab./Kota DPB di Instansi lain' ),
            array( 'nama' => 'PNS Daerah Kab./Kota DPK di Instansi lain' ),
            array( 'nama' => 'PNS Daerah Kab./Kota DPB di BUMN/BUMD' ),
            array( 'nama' => 'PNS Daerah Kab./Kota DPK di BUMN/BUMD' ),
        );

        foreach ($jenisPegawai as $item) {
            DB::table('jenis_pegawai')->insert([
                'nama' => $item['nama'],
            ]);
        }
    }
}
