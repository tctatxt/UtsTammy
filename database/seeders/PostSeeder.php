<?php

namespace Database\Seeders;

use App\Models\Post;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     $faker =Faker::create('id_ID');
     for ($i=0; $i < 15; $i++) {
        Post::create([
            'title'=>$faker->sentence(),
            'description'=>$faker->sentence(),
            'like' =>mt_rand(1,100)
        ]);
     }
    }
}
