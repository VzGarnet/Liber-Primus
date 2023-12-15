@extends('layouts.app')

@section('head')
    
@endsection

@section('content')
    {{-- Banner --}}
    <div class='bg-[#C6EFEF] flex justify-center items-center py-5'>
        <div class="px-24">
            <img src="{{url('/images/buku.png')}}" width="400">
        </div>
        <div class="flex flex-col items-center justify-center text-center">
            <h1 class="font-bold text-5xl mb-3">The World Belongs To Those</h1>
            <h1 class="font-bold text-5xl mb-12">Who Read</h1>
            <a class="text-2xl px-4 py-2 border border-black rounded-lg bg-[#C6EFEF] font-semibold" href="">Shop Now</a>
        </div>
    </div>

    {{-- Filter --}}
    <div class="flex">
        <div class="filter border-2">
            <form action="">
                <h2 class="">Filter</h2>
                <h5 class="">Genre</h5>
                @foreach ($genres as $genre)
                    <input type="radio" name="genre" id="{{$genre->genre}}">
                    <label for="{{$genre->genre}}">{{$genre->genre}}</label><br>
                @endforeach

                <h5 class="">Publisher</h5>
                @foreach ($publishers as $publisher)
                    <input type="radio" name="genre" id="{{$publisher->name}}">
                    <label for="{{$publisher->name}}">{{$publisher->name}}</label><br>
                @endforeach

                <input type="reset" value="Reset">
            </form>
        </div>
        <div class="list"></div>
    </div>
@endsection