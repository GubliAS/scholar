<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\TeamMember;
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
            'courses' => Course::query()->orderBy('id')->get(),
            'teamMembers' => TeamMember::query()->orderBy('id')->get(),
            'slides' => [
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
            ],
            'services' => [
                [
                    'title' => 'Online Degrees',
                    'text' => 'Whenever you need free templates in HTML CSS, you just remember TemplateMo website.',
                    'icon' => asset('assets/images/service-01.png'),
                    'icon_alt' => 'online degrees',
                    'url' => '#',
                ],
                [
                    'title' => 'Short Courses',
                    'text' => 'You can browse free templates based on different tags such as digital marketing, etc.',
                    'icon' => asset('assets/images/service-02.png'),
                    'icon_alt' => 'short courses',
                    'url' => '#',
                ],
                [
                    'title' => 'Web Experts',
                    'text' => 'You can start learning HTML CSS by modifying free templates from our website too.',
                    'icon' => asset('assets/images/service-03.png'),
                    'icon_alt' => 'web experts',
                    'url' => '#',
                ],
            ],
        ]);
    }
}
