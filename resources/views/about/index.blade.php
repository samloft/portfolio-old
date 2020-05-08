@extends('layouts.master')

@section('content')
    <div class="bg-light p-12 w-3/4 rounded shadow mx-auto text-white">
        <div class="flex mb-10">
            <div class="w-3/4">
                <h1 class="text-4xl font-bold tracking-tighter">About me</h1>

                <p class="text-gray-400 font-light leading-tight mb-3">
                    My name is Samuel and I'm a full stack developer. I have always had a passion for the development
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
            <div class="w-1/4 flex justify-end">
                <img class="h-24 rounded-full border border-white" src="{{ asset('images/me.png') }}" alt="It's me">
            </div>
        </div>

        <div>
            <h1 class="text-4xl font-bold tracking-tighter">My stack</h1>

            <p class="text-gray-400 font-light leading-tight mb-3">
                Depending on what I am working on, the stack can change, but my bread and butter is..
            </p>

            <div class="mt-6 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-8">
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
