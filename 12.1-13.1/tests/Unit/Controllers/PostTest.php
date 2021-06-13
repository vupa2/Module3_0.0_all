<?php

namespace Tests\Unit\Controllers;

use App\Http\Controllers\PostController;
use App\Repositories\Interfaces\PostRepositoryInterface;
use Illuminate\Http\Request;
use Mockery;
use Tests\TestCase;

class PostTest extends TestCase
{
    protected $repository, $controller;

    public function setUp(): void
    {
        parent::setUp();
        $this->repository = Mockery::mock(PostRepositoryInterface::class)->makePartial();
        $this->controller = new PostController($this->repository);
    }

    public function tearDown(): void
    {
        Mockery::close();
        unset($this->repository, $this->controller);
        parent::tearDown();
    }

    public function test_example()
    {
        $this->assertTrue(true);
    }

    public function test_index()
    {
        $this->repository->shouldReceive('getAll')->andReturn();
        $view = $this->controller->index();
        $this->assertEquals('posts.frontend.index', $view->getName());
    }

    public function test_show()
    {
        $this->repository->shouldReceive('find')->andReturn();
        $request = new Request(['id' => 22]);
        $view = $this->controller->show($request);
        $this->assertEquals('posts.frontend.show', $view->getName());
        $this->assertArrayHasKey('post', $view->getData());
    }
}
