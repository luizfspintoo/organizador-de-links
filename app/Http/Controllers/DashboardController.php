<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {

        /** @var User $user */
        $user = auth()->user();

        return view("dashboard", [
            "user" => $user,
            "links" => $user->links()->orderBy('order')->get()
        ]);
    }
}
