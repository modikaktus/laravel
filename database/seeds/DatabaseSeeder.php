<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $this->call(AgamaTableSeeder::class);
        $this->call(NegaraTableSeeder::class);
        $this->call(ProvinsiTableSeeder::class);
        $this->call(KabupatenTableSeeder::class);
        $this->call(KecamatanTableSeeder::class);
        $this->call(DesaTableSeeder::class);
        $this->call(PendidikanTableSeeder::class);
        $this->call(StatusPegawaiTableSeeder::class);
        $this->call(JenisCutiTableSeeder::class);
        $this->call(JenisPegawaiTableSeeder::class);
        $this->call(GolonganTableSeeder::class);
        $this->call(KpTableSeeder::class);
        $this->call(EselonTableSeeder::class);
        $this->call(JenisUnitKesehatanTableSeeder::class);
        $this->call(PegawaiTableSeeder::class);
    }
}
