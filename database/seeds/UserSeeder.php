<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Chris Vasey',
            'email' => 'chris@chrisvasey.com',
            'password' => bcrypt(env('ADMIN_PASSWORD')),
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);

        DB::table('users')->insert([
            'name' => 'Joe Blogs',
            'email' => 'joe@blogs.com',
            'password' => bcrypt(env('ADMIN_PASSWORD')),
            'created_at' =>  Carbon::now(),
            'updated_at' =>  Carbon::now(),
        ]);
    }
}
