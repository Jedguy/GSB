<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SecteurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('secteur')->insert(array(
            array(
                'SEC_CODE' => 'E',
                'SEC_LIBELLE' => 'Est',
            ),
            array(
                'SEC_CODE' => 'N',
                'SEC_LIBELLE' => 'Nord',
            ),
            array(
                'SEC_CODE' => 'O',
                'SEC_LIBELLE' => 'Ouest',
            ),
            array(
                'SEC_CODE' => 'P',
                'SEC_LIBELLE' => 'Paris centre',
            ),
            array(
                'SEC_CODE' => 'S',
                'SEC_LIBELLE' => 'Sud',
            ),
            ));
    }
}
