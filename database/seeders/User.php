<?php

namespace Database\Seeders;

use App\Models\Users;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new Users();
        $user->name = 'Artem';
        $user->email = 'artem@gmail.com';
        $user->setPasswordAttribute('123456');
        $user->save();
    }
}
