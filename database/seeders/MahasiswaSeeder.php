<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID'); // Use Indonesian locale

        $cities = [];

        foreach (range(1, 10) as $index) {
            $city = count($cities) > 0 && rand(0, 1) === 0 ? $cities[array_rand($cities)] : $faker->city;
            $cities[] = $city;

            DB::table('mahasiswa')->insert([
                'nim' => $this->generateNIM(),
                'nama' => $faker->name,
                'tanggal_lahir' => $faker->date,
                'jenis_kelamin' => $faker->randomElement(['Laki-laki', 'Perempuan']),
                'alamat' => $faker->address,
                'kota' => $city,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }

    /**
     * Generate a random 10-digit numeric NIM.
     *
     * @return string
     */
    private function generateNIM()
    {
        $digits = '1234567890';
        $nim = '';

        for ($i = 0; $i < 10; $i++) {
            $nim .= $digits[rand(0, 9)];
        }

        return $nim;
    }
}
