<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class materielSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materiels = [
            // Famille Bâtiment
            ['famille' => 'Bâtiment', 'type' => 'Aération'],
            ['famille' => 'Bâtiment', 'type' => 'Éclairage'],
            ['famille' => 'Bâtiment', 'type' => 'Chauffage'],
            ['famille' => 'Bâtiment', 'type' => 'Fenêtre'],
            ['famille' => 'Bâtiment', 'type' => 'Mur'],
            ['famille' => 'Bâtiment', 'type' => 'Plafond'],
            ['famille' => 'Bâtiment', 'type' => 'Porte'],
            ['famille' => 'Bâtiment', 'type' => 'Prise de courant'],
            ['famille' => 'Bâtiment', 'type' => 'Prise réseau'],
            ['famille' => 'Bâtiment', 'type' => 'Sol'],

            // Famille Informatique
            ['famille' => 'Informatique', 'type' => 'Clavier'],
            ['famille' => 'Informatique', 'type' => 'Écran'],
            ['famille' => 'Informatique', 'type' => 'PC portable'],
            ['famille' => 'Informatique', 'type' => 'Souris'],
            ['famille' => 'Informatique', 'type' => 'Unité centrale'],
            ['famille' => 'Informatique', 'type' => 'Vidéo projecteur'],

            // Famille Mobilier
            ['famille' => 'Mobilier', 'type' => 'Armoire'],
            ['famille' => 'Mobilier', 'type' => 'Chaise'],
            ['famille' => 'Mobilier', 'type' => 'Table'],
        ];

        // DB::table('materiel')->insert($materiels);
        foreach ($materiels as $materiel) {
            DB::table('materiels')->insert([
                'famille' => $materiel['famille'],
                'type' => $materiel['type'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    
    }
}
