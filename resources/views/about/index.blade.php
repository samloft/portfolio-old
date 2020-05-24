@extends('layouts.master')

@section('content')
    <div class="bg-light p-5 md:p-12 md:w-3/4 rounded shadow mx-auto text-white mb-3 md:mb-10">
        <div class="md:flex mb-5">
            <div class="md:w-3/4">
                <div class="md:hidden mb-3 flex justify-center">
                    <img class="h-24 rounded-full border border-white" src="{{ asset('images/me.png') }}" alt="It's me">
                </div>

                <h1 class="text-4xl font-bold tracking-tighter">About me</h1>

                <p class="text-gray-400 font-light leading-tight mb-3">
                    My name is Samuel and I'm a full stack developer with over 5 years experience. I have always had a passion for the development
                    world and lucky that not only is
                    this my full-time job, but also my hobby.
                </p>

                <p class="text-gray-400 font-light leading-tight">
                    I strive to make web applications that are not only great to use but also benefit the users using
                    them. A collection of this work
                    can be found on the "My works" page. As well as web application I also make websites (although a lot
                    less frequently).
                </p>
            </div>
            <div class="hidden w-1/4 md:flex justify-end">
                <img class="h-24 rounded-full border border-white" src="{{ asset('images/me.png') }}" alt="It's me">
            </div>
        </div>

        <div class="mb-10">
            <a href="https://github.com/samloft" target="_blank">
                <button
                    class="flex bg-dark py-2 px-4 rounded shadow-lg hover:opacity-75 border border-white font-semibold">
                    Check me out on GitHub

                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24"
                         class="ml-2">
                        <path fill="currentColor"
                              d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                    </svg>
                </button>
            </a>
        </div>

        <div>
            <h1 class="text-4xl font-bold tracking-tighter">My stack</h1>

            <p class="text-gray-400 font-light leading-tight mb-3">
                Depending on what I am working on, the stack can change, but my bread and butter is..
            </p>

            <div class="mt-6 grid grid-cols-1 gap-0.5 md:grid-cols-3 lg:mt-8">
                <div class="col-span-1 flex justify-center py-8 px-8 bg-dark">
                    <img class="max-h-12" src="{{ asset('images/php.png') }}" alt="PHP"/>
                </div>
                <div class="col-span-1 flex justify-center py-8 px-8 bg-dark">
                    <img class="max-h-12" src="{{ asset('images/laravel.png') }}" alt="Laravel"/>
                </div>
                <div class="col-span-1 flex justify-center py-8 px-8 bg-dark">
                    <img class="max-h-12" src="{{ asset('images/javascript.png') }}" alt="Javascript"/>
                </div>
                <div class="col-span-1 flex justify-center py-8 px-8 bg-dark">
                    <img class="max-h-12" src="{{ asset('images/vue.png') }}" alt="VueJS"/>
                </div>
                <div class="col-span-1 flex justify-center py-10 px-8 bg-dark">
                    <img class="max-h-8" src="{{ asset('images/tailwind.png') }}" alt="TailwindCSS"/>
                </div>
                <div class="col-span-1 flex justify-center py-8 px-8 bg-dark">
                    <img class="max-h-12" src="{{ asset('images/mysql.png') }}" alt="MySQL"/>
                </div>
            </div>
        </div>
    </div>
@endsection
