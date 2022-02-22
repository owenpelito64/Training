<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          
            'title' => $this->faker->sentence,
            'body' => $this->faker->sentence,
            'post_image' => $this->faker->imageUrl('900','300'),
            // 
        ];
    }
}


// $table->string('title');
// $table->text('body');
// $table->text('post_image')->nullable();
// $table->timestamps();
// $table->unsignedBigInteger('post_id');
// $table->foreign('post_id')->reference('id')->on('posts')->onDelete('cascade');