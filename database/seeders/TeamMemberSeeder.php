<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $members = [
            [
                'name' => 'Sophia Rose',
                'role' => 'UX Teacher',
                'image' => '/assets/images/member-01.jpg',
                'facebook_url' => '#',
                'twitter_url' => '#',
                'linkedin_url' => '#',
            ],
            [
                'name' => 'Cindy Walker',
                'role' => 'Graphic Teacher',
                'image' => '/assets/images/member-02.jpg',
                'facebook_url' => '#',
                'twitter_url' => '#',
                'linkedin_url' => '#',
            ],
            [
                'name' => 'David Hutson',
                'role' => 'Full Stack Master',
                'image' => '/assets/images/member-03.jpg',
                'facebook_url' => '#',
                'twitter_url' => '#',
                'linkedin_url' => '#',
            ],
            [
                'name' => 'Stella Blair',
                'role' => 'Digital Animator',
                'image' => '/assets/images/member-04.jpg',
                'facebook_url' => '#',
                'twitter_url' => '#',
                'linkedin_url' => '#',
            ],
        ];

        foreach ($members as $member) {
            TeamMember::query()->updateOrCreate(
                ['name' => $member['name']],
                $member,
            );
        }
    }
}
