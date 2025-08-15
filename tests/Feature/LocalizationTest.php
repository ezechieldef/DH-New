<?php

namespace Tests\Feature;

use Tests\TestCase;

class LocalizationTest extends TestCase
{
    /** @test */
    public function fr_home_works()
    {
        $this->get('/fr')->assertStatus(200);
    }

    /** @test */
    public function en_home_works()
    {
        $this->get('/en')->assertStatus(200);
    }
}