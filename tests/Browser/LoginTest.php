<?php

use App\Models\User;

test('Login a user', function (): void {
    $user = User::factory()->create(['password' => '1234569887']);
    visit('/login')
        ->fill('email', $user->email)
        ->fill('password', '1234569887')
        ->click('@login-button')
        ->assertPathIs('/');

    $this->assertAuthenticated();

});

it('Logout a user', function (): void {
    $user = User::factory()->create();
    $this->actingAs($user);
    visit('/')
        ->click('Log out')
        ->assertPathIs('/');

    $this->assertGuest();

});
