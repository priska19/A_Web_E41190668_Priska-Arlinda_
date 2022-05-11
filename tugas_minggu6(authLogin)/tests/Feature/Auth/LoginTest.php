<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class LoginTest extends TestCase
{
   
    use RefreshDatabase;

    /** @test */
    public function test_example()
    {
        //$response = $this->get('/');
        //$response->assertStatus(200);

        // Kita memiliki 1 user terdaftar
        $user = User::create([
            'name'     => 'pinka',
            'username' => 'priska arlinda',
            'email'    => 'username@example.net',
            'role'      => 1,
            'password' => bcrypt('secret'),
        ]);

        if (!$user){
            $this->assertTrue(false);
        }
        $this->assertTrue(true);
 
        // // Kunjungi halaman '/login'
        // $this->visit('/login');

        // // Submit form login dengan email dan password yang tepat
        // $this->submitForm('Login', [
        //     'email'    => 'username@example.net',
        //     'password' => 'secret',
        // ]);

        // // Lihat halaman ter-redirect ke url '/home' (login sukses).
        // $this->seePageIs('/home');

        // // Kita melihat halaman tulisan "Dashboard" pada halaman itu.
        // $this->seeText('Dashboard');
    }
}
