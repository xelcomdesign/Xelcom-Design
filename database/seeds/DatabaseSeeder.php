<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        User::create(
           [ 'name'=>'GreatAdmin',
            'email'=>'xelcomdesign@gmail.com',
            'password'=>bcrypt('admin'),
            'role'=>'admin',
            'valid'=>true,
            'confirmed'=>true,
            'remember_token'=>str_random(10)
        ]);
    }
}
