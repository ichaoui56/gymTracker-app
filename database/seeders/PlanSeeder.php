<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $features = [
            'Basic Plan',
            'Business Plan',
            'Expensive Plan',
        ];

        foreach ($features as $feature) {
            DB::table('plan')->insert([
                'name' => $feature,
            ]);
        }
    }
}
