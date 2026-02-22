<?php

test('register a user', function (): void {
    visit('/register')
        ->fill('name', 'magdy')
        ->fill('email', 'magdy@gmail.com')
        ->fill('password', '123456987')
        ->fill('password_confirmation', '123456987')
        ->click(' Create')
        ->assertPathIs('/');

    $this->assertAuthenticated();
    $user = \App\Models\User::where('name', 'magdy')->first();
    $this->assertAuthenticatedAs($user);

    $this->assertDatabaseHas('users', ['name' => 'magdy']);
    expect(Auth::user())->toMatchArray(['name' => 'magdy', 'email' => 'magdy@gmail.com']);
});
it('require invalid email', function (): void {
    visit('/register')
        ->fill('name', 'magdy')
        ->fill('email', 'magdy123')
        ->fill('password', '1234569887')
        ->fill('password_confirmation', '1234569887')
        ->click(' Create')
        ->assertPathIs('/register');

});
