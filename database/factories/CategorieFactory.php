<?php

namespace Database\Factories;

use App\Models\Categorie;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CategorieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $categorie_name = $this->faker->unique()->words($nb=2, $asText=true);
        return [
            'name' => $categorie_name,

        ];
    }
}
