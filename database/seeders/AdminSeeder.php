<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create the user
        $user = User::create([
            'name' => 'Ilyas Chaoui',
            'picture' => 'assets/images/profileImages/1713172436_1002-1696615923.jpg',
            'email' => 'ilyaschaoui73@gmail.com', 
            'phone_number' => '+212 602393795',
            'city_id' => 17,
            'role_id'=> 1,
            'password' => Hash::make('ilyaschaoui73@gmail.com')
        ]);

    }
}
