<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Models\Category;
use Tests\TestCase;

final class CategoryUnitTest extends TestCase
{
    public function test_category_has_fillable_attributes(): void
    {
        $category = new Category;

        $expected = ['name'];

        $this->assertEquals($expected, $category->getFillable());
    }

    public function test_category_can_be_created(): void
    {
        $category = Category::factory()->create([
            'name' => 'Test Category',
        ]);

        $this->assertInstanceOf(Category::class, $category);
        $this->assertEquals('Test Category', $category->name);
    }

    public function test_category_has_timestamps(): void
    {
        $category = Category::factory()->create();

        $this->assertNotNull($category->created_at);
        $this->assertNotNull($category->updated_at);
    }
}
