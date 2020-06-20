<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $pages =['Video', 'Hakkımızda', 'İletişim'];
        $count = 0;
        foreach($pages as $page){
            $count++;
            DB::table('pages')->insert([
                'title' => $page,
                'slug' => str_slug($page),
                'image' => 'https://images.pexels.com/photos/34140/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500',
                'content' => "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                    normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as
                    their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose
                    (injected humour and the like).",
                'order' => $count,
                'created_at'=> now(),
                'updated_at' => now()
            ]);
        }
    }
}
