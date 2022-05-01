<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public $data;

    
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_example()
    {
        // 準備
        
        // 実行
        $response = $this->get('/');

        // 検証
        $response->assertStatus(200);

    }

    public function test_example2()
    {
        // 準備
        
        // 実行
        $response = $this->get('/');

        // 検証
        $response->assertStatus(200);

    }
}
