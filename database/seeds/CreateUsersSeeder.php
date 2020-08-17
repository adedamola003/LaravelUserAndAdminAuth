<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
            'firstname' => 'Adedamola',
            'lastname' => 'Adeyinka',
            'othernames' => 'O',
            'phone_number' => '08129495524',
            'email' => 'adeyinka.adedamola@hotmail.com',
            'password' => Hash::make('password'),
            ],
            [
            'firstname' => 'Adetayo',
            'lastname' => 'Adeyinka',
            'othernames' => 'O',
            'phone_number' => '08168934038',
            'email' => 'adeyinka.adetayo@mail.com',
            'password' => Hash::make('password'),
            ],
        ];
  
        foreach ($user as $key => $value) {
            User::create($value);
        }

    }
}
