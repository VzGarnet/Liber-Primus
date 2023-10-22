<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liber Primus</title>
     <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

        <nav class="navbar navbar-expand-sm">
            <div class="container-fluid">
              <a class="navbar-brand" href="javascript:void(0)">               <img src="{{url('/images/logo.png')}}" alt="Image">
                </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Category</a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Link</a></li>
                          <li><a class="dropdown-item" href="#">Another link</a></li>
                          <li><a class="dropdown-item" href="#">A third link</a></li>
                        </ul>
                      </li>
                </ul>
                
                <form class="d-flex">
                  <input class="form-control me-2" type="text" placeholder="Search">
                  <button class="btn btn-primary" type="button">Search</button>
                </form>
                
                <ul class="right-side">
            
                    <a href="#">               
                        <img src="{{url('/images/Forum.png')}}" alt="Image">
                    </a>

                    <a href="#">
                        <img src="{{url('/images/Shopping.png')}}" alt="Image">
                    </a>

                    <a href="" class="profile">
                        <img src="{{url('/images/profile.png')}}" alt="Image">
                    </a>
                </ul>
              </div>
            </div>
          </nav>

          <div class="banner">
            <img src="{{url('/images/banner.png')}}" alt="">
          </div>

          <div class="recommendation">
            <img src="{{url('/images/Recommendation.png')}}" alt="">
          </div>
          
          <div class="best">
            <img src="{{url('/images/Best Seller.png')}}" alt="">
          </div>

          <div class="author">
            <img src="{{url('/images/Author Spotlight.png')}}" alt="">
          </div>

          <div class="discuss">
            <img src="{{url('/images/Discussion.png')}}" alt="">
          </div>




</body>
</html>