<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            [
                'name' => 'Sparatutto',
            ],
            [
                'name' => 'Azione',
            ],
            [
                'name' => 'Avventura',
            ],
            [
                'name' => 'Sport',
            ],
            [
                'name' => 'Simulazione',
            ],
            [
                'name' => 'Strategia',
            ],
            [
                'name' => 'RPG',
            ],
            [
                'name' => 'Horror',
            ],
        ];
        foreach ($types as $type) {
            $new_type = new \App\Models\Type();
            $new_type->name = $type['name'];
            $new_type->save();
        }
    }
}
