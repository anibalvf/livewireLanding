<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      

        \App\Models\Skill::factory()->create([
            'title' => 'flutter',
            'description' => 'vasilando por la city',
        ]);

        \App\Models\Skill::factory()->create([
            'title' => 'gitanox',
            'description' => 'te rajo',
        ]);

        \App\Models\Skill::factory()->create([
            'title' => 'El Dario',
            'description' => 'Un grande',
        ]);
    }
}
