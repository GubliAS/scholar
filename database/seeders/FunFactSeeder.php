<?php

namespace Database\Seeders;

use App\Models\FunFact;
use Illuminate\Database\Seeder;

class FunFactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $facts = [
            [
                'value' => 150,
                'speed' => 1000,
                'label' => 'Happy Students',
                'is_end' => false,
            ],
            [
                'value' => 804,
                'speed' => 1000,
                'label' => 'Course Hours',
                'is_end' => false,
            ],
            [
                'value' => 50,
                'speed' => 1000,
                'label' => 'Employed Students',
                'is_end' => false,
            ],
            [
                'value' => 15,
                'speed' => 1000,
                'label' => 'Years Experience',
                'is_end' => true,
            ],
        ];

        foreach ($facts as $fact) {
            FunFact::query()->updateOrCreate(
                ['label' => $fact['label']],
                $fact,
            );
        }
    }
}
