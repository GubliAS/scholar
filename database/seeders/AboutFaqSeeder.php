<?php

namespace Database\Seeders;

use App\Models\AboutFaq;
use Illuminate\Database\Seeder;

class AboutFaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faqs = [
            [
                'anchor' => 'One',
                'question' => 'Where shall we begin?',
                'answer' => 'Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn\'t eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.',
                'is_open' => true,
            ],
            [
                'anchor' => 'Two',
                'question' => 'How do we work together?',
                'answer' => 'Dolor <strong>almesit amet</strong>, consectetur adipiscing elit, sed doesn\'t eiusmod tempor incididunt ut labore consectetur <code>adipiscing</code> elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.',
                'is_open' => false,
            ],
            [
                'anchor' => 'Three',
                'question' => 'Why SCHOLAR is the best?',
                'answer' => 'There are more than one hundred responsive HTML templates to choose from <strong>Template</strong>Mo website. You can browse by different tags or categories.',
                'is_open' => false,
            ],
            [
                'anchor' => 'Four',
                'question' => 'Do we get the best support?',
                'answer' => 'You can also search on Google with specific keywords such as <code>templatemo business templates, templatemo gallery templates, admin dashboard templatemo, 3-column templatemo, etc.</code>',
                'is_open' => false,
            ],
        ];

        foreach ($faqs as $faq) {
            AboutFaq::query()->updateOrCreate(
                ['anchor' => $faq['anchor']],
                $faq,
            );
        }
    }
}
