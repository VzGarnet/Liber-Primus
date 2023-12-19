@extends('layouts.app')

@section('head')

@endsection

@section('content')
    <div class="main-h-screen bg-[#FFF0F0] flex items-center justify-center">
        <div class="container mx-auto mt-[15vh] mb-[20vh] bg-[#FFFF] p-8 w-[50%]">
            <div class="text-4xl font-bold mb-4 flex items-center justify-center">{{$author->name}}</div>
            <div class="flex items-center" id="image-text">
                <img class="w-64 h-64 rounded" src="{{$author->image}}" alt="">
                <div class="ml-20 text-gray-700">{{$author->description}}</div>
            </div>
        </div>
    </div>
    <div class="bg-[#EDEDED] flex flex-col items-center py-4">
        <div class="grid grid-cols-3 gap-5 w-[60%]">
                @forelse ($books as $item)
                    <a href="{{ route('bookdetail', ['id' => $item->id]) }}" class="bg-white border border-black/[0.2] p-4 rounded-lg shadow-md" style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                        <div class="flex flex-col text-left w-full h-full justify-between">
                            <div class="flex flex-col">
                                <img class='w-[15vw] h-[40vh]' src="{{ $item->image }}">
                                {{-- <span class='font-semibold mt-1 text-sm text-[#888888]'>{{ $item->authors->name }}</span> --}}
                                <span class='font-semibold mt-1 text-sm text-black'>{{ $item->title }}</span>
                                <span class='font-bold mt-1 text-sm text-black'>Rp {{ number_format($item->price, 2, ',', '.') }}</span>
                            </div>
                            <div class="mt-4 border border-black py-2 px-2 rounded-md w-30 text-center transition duration-300 hover:bg-[#01C7C8] hover:text-white">
                                <button class="text-lg font-medium">Add to Cart</button>
                            </div>
                        </div>
                    </a>
            @empty
                <p>No book found</p>
            @endforelse
        </div>
    </div>
@endsection