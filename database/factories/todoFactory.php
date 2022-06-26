<?php

namespace Database\Factories;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\todo>
 */

 
class TodoFactory extends Factory
{
    protected $model = Todo::class;

    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'address' => $this->faker->address(),
            'compleated' => $this->faker->boolean(),
            'avaliale' => $this->faker->boolean(),

        ];
    }
}
