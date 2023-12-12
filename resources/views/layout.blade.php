<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liber Primus</title>
     <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/css/app.css')

    <!-- Latest compiled JavaScript -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div class="justify-between items-center bg-[#2C393F]">
      <div class="flex items-center justify-between py-3">
        <div class="flex items-center">
            <a href=""><img class="w-16 ml-5" src="{{url('/images/logo.png')}}" alt="Image" /></a>
            <input type="text" placeholder="Search" class="border rounded-md py-2 px-4 ml-4 w-64 bg-[#767680] bg-opacity-0" />
            <ul class="flex justify-between items-center">
              <a href="#"><img class="w-12 ml-5" src="{{url('/images/wishlist.png')}}" alt="Image"></a>
              <a href="#"><img class="w-12 ml-5" src="{{url('/images/Forum.png')}}" alt="Image"></a>
              <a href="#"><img class="w-16 ml-5" src="{{url('/images/Shopping.png')}}" alt="Image"></a>
              <a href=""><img class="w-14 ml-5" src="{{url('/images/profile.png')}}" alt="Image"></a>
          </ul>
        </div>
      </div>
    </div>

    @yield('body')

    <div class="bg-[#2C393F] py-3 flex flex-col items-center justify-center">
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
  
</head>