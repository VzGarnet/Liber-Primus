<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liber Primus</title>
    <link rel="icon" href="{{url('/images/logo.png')}}">
     <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/app.css')

    <!-- Latest compiled JavaScript -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="justify-between items-center bg-[#2C393F] w-full">
      <div class="flex items-center justify-between py-3">
        <div class="flex items-center justify-evenly w-full">
            <div class="flex items-center">
                <a class="px-6" href="/"><img class="w-16" src="{{url('/images/logo.png')}}" alt="Image" /></a>
                <div class="relative" id="category">
                    <button class="text-white focus:outline-none">
                      Category
                    </button>
                    @php
                    $genres = [
                        ['id'=>1, 'name'=>'Adventure'],
                        ['id'=>2, 'name'=>'Romance'],
                        ['id'=>3, 'name'=>'Psychology'],
                        ['id'=>4, 'name'=>'Fantasi'],
                        ['id'=>5, 'name'=>'Fiksi'],
                        ['id'=>6, 'name'=>'Comedy'],
                    ];
                @endphp

                <div class="absolute hidden mt-2 bg-white border rounded-md shadow-lg w-[200px] z-10 px-4 py-2">

                    @foreach ($genres as $genre)
                        <a href='{{ route('cat', $genre['id']) }}' class="block py-2 text-gray-800">{{$genre['name']}}</a>
                    @endforeach
                </div>
                </div> 
            </div> 
            
             {{--Search  --}}
            <form action="{{route('books.search')}}" method="get" class="w-[40%]">
                <input type="text" name="query" placeholder="Search" class="border border-black rounded-md py-2 px-4 ml-4 max-w-[700px] w-full bg-[#767680] bg-opacity-0" style="color:aliceblue"/>
            </form> 
            
            
              <div>
                <ul class="flex justify-between items-center">
                    <a href="/wishlist"><img class="w-8 ml-5" src="{{url('/images/wishlist.png')}}" alt="Image"></a>
                    <a href="/forum"><img class="w-8 ml-5" src="{{url('/images/Forum.png')}}" alt="Image"></a>
                    <a href="/cart"><img class="w-10 ml-5" src="{{url('/images/Shopping.png')}}" alt="Image"></a>
      
                    @guest
                      @if (Route::has('login'))
                          <li class="nav-item mx-2">
                              <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>
                      @endif
      
                      @if (Route::has('register'))
                          <li class="nav-item mx-2">
                              <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                          </li>
                      @endif
                      @else
                          <div class="relative" id="user" style="z-index: 10; margin-left: 2vw;">
                              <button class="text-white focus:outline-none">
                                  {{ Auth::user()->name }}
                              </button>
                              <div class="absolute hidden mt-2 bg-white border rounded-md shadow-lg">
                              <a class="dropdown-item" href="{{ route('logout') }}" style="font-weight: 600; padding: 1vw;"
                                  onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                  {{ __('Logout') }}
                              </a>
                              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                  @csrf
                              </form>
                              </div>
                          </div>
                      @endguest
                </ul>
            </div>
        </div>
      </div>
    </div>

    @yield('content')

    <div class="bg-[#2C393F] py-3 flex flex-col items-center justify-center bottom-0 w-full">
      <div class="flex flex-row items-center pb-2">
          <a href=""> <img class="w-8 mx-2" src="{{url('/images/fb.png')}}" alt=""> </a>
          <a href=""> <img class="w-8 mx-2" src="{{url('/images/twitter.png')}}" alt=""> </a>
          <a href=""> <img class="w-6 mx-2" src="{{url('/images/google.png')}}" alt=""> </a>
          <a href=""> <img class="w-8 mx-2" src="{{url('/images/ig.png')}}" alt=""> </a>
      </div>
      <div class="text-white font-bold">
          <span>©2023 Copyright: Liber Primus</span>
      </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const categoryDropdownButton = document.querySelector('#category button');
            const categoryDropdownMenu = document.querySelector('#category .absolute');

            categoryDropdownButton.addEventListener('click', function () {
                categoryDropdownMenu.classList.toggle('hidden');
            });

            document.addEventListener('click', function (event) {
                if (!categoryDropdownButton.contains(event.target)) {
                    categoryDropdownMenu.classList.add('hidden');
                }
            });

            const userDropdownButton = document.querySelector('#user button');
            const userDropdownMenu = document.querySelector('#user .absolute');

            userDropdownButton.addEventListener('click', function () {
                userDropdownMenu.classList.toggle('hidden');
            });

            document.addEventListener('click', function (event) {
                if (!userDropdownButton.contains(event.target)) {
                    userDropdownMenu.classList.add('hidden');
                }
            });
        });
    </script>
</head>