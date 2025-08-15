<?php

namespace App\Services;

use Illuminate\Support\Collection;

class StructuredData
{
    /**
     * Generate organization structured data.
     */
    public function organization(): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => config('app.name'),
            'description' => config('app.branding.slogan'),
            'url' => config('app.url'),
            'logo' => config('app.url') . '/images/logo.png',
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'telephone' => '+33-1-23-45-67-89',
                'contactType' => 'customer service',
                'areaServed' => 'FR',
                'availableLanguage' => ['French', 'English']
            ],
            'address' => [
                '@type' => 'PostalAddress',
                'addressCountry' => 'FR',
                'addressLocality' => 'Paris',
                'addressRegion' => 'Île-de-France'
            ],
            'sameAs' => [
                'https://linkedin.com/company/d-harvest',
                'https://twitter.com/d_harvest'
            ]
        ];
    }

    /**
     * Generate services structured data.
     */
    public function services(Collection $services): array
    {
        $serviceData = [];

        foreach ($services as $service) {
            $serviceData[] = [
                '@type' => 'Service',
                'name' => $service->title,
                'description' => $service->description,
                'provider' => [
                    '@type' => 'Organization',
                    'name' => config('app.name')
                ],
                'serviceType' => $service->title,
                'url' => route('services.show', ['lang' => app()->getLocale(), 'service' => $service->slug])
            ];
        }

        return [
            '@context' => 'https://schema.org',
            '@type' => 'ItemList',
            'itemListElement' => $serviceData
        ];
    }

    /**
     * Generate FAQ structured data.
     */
    public function faq(Collection $faqs): array
    {
        $faqData = [];

        foreach ($faqs as $faq) {
            $faqData[] = [
                '@type' => 'Question',
                'name' => $faq->question,
                'acceptedAnswer' => [
                    '@type' => 'Answer',
                    'text' => $faq->answer
                ]
            ];
        }

        return [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => $faqData
        ];
    }

    /**
     * Generate breadcrumb structured data.
     */
    public function breadcrumb(array $items): array
    {
        $listItems = [];
        
        foreach ($items as $index => $item) {
            $listItems[] = [
                '@type' => 'ListItem',
                'position' => $index + 1,
                'name' => $item['name'],
                'item' => $item['url'] ?? null
            ];
        }

        return [
            '@context' => 'https://schema.org',
            '@type' => 'BreadcrumbList',
            'itemListElement' => $listItems
        ];
    }

    /**
     * Generate article structured data for blog posts.
     */
    public function article($post): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'Article',
            'headline' => $post->title,
            'description' => $post->excerpt,
            'image' => $post->featured_image ? config('app.url') . $post->featured_image : null,
            'author' => [
                '@type' => 'Person',
                'name' => $post->author->name
            ],
            'publisher' => [
                '@type' => 'Organization',
                'name' => config('app.name'),
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => config('app.url') . '/images/logo.png'
                ]
            ],
            'datePublished' => $post->published_at?->toISOString(),
            'dateModified' => $post->updated_at->toISOString(),
            'mainEntityOfPage' => [
                '@type' => 'WebPage',
                '@id' => route('blog.show', ['lang' => app()->getLocale(), 'post' => $post->slug])
            ]
        ];
    }
}