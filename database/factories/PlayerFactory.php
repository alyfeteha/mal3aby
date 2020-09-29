<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PlayerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Player::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'username'=>$this->faker->name,
            'email'=>$this->faker->email,
            'password'=>$this->faker->password,
            'phone'=>$this->faker->phoneNumber,
            'ban_flag'=>$this->faker->boolean
        ];
    }
}
