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

    #
</style>

@section('content')
    <div class="flex">
        <div class="" style="background: rgba(42, 70, 60, 1);">
            <img src="{{url('/images/logo.png')}}" alt="" srcset="">
        </div>
        <div class="" style="background: rgba(217, 217, 217, 1); heigth: 100$;">
            <h1 id="title" class="">Billing Info</h1>
            <p id="subtitle" class="">Fill your billing information to continue your<br>transaction</p>
            <span class=""><img id="alert" src="\images\alert-icon.png" alt=""> Billing Address</span>
            <form action="" method="post">
                <label for="name">Name:</label><br>
                <input type="text" id="name" name="name"><br><br>
                <label for="address">Adress:</label><br>
                <input type="text" id="address" name="address"><br><br>
                <label for="phone">Phone:</label><br>
                <input type="tel" id="phone" name="phone"><br><br>
                <input type="radio" name="payment" id="credit" value="CreditCard">
                <label for="credit"><img src="\images\credit-card.png" alt="">
                    Credit Card
                    <p class="">Use credit card as Payment</p>
                </label><br>
                <input type="radio" name="payment" id="ewallet" value="Ewallet">
                <label for="ewallet"><img src="\images\ewallet.png" alt="">
                    E-wallet
                    <p class="">Use e-wallet as Payment</p>
                </label><br><br>
                <input type="submit" value="Confirm">
            </form>
        </div>
    </div>
@endsection