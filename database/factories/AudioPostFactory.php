<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\AudioPost;
use Illuminate\Database\Eloquent\Factories\Factory;

class AudioPostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AudioPost::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText($maxNbChars = 80, $indexSize = 2),
            'audio_file_path' => 'Audio',
            'thumb_file_path' => 'https://picsum.photos/420/320',
            'description' => $this->faker->text($maxNbChars = 200),
            'user_id' => $this->faker->numberBetween(1, 11),
        ];
    }
}
