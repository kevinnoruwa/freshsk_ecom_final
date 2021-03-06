@extends('layouts/main')

@section('content')
    <section id="shoe-banner">
        <div class="inside">
            <div class="shoe-details">
                <h2 class="name">Shoes</h2>
                <p>See the latest creations and classic styles from Nike, Jordan, Adidas, and more.</p>
            </div>
            <div class="shoe-img">
                <img src="/img/all-shoes.webp" alt="">
            </div>
         
        </div>
    </section>
    <section id="shoes">
        <div class="header">
            <span class="title">Shoes</span>
        </div>
        <div class="content">
            <div class="inside">
         
                @foreach($shoes as $shoe)
                <a href="/{{$shoe->brand}}/{{$shoe->id}}">
                    <div class="shoe-box">
                        <div class="shoe-img">
                            <img src="{{$shoe->image}}" alt="">
                        </div>
                        <div class="details">
                            <div>{{$shoe->name}}</div>
                            <div>{{$shoe->nickname}}</div>
                            <div>${{$shoe->price}}.00</div>
                        </div>
                    </div>
                </a>
                @endforeach
               
            </div>
        </div>
    </section>
    

@endsection