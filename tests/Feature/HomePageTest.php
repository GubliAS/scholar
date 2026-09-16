<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Inertia\Testing\AssertableInertia as Assert;
use Tests\TestCase;

class HomePageTest extends TestCase
{
    use RefreshDatabase;

    public function test_home_page_renders_banner_and_services(): void
    {
        $this->seed();

        $this->get(route('home'))
            ->assertOk()
            ->assertInertia(fn (Assert $page) => $page
                ->component('Home')
                ->has('slides', 3)
                ->has('services', 3)
                ->has('aboutFaqs', 4)
                ->has('funFacts', 4)
                ->has('testimonials', 3)
                ->has('events', 3)
                ->where('services.0.title', 'Online Degrees')
                ->where('events.0.title', 'UI Best Practices')
            );
    }
}
