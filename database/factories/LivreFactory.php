<?php

namespace Database\Factories;

use App\Models\Livre;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LivreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $livre_titre = $this->faker->unique()->words($nb=4, $asText=true);
        return [
            'titre' => $livre_titre,
            'auteur' => $this->faker->name,
            'description_pub' => $this->faker->text(50),
            'lien_pub' => $this->faker->url,
            'image' => $this->faker->unique()->numberBetween(1,5).'.png',
            'categorie_id' => $this->faker->numberBetween(1,4),
        ];
    }
}
