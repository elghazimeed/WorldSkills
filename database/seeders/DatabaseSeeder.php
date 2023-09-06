<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Medecin::factory()->count(10)->create(); 
        \App\Models\Patient::factory()->count(10)->create(); 
        \App\Models\Department::factory()->count(10)->create(); 
        \App\Models\Infirmier::factory()->count(10)->create(); 
        \App\Models\Assistante::factory()->count(10)->create(); 
        \App\Models\Employe::factory()->count(10)->create(); 
        \App\Models\Consultation::factory()->count(10)->create(); 
        \App\Models\Operation::factory()->count(10)->create(); 

    }
}
