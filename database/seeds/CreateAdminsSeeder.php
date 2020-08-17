<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateAdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'firstname' => 'Adedamola',
            'lastname' => 'Adeyinka',
            'othernames' => 'O',
            'phone_number' => '08129495524',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
