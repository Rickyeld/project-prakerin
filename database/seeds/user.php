<?php

use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Ricky',
            'email' => 'admin@gmail.com',
            'password' => 'kiki25072002'
        ]);
    }
}
