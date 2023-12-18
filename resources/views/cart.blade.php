@extends('layouts.app')

@section('head')
    
@endsection

@section('content')
<div class="bg-[#EDEDED] py-10 flex flex-col">
    <div class="ml-56">
        <h1 class="text-3xl font-bold">Your Cart</h1> 
    </div>
    <div class="bg-[#EDEDED] pt-5 pb-10 flex flex-col items-center">
        @php
            $total = 0;    
        @endphp
        @foreach ($books as $item)
            <div class="bg-white border rounded-md mb-4 w-[70%] flex p-4">
                <img class='w-[10vw] h-[25vh]' src="{{ $item->image }}">
                <div class="flex flex-col ml-10">
                    <span class='font-semibold mt-1 text-2xl text-black'>{{ $item->title }}</span>
                    <span class='font-semibold mt-1 text-lg text-[#888888]'>{{ $item->authors->name }}</span>
                    <span class='font-semibold mt-1 text-2xl text-black'>
                        Quantity : {{ $item->addtocart->first()->quantity }}
                    </span>
                    <span class='font-bold mt-1 text-xl text-black'>
                        Price : Rp {{ number_format(($item->price * $item->addtocart->first()->quantity), 2, ',', '.') }}
                    </span>
                </div>
            </div>
            @php
                $total = $total + ($item->price * $item->addtocart->first()->quantity);
            @endphp
        @endforeach
        <h1 class="w-[70%] text-2xl font-bold text-right">Total Price : Rp {{number_format(($total), 2, ',', '.')}}</h1>
        <button type="submit" class="text-lg border font-bold rounded-md py-2 px-4 border-black mt-8 w-40 h-14 text-center shadow-md hover:bg-[#01C7C8] hover:text-white" style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.5);">
            Check Out
        </button>
    </div>
</div>
@endsection