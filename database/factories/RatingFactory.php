<?php

namespace Database\Factories;

use App\Models\Rating;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Player;
use App\Models\Field;
class RatingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Rating::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'rate'=>$this->faker->numberBetween(50,100),
            'player_id'=>Player::pluck('id')->random(),
            'review'=>$this->faker->text,
            'field_id'=>Field::pluck('id')->random()
        ];
    }
}
