@extends('cms.layouts.master')

@section('content')
    <div class="flex flex-col">
        @include('layouts.alerts')

        <div class="text-right mb-3">
            <a href="{{ route('cms.works.create') }}">
                <button type="submit"
                        class="bg-dark py-1 px-4 rounded shadow-lg hover:opacity-75 border border-white font-semibold text-sm">
                    New work
                </button>
            </a>
        </div>

        <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
            <div class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-dark">
                <table class="min-w-full">
                    <thead>
                    <tr>
                        <th class="px-6 py-3 border-b border-dark bg-dark text-left text-xs leading-4 font-medium uppercase tracking-wider">
                            Project
                        </th>
                        <th class="px-6 py-3 border-b border-dark bg-dark text-left text-xs leading-4 font-medium uppercase tracking-wider">
                            Images
                        </th>
                        <th class="px-6 py-3 border-b border-dark bg-dark text-left text-xs leading-4 font-medium uppercase tracking-wider">
                            Added
                        </th>
                        <th class="px-6 py-3 border-b border-dark bg-dark"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($works as $work)
                        <tr class="bg-gray-50">
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900 border-b border-gray-200">
                                {{ $work->title }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 text-gray-500 border-b border-gray-200">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                {{ count($work->images) }}
                            </span>
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5 font-medium text-gray-900 border-b border-gray-200">
                                {{ \Carbon\Carbon::parse($work->created_at)->format('d-m-Y') }}
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap text-right text-sm leading-5 font-medium border-b border-gray-200">
                                <a href="{{ route('cms.works.edit', ['work' => $work->id]) }}" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
