<?php

namespace Database\Factories;

use App\Models\Field;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Owner;
class FieldFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Field::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'owner_id'=>Owner::pluck('id')->random(),
            'name'=>$this->faker->name,
            'category'=>$this->faker->text,
            'price_hr'=>$this->faker->numberBetween(50,100),
            'phone'=>$this->faker->phoneNumber
        ];
    }
}
