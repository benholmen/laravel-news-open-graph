<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->title(),
            'body' => fake()->paragraphs(rand(3, 6), asText: true),
            // 'image' => 'https://images.unsplash.com/photo-1533743983669-94fa5c4338ec?q=80&w=800&auto=format&fit=crop',
            'image' => 'https://picperf.io/https://laravelnews.s3.amazonaws.com/featured-images/herd-windows.png',
        ];
    }

    private function title(): string
    {
        return collect([
            // "Perky 'Canada' Has Own Government, Laws",
            // "Kitten Thinks of Nothing but Murder All Day",
            "Laravel Herd for Windows is now released!",
            // "Winner Didn't Even Know It Was Pie-Eating Contest",
            // "Rotation of Earth Plunged Entire North American Continent Into Darkness",
        ])->random();
    }
}
