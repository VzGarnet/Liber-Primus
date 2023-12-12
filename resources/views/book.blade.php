@extends('layout')

@section('head')
    
@endsection

@section('body')
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
@endsection