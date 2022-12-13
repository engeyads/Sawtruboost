<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\userProfiles;
class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@sawtruboost.com',
            'password' => bcrypt('123456'),
            'active' => '1'
        ]);

        userProfiles::create([
            'uid' => $user->id,
            'fname' => 'admin',
            'title' => 'mr',
            'tag' => 'admin',
            'gender' => 'male',
            'country' => 'palestine',
            'career' => 'System Administrator',
        ]);

        $user->assignRole([1]);
    }
}
