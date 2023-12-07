<?php

namespace Database\Factories;

use App\Models\Contact ;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lname' => $this->faker->lastname(),
            'fname' => $this->faker->firstname(),
            'gender' => $this->faker->randomNumber(1,2),
            'email' => $this->faker->safeEmail,
            'postcode' => $this->faker->postcode(),
            'address' => $this->faker->address(),
            'building' => $this->faker->secondaryAddress(),
            'opinion' => $this->faker->realText()
        ];
    }
}
