<?php

declare(strict_types=1);

namespace Tests\Feature;

use App\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

final class CategoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_create_category(): void
    {
        $data = [
            'name' => 'Test Category',
        ];

        $response = $this->postJson(route('categories.store'), $data);

        $response->assertStatus(201)
            ->assertJsonFragment($data);
        $this->assertDatabaseHas('categories', $data);
    }

    public function test_can_view_category(): void
    {
        $category = Category::factory()->create();

        $response = $this->getJson(route('categories.show', $category));

        $response->assertOk()
            ->assertJsonFragment(['name' => $category->name]);
    }

    public function test_can_update_category(): void
    {
        $category = Category::factory()->create();
        $data = [
            'name' => 'Updated Category',
        ];

        $response = $this->putJson(route('categories.update', $category), $data);

        $response->assertOk()
            ->assertJsonFragment($data);
        $this->assertDatabaseHas('categories', $data);
    }

    public function test_can_delete_category(): void
    {
        $category = Category::factory()->create();

        $response = $this->deleteJson(route('categories.destroy', $category));

        $response->assertStatus(204);
        $this->assertDatabaseMissing('categories', ['id' => $category->id]);
    }
}
