<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JobsSeeder extends Seeder
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
                'name' => 'FullStack Developer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Front End Developer',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'DevOps',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Backend Developer',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ])->each(function ($user) {
            DB::table('jobs')->insert($user);
        });
    }
}
