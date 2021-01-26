@extends('header')

@section('tags')
    <link rel="stylesheet" href="{{asset('css/homepage.css')}}">
@endsection

@section('content')
{{--    Main Category--}}
    <div class="main-dir">
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle category-dir" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                Men
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><a href="/category"><button class="dropdown-item" type="button">Tops</button></a></li>
                <li><a href="/category"><button class="dropdown-item" type="button">Bottom</button></a></li>
                <li><a href="/"><button class="dropdown-item" type="button">Shoes</button></a></li>
                <li><a href="/"><button class="dropdown-item" type="button">Accessories</button></a></li>
            </ul>
        </div>
        <p class="category-dir">|</p>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle category-dir" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                Women
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><button class="dropdown-item" type="button">Tops</button></li>
                <li><button class="dropdown-item" type="button">Bottom</button></li>
                <li><button class="dropdown-item" type="button">Shoes</button></li>
                <li><button class="dropdown-item" type="button">Accessories</button></li>
            </ul>
        </div>
        <p class="category-dir">|</p>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle category-dir" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                Kids
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <li><button class="dropdown-item" type="button">Tops</button></li>
                <li><button class="dropdown-item" type="button">Bottom</button></li>
                <li><button class="dropdown-item" type="button">Shoes</button></li>
                <li><button class="dropdown-item" type="button">Accessories</button></li>
            </ul>
        </div>
    </div>
{{--    Carousel--}}
<div class="carousel-main">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/house.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/sand.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/house.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/sand.jpg')}}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</div>

{{--Tags    --}}
<div class="tags-main">
    <button class="" type="button">
        <a href="">#Tags</a>
    </button>
    <button class="" type="button">
        <a href="">#Tags</a>
    </button>
    <button class="" type="button">
        <a href="">#Tags</a>
    </button>
</div>

{{--    Description--}}
<div class="description">
    <div class="description-1">
        <img src="{{asset('img/background.jpg')}}" alt="">
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est eopksio laborum.
            Sed ut perspiciatis unde omnis istpoe natus error sit voluptatem</p>
    </div>
    <div class="description-2">
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est eopksio laborum.
            Sed ut perspiciatis unde omnis istpoe natus error sit voluptatem</p>
        <img src="{{asset('img/background1.jpg')}}" alt="">
    </div>
</div>

{{--    Socials    --}}
<div class="socials-main">
    <i class="fab fa-instagram"></i>
    <i class="fab fa-facebook-square"></i>
    <i class="fab fa-twitter"></i>
</div>
@endsection
