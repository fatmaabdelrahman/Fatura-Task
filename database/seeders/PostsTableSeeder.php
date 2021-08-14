<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('posts')->delete();

        \DB::table('cities')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'description' => 'post number 1 for fatura Egypt',
                    'image'=>'image/image.jpg',
                    'user_id'=>1
                ),
        ));
    }
}
