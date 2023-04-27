<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i = 1; $i < 11; $i++) {
            DB::table('clients')->insert([
                'societe' => 'Société ' . $i,
                'nom' => 'Nom' . $i,
                'prenom' => 'Prénom' . $i,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
                ]);
        }
    }
}
