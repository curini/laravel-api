@extends('layout.default')
@section('content')
    <div class="w-fit mx-auto mt-2 bg-amber-200 p-[4px] rounded-md">
        <h1 class="h1">Se connecter</h1>
        @if ($errors->any())
            <div class="bg-red-400 text-white p-[4px]">
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <form action="{{ route('login.store') }}" method="POST">
            @csrf
            <div class="block mt-2">
                <input type="email" name="email" class="bg-white border border-black w-[300px]">
            </div>
            <div class="block mt-2">
                <input type="password" name="password" class="bg-white border border-black w-[300px]">
            </div>
            <button type="submit" class="bg-blue-500 text-white p-[4px] mt-2 cursor-pointer">
                Valider
            </button>
        </form>
    </div>
@endsection
