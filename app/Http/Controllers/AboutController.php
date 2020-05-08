<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    /**
     * Display the about page.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('about.index');
    }
}
