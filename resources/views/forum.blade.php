@extends('layouts.app')

@section('head')
    
@endsection

@section('content')
<div class="bg-[#EDEDED] py-10">
    <div class="ml-16 pb-5">
        <h1 class="text-3xl font-bold">Forum</h1>
        <h5 class="text-lg">Share your thoughts with others</h5>  
    </div>
    <div class="bg-white rounded-lg mx-5">
        <div class="ml-20 flex py-10 items-center">
            <img class='w-[10vw] h-[20vh]' src="{{url('')}}">
            <div class="ml-10 w-full">
                <form method="POST" action="" class="flex flex-col justify-center items-center"">
                    @csrf
                    <input type="text" placeholder="Title" class="text-black border border-black rounded-md py-2 px-4 ml-4 mb-4 w-[80%] bg-[#767680] bg-opacity-0"/>
                    <input type="text" placeholder="Share your toughts here" class="text-black border border-black rounded-md pt-2 pb-5 px-4 ml-4 mb-4 w-[80%] bg-[#767680] bg-opacity-0"/>
                    <button type="submit" class="btn btn-primary text-black">Post</button>
                </form>
            </div>
        </div>
    </div>
    <div class="bg-white rounded-lg mx-5 mt-10">
        <div class="ml-20 flex py-10 items-center">
            <img class='w-[10vw] h-[20vh]' src="{{url('')}}">
            <div class="ml-10 w-full">
                <h1 class="font-bold text-lg">Nyancet</h1>
                <h1 class="font-semibold text-base mb-5">Posted on</h1>
                <h1 class="font-bold text-3xl mb-3">What is the best advanture book?</h1>
                <h1 class="font-semibold text-base">sadsdadsadsasdasdasddsaasdsadsad</h1>
            </div>
        </div>
    </div>
</div>
@endsection