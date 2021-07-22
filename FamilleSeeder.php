<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class FamilleSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('famille')->insert(array(
            array(
                'FAM_CODE' => 'AA',
                'FAM_LIBELLE' => 'Antalgiques en association',
            ),
            array(
                'FAM_CODE' => 'AAA',
                'FAM_LIBELLE' => 'Antalgiques antipyrétiques en association',
            ),
            array(
                'FAM_CODE' => 'AAC',
                'FAM_LIBELLE' => 'Antidépresseur d\'action centrale',
            ),
            array(
                'FAM_CODE' => 'AAH',
                'FAM_LIBELLE' => 'Antivertigineux antihistaminique H1',
            ),
            array(
                'FAM_CODE' => 'ABA',
                'FAM_LIBELLE' => 'Antibiotique antituberculeux',
            ),
            array(
                'FAM_CODE' => 'ABC',
                'FAM_LIBELLE' => 'Antibiotique antiacnéique local',
            ),
            array(
                'FAM_CODE' => 'ABP',
                'FAM_LIBELLE' => 'Antibiotique de la famille des béta-lactamines (pénicilline A)',
            ),
            array(
                'FAM_CODE' => 'AFC',
                'FAM_LIBELLE' => 'Antibiotique de la famille des cyclines',
            ),
            array(
                'FAM_CODE' => 'AFM',
                'FAM_LIBELLE' => 'Antibiotique de la famille des macrolides',
            ),
            array(
                'FAM_CODE' => 'AH',
                'FAM_LIBELLE' => 'Antihistaminique H1 local',
            ),
            array(
                'FAM_CODE' => 'AIM',
                'FAM_LIBELLE' => 'Antidépresseur imipraminique (tricyclique)',
            ),
            array(
                'FAM_CODE' => 'AIN',
                'FAM_LIBELLE' => 'Antidépresseur inhibiteur sélectif de la recapture de la sérotonine',
            ),
            array(
                'FAM_CODE' => 'ALO',
                'FAM_LIBELLE' => 'Antibiotique local (ORL)',
            ),
            array(
                'FAM_CODE' => 'ANS',
                'FAM_LIBELLE' => 'Antidépresseur IMAO non sélectif',
            ),
            array(
                'FAM_CODE' => 'AO',
                'FAM_LIBELLE' => 'Antibiotique ophtalmique',
            ),
            array(
                'FAM_CODE' => 'AP',
                'FAM_LIBELLE' => 'Antipsychotique normothymique',
            ),
            array(
                'FAM_CODE' => 'AUM',
                'FAM_LIBELLE' => 'Antibiotique urinaire minute',
            ),
            array(
                'FAM_CODE' => 'CRT',
                'FAM_LIBELLE' => 'Corticoïde, antibiotique et antifongique à usage local',
            ),
            array(
                'FAM_CODE' => 'HYP',
                'FAM_LIBELLE' => 'Hypnotique antihistaminique',
            ),
            array(
                'FAM_CODE' => 'PSA',
                'FAM_LIBELLE' => 'Psychostimulant, antiasthénique',
            ),
        ));
    }
}
