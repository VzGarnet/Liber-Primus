<style>
    .line {
        border: solid black 2px 2px;
        position: relative;
    }
</style>

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
        <div class="filter border-3">
            <form action="">
                <h2 class="font-bold">Filter</h2>
                <h5 class="">Genre</h5>
                @foreach ($genres as $genre)
                    <input type="radio" name="genre" id="{{$genre->genre}}">
                    <label for="{{$genre->genre}}">{{$genre->genre}}</label><br>
                @endforeach
                <div class="line"></div>
                <h5 class="">Publisher</h5>
                @foreach ($publishers as $publisher)
                    <input type="radio" name="publisher" id="{{$publisher->name}}">
                    <label for="{{$publisher->name}}">{{$publisher->name}}</label><br>
                @endforeach
                <div class="line"></div>
                <h5>Price</h5>
                <input type="radio" name="price" id="low">
                <label for="low">Lowest</label><br>
                <input type="radio" name="price" id="high">
                <label for="high">Highest</label><br>
                <div class="line"></div>
                <h5>Stock</h5>
                <input type="radio" name="stock" id="all">
                <label for="all">All</label><br>
                <input type="radio" name="stock" id="avail">
                <label for="avail">Available</label><br>

                <input type="reset" value="Reset">
            </form>
        </div>
        <div class="list border-3">
            <div class="bg-[#EDEDED] flex flex-col justify-center items-center py-5">
                <div class="grid grid-cols-3 gap-5 w-[60%]">
                    @foreach ($books as $item)
                        <div class="flex flex-col text-center bg-white border border-black/[0.2] p-4 rounded-lg shadow-md" style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                            <img class='w-[15vw] h-[40vh]' src="{{($item->image)}}"width="150">
                            <span class='font-semibold mt-1 text-sm text-[#888888]'>{{$item->authors->name}}</span>
                            <span class='font-semibold mt-1 text-sm text-black'>{{$item->title}}</span>
                            <span class='font-bold mt-1 text-sm text-black'>Rp{{number_format($item->price, 2, ',', '.')}}</span>
                        </div>
                    @endforeach
                </div> 
            </div>
        </div>
    </div>
@endsection