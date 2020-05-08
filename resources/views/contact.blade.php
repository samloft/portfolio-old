@extends('layouts.master')

@section('content')
    <div class="bg-light p-12 w-3/4 rounded shadow mx-auto text-white">
        <div class="mb-10">
            <h1 class="text-4xl font-bold tracking-tighter">Get in touch</h1>

            <p class="text-gray-400 font-light leading-tight mb-3">
                If you wanna get in touch, have a question or want to work together? Fill in the form below and i'll get
                back to you as soon as I can 👍
            </p>

            <p class="text-gray-400 font-light leading-tight">
                Alternatively send me an email directly at <a href="mailto:sam@devloft.co.uk" class="font-bold hover:opacity-75 hover:underline">sam@devloft.co.uk</a>.
            </p>
        </div>

        <div class="rounded-md bg-green-100 p-4 mb-3">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm leading-5 font-medium text-green-800">
                        Cheers for the message, I will be in touch soon.
                    </p>
                </div>
            </div>
        </div>

        <div class="rounded-md bg-red-100 p-4 mb-3">
            <div class="flex">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-red-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <div class="ml-3">
                    <p class="text-sm leading-5 font-medium text-red-800">
                        Something terrible happened and I didn't get your message. Why not try messaging me directly?
                    </p>
                </div>
            </div>
        </div>

        <div class="mb-3">
            <input id="name" name="name" class="bg-dark rounded shadow w-full py-2 px-2 mt-2 text-gray-300"
                   placeholder="Your name">
        </div>

        <div class="mb-3">
            <input id="email" name="email" class="bg-dark rounded shadow w-full py-2 px-2 mt-2 text-gray-300"
                   placeholder="Your Email Address">
        </div>

        <div class="mb-3">
            <textarea id="message" name="message" rows="6"
                      class="bg-dark rounded shadow w-full py-2 px-2 mt-2 text-gray-300"
                      placeholder="Your Message"></textarea>
        </div>

        <div class="text-right">
            <button class="bg-dark py-2 px-4 rounded shadow-lg hover:opacity-75 border border-white font-semibold">Submit <span class="ml-3">🚀</span></button>
        </div>
    </div>
@endsection
