<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    public function admin_can_login()
    {
        $response = $this->post('/login', [
            'email' => 'krishi@admin.com',
            'password' => 'admin@123',
        ]);

        $response->assertRedirect('/home');
    }
}
