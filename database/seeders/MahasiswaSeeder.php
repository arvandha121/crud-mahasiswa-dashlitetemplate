<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mahasiswa')->insert(
            [
                'nim'=>'2041720134',
                'nama'=>'Arief Nauvan Ramadha',
                'tanggal_lahir'=>'2001-11-20',
                'jenis_kelamin'=>'Laki-laki',
                'alamat'=>'Kauman',
                'kota'=>'Nganjuk',
                'created_at'=>date('Y-m-d H:i:s')
            ]
        );
        DB::table('mahasiswa')->insert(
            [
                'nim'=>'2041720130',
                'nama'=>'Ahmad Rafif Alaudin',
                'tanggal_lahir'=>'2002-01-12',
                'jenis_kelamin'=>'Laki-laki',
                'alamat'=>'Pesantren',
                'kota'=>'Kediri',
                'created_at'=>date('Y-m-d H:i:s')
            ]
        );
        DB::table('mahasiswa')->insert(
            [
                'nim'=>'2041720010',
                'nama'=>'Taufik Anwar',
                'tanggal_lahir'=>'2001-08-15',
                'jenis_kelamin'=>'Laki-laki',
                'alamat'=>'Dau',
                'kota'=>'Malang',
                'created_at'=>date('Y-m-d H:i:s')
            ]
        );
        DB::table('mahasiswa')->insert(
            [
                'nim'=>'2041720098',
                'nama'=>'Alun Mega',
                'tanggal_lahir'=>'2001-03-10',
                'jenis_kelamin'=>'Perempuan',
                'alamat'=>'Rejoso',
                'kota'=>'Nganjuk',
                'created_at'=>date('Y-m-d H:i:s')
            ]
        );
        DB::table('mahasiswa')->insert(
            [
                'nim'=>'2041720016',
                'nama'=>'Atmayanti',
                'tanggal_lahir'=>'2003-03-15',
                'jenis_kelamin'=>'Perempuan',
                'alamat'=>'Ds Bandung',
                'kota'=>'Tulungagung',
                'created_at'=>date('Y-m-d H:i:s')
            ]
        );
        DB::table('mahasiswa')->insert(
            [
                'nim'=>'2041720015',
                'nama'=>'Muchammad Rizal Gusnanda Atmaja',
                'tanggal_lahir'=>'2003-10-12',
                'jenis_kelamin'=>'Laki-laki',
                'alamat'=>'Ds Dawuhan',
                'kota'=>'Trenggalek',
                'created_at'=>date('Y-m-d H:i:s')
            ]
        );
        DB::table('mahasiswa')->insert(
            [
                'nim'=>'2041720100',
                'nama'=>'Venny Meida Hersianty',
                'tanggal_lahir'=>'2002-01-11',
                'jenis_kelamin'=>'Perempuan',
                'alamat'=>'Lowokwaru',
                'kota'=>'Malang',
                'created_at'=>date('Y-m-d H:i:s')
            ]
        );
    }
}
