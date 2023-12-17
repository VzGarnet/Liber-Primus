@extends('layouts.app')

@section('head')
    
@endsection

@section('content')
    <div class="bg-[#EDEDED] py-10 flex flex-col items-center">
        @foreach ($books as $item)
            <div class="bg-white border rounded-md my-4 w-[70%] flex p-4">
                <img class='w-[10vw] h-[25vh]' src="{{($item->image)}}">
                <div class="flex flex-col ml-10">
                    <span class='font-semibold mt-1 text-2xl text-black'>{{$item->title}}</span>
                    <span class='font-semibold mt-1 text-lg text-[#888888]'>{{$item->authors->name}}</span>
                    <span class='font-bold mt-1 text-lg text-black'>Rp{{number_format($item->price, 2, ',', '.')}}</span>
                </div>
            </div>
        @endforeach
    </div>
@endsection