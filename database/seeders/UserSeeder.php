<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Sergio Reyes',
            'email' => 'checo04@gmail.com',
            'password'=> bcrypt('13041985$dR')
        ])->assignRole('Admin');
    }
}
