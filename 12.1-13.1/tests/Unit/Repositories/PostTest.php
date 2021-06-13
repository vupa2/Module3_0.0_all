<?php

namespace Tests\Unit\Repositories;

use App\Models\Post;
use App\Models\User;
use App\Repositories\PostRepository;
use Faker\Factory as Faker;
use Tests\TestCase;

class PostTest extends TestCase
{
    protected $faker, $post, $postRepository, $user;

    public function setUp(): void
    {
        parent::setUp();
        $this->faker = Faker::create();
        $this->user = User::where('role_id', 1)->first();
        $this->be($this->user);
        $this->post = [
            'title' => $this->faker->sentence(),
            'summary' => $this->faker->text(200),
            'content' => implode(' ', $this->faker->paragraphs(5)),
            'user_id' => $this->user->id
        ];
        $this->postRepository = new PostRepository();
    }

    public function tearDown(): void
    {
        unset($this->faker, $this->post, $this->postRepository, $this->user);
        parent::tearDown();
    }

    public function test_find()
    {
        $post = Post::create($this->post);
        $found = $this->postRepository->find($post->id);
        $this->assertInstanceOf(Post::class, $found);
        $this->assertEquals($post->title, $found->title);
        $this->assertEquals($post->summary, $found->summary);
        $this->assertEquals($post->content, $found->content);
        $found->delete();
    }

    public function test_store()
    {
        $store = $this->postRepository->store($this->post);
        $this->assertInstanceOf(Post::class, $store);
        $storeData = array_intersect_key($store->toArray(), array_flip(array_keys($this->post)));
        $this->assertEquals($this->post, $storeData);
        $this->assertDatabaseHas('posts', $store->toArray());
    }

    public function test_update()
    {
        $post = Post::create($this->post);
        $update = $this->postRepository->update($post->id, $this->post);
        $this->assertInstanceOf(Post::class, $update);
        $updateData = array_intersect_key($update->toArray(), array_flip(array_keys($this->post)));
        $this->assertEquals($this->post, $updateData);
        $this->assertDatabaseHas('posts', $update->toArray());
    }

    public function test_destroy()
    {
        $post = Post::create($this->post);
        $destroy = $this->postRepository->destroy($post->id);
        $this->assertTrue($destroy);
        $this->assertDatabaseMissing('posts', $post->toArray());
    }
}
