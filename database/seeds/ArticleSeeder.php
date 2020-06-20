<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker::create();
        for($i=0; $i < 30; $i++){
            $title = $faker->sentence(6);
            DB::table('articles')->insert([
                'category' => rand(1,5),
                'title' => $title,
                'content' => $faker->paragraph(6),
                'image' => $faker->imageUrl('400', '400', 'cats', true),
                'slug' => str_slug($title),
                'created_at'=> $faker->dateTime('now'),
                'updated_at' => now()
            ]);
        }
    }
}
