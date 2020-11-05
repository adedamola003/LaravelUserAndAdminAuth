<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $url = config('app.url2');
        DB::table('admins')->insert([
            'slug' => Str::random(16),
            'name' => 'Super Admin',
            'email' => "admin@$url",
            'password' => Hash::make('password'),
        ]);
    }
}
