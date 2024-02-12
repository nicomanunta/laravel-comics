<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    <main>
        <div class="jumbotron">
            <img class="img-jumbotron" src="{{ Vite::asset('resources/img/jumbotron.jpg')}}" alt="">
        </div>
        <div>
            <span class="current">current series</span>
        </div>
        <div class="fumetti">
            <div class="container">
                <div class="row py-5">
                    <CardFumetti v-for="fumetto, index in fumetti" :fumetto="fumetto"/>
                    <div class="col-2 d-flex mt-4" >
                        <div style="width: 18rem;">
                            <img class="img-fumetti" src="" alt="">
                            <div class="distanza">
                                <h6 class="titolo-fumetto"></h6>
                            </div>
                        </div>
                    </div>
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
    </main>
    @include('partials.footer')

</body>

</html>