<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
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
                'name'=>'amit',
                'email'=>'amit@gmail.com',
                'password'=>bcrypt('amit123')
            ],
            [
                'name'=>'zubin',
                'email'=>'zubin@gmail.com',
                'password'=>bcrypt('zubin123')
            ],
            [
                'name'=>'rahul',
                'email'=>'rahul@gmail.com',
                'password'=>bcrypt('rahul123')
            ]                   
        ];

        foreach($user as $key=>$value){
            User::create($value);
        }
    }
}


      