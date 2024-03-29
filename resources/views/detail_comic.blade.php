@extends('layout.app')
@section('content')
   
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
@endsection