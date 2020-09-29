<?php

namespace Database\Factories;

use App\Models\Description;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Field;
class DescriptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Description::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'type'=>$this->faker->text,
            'capacity'=>$this->faker->numberBetween(5,10),
            'address'=>$this->faker-text,
            'picture'=>$this->faker->text,
            'work_hrs'=>$this->faker->text,
            'field_id'=>Field::pluck('id')->random()
        ];
    }
}
