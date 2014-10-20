<?php

class UserTableSeeder extends Seeder {
    public function run() {
        DB::table('users')->delete(); 

        $user = new User(array(
            'name' => 'Gonzalo',
            'surname' => 'Vergara',
            'email' => 'gonzalo.va@me.com',
            'password' => Hash::make('123456')
        ));

        $user->save();
    }
}