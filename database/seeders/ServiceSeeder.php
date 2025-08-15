<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Développement Web',
                'description' => 'Création de sites web et applications web sur mesure avec les dernières technologies.',
                'content' => 'Nous développons des solutions web complètes, des sites vitrines aux applications métier complexes. Notre équipe maîtrise les frameworks modernes pour vous offrir des solutions performantes et évolutives.',
                'icon' => 'code',
                'features' => ['Responsive Design', 'SEO Optimisé', 'Performance', 'Sécurisé'],
                'price' => 2500.00,
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'Applications Mobile',
                'description' => 'Développement d\'applications mobiles natives et hybrides pour iOS et Android.',
                'content' => 'Nos applications mobiles offrent une expérience utilisateur exceptionnelle avec des performances optimales sur toutes les plateformes mobiles.',
                'icon' => 'mobile',
                'features' => ['iOS & Android', 'Interface Intuitive', 'Synchronisation Cloud', 'Notifications Push'],
                'price' => 3500.00,
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'E-commerce',
                'description' => 'Solutions e-commerce complètes pour vendre en ligne efficacement.',
                'content' => 'De la conception à la mise en ligne, nous créons des boutiques en ligne performantes qui convertissent vos visiteurs en clients.',
                'icon' => 'shopping-cart',
                'features' => ['Catalogue Produits', 'Paiement Sécurisé', 'Gestion Stock', 'Analytics'],
                'price' => 4000.00,
                'is_featured' => true,
                'is_active' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'Consulting IT',
                'description' => 'Conseil et audit de vos systèmes d\'information existants.',
                'content' => 'Nous analysons vos besoins et vous accompagnons dans la transformation digitale de votre entreprise.',
                'icon' => 'chart-line',
                'features' => ['Audit Technique', 'Recommandations', 'Formation', 'Accompagnement'],
                'price' => 1500.00,
                'is_featured' => false,
                'is_active' => true,
                'sort_order' => 4,
            ],
        ];

        foreach ($services as $serviceData) {
            Service::firstOrCreate(
                ['title' => $serviceData['title']],
                $serviceData
            );
        }
    }
}
