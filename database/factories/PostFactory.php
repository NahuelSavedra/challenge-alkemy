<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(5),
            'body'=>$this->faker->text($maxNbChars = 500),
            'url_image'=>$this->faker->randomElement(['1.jpg','2.jpg','3.jpg','4.jpg','5.jpg']),
            'id_category'=> Category::all()->random()->id
        ];
    }
}
