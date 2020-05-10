<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Image;
use App\Work;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class WorkController extends Controller
{
    /**
     * Show a list of all works.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $works = Work::with('images')->get();

        return view('cms.works.index', compact('works'));
    }

    /**
     * Show the create form.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create()
    {
        return view('cms.works.form');
    }

    /**
     * Create a new work.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(): RedirectResponse
    {
        request()->validate([
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
        ]);

        $slug = Str::slug(request('title'));

        $image = request()->file('image');

        $name = $slug.'.'.$image->getClientOriginalExtension();
        $path = 'images/works/'.$slug.'/';

        Storage::disk('public')->put($path.$name, File::get($image));

        $work = new Work;

        $work->title = request('title');
        $work->slug = $slug;
        $work->image = $name;
        $work->description = request('description');
        $work->github = request('github');
        $work->website = request('website');

        $work->save();

        $current_image = 1;

        foreach (request()->file('images') as $image) {
            $name = $current_image.'.'.$image->getClientOriginalExtension();

            Storage::disk('public')->put($path.$name, File::get($image));

            $images = new Image;
            $images->work_id = $work->id;
            $images->image = $name;

            $images->save();

            $current_image++;
        }

        return redirect(route('cms.works'))->with('success', 'New work has been created');
    }

    /**
     * Show the update form.
     *
     * @param \App\Work $work
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Work $work)
    {
        return view('cms.works.form', compact('work'));
    }

    /**
     * Update a new work.
     *
     * @param \App\Work $work
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Work $work): RedirectResponse
    {
        $work->update(request()->toArray());

        return back()->with('success', 'Work has been updated');
    }

    /**
     * Delete a work.
     *
     * @param \App\Work $work
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     * @throws \Exception
     */
    public function destroy(Work $work)
    {
        Storage::disk('public')->deleteDirectory('images/works/'.Str::slug($work->title));

        $work->delete();

        return redirect(route('cms.works'))->with('success', 'Work has been deleted');
    }
}
