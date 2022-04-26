<?php

namespace Tests;

use App\Models\Role;
use App\Models\User;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    protected function signInAsBasicUser($user = null)
    {
        $user = $user ?: User::factory()->create(['role_id' => Role::factory()->create(['name' => 'basicUser'])]);
        $this->actingAs($user);
        return $user;
    }

    protected function signAsAdmin($user = null)
    {
        $user = $user ?: User::factory()->create(['role_id' => Role::factory()->create(['name' => 'superAdmin'])]);
        $this->actingAs($user, 'web');
        return $user;
    }

    public function ajaxGet($uri)
    {
        return $this->get($uri, ['HTTP_X-Requested-With' => 'XMLHttpRequest']);
    }

    public function ajaxPost($uri, array $data = [])
    {
        return $this->post($uri, $data, ['HTTP_X-Requested-With' => 'XMLHttpRequest']);
    }

}
