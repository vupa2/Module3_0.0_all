<?php

namespace Tests\Unit\Models;

use App\Models\Post;
use App\Models\User;
use Tests\TestCase;

class PostTest extends TestCase
{

    protected $faker;

    public function setUp(): void
    {
        parent::setUp();
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }

    public function test_post_belongs_to_user()
    {
        $user = User::factory()->create();
        $post = Post::factory()->create(['user_id' => $user->id]);

        $this->assertInstanceOf(BelongsTo::class, $post->user);
        $this->assertInstanceOf(User::class, $post->user);
        $this->assertEquals('user_id', $post->user->getForeignKey());
    }
}
