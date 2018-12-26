<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');
        $response->assertStatus(200);

    }
    public function testExample()
    {
        $data = [
            'username' => "usertest",
            'password' => "123456"]
            
        //create fake user
        $user = factory(\App\User::class)->create();
        //send request json
        $response = $this->actingAs($user, 'api')->json('POST', '/login/products',$data);     

    }
}