<?php

namespace Database\Seeders;

// Model
use App\Models\User;
use App\Models\BukuModel;
use App\Models\KategoriModel;
use App\Models\RakModel;
// Model

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Rivaldy Nur Fachriza',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'level' => 'admin',
            'tempat_lahir' => 'Jakarta',
            'tanggal_lahir' => '1999-02-12',
            'jenis_kelamin' => 'Laki-laki',
            'alamat' => 'KP Baru',
            'telp' => '081387575916',
            // 'roles' => 'ADMIN',
            
        ]);

        User::factory(10)->create();

        RakModel::create([
            'rak_name' => 'Rak 1'
        ]);
        
        RakModel::create([
            'rak_name' => 'Rak 2'
        ]);
        
        RakModel::create([
            'rak_name' => 'Rak 3'
        ]);

        

        KategoriModel::create([
            'category_name' => 'Web Programming'
        ]);
        
        KategoriModel::create([
            'category_name' => 'Personal'
        ]);
        
        KategoriModel::create([
            'category_name' => 'Web Design'
        ]);

        BukuModel::factory(20)->create();
    }
}
