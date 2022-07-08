<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker ;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10 ; $i++){
            $new_post = new Post();
            $new_post->title = $faker->word();
            $new_post->slug = Post::slugGenerator($new_post->title);
            $new_post->contenet = $faker->text();
            $new_post->save();
        }
    }
}
