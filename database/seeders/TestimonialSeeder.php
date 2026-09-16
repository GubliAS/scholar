<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'quote' => 'Please tell your friends or collegues about TemplateMo website. Anyone can access the website to download free templates. Thank you for visiting.',
                'author' => 'Claude David',
                'role' => 'Full Stack Master',
                'image' => '/assets/images/testimonial-author.jpg',
            ],
            [
                'quote' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravid.',
                'author' => 'Thomas Jefferson',
                'role' => 'UI Expert',
                'image' => '/assets/images/testimonial-author.jpg',
            ],
            [
                'quote' => 'Scholar is free website template provided by TemplateMo for educational related websites. This CSS layout is based on Bootstrap v5.3.0 framework.',
                'author' => 'Stella Blair',
                'role' => 'Digital Animator',
                'image' => '/assets/images/testimonial-author.jpg',
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::query()->updateOrCreate(
                ['author' => $testimonial['author']],
                $testimonial,
            );
        }
    }
}
