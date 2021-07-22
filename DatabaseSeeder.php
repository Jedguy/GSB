<?php

namespace Database\Seeders;

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
        $this->call(FamilleSeeder::class);
        $this->call(LaboSeeder::class);
        $this->call(MedicamentSeeder::class);
        $this->call(OffrirSeeder::class);
        $this->call(PraticienSeeder::class);
        $this->call(Rapport_VisiteSeeder::class);
        $this->call(RegionSeeder::class);
        $this->call(SecteurSeeder::class);
        $this->call(SpecialiteSeeder::class);
        $this->call(TravaillerSeeder::class);
        $this->call(Type_PraticienSeeder::class);
        $this->call(VisiteurSeeder::class);
       }
}
