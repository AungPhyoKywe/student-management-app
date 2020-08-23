<?php

namespace Tests\Unit;

use Tests\TestCase;

class StudentTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get( '/login', [
            'email' => 'hinata0777@gmail.com',
            'password' => bcrypt('11111111'),
            '_token' => csrf_token()
        ]);
        //dd($response);
       $response->assertStatus(200);
    }
}
