<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Hash::make($request->senha); if (Hash::check($request->senha,$utilizador->senha)):

        if (!User::where('email','ce@gmail.com.br')->first()) {
            User::create([
                'name'=>'ksoftkda',
                'email'=>'ksoftkda@gmail.com',
                'password'=>has::make('123456',['rounds'=>12])]);
        }  
        
    }
}
