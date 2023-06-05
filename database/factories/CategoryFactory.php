<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->name;

        return [
            'uuid'        => Str::uuid(),
            'name'        => $name,
            'slug'        => Str::slug($name),
            'description' => fake()->paragraph,
            'image'       => fake()->imageUrl,
            'created_by'  => Auth::id() ?? 1,
            'updated_by'  => Auth::id() ?? 1,
            'deleted_by'  => Auth::id() ?? 1,
            'deleted_at'  => fake()->dateTime,
            'created_at'  => fake()->dateTime,
            'updated_at'  => fake()->dateTime,
        ];
    }
}
