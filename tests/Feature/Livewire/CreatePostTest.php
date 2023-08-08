<?php

namespace Tests\Feature\Livewire;

use App\Livewire\CreatePost;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class CreatePostTest extends TestCase
{
    /** @test */
    public function does_not_redirect()
    {
        Livewire::test(CreatePost::class)
            ->assertNoRedirect()
            ->assertStatus(200);
    }
}
