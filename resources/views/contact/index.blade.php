@extends('layouts.master')

@section('content')
    <div class="bg-light p-5 md:p-12 md:w-3/4 rounded shadow mx-auto text-white">
        <div class="mb-5 md:mb-10">
            <h1 class="text-4xl font-bold tracking-tighter">Get in touch</h1>

            <p class="text-gray-400 font-light leading-tight mb-3">
                If you wanna get in touch, have a question or want to work together? Fill in the form below and i'll get
                back to you as soon as I can 👍
            </p>

            <p class="text-gray-400 font-light leading-tight">
                Alternatively send me an email directly at <a href="mailto:sam@devloft.co.uk"
                                                              class="font-bold hover:opacity-75 hover:underline">sam@devloft.co.uk</a>.
            </p>
        </div>

        @include('layouts.alerts')

        <form method="post" action="{{ route('contact.store') }}">
            @csrf

            <div class="mb-3">
                <input id="name" name="name" class="bg-dark rounded shadow w-full py-2 px-2 mt-2 text-gray-300"
                       placeholder="Your name" value="{{ old('name') }}" required>
            </div>

            <div class="mb-3">
                <input id="email" name="email" type="email" class="bg-dark rounded shadow w-full py-2 px-2 mt-2 text-gray-300"
                       placeholder="Your Email Address" value="{{ old('email') }}" required>
            </div>

            <div class="hidden">
                <input name="mobile" value="1" required>
            </div>

            <div class="mb-3">
            <textarea id="message" name="message" rows="6"
                      class="bg-dark rounded shadow w-full py-2 px-2 mt-2 text-gray-300"
                      placeholder="Your Message" required>{{ old('message') }}</textarea>
            </div>

            <div class="text-right">
                <button type="submit"
                        class="bg-dark py-2 px-4 rounded shadow-lg hover:opacity-75 border border-white font-semibold">
                    Submit <span class="ml-3">🚀</span>
                </button>
            </div>
        </form>
    </div>
@endsection
