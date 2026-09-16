<?php

namespace App\Http\Controllers;

use App\Models\AboutFaq;
use App\Models\BannerSlide;
use App\Models\Course;
use App\Models\Event;
use App\Models\FunFact;
use App\Models\Service;
use App\Models\TeamMember;
use App\Models\Testimonial;
use Inertia\Inertia;
use Inertia\Response;

class HomeController extends Controller
{
    /**
     * Show the public landing page.
     */
    public function index(): Response
    {
        return Inertia::render('Home', [
            'slides' => BannerSlide::query()->orderBy('id')->get(),
            'services' => Service::query()->orderBy('id')->get(),
            'aboutFaqs' => AboutFaq::query()->orderBy('id')->get(),
            'courses' => Course::query()->orderBy('id')->get(),
            'funFacts' => FunFact::query()->orderBy('id')->get(),
            'teamMembers' => TeamMember::query()->orderBy('id')->get(),
            'testimonials' => Testimonial::query()->orderBy('id')->get(),
            'events' => Event::query()->orderBy('id')->get(),
        ]);
    }
}
