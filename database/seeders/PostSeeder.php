<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create tags first
        $tags = [
            ['name' => 'Laravel', 'color' => '#FF2D20'],
            ['name' => 'Vue.js', 'color' => '#4FC08D'],
            ['name' => 'PHP', 'color' => '#777BB4'],
            ['name' => 'JavaScript', 'color' => '#F7DF1E'],
            ['name' => 'Web Development', 'color' => '#3B82F6'],
            ['name' => 'Mobile', 'color' => '#10B981'],
            ['name' => 'E-commerce', 'color' => '#8B5CF6'],
            ['name' => 'SEO', 'color' => '#F59E0B'],
        ];

        foreach ($tags as $tagData) {
            Tag::firstOrCreate(['name' => $tagData['name']], $tagData);
        }

        // Get first user as author
        $author = User::first();
        if (!$author) {
            // Create a default author if none exists
            $author = User::create([
                'name' => 'Administrateur',
                'email' => 'admin@d-harvest.com',
                'password' => bcrypt('password'),
            ]);
        }

        $posts = [
            [
                'title' => 'Les tendances du développement web en 2024',
                'excerpt' => 'Découvrez les dernières tendances et technologies qui façonnent le développement web moderne.',
                'content' => 'Le développement web évolue constamment. En 2024, nous observons plusieurs tendances majeures qui redéfinissent la manière dont nous créons des applications web...',
                'status' => 'published',
                'published_at' => now()->subDays(10),
                'author_id' => $author->id,
                'tags' => ['Laravel', 'Vue.js', 'Web Development'],
            ],
            [
                'title' => 'Optimiser les performances de votre site e-commerce',
                'excerpt' => 'Guide pratique pour améliorer la vitesse et l\'expérience utilisateur de votre boutique en ligne.',
                'content' => 'La performance d\'un site e-commerce est cruciale pour le taux de conversion. Voici nos conseils pour optimiser votre boutique en ligne...',
                'status' => 'published',
                'published_at' => now()->subDays(5),
                'author_id' => $author->id,
                'tags' => ['E-commerce', 'SEO', 'Web Development'],
            ],
            [
                'title' => 'Vue.js vs React : Quel framework choisir ?',
                'excerpt' => 'Comparaison détaillée entre Vue.js et React pour vous aider à faire le bon choix pour votre projet.',
                'content' => 'Le choix du framework frontend est crucial pour le succès de votre projet. Analysons les avantages et inconvénients de Vue.js et React...',
                'status' => 'published',
                'published_at' => now()->subDays(2),
                'author_id' => $author->id,
                'tags' => ['Vue.js', 'JavaScript', 'Web Development'],
            ],
        ];

        foreach ($posts as $postData) {
            $tagNames = $postData['tags'];
            unset($postData['tags']);

            $post = Post::firstOrCreate(
                ['title' => $postData['title']],
                $postData
            );

            // Attach tags
            $tagIds = Tag::whereIn('name', $tagNames)->pluck('id');
            $post->tags()->sync($tagIds);
        }
    }
}
