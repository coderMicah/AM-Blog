<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Tag;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory(10)->create();

        $posts = Post::factory(15)->create();
        $tags = Tag::factory(5)->create();

        //attch tags to posts
        foreach ($posts as $post) {
            $tagsToAttach = $tags->random(rand(1, 3))->pluck('id');
            $post->tags()->attach($tagsToAttach);
        }

        // foreach($tags as $tag){
        //     $postsToAttach = $posts->random(rand(1, 3))->pluck('id');
        //     $tag->posts()->attach($postsToAttach);
        // }
    }
}
