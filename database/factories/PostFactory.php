<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

class PostFactory extends Factory
{

    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image'=> $this->faker->randomElement($array = array ('blog-1.jpg','blog-2.jpg','blog-3.jpg','blog-4.jpg')),
            'title'=> $this->faker->text(50),
            'body'=> $this->faker->paragraphs($nb = 5, $asText = true),
            'published_at'=> $this->faker->dateTimeThisCentury($max = 'now', $timezone = null),
        ];
    }
}
