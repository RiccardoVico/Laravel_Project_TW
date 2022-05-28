<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
       DB::table('users')->insert([
       
       ['name' => 'Martina', 'surname' => 'Mamy', 'email' => 'mario@rossiii.it', 'username' => 'martymarty',
                'password' => Hash::make('martymarty'), 'role' => 'user2']
        ]);
    }   
}
