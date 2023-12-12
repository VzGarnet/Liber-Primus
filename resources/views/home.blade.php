@extends('layout')

@section('head')
    
@endsection

@section('body')
    <div class='bg-[#C6EFEF] flex justify-center items-center py-5'>
        <div class="mr-28">
            <h1 class="font-bold text-5xl mb-3">Welcome To LiberPrimus</h1>
            <p class="text-3xl ml-12 mb-5">Go Explore and Find Your Favourite Book Here</p>
            <a class="text-2xl ml-64 px-4 py-2 border border-black rounded-lg bg-[#C6EFEF] font-semibold" href="">Explore Now</a>
        </div>
        <div class="ml-36">
            <img src="{{url('/images/homebanner.png')}}">
        </div>
    </div>
    <div class="bg-[#EDEDED] flex flex-col justify-center items-center py-5">
        <div class="flex pb-5 relative w-100 justify-center items-center">
            <h1 class="font-bold text-2xl underline" style="text-decoration-color: #01C7C8;">Recommendation</h1>
            <a class="absolute top-0 right-20" href=""><h1 class="font-bold text-2xl underline text-[#01C7C8]">View All</h1></a>
        </div>                         
        <div class="grid grid-cols-5 pb-5">
            <div class="flex flex-col text-left bg-white border border-black/[0.2] p-4 rounded-lg shadow-md" style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                <img class='' src="{{url('/images/Ono Eriko.png')}}"width="150">
                <span class='font-semibold mt-1 text-sm text-[#888888]'>Ono Eriko</span>
                <span class='font-semibold mt-1 text-sm text-black'>Hai, Miiko! 34</span>
                <span class='font-bold mt-1 text-sm text-black'>Rp 51.000</span>
            </div>
        </div>
    </div>
    <div class="bg-[#EDEDED] flex flex-col justify-center items-center py-5">
        <div class="flex pb-5 relative w-100 justify-center items-center">
            <h1 class="font-bold text-2xl underline" style="text-decoration-color: #01C7C8;">Best Seller</h1>
            <a class="absolute top-0 right-20" href=""><h1 class="font-bold text-2xl underline text-[#01C7C8]">View All</h1></a>
        </div>  
        <div class="grid grid-cols-5">
            <div class="flex flex-col text-left bg-white border border-black/[0.2] p-4 rounded-lg shadow-md" style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                <img class='' src="{{url('/images/YangTelahLamaPergi.png')}}"width="150">
                <span class='font-semibold mt-1 text-sm text-[#888888]'>Tere Liye</span>
                <span class='font-semibold mt-1 text-sm text-black'>Yang Telah Lama Pergi</span>
                <span class='font-bold mt-1 text-sm text-black'>Rp 51.000</span>
            </div>
        </div>
    </div>
    <div class="bg-[#EDEDED] flex flex-col justify-center items-center py-5">
        <h1 class="font-bold text-2xl underline pb-5" style="text-decoration-color: #01C7C8;">Author Spotlight</h1>
        <div class="grid grid-cols-2">
            <div class="flex text-left rounded-3xl" style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                <img class='' src="{{url('/images/Leila Salikha.png')}}"width="150">
                <div class="flex flex-col bg-white border w-80 border-black/[0.2] p-4 rounded-r-2xl shadow-md">
                    <span class='font-semibold mt-1 text-xs text-[#888888]'>Name: </span>
                    <span class='font-bold mt-1 text-sm text-black'>Leila Salikha Chudori</span>
                    <span class='font-semibold mt-1 text-xs text-[#888888]'>About the author: </span>
                    <span class='font-bold mt-1 text-sm text-black'>Lorem ipsum dolor sit amet,consectetur adipiscing elit. Maecenas vel felis massa.</span>
                </div>
            </div>
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