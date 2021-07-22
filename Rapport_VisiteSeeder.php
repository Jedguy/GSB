<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class Rapport_VisiteSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rapport_visites')->insert(array(
            array(
                'VIS_MATRICULE' => 'a131',
                'RAP_NUM' => 3,
                'PRA_NUM' => 23,
                'RAP_DATE' => '2002-04-18 00:00:00',
                'RAP_BILAN' => 'Médecin curieux, à recontacter en décembre pour réunion',
                'RAP_MOTIF' => 'Actualisation annuelle',
            ),
            array(
                'VIS_MATRICULE' => 'a131',
                'RAP_NUM' => 7,
                'PRA_NUM' => 41,
                'RAP_DATE' => '2003-03-23 00:00:00',
                'RAP_BILAN' => 'RAS\r\nChangement de tel : 05 89 89 89 89',
                'RAP_MOTIF' => 'Rapport Annuel',
            ),
            array(
                'VIS_MATRICULE' => 'a17',
                'RAP_NUM' => 4,
                'PRA_NUM' => 4,
                'RAP_DATE' => '2003-05-21 00:00:00',
                'RAP_BILAN' => 'Changement de direction, redéfinition de la politique médicamenteuse, recours au générique',
                'RAP_MOTIF' => 'Baisse activité',
            ),
            array(
                'VIS_MATRICULE' => 'zzz',
                'RAP_NUM' => 9,
                'PRA_NUM' => 84,
                'RAP_DATE' => '2017-03-07 00:00:00',
                'RAP_BILAN' => 'test',
                'RAP_MOTIF' => 'thu',
            ),
            array(
                'VIS_MATRICULE' => 'zzz',
                'RAP_NUM' => 10,
                'PRA_NUM' => 12,
                'RAP_DATE' => '2017-03-07 00:00:00',
                'RAP_BILAN' => 'gtfhfg',
                'RAP_MOTIF' => 'regdf',
            ),
            array(
                'VIS_MATRICULE' => 'zzz',
                'RAP_NUM' => 12,
                'PRA_NUM' => 82,
                'RAP_DATE' => '2017-03-04 00:00:00',
                'RAP_BILAN' => 'hvjujfthgbdf',
                'RAP_MOTIF' => 'zeatgr',
            ),
            ));
    }
}
