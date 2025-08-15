<?php

namespace App\Services;

use Illuminate\Support\Collection;

class StructuredData
{
    public static function organization(): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => 'D-HARVEST',
            'url' => url('/'),
            'logo' => asset('images/logo.png'),
            'slogan' => 'Des services Premium, notre standard pour vous.',
            'foundingDate' => '2020',
            'address' => [
                '@type' => 'PostalAddress',
                'addressCountry' => 'BJ'
            ],
        ];
    }

    public static function services(Collection $services): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'ItemList',
            'itemListElement' => $services->map(function ($service, $idx) {
                return [
                    '@type' => 'ListItem',
                    'position' => $idx + 1,
                    'url' => route('services.show', [app()->getLocale(), $service->slug]),
                    'item' => [
                        '@type' => 'Service',
                        'name' => $service->titre,
                        'provider' => [
                            '@type' => 'Organization',
                            'name' => 'D-HARVEST'
                        ],
                        'description' => $service->excerpt
                    ]
                ];
            })->values()->all()
        ];
    }

    public static function faq(Collection $faqs): array
    {
        return [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => $faqs->map(function ($faq) {
                return [
                    '@type' => 'Question',
                    'name' => $faq->question,
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => $faq->reponse
                    ]
                ];
            })->values()->all()
        ];
    }
}