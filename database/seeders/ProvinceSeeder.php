<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use App\Models\Provinces;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Http::withHeaders(
            ['key' => '348f7df1af6c99775960c445bcdd4696']
        )->get('https://api.rajaongkir.com/starter/province');

        $provinces = $response['rajaongkir']['results'];

        foreach ($provinces as $province) {

            $data_province[] = [
                'id' => $province['province_id'],
                'province' => $province['province'],
            ];
        }
        Provinces::insert($data_province);
    }
}
