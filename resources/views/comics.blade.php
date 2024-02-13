@extends('layout.app')

    @section('content')   
        <div class="jumbotron">
            <img class="img-jumbotron" src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
        </div>
        <div>
            <span class="current">current series</span>
        </div>
        <div class="fumetti">
            <div class="container">
                <div class="row py-5">
                    @foreach ($comics as $comic)  
                        <div class="col-2 d-flex mt-4" >
                            <div style="width: 18rem;">
                                <img class="img-fumetti" src="{{ $comic['thumb'] }}" alt="">
                                <div class="distanza">
                                    <h6 class="titolo-fumetto">{{ $comic['title']}}</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="text-center ">
                <button class="color-button">load more</button>
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


  