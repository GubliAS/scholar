<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterLeadRequest;
use Illuminate\Http\RedirectResponse;

class RegisterLeadController extends Controller
{
    /**
     * Store a registration / contact lead from the public form.
     */
    public function store(StoreRegisterLeadRequest $request): RedirectResponse
    {
        $request->validated();

        return back()->with('message', 'Your message has been sent.');
    }
}
