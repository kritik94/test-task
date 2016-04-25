<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create(
            [
                'name' => 'Nikita',
                'email' => 'nikita@mail.ru',
                'password' => '12341234',
                'balance' => 100
            ]
        );
        User::create(
            [
                'name' => 'Oleg',
                'email' => 'oleg@mail.ru',
                'password' => '12341234',
                'balance' => 150.50
            ]
        );
        User::create(
            [
                'name' => 'Gleb',
                'email' => 'gleb@mail.ru',
                'password' => '12341234',
                'balance' => 70.75
            ]
        );
    }
}
