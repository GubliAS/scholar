<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'title' => 'Online Degrees',
                'text' => 'Whenever you need free templates in HTML CSS, you just remember TemplateMo website.',
                'icon' => '/assets/images/service-01.png',
                'icon_alt' => 'online degrees',
                'url' => '#',
            ],
            [
                'title' => 'Short Courses',
                'text' => 'You can browse free templates based on different tags such as digital marketing, etc.',
                'icon' => '/assets/images/service-02.png',
                'icon_alt' => 'short courses',
                'url' => '#',
            ],
            [
                'title' => 'Web Experts',
                'text' => 'You can start learning HTML CSS by modifying free templates from our website too.',
                'icon' => '/assets/images/service-03.png',
                'icon_alt' => 'web experts',
                'url' => '#',
            ],
        ];

        foreach ($services as $service) {
            Service::query()->updateOrCreate(
                ['title' => $service['title']],
                $service,
            );
        }
    }
}
