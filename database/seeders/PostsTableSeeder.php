<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            $categories = Category::all();

            Post::create([
                'category-id' => $faker->randomElement($categories)->id,
                'title'       => $faker->words(rand(2, 10), true),
                'url_image'   => 'https://picsum.photos/id/' . rand(1, 270) . '/500/400',
                'content'     => $faker->paragraphs(rand(2, 20), true),
            ]);
        }
    }
}
