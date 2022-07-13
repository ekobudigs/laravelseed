<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        collect([
            [
                'name' => 'PHP',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Laravel',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PostgreSQL',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'API (JSOB, Rest)',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ])->each(function ($user) {
            DB::table('skills')->insert($user);
        });
    }
}
