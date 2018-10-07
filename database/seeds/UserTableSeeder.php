<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $user = new \App\User();
       $user->name = "Pradeep Sapkota";
       $user->email = "pradeep@gmail.com";
       $user->is_admin = true;
       $user->is_suspended = false;
       $user->password = Hash::make("pradeep");
       $user->save();
    }
}
