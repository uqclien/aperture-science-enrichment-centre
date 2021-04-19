<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_dashboard_screen_can_be_rendered_for_user()
    {
        $user = User::factory()->hasSubmissions(5)->create();
        User::factory()->hasSubmissions(1)->create();

        $response = $this->actingAs($user)->get('/dashboard');

        $response->assertSee('submission/1');
        $response->assertDontSee('submission/6');
        $response->assertStatus(200);
    }

    public function test_dashboard_screen_can_be_rendered_for_admin()
    {
        User::factory()->hasSubmissions(5)->create();
        User::factory()->hasSubmissions(1)->create();
        $admin = User::factory(['is_admin' => true])->create();

        $response = $this->actingAs($admin)->get('/dashboard');

        $response->assertSee('submission/7');
        $response->assertSee('submission/12');
        $response->assertStatus(200);
    }
}
