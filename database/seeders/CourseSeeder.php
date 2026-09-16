<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = [
            [
                'title' => 'Learn Web Design',
                'category' => 'design',
                'category_label' => 'Webdesign',
                'author' => 'Stella Blair',
                'price' => 160,
                'image' => '/assets/images/course-01.jpg',
            ],
            [
                'title' => 'Web Development Tips',
                'category' => 'development',
                'category_label' => 'Development',
                'author' => 'Cindy Walker',
                'price' => 340,
                'image' => '/assets/images/course-02.jpg',
            ],
            [
                'title' => 'Latest Web Trends',
                'category' => 'design wordpress',
                'category_label' => 'Wordpress',
                'author' => 'David Hutson',
                'price' => 640,
                'image' => '/assets/images/course-03.jpg',
            ],
            [
                'title' => 'Online Learning Steps',
                'category' => 'development',
                'category_label' => 'Development',
                'author' => 'Stella Blair',
                'price' => 450,
                'image' => '/assets/images/course-04.jpg',
            ],
            [
                'title' => 'Be a WordPress Master',
                'category' => 'wordpress development',
                'category_label' => 'Wordpress',
                'author' => 'Sophia Rose',
                'price' => 320,
                'image' => '/assets/images/course-05.jpg',
            ],
            [
                'title' => 'Full Stack Developer',
                'category' => 'wordpress design',
                'category_label' => 'Webdesign',
                'author' => 'David Hutson',
                'price' => 240,
                'image' => '/assets/images/course-06.jpg',
            ],
        ];

        foreach ($courses as $course) {
            Course::query()->updateOrCreate(
                ['title' => $course['title']],
                $course,
            );
        }
    }
}
