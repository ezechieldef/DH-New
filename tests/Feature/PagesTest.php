<?php

namespace Tests\Feature;

use Tests\TestCase;

class PagesTest extends TestCase
{
    /** @test */
    public function home_page_loads()
    {
        $this->get('/fr')->assertStatus(200);
    }

    /** @test */
    public function faq_page_loads()
    {
        $this->get('/fr/faq')->assertStatus(200);
    }
}