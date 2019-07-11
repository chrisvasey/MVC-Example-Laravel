<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => 'This is our first article',
            'content' => 'Quisque commodo blandit lacinia. Sed rhoncus orci vitae tellus ultricies maximus. Nulla facilisi. Nulla congue tincidunt lectus maximus sollicitudin. Phasellus blandit vehicula turpis et tincidunt. Proin convallis at dolor eu eleifend. Donec dictum, purus eu ullamcorper blandit, lectus magna dignissim massa, vitae vehicula tellus nulla ut diam. Ut congue velit nec consequat porttitor. Donec tristique varius risus non pretium. Fusce nulla mauris, tincidunt in orci eget, bibendum pretium felis. Vestibulum eu dapibus orci. In rutrum luctus augue non maximus. Nullam efficitur nulla justo, et consequat erat tincidunt eu. Sed tristique ipsum tortor, dignissim bibendum dui dignissim id.',
            'user_id' => 1,
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);

        DB::table('articles')->insert([
            'title' => 'This is our second',
            'content' => 'Quisque commodo blandit lacinia. Sed rhoncus orci vitae tellus ultricies maximus. Nulla facilisi. Nulla congue tincidunt lectus maximus sollicitudin. Phasellus blandit vehicula turpis et tincidunt. Proin convallis at dolor eu eleifend. Donec dictum, purus eu ullamcorper blandit, lectus magna dignissim massa, vitae vehicula tellus nulla ut diam. Ut congue velit nec consequat porttitor. Donec tristique varius risus non pretium. Fusce nulla mauris, tincidunt in orci eget, bibendum pretium felis. Vestibulum eu dapibus orci. In rutrum luctus augue non maximus. Nullam efficitur nulla justo, et consequat erat tincidunt eu. Sed tristique ipsum tortor, dignissim bibendum dui dignissim id.',
            'user_id' => 2,
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);
    }
}
