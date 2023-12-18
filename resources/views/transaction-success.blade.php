@extends('layouts.app')

@section('content')

<style>
    #logo{
        width: 20vw;
        margin-left: 40vw;
        margin-top: 10vh;
        margin-bottom: 10vh;
    }

    #big-text{
        font-family: cursive;
        font-weight: 800;
        font size: 56px;
    }

    #logo{}
</style>

<body>
    <div class="text-center">
        <img id="logo" src="{{asset('/images/Logo.png')}}" alt="">
        <h1 id="big-text">Thank you for your purchase!</h1>
        <p id="small-text">Your items will be delivered soon</p>
    </div>

    <div class="text-center">
        <a href="/" class="bg-[#2C393F] rounded-md" id="btn1"><div class="texts-btn">Back to home page</div></a>
        <a href="/#" class="btn-container bg-[#2C393F] rounded-md" id="btn2"><div class="texts-btn">See transaction history</div></a>
    </div>
</body>
@endsection
