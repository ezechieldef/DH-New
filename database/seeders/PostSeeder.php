<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        $posts = [
            [
                'titre' => 'Pourquoi investir dans une application sur mesure ?',
                'excerpt' => 'Les avantages stratégiques d’une solution adaptée.',
                'contenu' => '<p>Une application sur mesure s’aligne sur vos processus internes...</p>',
                'status' => 'publie',
                'publie_at' => now()->subDays(5)
            ],
            [
                'titre' => 'Optimiser la performance de son application Laravel',
                'excerpt' => 'Techniques clés pour un backend rapide.',
                'contenu' => '<p>Cache, optimisation requêtes, files, CDN...</p>',
                'status' => 'publie',
                'publie_at' => now()->subDays(3)
            ],
            [
                'titre' => 'Structurer un backlog produit efficace',
                'excerpt' => 'Astuces pour prioriser les fonctionnalités.',
                'contenu' => '<p>Découpage en user stories, valeur business, risques...</p>',
                'status' => 'publie',
                'publie_at' => now()->subDay()
            ],
        ];

        foreach ($posts as $p) {
            Post::firstOrCreate(['slug'=>Str::slug($p['titre'])], $p);
        }
    }
}