<?php

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'title' => 'OoBook',
            'active' => 1,
            'created_at'=>now(),
            'updated_at'=>now(),


        ]);
    }
}
