<?php

use App\User;
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
        $user = new User();
        $user->name = 'farzane';
        $user->role = 'admin';
        $user->email = 'a@b.c';
        $user->password = bcrypt('far123');
        $user->save();

        $user = new User();
        $user->name = 'member';
        $user->role = 'member';
        $user->email = 'b@b.b';
        $user->password = bcrypt('123456');
        $user->save();


    }
}
