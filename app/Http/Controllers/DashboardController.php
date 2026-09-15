<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class DashboardController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Dashboard/Index', [
            'stats' => [
                ['label' => 'Students', 'value' => '1,248', 'color' => 'primary', 'trend' => 'Updated today'],
                ['label' => 'Courses', 'value' => '36', 'color' => 'success', 'trend' => '3 new this term'],
                ['label' => 'Assignments', 'value' => '89', 'color' => 'warning', 'trend' => '12 due this week'],
                ['label' => 'Messages', 'value' => '14', 'color' => 'info', 'trend' => '5 unread'],
            ],
        ]);
    }
}
