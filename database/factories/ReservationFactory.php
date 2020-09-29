<?php

namespace Database\Factories;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Field;
use App\Models\Player;
class ReservationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'field_id'=>Field::pluck('id')->random(),
            'reservation_date'=>$this->faker->DateTime,
            'hrs'=>$this->faker->numberBetween(1,10),
            'player_id'=>Player::pluck('id')->random(),
            'status'=>$this->faker->randomElement(['CANCELED','PENDING','DONE']),
            'price'=>$this->faker->numberBetween(50,200),
            'termination_date'=>$this->faker->date
        ];
    }
}
