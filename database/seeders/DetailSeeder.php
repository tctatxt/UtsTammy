<?php

namespace Database\Seeders;

use App\Models\Detail;
use Faker\Factory as Faker;
use App\Models\PostCategory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     $faker =Faker::create('id_ID');
     for ($i=1; $i < 16; $i++) {
        Detail::create([
            'post_id'=>$i,
            'text'=>$faker->paragraphs(5,true),
            'author'=>$faker->name(),
            'date'=>$faker->dateTime(),
            'video'=>'https://youtu.be/D7HjHW8cA_A',
            'image'=>$faker->imageUrl(640, 480, 'animals', true),
            'duration'=>$i,
            'category_id'=>($i < 5)? 1 : (($i>5 && $i < 10 )? 2 : 3)

        ]);

        }

     }
    }

