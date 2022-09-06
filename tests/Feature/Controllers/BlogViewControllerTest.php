<?php

namespace Tests\Feature\Controllers;

use App\Models\Blog;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BlogViewControllerTest extends TestCase
{
    use RefreshDatabase;
    /** @test index */
    function ブログのTopページを開ける()
    {
        // $this->withoutExceptionHandling();
        $blog1 = Blog::factory()->create();
        $blog2 = Blog::factory()->create();
        $blog3 = Blog::factory()->create();

        $response = $this->get('/');

        $response->assertOk()
        ->assertViewIs('index')
                ->assertSee($blog1->title)
                ->assertSee($blog2->title)
                ->assertSee($blog3->title);
    }
}
