<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Аноним',
                'email' => 'anonym@cars.blog',
                'password' => bcrypt(str_random(16))
            ],
            [
                'name' => 'Автор',
                'email' => 'author@cars.blog',
                'password' => bcrypt('secret')
            ],
        ];

        DB::table('users')->insert($users);
    }
}
