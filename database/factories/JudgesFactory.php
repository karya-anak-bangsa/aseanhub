<?php

namespace Database\Factories;

use App\Models\Judges;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class JudgesFactory extends Factory
{
    # ...
    protected $model = Judges::class;

    public function definition(): array
    {
        # ...
        $this->faker = \Faker\Factory::create('id_ID');

        # ...
        $judges_photo = [
            'judges/dummy/person-1.webp',
            'judges/dummy/person-2.webp',
            'judges/dummy/person-3.webp',
            'judges/dummy/person-4.webp',
        ];

        return [

            # ...
            'judges_name'        => $this->faker->name(),
            'origin_country'     => $this->faker->randomElement([
                'Brunei Darussalam',
                'Cambodia',
                'Indonesia',
                'Laos',
                'Malaysia',
                'Myanmar',
                'Philippines',
                'Singapore',
                'Thailand',
                'Vietnam',
                'Other Country',
            ]),
            'origin_institution' => $this->faker->randomElement([
                'Institut Teknologi Bandung',
                'Universitas Indonesia',
                'Universitas Gajah Mada',
                'Institut Pertanian Bogor',
            ]),
            'judges_task'        => $this->faker->randomElement([
                'Assessment One',
                'Assessment Two',
                'Final Assessment',
            ]),
            // 'judges_photo'       => $this->faker->randomElement($judges_photo),
            'judges_photo'      => 'judges/dummy/person-1.webp',

            # auth
            'email'              => $this->faker->unique()->safeEmail(),
            'password'           => Hash::make('12341234'),

            # other columns
            'status_data'        => 'Active',
        ];
    }

    public function assessment_one()
    {
        return $this->state([
            'judges_task' => 'Assessment One',
        ]);
    }

    public function assessment_two()
    {
        return $this->state([
            'judges_task' => 'Assessment Two',
        ]);
    }

    public function final_assessment()
    {
        return $this->state([
            'judges_task' => 'Final Assessment',
        ]);
    }
}
