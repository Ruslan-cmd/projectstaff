<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Polzovatel;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Polzovatel>
 */
class PolzovatelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Polzovatel::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'phone-number'=> $this->faker->unique()->numberBetween(10000, 100000),
            'sms' => $this->faker->boolean,
            'date' => $this->faker->dateTimeAD,
            'email'=>$this->faker->email,
            'skype' =>$this->faker->email,
            'status' =>$this->faker->word(2),
            'functionality' => $this ->faker->word(3),
            'prior' =>$this->faker->numberBetween(1,1000),
            'phone' =>$this->faker->unique()->numberBetween(10000, 100000)
        ];
    }
}