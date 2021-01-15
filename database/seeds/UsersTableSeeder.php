<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Gina',
            'role'=>'desarrollador',
            'email'=>'gina@gmail.com',
            'password'=>bcrypt('georgina1234')



        ]);

        factory(User::class,10)->create();
    }
}
