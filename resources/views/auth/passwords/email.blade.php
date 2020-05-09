@extends('auth.master')

@section('content')
    <form method="POST" action="{{ route('password.email') }}" class="bg-light rounded shadow-lg px-10 py-10 mt-10 text-white w-2/4 mx-auto">
        @csrf

        @include('layouts.alerts')

        <div class="mb-3">
            <label class="block text-sm font-semibold mb-2" for="email">
                Email Address
            </label>
            <input id="email" class="bg-dark rounded shadow w-full py-2 px-2 mt-2 text-gray-300" name="email" type="text"
                   placeholder="E-Mail" autocomplete="email" value="{{ $email ?? old('email') }}" required autofocus>
        </div>
        <div class="flex">
            <button
                class="bg-dark hover:opacity-75 w-full p-2 border border-white text-sm text-white uppercase font-bold tracking-wider rounded-lg">
                Send Password Reset Link
            </button>
        </div>
    </form>
@endsection
