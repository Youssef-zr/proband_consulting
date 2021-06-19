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
        $users = [
            ['name' => "youssef", "email" => "youssef@admin.com", "password" => bcrypt('123@456.^/')],
            ['name' => "admin", "email" => "admin@admin.com", "password" => bcrypt('12%3^45@M.$')],
        ];

        foreach ($users as $user) {
            $new = new User();
            $new->fill($user)->save();
        }
    }
}

