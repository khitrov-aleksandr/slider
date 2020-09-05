<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
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
