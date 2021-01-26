@extends('header')

@section('tags')
    <link rel="stylesheet" href="{{asset('css/category.css')}}">
@endsection

@section('content')
    <div class="category-header">
        <h4>Category ( Men )</h4>
    </div>
{{--    Cards of item--}}
    <div class="container">
        <div class="row">
            <div class="card col-6 col-sm-6 col-lg-3" style="width: 18rem;">
                <img src="{{asset('img/shoe.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/product" class="btn btn-primary">More Info</a>
                </div>
            </div>
            <div class="card col-6 col-sm-6 col-lg-3" style="width: 18rem;">
                <img src="{{asset('img/shoe.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/product" class="btn btn-primary">More Info</a>
                </div>
            </div>
            <div class="card col-6 col-sm-6 col-lg-3" style="width: 18rem;">
                <img src="{{asset('img/shoe.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="/product" class="btn btn-primary">More Info</a>
                </div>
            </div>
            <div class="card col-6 col-sm-6 col-lg-3" style="width: 18rem;">
                <img src="{{asset('img/shoe.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">More Info</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card col-6 col-sm-6 col-lg-3" style="width: 18rem;">
                <img src="{{asset('img/shoe.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">More Info</a>
                </div>
            </div>
            <div class="card col-6 col-sm-6 col-lg-3" style="width: 18rem;">
                <img src="{{asset('img/shoe.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">More Info</a>
                </div>
            </div>
            <div class="card col-6 col-sm-6 col-lg-3" style="width: 18rem;">
                <img src="{{asset('img/shoe.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">More Info</a>
                </div>
            </div>
            <div class="card col-6 col-sm-6 col-lg-3" style="width: 18rem;">
                <img src="{{asset('img/shoe.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">More Info</a>
                </div>
            </div>
        </div>

    </div>
@endsection
