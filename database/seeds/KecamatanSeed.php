<?php

use Illuminate\Database\Seeder;

class KecamatanSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datas = [
            'KENCONG', 'GUMUK MAS', 'PUGER', 'WULUHAN', 'AMBULU', 'TEMPUREJO',
            'SILO', 'MAYANG', 'MUMBULSARI', 'JENGGAWAH', 'AJUNG', 'RAMBIPUJI',
            'BALUNG', 'UMBULSARI', 'SEMBORO', 'JOMBANG', 'SUMBER BARU', 'TANGGUL',
            'BANGSALSARI', 'PANTI', 'SUKORAMBI', 'ARJASA', 'PAKUSARI', 'KALISAT',
            'LEDOKOMBO', 'SUMBERJAMBE', 'SUKOWONO', 'JELBUK',
            'KALIWATES', 'SUMBERSARI', 'PATRANG',
        ];

        foreach ($datas as $data) {
            \App\Models\Kecamatan::create([
                'name' => $data
            ]);
        }
    }
}
