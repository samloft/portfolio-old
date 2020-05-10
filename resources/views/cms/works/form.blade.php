@extends('cms.layouts.master')

@section('styles')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-lite.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="flex flex-col">
        @include('layouts.alerts')

        @if(isset($work))
            <div class="flex justify-end">
                <form method="post" action="{{ route('cms.works.destroy', ['work' => $work]) }}">
                    @csrf
                    @method('delete')

                    <button type="submit"
                            class="mr-3 bg-red-600 py-2 px-4 rounded shadow-lg hover:opacity-75 border border-white font-semibold">
                        Delete
                    </button>
                </form>
            </div>
        @endif

        <form action="{{ isset($work) ? route('cms.works.update', ['work' => $work->id]) : route('cms.works.store') }}"
              method="post" enctype="multipart/form-data">

            @csrf

            @if(isset($work))
                @method('patch')
            @endif

            <div class="mb-3">
                <label for="title">Project Title</label>
                <input id="title" name="title" class="bg-dark rounded shadow-md w-full py-2 px-2 mt-2 text-gray-300"
                       placeholder="Project title" value="{{ $work->title ?? '' }}" required>
            </div>

            <div class="mb-3">
                <label for="image">Display Image</label>
                <input id="image" name="image" type="file"
                       class="bg-dark rounded shadow-lg w-full py-2 px-2 mt-2 text-gray-300"
                       placeholder="Display image">
            </div>

            <div class="mb-3">
                <label for="description">Description</label>
                <textarea id="description" name="description"
                          class="bg-dark rounded shadow-lg w-full py-2 px-2 mt-2 text-gray-300"
                          placeholder="Project description">{{ $work->description ?? '' }}</textarea>
            </div>

            <div class="mb-3">
                <label for="images">Images</label>
                <input id="images" name="images[]" type="file"
                       class="bg-dark rounded shadow-lg w-full py-2 px-2 mt-2 text-gray-300"
                       placeholder="Images" multiple>
            </div>

            <div class="mb-3">
                <label for="github">GitHub Link</label>
                <input id="github" name="github" class="bg-dark rounded shadow-md w-full py-2 px-2 mt-2 text-gray-300"
                       placeholder="GitHub link" value="{{ $work->github ?? '' }}">
            </div>

            <div class="mb-3">
                <label for="website">Website Link</label>
                <input id="website" name="website" class="bg-dark rounded shadow-md w-full py-2 px-2 mt-2 text-gray-300"
                       placeholder="Website link" value="{{ $work->website ?? '' }}">
            </div>

            <div class="flex justify-end mt-6">
                <button type="submit"
                        class="bg-dark py-2 px-4 rounded shadow-lg hover:opacity-75 border border-white font-semibold">
                    Submit <span class="ml-3">🚀</span>
                </button>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-lite.min.js"></script>

    <script>
        $(function () {
            $('#description').summernote({
                height: 200
            });
        });
    </script>
@endsection
