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
        // seed clients table
        for ($i = 1; $i < 11; $i++) {
            DB::table('clients')->insert([
                'societe' => 'Société ' . $i,
                'nom' => 'Nom' . $i,
                'prenom' => 'Prénom' . $i,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s")
                ]);
        }

        // seed noms_de_domaine table
        for ($i = 1; $i < 11; $i++) {
            DB::table('noms_de_domaines')->insert([
                'nom_domaine' => 'Nom de domaine' . $i,
                'cout_annuel' =>  rand(10, 100),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
                'client_id' => rand(1, 10)
            ]);
        }
    }
}
