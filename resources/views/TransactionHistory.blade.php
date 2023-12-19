@extends('layouts.app')

@section('head')
    
@endsection

@section('content')
    <div class="bg-[#EDEDED] py-10 flex flex-col items-center">
        <span class='font-semibold mt-1 text-2xl text-black'>Transaction History</span>
            @forelse ($tr_user as $tr)
                <div class="bg-white border rounded-md my-4 w-[70%] flex p-4">
                    <img class='w-[10vw] h-[25vh]' src="{{$tr->book->image}}">
                    <div class="flex flex-col ml-10">
                        <span class='font-semibold mt-1 text-2xl text-black'>Transaction ID: {{$tr->id}}</span>
                        <span class='font-semibold mt-1 text-lg text-[#888888]'>{{$tr->book->author->name}}</span>
                        <span class='font-semibold mt-1 text-2xl text-black'>{{$tr->book->title}}</span>
                        <span class='font-bold mt-1 text-lg text-black'>Quantity: {{$tr->quantity}}</span>
                        <span class='font-bold mt-1 text-lg text-black'>Total Price: {{$tr->quantity * $tr->price}}</span>
                    </div>
                </div>
            @empty
                <div class="ml-20 text-gray-700 mt-[20vh] mb-[30vh]">
                    You haven't made any transactions yet!<br>
                    Consider getting some of our amazing collection of books!
                    :)
                </div>
            @endforelse
    </div>
@endsection