@extends('layout.default')
@section('title', '- Envoi de fichier')
@section('content')
    <div class="mx-auto max-w-2xl">
        <div class="text-white mt-[10px]">
            @if (Session::has('message'))
                <div class="px-2 bg-green-500 ">
                    {{ Session::get('message') }}
                </div>
            @elseif ($errors->any())
                <div class="px-2 bg-red-600">
                    {{ $errors->first() }}
                </div>
            @endif
        </div>
        <form action="{{ route('form.file.store') }}" method="POST" enctype="multipart/form-data" class="mt-[30px]">
            @csrf

            <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                <div class="text-center">
                    <svg viewBox="0 0 24 24" fill="currentColor" data-slot="icon" aria-hidden="true"
                        class="mx-auto size-12 text-gray-300">
                        <path
                            d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z"
                            clip-rule="evenodd" fill-rule="evenodd"></path>
                    </svg>
                    <div class="mt-4 flex text-sm/6 text-gray-600">
                        <label for="file-upload"
                            class="relative cursor-pointer rounded-md bg-transparent font-semibold text-indigo-600 focus-within:outline-2 focus-within:outline-offset-2 focus-within:outline-indigo-600 hover:text-indigo-500">
                            <span><!-- Upload a file --></span>
                            <input id="file-upload" type="file" name="file-upload">
                        </label>
                        <p class="pl-1"><!-- or drag and drop --></p>
                    </div>
                    <p class="text-xs/5 text-gray-600"><!-- PNG, JPG, GIF up to 10MB --></p>
                </div>
            </div>



            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Valider
                </button>
            </div>
        </form>
    </div>
@endsection
