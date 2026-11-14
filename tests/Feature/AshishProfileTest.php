<?php

namespace Tests\Feature;

use Tests\TestCase;

class AshishProfileTest extends TestCase
{
    public function test_ashish_marketing_manager_profile_is_available():
    {
        $response = $this->get('/ashish-profile');

        $response->assertStatus(200);
        $response->assertSee('Ashish Chaturvedi');
        $response->assertSee('Marketing Manager');
        $response->assertSee('Digital Marketing');
        $response->assertSee('YouTube');
    }
}
