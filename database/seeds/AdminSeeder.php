<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'type' => 'admin',
            'username' => 'admin231',
            'password' => Hash::make('qwe123')
        ]);
    }
}
