@extends('layouts.app')

@section('head')
    
@endsection

@section('content')
    <div class="bg-[#EDEDED] py-10 flex flex-col items-center">
        <span class='font-semibold mt-1 text-2xl text-black'>Transaction History</span>
            <div class="bg-white border rounded-md my-4 w-[70%] flex p-4">
                <img class='w-[10vw] h-[25vh]' src="">
                <div class="flex flex-col ml-10">
                    <span class='font-semibold mt-1 text-2xl text-black'>Transaction ID:</span>
                    <span class='font-semibold mt-1 text-lg text-[#888888]'>Author Name</span>
                    <span class='font-semibold mt-1 text-2xl text-black'>Book Title</span>
                    <span class='font-bold mt-1 text-lg text-black'>Quantity:</span>
                    <span class='font-bold mt-1 text-lg text-black'>Total Price:</span>
                </div>
            </div>
    </div>
@endsection