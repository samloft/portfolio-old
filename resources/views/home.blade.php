@extends('layouts.master')

@section('content')
    <div class="flex justify-between items-center mt-1/12">
        <div class="sm:text-center lg:text-left w-3/5">
            <h2 class="mt-1 text-4xl tracking-tight leading-10 font-extrabold text-indigo-600 sm:leading-none sm:text-6xl lg:text-5xl xl:text-6xl">
                Hello 👋
                <br/>
                I'm <span class="text-white">Samuel</span>
            </h2>
            <h2 class="mt-1 text-2xl tracking-tight leading-10 font-medium text-gray-200 sm:leading-none sm:text-6xl lg:text-3xl xl:text-4xl">
                Software Developer....
            </h2>
        </div>
        <div
            class="relative">
            <img class=""
                 width="800"
                 src="{{ asset('images/main.png') }}"
                 alt="Developer"/>
        </div>
    </div>
@endsection
