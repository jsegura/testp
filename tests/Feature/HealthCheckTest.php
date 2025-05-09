<?php

use function Pest\Laravel\get;

test('health check endpoint returns ok status', function () {
    get('/healthz')
        ->assertStatus(200)
        ->assertJson([
            'status' => 'ok'
        ])
        ->assertHeader('Content-Type', 'application/json');
}); 