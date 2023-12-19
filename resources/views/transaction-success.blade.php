@extends('layouts.app')

@section('head')
    
@endsection

@section('content')
    <div class="flex flex-col text-center justify-center items-center pt-14 py-10 bg-[#EDEDED]">
        <div class="flex items-center flex-col">
            <img src="{{asset('/images/Logo.png')}}" alt="" class="mb-3 w-[20vw] h-[30vh]">
            <h1 class="text-xl font-bold">Thank you for your purchase!</h1>
            <p class="text-lg font-semibold">Your items will be delivered soon</p>
        </div>
        <div class="flex flex-col text-center">
            <a href="/" class="bg-[#01C7C8] rounded-md mt-4 py-2 px-1 text-white" id="btn1">Back to home page</a>
            <a href="{{route('transactionhistory')}}" class="bg-[#01C7C8] rounded-md my-6 py-2 px-1 text-white" id="btn2">See transaction history</a>
        </div>
    </div>
@endsection
