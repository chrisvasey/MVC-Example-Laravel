<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comment')->insert([
            'content' => 'Woah, this is cool!!!1!',
            'user_id' => 1,
            'article_id' => 2,
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);

        DB::table('comment')->insert([
            'content' => 'Thanks 😁',
            'user_id' => 2,
            'article_id' => 2,
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);

        DB::table('comment')->insert([
            'content' => 'Interesting..',
            'user_id' => 2,
            'article_id' => 1,
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);
    }
}
