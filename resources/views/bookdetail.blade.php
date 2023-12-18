@extends('layouts.app')

@section('head')
    
@endsection

@section('content')
    <div class="bg-[#EDEDED] py-10">
        <div class="bg-white rounded-lg mx-40">
            <div class="ml-20 flex py-20">
                <div class="mr-20 w-[30%]">
                    <img class="w-[40vw] h-[70vh]" src="{{($clickedbooks->image)}}" alt="">
                </div>
                <div class="flex flex-col mr-10 w-[60%]">
                    <h1 class="text-3xl font-semibold pb-6">{{$clickedbooks->title}}</h1>
                    <h1 class="text-3xl font-bold pb-6">Rp {{number_format($clickedbooks->price)}}</h1>
                    <h1 class="text-xl font-semibold">Book Description</h1>
                    <h1 class="text-lg pb-6 text-justify">{{$clickedbooks->synopsis}}</h1>
                    <h1 class="text-xl font-semibold pb-2">Detail</h1>
                    <h1 class="text-base font-bold text-[#777777]">ISBN</h1>
                    <h1 class="text-base font-semibold pb-2 text-[#777777]">{{$clickedbooks->isbn}}</h1>
                    <h1 class="text-base font-bold text-[#777777]">Penerbit</h1>
                    <h1 class="text-base font-semibold text-[#777777] pb-4">{{$clickedbooks->publishers->name}}</h1>
                    <div class="flex items-center gap-10">
                        <div class="flex justify-evenly items-center border border-black rounded-md p-2 w-[50%]">
                            <button class="text-xl font-bold mx-2" onclick="changeNumber(-1)">-</button>
                            <h1 id="numberDisplay" class="text-xl font-bold mx-4">1</h1>
                            <button class="text-xl font-bold mx-2" onclick="changeNumber(1)">+</button>
                        </div>
                        <div class="w-full">
                            <span class="text-lg">Stock: {{$clickedbooks->stock}}</span>
                        </div>
                    </div>
                    <div class="flex my-6">
                        <button class="text-lg border font-bold rounded-md py-2 px-4 border-black mr-8 w-40 h-14 text-center shadow-md hover:bg-[#01C7C8] hover:text-white" style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.5);">
                            Add to Cart
                        </button>
                        <form action="{{route('wish',$clickedbooks->id)}}" method="POST">
                            @csrf
                            @if ($wishlist->contains('book_id', $clickedbooks->id))
                                <button class="border rounded-md py-2 px-4 border-red-600 bg-red-600 w-40 h-14 text-center hover:bg-white hover:text-black">
                                    <h1 class="text-lg font-bold">Unwishlist</h1>
                                </button>
                            @else
                                <button class="border rounded-md py-2 px-4 border-black w-40 h-14 text-center shadow-md hover:bg-red-500 hover:text-white" style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.5);">
                                    <h1 class="text-lg font-bold">Wishlist</h1>
                                </button>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-col items-center ">
            <div class="flex pb-5 mt-5 relative w-100 justify-center items-center">
                <h1 class="font-bold text-2xl underline" style="text-decoration-color: #01C7C8;">Same Genre</h1>
            </div>  
            <div class="grid grid-cols-4 gap-4 w-[90%]">
                @foreach ($books as $item)
                    <a href="{{route('bookdetail',['id'=>$item->id])}}" class="flex flex-col bg-white border p-4 border-black/[0.2] rounded-lg shadow-md justify-center" style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                        <div class="flex flex-col text-left">
                            <img class='w-[15vw] h-[40vh] mx-auto' src="{{($item->image)}}">
                            <span class='font-semibold mt-1 text-sm text-[#888888]'>{{$item->authors->name}}</span>
                            <span class='font-semibold mt-1 text-sm text-black'>{{$item->title}}</span>
                            <span class='font-bold mt-1 text-sm text-black'>Rp{{number_format($item->price, 2, ',', '.')}}</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>

    <script>
        let currentNumber = 1; // Initial value
    
        function changeNumber(amount) {
            // Ensure the number doesn't go below 0
            currentNumber = Math.max(0, currentNumber + amount);
            
            // Update the displayed number
            document.getElementById('numberDisplay').innerText = currentNumber;
        }
    </script>
@endsection