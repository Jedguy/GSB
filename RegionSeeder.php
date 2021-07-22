<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RegionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('region')->insert(array(
            array(
                'REG_CODE' => 'AL',
                'SEC_CODE' => 'E',
                'REG_NOM' => 'Alsace Lorraine',
            ),
            array(
                'REG_CODE' => 'AQ',
                'SEC_CODE' => 'S',
                'REG_NOM' => 'Aquitaine',
            ),
            array(
                'REG_CODE' => 'AU',
                'SEC_CODE' => 'P',
                'REG_NOM' => 'Auvergne',
            ),
            array(
                'REG_CODE' => 'BG',
                'SEC_CODE' => 'O',
                'REG_NOM' => 'Bretagne',
            ),
            array(
                'REG_CODE' => 'BN',
                'SEC_CODE' => 'O',
                'REG_NOM' => 'Basse Normandie',
            ),
            array(
                'REG_CODE' => 'BO',
                'SEC_CODE' => 'E',
                'REG_NOM' => 'Bourgogne',
            ),
            array(
                'REG_CODE' => 'CA',
                'SEC_CODE' => 'N',
                'REG_NOM' => 'Champagne Ardennes',
            ),
            array(
                'REG_CODE' => 'CE',
                'SEC_CODE' => 'P',
                'REG_NOM' => 'Centre',
            ),
            array(
                'REG_CODE' => 'FC',
                'SEC_CODE' => 'E',
                'REG_NOM' => 'Franche Comté',
            ),
            array(
                'REG_CODE' => 'HN',
                'SEC_CODE' => 'N',
                'REG_NOM' => 'Haute Normandie',
            ),
            array(
                'REG_CODE' => 'IF',
                'SEC_CODE' => 'P',
                'REG_NOM' => 'Ile de France',
            ),
            array(
                'REG_CODE' => 'LG',
                'SEC_CODE' => 'S',
                'REG_NOM' => 'Languedoc',
            ),
            array(
                'REG_CODE' => 'LI',
                'SEC_CODE' => 'P',
                'REG_NOM' => 'Limousin',
            ),
            array(
                'REG_CODE' => 'MP',
                'SEC_CODE' => 'S',
                'REG_NOM' => 'Midi Pyrénées',
            ),
            array(
                'REG_CODE' => 'NP',
                'SEC_CODE' => 'N',
                'REG_NOM' => 'Nord Pas de Calais',
            ),
            array(
                'REG_CODE' => 'PA',
                'SEC_CODE' => 'S',
                'REG_NOM' => 'Provence Alpes Côte d\'Azur',
            ),
            array(
                'REG_CODE' => 'PC',
                'SEC_CODE' => 'O',
                'REG_NOM' => 'Poitou Charente',
            ),
            array(
                'REG_CODE' => 'PI',
                'SEC_CODE' => 'N',
                'REG_NOM' => 'Picardie',
            ),
            array(
                'REG_CODE' => 'PL',
                'SEC_CODE' => 'O',
                'REG_NOM' => 'Pays de Loire',
            ),
            array(
                'REG_CODE' => 'RA',
                'SEC_CODE' => 'E',
                'REG_NOM' => 'Rhône Alpes',
            ),
            array(
                'REG_CODE' => 'RO',
                'SEC_CODE' => 'S',
                'REG_NOM' => 'Roussillon',
            ),
            array(
                'REG_CODE' => 'VD',
                'SEC_CODE' => 'O',
                'REG_NOM' => 'Vendée',
            ),
        ));
    }
}
