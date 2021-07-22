<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lname' => $this->faker->name,
            'fname' => $this->faker->name,
            'oname' => $this->faker->name,
            'f_name' => $this->faker->name,
            'patient_id' => $this->faker->str_random(15),
            'patient_department' => $this->faker->name,
            'country' => $this->faker->country,
            'state' => $this->faker->state,
            'LGA' => $this->faker->name,
            'gender' => $this->faker->gender,
            'date_of_birth' => $this->faker->date,
            'age' => $this->faker->age,
            'email' => $this->faker->email,
            'phone_number' => $this->faker->phone,
            'height' => $this->faker->name,
            'weight' => $this->faker->name,
            'BMI' => $this->faker->name,
            'blood_group' => $this->faker->name,
            'marital_status' => $this->faker->name,
            'disability' => $this->faker->name,
            'upatient_underline_illness' => $this->faker->name,
            'extra_curicular_activities' => $this->faker->name,
            'address' => $this->faker->address,
        ];
    }
}
