<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SpecialiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specialite')->insert(array(
            array(
                'SPE_CODE' => 'ACP',
                'SPE_LIBELLE' => 'Anatomie et cytologie pathologiques',
            ),
            array(
                'SPE_CODE' => 'AMV',
                'SPE_LIBELLE' => 'Angéiologie, médecine vasculaire',
            ),
            array(
                'SPE_CODE' => 'ARC',
                'SPE_LIBELLE' => 'Anesthésiologie et réanimation chirurgicale',
            ),
            array(
                'SPE_CODE' => 'BM',
                'SPE_LIBELLE' => 'Biologie médicale',
            ),
            array(
                'SPE_CODE' => 'CAC',
                'SPE_LIBELLE' => 'Cardiologie et affections cardio-vasculaires',
            ),
            array(
                'SPE_CODE' => 'CCT',
                'SPE_LIBELLE' => 'Chirurgie cardio-vasculaire et thoracique',
            ),
            array(
                'SPE_CODE' => 'CG',
                'SPE_LIBELLE' => 'Chirurgie générale',
            ),
            array(
                'SPE_CODE' => 'CMF',
                'SPE_LIBELLE' => 'Chirurgie maxillo-faciale',
            ),
            array(
                'SPE_CODE' => 'COM',
                'SPE_LIBELLE' => 'Cancérologie, oncologie médicale',
            ),
            array(
                'SPE_CODE' => 'COT',
                'SPE_LIBELLE' => 'Chirurgie orthopédique et traumatologie',
            ),
            array(
                'SPE_CODE' => 'CPR',
                'SPE_LIBELLE' => 'Chirurgie plastique reconstructrice et esthétique',
            ),
            array(
                'SPE_CODE' => 'CU',
                'SPE_LIBELLE' => 'Chirurgie urologique',
            ),
            array(
                'SPE_CODE' => 'CV',
                'SPE_LIBELLE' => 'Chirurgie vasculaire',
            ),
            array(
                'SPE_CODE' => 'DN',
                'SPE_LIBELLE' => 'Diabétologie-nutrition, nutrition',
            ),
            array(
                'SPE_CODE' => 'DV',
                'SPE_LIBELLE' => 'Dermatologie et vénéréologie',
            ),
            array(
                'SPE_CODE' => 'EM',
                'SPE_LIBELLE' => 'Endocrinologie et métabolismes',
            ),
            array(
                'SPE_CODE' => 'ETD',
                'SPE_LIBELLE' => 'Evaluation et traitement de la douleur',
            ),
            array(
                'SPE_CODE' => 'GEH',
                'SPE_LIBELLE' => 'Gastro-entérologie et hépatologie (appareil digestif)',
            ),
            array(
                'SPE_CODE' => 'GMO',
                'SPE_LIBELLE' => 'Gynécologie médicale, obstétrique',
            ),
            array(
                'SPE_CODE' => 'GO',
                'SPE_LIBELLE' => 'Gynécologie-obstétrique',
            ),
            array(
                'SPE_CODE' => 'HEM',
                'SPE_LIBELLE' => 'Maladies du sang (hématologie)',
            ),
            array(
                'SPE_CODE' => 'MBS',
                'SPE_LIBELLE' => 'Médecine et biologie du sport',
            ),
            array(
                'SPE_CODE' => 'MDT',
                'SPE_LIBELLE' => 'Médecine du travail',
            ),
            array(
                'SPE_CODE' => 'MMO',
                'SPE_LIBELLE' => 'Médecine manuelle - osthéopathie',
            ),
            array(
                'SPE_CODE' => 'MN',
                'SPE_LIBELLE' => 'Médecine nucléaire',
            ),
            array(
                'SPE_CODE' => 'MPR',
                'SPE_LIBELLE' => 'Médecine physique et de réadaptation',
            ),
            array(
                'SPE_CODE' => 'MTR',
                'SPE_LIBELLE' => 'Médecine tropicale, pathologie infectieuse et tropicale',
            ),
            array(
                'SPE_CODE' => 'NEP',
                'SPE_LIBELLE' => 'Néphrologie',
            ),
            array(
                'SPE_CODE' => 'NRC',
                'SPE_LIBELLE' => 'Neurochirurgie',
            ),
            array(
                'SPE_CODE' => 'NRL',
                'SPE_LIBELLE' => 'Neurologie',
            ),
            array(
                'SPE_CODE' => 'ODM',
                'SPE_LIBELLE' => 'Orthopédie dento maxillo-faciale',
            ),
            array(
                'SPE_CODE' => 'OPH',
                'SPE_LIBELLE' => 'Ophtalmologie',
            ),
            array(
                'SPE_CODE' => 'ORL',
                'SPE_LIBELLE' => 'Oto-rhino-laryngologie',
            ),
            array(
                'SPE_CODE' => 'PEA',
                'SPE_LIBELLE' => 'Psychiatrie de l\'enfant et de l\'adolescent',
            ),
            array(
                'SPE_CODE' => 'PME',
                'SPE_LIBELLE' => 'Pédiatrie maladies des enfants',
            ),
            array(
                'SPE_CODE' => 'PNM',
                'SPE_LIBELLE' => 'Pneumologie',
            ),
            array(
                'SPE_CODE' => 'PSC',
                'SPE_LIBELLE' => 'Psychiatrie',
            ),
            array(
                'SPE_CODE' => 'RAD',
                'SPE_LIBELLE' => 'Radiologie (radiodiagnostic et imagerie médicale',
            ),
            array(
                'SPE_CODE' => 'RDT',
                'SPE_LIBELLE' => 'Radiothérapie (oncologie option radiothérapie',
            ),
            array(
                'SPE_CODE' => 'RGM',
                'SPE_LIBELLE' => 'Reproduction et gynécologie médicale',
            ),
            array(
                'SPE_CODE' => 'RHU',
                'SPE_LIBELLE' => 'Rhumatologie',
            ),
            array(
                'SPE_CODE' => 'STO',
                'SPE_LIBELLE' => 'Stomatologie',
            ),
            array(
                'SPE_CODE' => 'SXL',
                'SPE_LIBELLE' => 'Sexologie',
            ),
            array(
                'SPE_CODE' => 'TXA',
                'SPE_LIBELLE' => 'Toxicomanie et alcoologie',
            ),
            ));
    }
}
