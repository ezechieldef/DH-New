<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'question' => 'Quels types de services proposez-vous ?',
                'answer' => 'Nous proposons une gamme complète de services de développement web et mobile, incluant la création de sites web, d\'applications mobiles, de solutions e-commerce et de consulting IT.',
                'category' => 'services',
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'question' => 'Combien de temps prend un projet de développement web ?',
                'answer' => 'La durée dépend de la complexité du projet. Un site vitrine simple prend généralement 2-4 semaines, tandis qu\'une application web complexe peut prendre 2-6 mois.',
                'category' => 'process',
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'question' => 'Proposez-vous un support après livraison ?',
                'answer' => 'Oui, nous offrons un support technique et une maintenance continue pour tous nos projets. Nous proposons différents plans de support adaptés à vos besoins.',
                'category' => 'support',
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'question' => 'Comment calculez-vous le prix d\'un projet ?',
                'answer' => 'Nos tarifs sont basés sur la complexité, les fonctionnalités requises et le temps de développement estimé. Nous fournissons toujours un devis détaillé avant de commencer.',
                'category' => 'pricing',
                'is_active' => true,
                'sort_order' => 4,
            ],
            [
                'question' => 'Travaillez-vous avec des clients internationaux ?',
                'answer' => 'Absolument ! Nous travaillons avec des clients dans le monde entier. Notre équipe est habituée à collaborer à distance et dans différents fuseaux horaires.',
                'category' => 'général',
                'is_active' => true,
                'sort_order' => 5,
            ],
            [
                'question' => 'Quelles technologies utilisez-vous ?',
                'answer' => 'Nous utilisons les technologies les plus récentes et éprouvées : Laravel, Vue.js, React, Node.js, PHP, JavaScript, et bien d\'autres selon les besoins du projet.',
                'category' => 'services',
                'is_active' => true,
                'sort_order' => 6,
            ],
        ];

        foreach ($faqs as $faqData) {
            Faq::firstOrCreate(
                ['question' => $faqData['question']],
                $faqData
            );
        }

        // Create additional FAQs using factory
        Faq::factory(10)->active()->create();
    }
}
