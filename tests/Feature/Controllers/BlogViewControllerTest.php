<?php

namespace Tests\Feature\Controllers;

use App\Models\Blog;
use App\Models\User;
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
                ->assertSee($blog3->title)
                ->assertSee($blog1->user->name)
                ->assertSee($blog2->user->name)
                ->assertSee($blog3->user->name);
    }

    /** @test */
    function factoryの観察()
    {
        // $blog = Blog::factory()->create();

        // dump($blog->toArray());

        // dump(User::get()->toArray());
    }
}
