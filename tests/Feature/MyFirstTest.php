<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MyFirstTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample1()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
         }

    public function testExample2()
    {
        $response = $this->get('/');
        $response->assertSeeText('Clarence Taylor');

    }

    public function testExample3()
    {
        $response = $this->get('/awards');
        $response->assertSuccessful();

    }

    public function testExample4()
    {
        $response = $this->get('/');
        $response->assertSee('css/resume.min.css');

    }

    public function testExample5()
    {
        $response = $this->get('/skills');
        $response->assertLocation('http://localhost');

    }
    public function testExample6()
    {
        $response = $this->get('/skills');
        $response->assertHeaderMissing('Referer');

    }

    public function testExample7()
    {
        $response = $this->get('/skills');
        $response->assertHeader('content-type', $value = 'text/html; charset=UTF-8');

    }

    public function testExample8()
    {
        $response = $this->get('/skills');
        $response->assertHeader('content-type', $value = 'text/html; charset=UTF-8');

    }

    public function testExample9()
    {
        $response = $this->post('/orderform');
        $response->assertStatus(200);

    }


}
