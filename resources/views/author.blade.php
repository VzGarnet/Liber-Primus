@extends('layout')

@section('head')
    
@endsection

@section('body')
    <div class="bg-[#EDEDED] py-10">
        <div class="flex ml-32 items-center">
            <a class="font-bold text-2xl text-[#888888]" href="">Book</a>
            <a class="font-bold text-2xl ml-5 text-black underline" style="text-decoration-color: #01C7C8;" href="">Author</a>
        </div>
        <div class="items-center justify-center flex py-5">
            <div class="grid grid-cols-5 gap-32">
                <div class="flex flex-col text-center">
                    <img src="{{url('/images/author.png')}}" alt="" width="150">
                    <span class="font-semibold text-lg">John Smith</span>
                </div>
                <div class="flex flex-col text-center">
                    <img src="{{url('/images/author.png')}}" alt="" width="150">
                    <span class="font-semibold text-lg">John Smith</span>
                </div>
                <div class="flex flex-col text-center">
                    <img src="{{url('/images/author.png')}}" alt="" width="150">
                    <span class="font-semibold text-lg">John Smith</span>
                </div>
                <div class="flex flex-col text-center">
                    <img src="{{url('/images/author.png')}}" alt="" width="150">
                    <span class="font-semibold text-lg">John Smith</span>
                </div>
                <div class="flex flex-col text-center">
                    <img src="{{url('/images/author.png')}}" alt="" width="150">
                    <span class="font-semibold text-lg">John Smith</span>
                </div>
                <div class="flex flex-col text-center">
                    <img src="{{url('/images/author.png')}}" alt="" width="150">
                    <span class="font-semibold text-lg">John Smith</span>
                </div>
                <div class="flex flex-col text-center">
                    <img src="{{url('/images/author.png')}}" alt="" width="150">
                    <span class="font-semibold text-lg">John Smith</span>
                </div>
            </div>
        </div>
    </div>
@endsection