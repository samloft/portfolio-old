<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display the contact page.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('contact.index');
    }

    /**
     * Send the contact email.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(): RedirectResponse
    {
        if (request('mobile') !== '1') {
            return back()->with('error', 'No bots please.');
        }

        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required|min:10',
        ]);

        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new Contact(request()));

        if (Mail::failures()) {
            return back()->with('error', 'Something terrible happened and I didn\'t get your message. Why not try messaging me directly?');
        }

        return back()->with('success', 'Cheers for the message, I will be in touch soon.');
    }
}
