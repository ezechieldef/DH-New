<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;

class TelescopeAccessTest extends TestCase
{
    /** @test */
    public function guest_cannot_access_telescope_in_prod()
    {
        $this->withoutExceptionHandling();
        config(['app.env' => 'production']);
        $this->get('/telescope')->assertStatus(403);
    }

    /** @test */
    public function admin_can_access_telescope()
    {
        config(['app.env' => 'production']);
        $user = User::factory()->create();
        $user->assignRole('admin');

        $this->actingAs($user)->get('/telescope')->assertStatus(200);
    }
}