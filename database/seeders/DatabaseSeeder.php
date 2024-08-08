<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Equipo;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      
        \App\Models\User::factory(50)->create();
        \App\Models\Sucursal::factory(50)->create();
        Equipo::factory(50)->create();

            
    }
}
