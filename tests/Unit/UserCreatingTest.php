<?php

uses(Tests\TestCase::class)->in('Feature');

test('Can create user data', function () {
    $request = $this->post('/user/create', [
        'name' => 'John Doe',
        'email' => 'johndoe@me.com',
        'password' => 'password',
        'role' => 'admin',
    ]);

    $request->assertStatus(200);
});
