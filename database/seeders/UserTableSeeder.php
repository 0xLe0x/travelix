<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([            
            'name' => 'Chao Wang',
            'username' => 'redstar',
            'email' => 'chaowang318915@gmail.com',
            'email_verified_at' => now(),
            'password' =>  Hash::make('password'),           
        ]);
    }
}
