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
        //real user
        $user = new User();
        $user->name = 'Edgar Avila Gonzalez';
        $user->email = 'avilaedgar2001@gmail.com';
        $user->password = bcrypt('123456789');

        $user->save();

        //fakes users
        User::factory(10)->create();
    }
}
