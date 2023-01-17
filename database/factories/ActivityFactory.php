<?php

namespace Database\Factories;

use App\Models\Activity;
use Illuminate\Database\Eloquent\Factories\Factory;

class ActivityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Activity::class;

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
            'category'=>$this->faker->randomElement($array = array ('Churches','Historic','Museums','Walking tours')),
            'description1'=>$this->faker->text(100),
            'description2'=>$this->faker->text(800),
            'price'=>$this->faker->numberBetween(100,1000),
            'datedebut'=>$this->faker->date(),
            'datefin'=>$this->faker->date(),
            'cover'=>$this->faker->randomElement($array = array ('tour_1.jpg','tour_2.jpg','tour_3.jpg','tour_4.jpg')),
            'adresse'=>$this->faker->name(),
            'program'=>$this->faker->text(500),
        ];
    }
}
