<?php

namespace Database\Factories;

use App\Models\Tanggapan;
use Illuminate\Database\Eloquent\Factories\Factory;

class TanggapanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tanggapan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'email' => $this->faker->email()
            // 'pesan' => $this->faker->dateTimeThisCentury->format('Y-m-d'),
            // 'email' => $this->faker->unique()->companyEmail,
            // 'phone' => $this->faker->phoneNumber,
            // 'cc_type' => $this->faker->creditCardType,
            // 'cc_number' => $this->faker->creditCardNumber
        ];
    }
}
