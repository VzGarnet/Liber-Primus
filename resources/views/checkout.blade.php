@extends('layouts.app') 

@section('head')
    
@endsection

<style>
    #title{
        text-align: center;
        font-family: sans-serif;
        font-size: 45px;
        font-weight: 600;
    }

    #subtitle{
        text-align: center;
        font-family: sans-serif;
        font-size: 15px;
        font-weight: 200;
    }

    #title, #subtitle{
        margin-top: 2vh;
        margin-bottom: 1vh;
    }

    #alert{
        width: 1vw;
        margin: 0.5vw;
        display: inline;
    }

    #form-title{
        font-weight: 600;
    }

    label, #name, #address, #phone, #submit, .payment{
        margin-left: 2vw;
    }

    label{
        margin-bottom: 0.5vh;
    }

    input{
        width: 75%;
    }

    .payment{
        color: white;
        background-color: #ADADAD;
        margin-bottom: 5vh;
        padding: 14px 28px;
        width: 40vw;
        cursor: pointer;

        box-shadow: -8px -8px 16px rgba(0, 0, 0, 0.1);
    }

    .active{
        color: black;
        background-color: white;

        box-shadow: -8px 8px 16px rgba(0, 0, 0, 0.1);
    }

    
</style>

@section('content')
    <div class="flex">
        <div class="flex items-center justify-content h-[125vh]" style="background: #2A463C; width: 35vw;">
            <img style="margin-left: 8vw;" src="{{url('/images/logo.png')}}" alt="" srcset="">
        </div>
        <div class="" style="background: rgba(217, 217, 217, 1); heigth: 100%; width: 65vw;">
            <h1 id="title" class="">Billing Info</h1>
            <p id="subtitle" class="">Fill your billing information to continue your<br>transaction</p>
            <span class="" id="form-title"><img id="alert" src="\images\alert-icon.png" alt=""> Billing Address</span>
            <form action="" method="post">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name"><br><br>
                <label for="address">Adress:</label><br>
                <input type="text" id="address" name="address"><br><br>
                <label for="phone">Phone:</label><br>
                <input type="tel" id="phone" name="phone"><br><br>
                <div id="credit-card" class="flex payment rounded text-left" onclick="clickElement(this)">
                    <img src="{{url('/images/credit-card.png')}}" class="w-28 h-28" alt="">
                    <div class="flex flex-col p-4">
                        <p style="font-weight: 600; font-size: 26px;" class="mb-4">Credit Card</p>
                        <p class="">Use credit card as Payment</p>
                    </div>
                </div>
                <div id="ewallet" class="flex payment rounded text-left" onclick="clickElement(this)">
                    <img src="{{url('/images/ewallet.png')}}" class="w-28 h-28" alt="">
                    <div class="flex flex-col p-4">
                        <p style="font-weight: 600; font-size: 26px;">E-wallet</p>
                        <p class="">Use e-wallet as Payment</p>
                    </div>
                </div> 
                <input type="submit" id="submit" value="Confirm" class="bg-[#2C393F] text-white px-4 py-2 rounded-md">
            </form>
        </div>
    </div>
@endsection

<script>
    let activeElement = null;

    function clickElement(element){
        if(activeElement !== null){
            activeElement.classList.remove('active');
        }

        if(element !== activeElement){
            element.classList.add('active');
            activeElement = element;
        }
        else{
            activeElement = null;
        }
    }
</script>