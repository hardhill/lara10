<?php

namespace Database\Factories;

use App\Models\Point;
use Illuminate\Database\Eloquent\Factories\Factory;

class PointFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Point::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $longi = $this->faker->randomFloat(7,-179,179);

        $lati = $this->faker->randomFloat(7,-69,69);
        return [
            'latitude'=>$lati,
            'longitude'=>$longi,
            'name'=>$this->faker->realText(rand(80,120)),
            'category_id' => rand(1,5),
            'user_id'=>rand(1,5)
        ];
    }
}
