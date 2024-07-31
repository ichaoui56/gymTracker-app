<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BenefitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $benefits = [
            'do a 3 appointment',
            'have all access',
            'have limited access',
        ];

        foreach ($benefits as $benefit) {
            DB::table('benefits')->insert([
                'name' => $benefit,
            ]);
        }
    }
}
