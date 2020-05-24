@extends('layouts.master')

@section('content')
    <div class="bg-light p-5 md:p-12 md:w-3/4 rounded shadow mx-auto text-white">
        <h1 class="text-3xl md:text-4xl font-bold tracking-tighter">My work</h1>

        <p class="text-sm md:text-base text-gray-400 font-light leading-tight mb-3">
            A selection of works I have completed 👨‍💻.
        </p>

        <works :works_data="{{ json_encode($works, true) }}"></works>
    </div>
@endsection
