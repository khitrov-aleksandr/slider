<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
                'name' => 'Хитров Александр',
                'email' => 'khitrov.aleksandr@gmail.com',
                'password' => bcrypt('123456')
            ]
        ]);
    }
}
