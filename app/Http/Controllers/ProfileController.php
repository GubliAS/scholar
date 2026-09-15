<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class ProfileController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Profile', [
            'profile' => [
                'name' => 'Demo User',
                'email' => 'demo@npontu.com',
                'role' => 'Student',
            ],
            'activities' => [
                ['id' => 1, 'description' => 'Submitted assignment: Data Structures'],
                ['id' => 2, 'description' => 'Enrolled in Web Development'],
                ['id' => 3, 'description' => 'Updated profile settings'],
            ],
        ]);
    }
}
