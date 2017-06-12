<?php

use Illuminate\Database\Seeder;
use App\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
    	

        DB::table('users')->insert([
            'name' => 'John Smith',
            'email' => 'John.Smith@gmail.com',
            'password' => bcrypt('password'),
        ]);

        Post::create([
			'title' => 'Post 1',			
			'body' => Lipsum::short()->text(60), 
			'active' => true,
			'user_id' => 1,
			'published_at'=>Carbon\Carbon::now(),
		]);

		 Post::create([
			'title' => 'Post 2',			
			'body' => Lipsum::short()->text(60), 
			'active' => true,
			'user_id' => 1,
			'published_at'=>Carbon\Carbon::now(),
		]);

		Post::create([
			'title' => 'Post 3',			
			'body' => Lipsum::short()->text(60), 
			'active' => true,
			'user_id' => 1,
			'published_at'=>Carbon\Carbon::now(),
		]);

		Post::create([
			'title' => 'Post 4',			
			'body' => Lipsum::short()->text(60), 
			'active' => true,
			'user_id' => 1,
			'published_at'=>Carbon\Carbon::now(),
		]);

		Post::create([
			'title' => 'Post 5',			
			'body' => Lipsum::short()->text(60), 
			'active' => true,
			'user_id' => 1,
			'published_at'=>Carbon\Carbon::now(),
		]);

		Post::create([
			'title' => 'Post 6',			
			'body' => Lipsum::short()->text(60), 
			'active' => true,
			'user_id' => 1,
			'published_at'=>Carbon\Carbon::now(),
		]);
    }
}
