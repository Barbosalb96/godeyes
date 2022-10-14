<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{

    protected $model = Contact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => round(1, 10),
            'email' => $this->faker->unique()->safeEmail,
            'name' => $this->faker->unique()->name,
            'whatsapp' => $this->faker->boolean,
            'numero' => $this->faker->phoneNumber,
        ];
    }
}
