<?php

namespace Tests\Feature;

use Tests\TestCase;

class SloganTest extends TestCase
{
    /** @test */
    public function home_page_displays_slogan()
    {
        $this->get('/fr')
            ->assertSee('Des services Premium, notre standard pour vous.', false);
    }
}