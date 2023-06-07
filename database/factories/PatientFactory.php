<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        $medicalNumber = $this->faker->unique()->numberBetween(100000, 999999);
        $medicalNumberFormatted = substr($medicalNumber, 0, 2) . '-' . substr($medicalNumber, 2, 2) . '-' . substr($medicalNumber, 4, 2);

        return [
            'medical_record_number' => $medicalNumberFormatted,
            'name' => $this->faker->name,
            'place' => $this->faker->city,
            'date_of_birth' => $this->faker->date(),
            'title' => $this->faker->title,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'religion' => $this->faker->randomElement(['Islam', 'Christianity', 'Catholicism', 'Hinduism', 'Buddhism']),
            'language' => $this->faker->randomElement(['Indonesian', 'English']),
            'address' => $this->faker->address,
            'ward' => $this->faker->word,
            'subdistrict' => $this->faker->city,
            'regency' => $this->faker->city,
            'province' => $this->faker->state,
            'mobile_phone_number' => $this->faker->phoneNumber,
            'last_education' => $this->faker->randomElement(['High School', 'College', 'Master']),
            'ethnic' => $this->faker->randomElement(['Jawa', 'Sunda', 'Batak', 'Minangkabau', 'Madura', 'Betawi']),
            'job' => $this->faker->jobTitle,
            // Tambahkan field lainnya jika diperlukan
        ];
    }
}
