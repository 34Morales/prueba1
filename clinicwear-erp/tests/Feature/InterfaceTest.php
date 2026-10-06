<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class InterfaceTest extends TestCase
{
    use RefreshDatabase;

    public function test_all_store_pages_render_with_the_shared_interface(): void
    {
        foreach (['/', '/women', '/men', '/scrubs', '/lab-coats', '/accessories', '/offers', '/contact'] as $path) {
            $this->get($path)->assertOk()
                ->assertSee('css/design-system.css', false)
                ->assertSee('id="store-navigation"', false)
                ->assertSee('id="main-content"', false);
        }
    }

    public function test_dashboard_displays_the_authenticated_accounts_real_details(): void
    {
        $user = User::factory()->create(['name' => 'Interface Test', 'email' => 'interface@example.test']);

        $this->actingAs($user)->get('/dashboard')->assertOk()
            ->assertSee('Good to see you, Interface Test.')
            ->assertSee('interface@example.test')
            ->assertSee('id="account-sidebar"', false)
            ->assertSee('Account details');
    }

    public function test_profile_preserves_update_and_delete_forms_in_the_new_layout(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user)->get('/profile')->assertOk()
            ->assertSee('id="security"', false)
            ->assertSee('name="_method" value="patch"', false)
            ->assertSee('name="_method" value="put"', false)
            ->assertSee('name="_method" value="delete"', false)
            ->assertSee('aria-labelledby="confirm-user-deletion-title"', false);
    }

    public function test_account_pages_remain_protected_for_guests(): void
    {
        $this->get('/dashboard')->assertRedirect('/login');
        $this->get('/profile')->assertRedirect('/login');
    }
}
