<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
            'Review Your Question',
            'have all access',
            'Work with Resources',
            'Support & Mentoring',
            'have limited access',
            'Analysis of Your "I Have',
        ];

        foreach ($features as $feature) {
            DB::table('features')->insert([
                'name' => $feature,
            ]);
        }
    }
}
