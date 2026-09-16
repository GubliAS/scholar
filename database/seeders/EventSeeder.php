<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $events = [
            [
                'category' => 'Web Design',
                'title' => 'UI Best Practices',
                'event_date' => '16 Feb 2036',
                'duration' => '22 Hours',
                'price' => 120,
                'image' => '/assets/images/event-01.jpg',
                'url' => '#',
            ],
            [
                'category' => 'Front End',
                'title' => 'New Design Trend',
                'event_date' => '24 Feb 2036',
                'duration' => '30 Hours',
                'price' => 320,
                'image' => '/assets/images/event-02.jpg',
                'url' => '#',
            ],
            [
                'category' => 'Full Stack',
                'title' => 'Web Programming',
                'event_date' => '12 Mar 2036',
                'duration' => '48 Hours',
                'price' => 440,
                'image' => '/assets/images/event-03.jpg',
                'url' => '#',
            ],
        ];

        foreach ($events as $event) {
            Event::query()->updateOrCreate(
                ['title' => $event['title']],
                $event,
            );
        }
    }
}
