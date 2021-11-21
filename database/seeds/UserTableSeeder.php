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
        \App\User::create([
            'name' => 'Srabon',
            'email' => 'ak.shrabon01@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
