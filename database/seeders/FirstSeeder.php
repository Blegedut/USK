<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\Identitas;
use App\Models\Kategori;
use App\Models\Penerbit;
use App\Models\User;
use Illuminate\Database\Seeder;

class FirstSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'kode' => '123',
            'nis' => '123456',
            'fullname' => 'Agus Prasetyo',
            'username' => 'Agus',
            'password' => bcrypt('password'),
            'kelas' => '12',
            'alamat' => 'asfasdf',
            'verif' => 'Verified',
            'role' => 'user',
            'join_date' => '2023-01-16',
            'foto' => ''
        ]);
        User::create([
            'kode' => '321',
            'fullname' => 'Dani Prasetyo',
            'username' => 'Dani',
            'password' => bcrypt('password'),
            'alamat' => 'asfasdf',
            'verif' => 'Verified',
            'role' => 'admin',
            'join_date' => '2023-01-16',
            'foto' => ''
        ]);
        User::create([
            'kode' => '456',
            'nis' => '145145',
            'fullname' => 'Bambang Prasetyo',
            'username' => 'Bambang',
            'password' => bcrypt('password'),
            'kelas' => '12',
            'alamat' => 'asfasdf',
            'verif' => 'Verified',
            'role' => 'user',
            'join_date' => '2023-01-16',
            'foto' => ''
        ]);
        Kategori::create([
            'kode' => '123',
            'name' => 'Umum',
        ]);
        Kategori::create([
            'kode' => '321',
            'name' => 'Sains',
        ]);
        Kategori::create([
            'kode' => '234',
            'name' => 'Sejarah',
        ]);
        Penerbit::create([
            'kode' => '123',
            'name' => 'Erlangga',
        ]);
        Penerbit::create([
            'kode' => '321',
            'name' => 'Surya Media',
        ]);
        Penerbit::create([
            'kode' => '234',
            'name' => 'Budi Asih',
        ]);
        Buku::create([
            'judul_buku' => 'Jelajah Indonesia' ,
            'kategori_id' => '3' ,
            'penerbit_id' => '1' ,
            'pengarang' => 'Puspa' ,
            'tahun_terbit' => '2013' ,
            'isbn' => '123124531' ,
            'j_buku_baik' => '5' ,
            'j_buku_rusak' => '5' ,
        ]);
        Buku::create([
            'judul_buku' => 'Samudra' ,
            'kategori_id' => '2' ,
            'penerbit_id' => '2' ,
            'pengarang' => 'Kamil' ,
            'tahun_terbit' => '2013' ,
            'isbn' => '321321131' ,
            'j_buku_baik' => '5' ,
            'j_buku_rusak' => '5' ,
        ]);
        Buku::create([
            'judul_buku' => 'Lingkungan' ,
            'kategori_id' => '1' ,
            'penerbit_id' => '3' ,
            'pengarang' => 'Jamal' ,
            'tahun_terbit' => '2013' ,
            'isbn' => '123123123' ,
            'j_buku_baik' => '5' ,
            'j_buku_rusak' => '5' ,
        ]);
        Identitas::create([
            'name' => 'SMKN 10 JKT' ,
            'alamat' => 'jl. smea 6' ,
            'email' => 'smkn10@mail.com' ,
            'nomor_hp' => '08123453232' ,
        ]);
    }
}
