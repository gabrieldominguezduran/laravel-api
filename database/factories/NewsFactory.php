<?php

namespace Database\Factories;

use App\Models\News;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class NewsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = News::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            //
            'title' => $this->faker->sentence(3),
            'author_id' => $this->faker->numberBetween(1, 20),
            'date_published' => $this->faker->date('Y-m-d'),
            'content' => $this->faker->paragraphs(3, true),
            'image' => $this->faker->imageUrl(640, 480, 'animals', true),
            'category_id' => $this->faker->numberBetween(1, 5),
        ];
    }
}
