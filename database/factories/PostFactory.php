<?php

namespace Database\Factories;

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
        $title = $this->faker->realText(rand(10,40));
        $short_title = mb_strlen($title)>30?mb_substr($title,0,30).'...':$title;
        $img = "https://via.placeholder.com/400/5611A8/C0C0C0/?text=Picture";
        $created = $this->faker->dateTimeBetween('-1 years','-1 days');

        return [
            'author_id'=>rand(1,4),
            'title'=> $title,
            'short_title'=>$short_title,
            'description'=> $this->faker->realText(rand(100,500)),
            'img'=>$img,
            'created_at'=>$created,
            'updated_at'=>$created
        ];
    }
}
