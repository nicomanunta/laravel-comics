@extends('layout.app')
@section('content')
    <div class="jumbotron">
        <img class="img-jumbotron" src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
    </div>
    <div class="container">
        <div class="row mb-4 bg-black border-radius d-flex justify-content-between ">
            <div class="col-6 p-4 text-end ">
                <h2 class="text-white ">{{$comic["title"]}}</h2>
                <p class="text-white">{{$comic["description"]}}
                <br>
                <span class="text-white misure">Data di rilascio: {{$comic["sale_date"]}}</span>
                </p>
                <br>
                <button type="button" class="btn button-price">Buy for {{$comic['price']}}</button>
            </div>
            <div class="col-4 p-4">
                <img class="single-comic pb-3" src="{{ $comic['thumb'] }}" alt="">
                <div class="">
                    <span class="badge text-bg-light">{{$comic["series"]}}</span>
                    <span class="badge text-bg-light">{{$comic["type"]}}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="dc-info">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <ul class="buy">
                        <li>
                            <span><img class="immagini" src="{{Vite::asset('resources/img/buy-comics-digital-comics.png')}}" alt=""></span>
                            <span>DIGITAL COMICS</span>
                        </li>
                        <li>
                            <span><img class="immagini" src="{{Vite::asset('resources/img/buy-comics-merchandise.png')}}" alt=""></span>
                            <span>DC MERCHANDISE</span>
                        </li>
                        <li>
                            <span><img class="immagini" src="{{Vite::asset('resources/img/buy-comics-subscription.png')}}" alt=""></span>
                            <span>SUBSCRIPTION</span>
                        </li>
                        <li>
                            <span><img class="immagini" src="{{Vite::asset('resources/img/buy-comics-shop-locator.png')}}" alt=""></span>
                            <span>COMIC SHOP LOCATOR</span>
                        </li>
                        <li>
                            <span><img class="immagini" src="{{Vite::asset('resources/img/buy-dc-power-visa.svg')}}" alt=""></span>
                            <span>DC POWER VISA</span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>



@endsection