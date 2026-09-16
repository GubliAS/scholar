<?php

namespace Database\Seeders;

use App\Models\BannerSlide;
use Illuminate\Database\Seeder;

class BannerSlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $slides = [
            [
                'item_class' => 'item-1',
                'category' => 'Our Courses',
                'title' => 'With Scholar Teachers, Everything Is Easier',
                'text' => 'Scholar is free CSS template designed by TemplateMo for online educational related websites. This layout is based on the famous Bootstrap v5.3.0 framework.',
                'primary_label' => 'Request Demo',
                'primary_url' => '#',
                'secondary_label' => "What's Scholar?",
                'secondary_url' => '#',
            ],
            [
                'item_class' => 'item-2',
                'category' => 'Best Result',
                'title' => 'Get the best result out of your effort',
                'text' => 'You are allowed to use this template for any educational or commercial purpose. You are not allowed to re-distribute the template ZIP file on any other website.',
                'primary_label' => 'Request Demo',
                'primary_url' => '#',
                'secondary_label' => "What's the best result?",
                'secondary_url' => '#',
            ],
            [
                'item_class' => 'item-3',
                'category' => 'Online Learning',
                'title' => 'Online Learning helps you save the time',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporious incididunt ut labore et dolore magna aliqua suspendisse.',
                'primary_label' => 'Request Demo',
                'primary_url' => '#',
                'secondary_label' => "What's Online Course?",
                'secondary_url' => '#',
            ],
        ];

        foreach ($slides as $slide) {
            BannerSlide::query()->updateOrCreate(
                ['item_class' => $slide['item_class']],
                $slide,
            );
        }
    }
}
