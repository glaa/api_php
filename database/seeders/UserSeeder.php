<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!User::where('email','contato@gleison.dev.br')->first()){
            User::create([
                'name' => 'Gleison',
                'email' => 'contato@gleison.dev.br',
                'password' => Hash::make('123456',['round' => 12]),
            ]);
        }
    }
}
