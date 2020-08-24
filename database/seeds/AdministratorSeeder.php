<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
        $administrator->nama = 'Administrator';
        $administrator->username = 'administrator';
        $administrator->email = 'administrator@mail.com';
        $administrator->password = \Hash::make('administrator');

        $administrator->save();
    }
}
