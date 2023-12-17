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
    <div class="flex bg-[#EDEDED]">
        <div class="border border-black rounded-lg bg-[#EDEDED] w-[20%] m-10 h-[40%]">
            <form action="{{ route('filter') }}" method='GET' class="ml-5">
                @csrf

                <h2 class="font-bold text-lg pb-2 pt-2">Filter</h2>
                {{-- <h5 class="font-semibold text-lg">Genre</h5>

                @foreach ($genres as $genre)
                    <input type="radio" name="filterGenre" action='filterGenre' id="{{$genre->genre}}" value="{{$genre->id}}">
                    <label for="{{$genre->genre}}">{{$genre->genre}}</label><br>
                @endforeach --}}

                <div class="line"></div>
                <h5 class="font-semibold text-lg pt-4">Publisher</h5>

                @foreach ($publishers as $publisher)
                    <input type="radio" name="publisherid" id="{{$publisher->name}}" value="{{$publisher->id}}">
                    <label for="{{$publisher->name}}">{{$publisher->name}}</label><br>
                @endforeach

                <div class="line"></div>
                <h5 class="font-semibold text-lg pt-4">Price</h5>
                <input type="radio" name="price" id="low">
                <label for="low">Lowest</label><br>
                <input type="radio" name="price" id="high">
                <label for="high">Highest</label><br>
                <div class="line"></div>

                <h5 class="font-semibold text-lg pt-4">Stock</h5>
                <input type="radio" name="stock" id="all">
                <label for="all">All</label><br>
                <input type="radio" name="stock" id="avail">
                <label for="avail">Available</label><br>

                <div class="flex pt-4 justify-center -ml-5">
                    <input class="mt-4 border border-black py-2 px-2 rounded-md w-[60%] text-center font-bold" type="reset" value="Reset">
                    <input class="mt-4 border border-black py-2 px-2 rounded-md w-[60%] text-center font-bold" type="submit">
                </div>
            </form>
        </div>
        <div class="w-full">
            <div class="flex pt-5 ml-64">
                <a class="font-bold text-2xl text-black underline" href="/book" style="text-decoration-color: #01C7C8;">Book</a>
                <a class="font-bold text-2xl ml-5 text-[#888888]" href="/author">Author</a>
            </div>
        
            <div class="bg-[#EDEDED] flex flex-col items-center py-4">
                <div class="grid grid-cols-3 gap-5 w-[60%]">
                    @if (isset($books))
                        @foreach ($books as $item)
                            <a href="{{ route('bookdetail', ['id' => $item->id]) }}" class="bg-white border border-black/[0.2] p-4 rounded-lg shadow-md" style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                                <div class="flex flex-col text-left w-full h-full justify-between">
                                    <div class="flex flex-col">
                                        <img class='w-[15vw] h-[40vh]' src="{{ $item->image }}">
                                        <span class='font-semibold mt-1 text-sm text-[#888888]'>{{ $item->authors->name }}</span>
                                        <span class='font-semibold mt-1 text-sm text-black'>{{ $item->title }}</span>
                                        <span class='font-bold mt-1 text-sm text-black'>Rp {{ number_format($item->price, 2, ',', '.') }}</span>
                                    </div>
                                    <div class="mt-4 border border-black py-2 px-2 rounded-md w-30 text-center transition duration-300 hover:bg-[#01C7C8] hover:text-white">
                                        <button class="text-lg font-medium">Add to Cart</button>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    @else
                        <p>No search results found.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection