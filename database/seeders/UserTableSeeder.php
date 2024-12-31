<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {
       User::create(['role'=>"eleve",'email' => 'test@eleve', 'password' => 'azerty']);
       User::create(['role'=>"professeur","email"=>'test@prof', 'password' => 'azerty']);
    }
}
