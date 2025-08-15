<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Faq;

class JsonLdTest extends TestCase
{
    /** @test */
    public function faq_page_contains_json_ld()
    {
        Faq::factory()->create(['actif'=>true]);
        $this->get('/fr/faq')
            ->assertSee('"@type":"FAQPage"', false);
    }
}