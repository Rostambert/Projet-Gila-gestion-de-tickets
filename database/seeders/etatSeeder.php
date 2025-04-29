<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class etatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $etats=[
            ['description' => 'Ouvert'],
            ['description' => 'Pris en charge'],
            ['description' => 'Fermé'],
        ];

        foreach ($etats as $etat) {
            DB::table('etats')->insert([
                'description' => $etat['description'],
                
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}