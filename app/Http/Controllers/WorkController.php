<?php

namespace App\Http\Controllers;

use App\Work;

class WorkController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $works = Work::with('images')->get();

        return view('work.index', compact('works'));
    }
}
