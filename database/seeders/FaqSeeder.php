<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        $faqs = [
            ['question'=>'Combien de temps pour développer une application ?','reponse'=>"Selon complexité : MVP 4-8 semaines, solution complète 3-6 mois.","ordre"=>1],
            ['question'=>'Travaillez-vous avec des clients hors Bénin ?','reponse'=>"Oui, collaboration internationale (visioconférences, outils de suivi).","ordre"=>2],
            ['question'=>'Quelles technologies utilisez-vous ?','reponse'=>"Principalement Laravel, Vue.js, Tailwind, APIs REST, conteneurisation Docker.","ordre"=>3],
            ['question'=>'Offrez-vous une maintenance ?','reponse'=>"Oui : correctifs, mises à jour sécurité, évolutions fonctionnelles.","ordre"=>4],
        ];
        foreach ($faqs as $f) {
            Faq::firstOrCreate(['question'=>$f['question']], $f);
        }
    }
}