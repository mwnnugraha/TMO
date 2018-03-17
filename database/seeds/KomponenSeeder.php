<?php

use Illuminate\Database\Seeder;
use App\Komponen;

class KomponenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $komponen = new Komponen();
        $komponen->logo="logo-1.png";
        $komponen->profil="tkr adalah";
        $komponen->foto_kaprog="1.jpg";
        $komponen->nama_kaprog="Romi";
        $komponen->jabatan_kaprog="Kaprog TKR & TSM";
        $komponen->target_kurikulum="target capaian";
		
        $komponen->save();
    }
}
