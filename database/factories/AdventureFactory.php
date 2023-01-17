<?php

namespace Database\Factories;

use App\Models\Adventure;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdventureFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Adventure::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'city_id'=> rand(1,10),
            'title' => $this->faker->name(),
            'level'=>$this->faker->randomElement($array = array ('easy','medium','hard')),
            'small_description'=>$this->faker->text(100),
            'description'=>$this->faker->text(800),
            'price'=>$this->faker->numberBetween(100,1000),
            'stardate'=>$this->faker->date(),
            'enddate'=>$this->faker->date(),
            'cover'=>$this->faker->randomElement($array = array ('adventure_2.jpg','adventure_3.jpg','adventure_4.jpg','adventure_5.jpg')),
            'location'=>$this->faker->name(),
        ];
    }
}
