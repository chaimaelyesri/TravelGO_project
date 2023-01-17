<?php

namespace Database\Factories;

use App\Models\Day;
use Illuminate\Database\Eloquent\Factories\Factory;

class DayFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Day::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'day_title'=>$this->faker->name(),
            'day_description'=> $this->faker->text(150),
            'image'=>$this->faker->randomElement($array = array ('/uploads/days/adventure_2.jpg','/uploads/days/adventure_3.jpg','/uploads/days/adventure_4.jpg','/uploads/days/adventure_5.jpg')),
            'activity_id'=>rand(1,20),
            'adventure_id'=>rand(1,20),
        ];
    }
}
