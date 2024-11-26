<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::create([
            'name' => 'Elio Osinaga',
            'email' => 'osinagax10@gmail.com',
            'password' => bcrypt('123456'),
            'is_client' => false,
            'phone' => '77816186'
        ]);
    }
}
