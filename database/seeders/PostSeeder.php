<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
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
                'title'=>'computer',
                'description'=>'This is computer description'
            ],
            [
                'title'=>'english',
                'description'=>'This is english'
            ],
            [
                'title'=>'hindi',
                'description'=>'This is hindi'
            ],          [
                'title'=>'science',
                'description'=>'This is science'
            ],          [
                'title'=>'biology',
                'description'=>'This is biology'
            ],                      
        ];
        foreach($user as $key=>$value){
            Post::create($value);
        }
    }
}
