<style>
    #explore-button:hover {
        border: 1px solid whitesmoke;
        color: whitesmoke;
        text-shadow: 1px 1px 2px black, 0 0 25px wheat, 0 0 5px lightblue;
    }
</style>


@extends('layouts.app')

@section('head')
    
@endsection

@section('content')
    <div class='bg-[#C6EFEF] flex justify-center items-center py-5'>
        <div class="mr-28">
            <h1 class="font-bold text-5xl mb-3">Welcome To LiberPrimus</h1>
            <p class="text-3xl ml-12 mb-5">Go Explore and Find Your Favourite Book Here</p>
            <a id="explore-button" class="text-2xl ml-64 px-4 py-2 border border-black rounded-lg bg-[#C6EFEF] font-semibold" href="">Explore Now</a>
        </div>
        <div class="ml-36">
            <img src="{{url('/images/homebanner.png')}}">
        </div>
    </div>
    <div class="bg-[#EDEDED] flex flex-col justify-center items-center py-5">
        <div class="flex pb-5 relative w-100 justify-center items-center">
            <h1 class="font-bold text-2xl underline" style="text-decoration-color: #01C7C8;">Recommendation</h1>
            <a class="absolute top-0 right-20" href="/book"><h1 class="font-bold text-2xl underline text-[#01C7C8]">View All</h1></a>
        </div>                         
        <div class="grid grid-cols-5 pb-5 gap-5 w-[90%]">
            @foreach ($books as $item)
            <a href="{{route('bookdetail',['id'=>$item->id])}}" class="bg-white border border-black/[0.2] p-4 rounded-lg shadow-md" style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                <div class="flex flex-col text-left">
                    <img class='w-[15vw] h-[40vh]' src="{{($item->image)}}">
                    <span class='font-semibold mt-1 text-sm text-[#888888]'>{{$item->authors->name}}</span>
                    <span class='font-semibold mt-1 text-sm text-black'>{{$item->title}}</span>
                    <span class='font-bold mt-1 text-sm text-black'>Rp{{number_format($item->price, 2, ',', '.')}}</span>
                </div>
            </a>
            @endforeach

        </div>
    </div>
    <div class="bg-[#EDEDED] flex flex-col justify-center items-center py-5">
        <div class="flex pb-5 relative w-100 justify-center items-center">
            <h1 class="font-bold text-2xl underline" style="text-decoration-color: #01C7C8;">Best Seller</h1>
            <a class="absolute top-0 right-20" href="/book"><h1 class="font-bold text-2xl underline text-[#01C7C8]">View All</h1></a>
        </div> 
        <div class="grid grid-cols-5 gap-5 w-[90%]">
            @foreach ($best_sellers as $item)
            <a href="{{route('bookdetail',['id'=>$item->id])}}" class="bg-white border border-black/[0.2] p-4 rounded-lg shadow-md" style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                <div class="flex flex-col text-left">
                    <img class='w-[15vw] h-[40vh]' src="{{($item->image)}}">
                    <span class='font-semibold mt-1 text-sm text-[#888888]'>{{$item->authors->name}}</span>
                    <span class='font-semibold mt-1 text-sm text-black'>{{$item->title}}</span>
                    <span class='font-bold mt-1 text-sm text-black'>Rp{{number_format($item->price, 2, ',', '.')}}</span>
                </div>
            </a>
            @endforeach
        </div> 
    </div>
    <div class="bg-[#EDEDED] flex flex-col justify-center items-center py-5">
        <h1 class="font-bold text-2xl underline pb-5 " style="text-decoration-color: #01C7C8;">Author Spotlight</h1>
        <div class="grid grid-cols-2 gap-3">
            @foreach ($authors as $author)
                <div class="flex text-left rounded-3xl" style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                    <img class='rounded-l-2xl w-[15vw] h-[30vh]' src="{{$author->image}}"width="150">
                    <div class="flex flex-col bg-white border w-80 border-black/[0.2] p-4 rounded-r-2xl shadow-md">
                        <span class='font-semibold mt-1 text-xs text-[#888888]'>Name: </span>
                        <span class='font-bold mt-1 text-sm text-black'>{{$author->name}}</span>
                        <span class='font-semibold mt-1 text-xs text-[#888888]'>About the author: </span>
                        <span class='font-bold mt-1 text-sm text-black'>Lorem ipsum dolor sit amet,consectetur adipiscing elit. Maecenas vel felis massa.</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="bg-[#C6EFEF] flex flex-col justify-center items-center py-16">
        <h1 class="font-bold text-2xl underline pb-5" style="text-decoration-color: #01C7C8;">Newest Discussion</h1>
        <div class="grid grid-cols-3 gap-5">
            <div class="w-72 flex flex-col text-center items-center bg-white border border-black/[0.2] px-4 pb-4 pt-1 rounded-lg shadow-md mt-10" style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                <span class='font-semibold text-xl text-black'>Title</span>
                <div class="flex-none w-100 border-t border-black"></div>
                <span class='font-bold mt-1 text-sm text-black'>Lorem ipsum dolor sit amet,consectetur adipiscing elit. Maecenas vel felis massa.Lorem ipsum dolor sit amet,consectetur adipiscing elit. Maecenas vel felis massa.Lorem ipsum dolor sit amet,consectetur adipiscing elit. Maecenas vel felis massa.</span>
            </div>
            <div class="w-72 flex flex-col text-center items-center bg-white border border-black/[0.2] px-4 pb-4 pt-1 rounded-lg shadow-md mb-10" style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                <span class='font-semibold text-xl text-black'>Title</span>
                <div class="flex-none w-100 border-t border-black"></div>
                <span class='font-bold mt-1 text-sm text-black'>Lorem ipsum dolor sit amet,consectetur adipiscing elit. Maecenas vel felis massa.Lorem ipsum dolor sit amet,consectetur adipiscing elit. Maecenas vel felis massa.Lorem ipsum dolor sit amet,consectetur adipiscing elit. Maecenas vel felis massa.</span>
            </div>
            <div class="w-72 flex flex-col text-center items-center bg-white border border-black/[0.2] px-4 pb-4 pt-1 rounded-lg shadow-md mt-10" style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                <span class='font-semibold text-xl text-black'>Title</span>
                <div class="flex-none w-100 border-t border-black"></div>
                <span class='font-bold mt-1 text-sm text-black'>Lorem ipsum dolor sit amet,consectetur adipiscing elit. Maecenas vel felis massa.Lorem ipsum dolor sit amet,consectetur adipiscing elit. Maecenas vel felis massa.Lorem ipsum dolor sit amet,consectetur adipiscing elit. Maecenas vel felis massa.</span>
            </div>
        </div>
    </div>
@endsection