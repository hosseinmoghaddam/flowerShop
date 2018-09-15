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
        $user->email = 'Far123@yahoo.com';
        $user->password = bcrypt('far123');
        $user->save();

        $user = new User();
        $user->name = 'farzane';
        $user->role = 'member';
        $user->email = 'Far1234@yahoo.com';
        $user->password = bcrypt('far123');
        $user->save();


    }
}
