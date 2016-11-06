<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(blog\User::class)->create([
            'name' => 'tascarpin',
            'email' => 'tascarpin@yahoo.com.br',
            'password' => bcrypt('123456'),
            'remember_token' => str_random(10),
        ]);
    }
}
