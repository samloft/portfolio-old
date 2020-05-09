<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Work;

class WorkController extends Controller
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $works = Work::get();

        return view('cms.works.index', compact('works'));
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('cms.works.form');
    }

    public function store()
    {

    }

    /**
     * @param \App\Work $work
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Work $work)
    {
        return view('cms.works.form', compact('work'));
    }

    public function update(Work $work)
    {

    }

    /**
     * @param \App\Work $work
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Work $work)
    {
        $work->delete();

        return redirect(route('cms.works'))->with('success', 'Work has been deleted');
    }
}
