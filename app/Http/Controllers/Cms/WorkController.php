<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;

class WorkController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('cms.works.index');
    }
}
