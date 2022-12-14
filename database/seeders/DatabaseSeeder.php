<?php

namespace Database\Seeders;

use App\Models\MataPelajaran;
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
        $this->call([UserSeeder::class]);
        $this->call([SiswaSeeder::class]);
        $this->call([MataPelajaranSeeder::class]);
        $this->call([NilaiSeeder::class]);
        // $this->call(SiswaSeeder::class);
        // $this->call(MataPelajaranSeeder::class);
        // $this->call(NilaiSeeder::class);
    }
}
