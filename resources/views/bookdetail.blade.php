@extends('layouts.app')

@section('head')
    
@endsection

@section('content')
    <div class="bg-[#EDEDED] py-10">
        <div class="bg-white rounded-lg mx-40">
            <div class="ml-20 flex py-20">
                <div class="mr-20 w-[30%]">
                    <img class="w-[40vw] h-[70vh]" src="{{($books->image)}}" alt="">
                </div>
                <div class="flex flex-col mr-10 w-[60%]">
                    <h1 class="text-3xl font-semibold pb-6">{{$books->title}}</h1>
                    <h1 class="text-3xl font-bold pb-6">Rp {{number_format($books->price)}}</h1>
                    <h1 class="text-xl font-semibold">Book Description</h1>
                    <h1 class="text-lg pb-6 text-justify">{{$books->synopsis}}</h1>
                    <h1 class="text-xl font-semibold pb-2">Detail</h1>
                    <h1 class="text-base font-bold text-[#777777]">ISBN</h1>
                    <h1 class="text-base font-semibold pb-2 text-[#777777]">{{$books->isbn}}</h1>
                    <h1 class="text-base font-bold text-[#777777]">Penerbit</h1>
                    <h1 class="text-base font-semibold text-[#777777] pb-4">{{$books->publishers->name}}</h1>
                    <div class="flex items-center gap-10">
                        <div class="flex justify-evenly items-center border border-black rounded-md p-2 w-[50%]">
                            <button class="text-xl font-bold mx-2" onclick="changeNumber(-1)">-</button>
                            <h1 id="numberDisplay" class="text-xl font-bold mx-4">1</h1>
                            <button class="text-xl font-bold mx-2" onclick="changeNumber(1)">+</button>
                        </div>
                        <div class="w-full">
                            <span class="text-lg">Stock: {{$books->stock}}</span>
                        </div>
                    </div>
                    <div class="flex my-6">
                        <div class="bg-[#01C7C8] py-2 px-4 rounded-md mr-8 w-40 text-center shadow-md" style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.5);">
                            <button class="text-xl font-bold text-white">Add to cart</button>
                        </div>
                        <div class="border rounded-md py-2 px-4 border-black w-40 text-center shadow-md" style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.5);">
                            {{-- <form action="{{route('wish',$books->id)}}" method="POST">
                                @csrf
                                <button class="text-xl font-bold">
                                    @if ($wishlist)
                                    remove wishlist
                                        
                                    @else
                                        
                                    wishlist

                                        
                                    @endif


                                </button>
                            </form> --}}
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
{{-- 
        <div>
            <div class="flex pb-5 relative w-100 justify-center items-center">
                <h1 class="font-bold text-2xl underline" style="text-decoration-color: #01C7C8;">Best Seller</h1>
            </div> 
            <div class="grid grid-cols-4 gap-5 w-[90%]">
                @foreach ($best_sellers as $item)
                    <div class="flex flex-col text-center bg-white border border-black/[0.2] p-4 rounded-lg shadow-md" style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
                        <img class='w-[15vw] h-[40vh]' src="{{($item->image)}}"width="150">
                        <span class='font-semibold mt-1 text-sm text-[#888888]'>{{$item->authors->name}}</span>
                        <span class='font-semibold mt-1 text-sm text-black'>{{$item->title}}</span>
                        <span class='font-bold mt-1 text-sm text-black'>Rp{{number_format($item->price, 2, ',', '.')}}</span>
                    </div>
                @endforeach
            </div>
        </div> --}}
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