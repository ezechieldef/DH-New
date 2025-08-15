<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['titre'=>'Développement Applications Web','excerpt'=>'Applications web modernes, scalables, sécurisées.','description'=>'Conception full-stack (Laravel, Vue, APIs REST/GraphQL)...','ordre'=>1],
            ['titre'=>'Applications Mobiles','excerpt'=>'Apps natives ou hybrides performantes.','description'=>'Développement mobile (Flutter / React Native adapté si sous-projet) ...','ordre'=>2],
            ['titre'=>'Maintenance & Refonte','excerpt'=>'Amélioration continue, audit, refactoring.','description'=>'Analyse existant, optimisation performance & sécurité ...','ordre'=>3],
            ['titre'=>'Conseil Technique','excerpt'=>'Accompagnement stratégique & architecture.','description'=>'Audit architecture, choix technologiques ...','ordre'=>4],
            ['titre'=>'Intégration APIs','excerpt'=>'Connecteurs, passerelles & synchronisations.','description'=>'Intégrations tierces (paiement, SMS, ERP...)','ordre'=>5],
            ['titre'=>'UX / UI & Prototypage','excerpt'=>'Parcours fluides & interfaces engageantes.','description'=>'Ateliers, wireframes, design system.','ordre'=>6],
        ];
        foreach ($data as $d) {
            Service::firstOrCreate(['titre'=>$d['titre']], $d);
        }
    }
}