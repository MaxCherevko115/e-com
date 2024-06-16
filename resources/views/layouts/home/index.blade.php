@extends('base.index')

@section('content')
    <section class="container pt-5 pb-5">
        <div id="cardCarousel" class="carousel slide mt-5" data-bs-ride="carousel">
            <div class="carousel-inner">
                @for ($i = 0; $i < count($products); $i += 3)
                    <div class="carousel-item {{$i === 0 ? 'active' : ''}}">
                        <div class="row">
                            @for ($j = $i; $j < $i + 3 && $j < count($products); $j++)
                                <div class="col-md-4 gap-3">
                                    <div class="card" data-bs-toggle="modal" data-bs-target="#descModal"
                                         data-id="{{ $products[$j]['id'] }}">
                                        <img src="data:image/png;base64,{{$products[$j]['photo']}}" class="card-img-top"
                                             alt="" width="200" height="300">
                                        <div class="card-body">
                                            <h5 class="card-title">{{$products[$j]['title']}}</h5>
                                            <p class="card-text">{{$products[$j]['price']}} $</p>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                    </div>
                @endfor
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#cardCarousel" data-bs-slide="prev"
                    style="justify-content: start">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Prev</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#cardCarousel" data-bs-slide="next"
                    style="justify-content: end">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    @include('layouts.home.parts.modal')
@endsection
