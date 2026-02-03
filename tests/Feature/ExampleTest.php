<?php

use App\Models\Idea;

test('the application returns a successful response', function (): void {
    $response = $this->get('/');

    $response->assertStatus(200);
});

