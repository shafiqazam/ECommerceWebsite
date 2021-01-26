@extends('header')

@section('tags')
    <link rel="stylesheet" href="{{asset('css/product.css')}}">
@endsection

@section('content')
    <div class="main-details">
        <div><img src="{{asset('img/shoe.jpg')}}" alt=""></div>

        <p>Nike Air Max</p>
        <p>Men's Shoes</p>
        <p>79.90€</p>
    </div>
    <div class="selling-details">
        <div class="row">
            <div class="left-selling-details col">
                <div class="size-header">Size</div>
                <div class="size-choose">
                    <div class="dec-size col">
                        <button type="button" class="btn btn-dark"><i class="fas fa-minus" style="color: var(--contrast);"></i></button>
                    </div>
                    <div class="show-size col-4">
                            36.5
                    </div>
                    <div class="inc-size col">
                        <button type="button" class="btn btn-dark"><i class="fas fa-plus" style="color: var(--contrast);"></i></button>
                    </div>
                </div>
            </div>
            <div class="right-selling-details col">
                <div class="add-to-cart"><button type="button" class="btn btn-dark">Add to cart</button></div>
                <div class="bookmark"><button type="button" class="btn btn-dark">Bookmark &nbsp; <i class="fas fa-bookmark" style="color: var(--contrast);"></i></button></div>
                <div class="write-review"><button type="button" class="btn btn-dark">Write a review</button></div>
            </div>
        </div>
    </div>
    <div class="product-description">
        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
            deserunt mollit anim id est eopksio laborum. Sed ut perspiciatis unde
            omnis istpoe natus error sit voluptatem accusantium doloremque eopsloi
            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis
            et quasi architecto beatae vitae dicta sunot explicabo. Nemo ernim ipsam
            voluptatem quia voluptas sit aspernatur aut odit aut fugit, sedopk quia consequuntur magni dolores eos qui rationesopl voluptatem sequi nesciunt. Neque porro quisquameo est, qui dolorem ipsum quia dolor sit amet, eopsmiep consectetur, adipisci velit, seisud quia non numquam eius modi tempora incidunt ut labore et dolore
            wopeir magnam aliquam quaerat voluptatem eoplmuriquisqu</p>
    </div>
    <div class="review">
        <div class="review-header">
            <h6>Reviews : &nbsp; </h6>
            <h6>3.9</h6>
        </div>
        <div class="review-body">
            <div class="review-item row">
                <div class="review-item-left col-4 col-lg-2">
                    <div class="review-stars">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="review-date">
                        <p>20/10/2021</p>
                    </div>
                </div>
                <div class="col">
                    <p class="review-para">Extraordinary!!</p>
                </div>
            </div>
            <div class="review-item row">
                <div class="review-item-left col-4 col-lg-2">
                    <div class="review-stars">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="review-date">
                        <p>20/10/2021</p>
                    </div>
                </div>
                <div class="col">
                    <p class="review-para">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est eopksio laborum. Sed ut perspiciatis unde omnis istpoe natus error sit voluptatem accusantium doloremque eopsloi laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunot explicabo. Nemo ernim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sedopk quia consequuntur magni dolores
                        eos qui rationesopl voluptatem sequi nesciunt.</p>
                </div>
            </div>
            <div class="review-item row">
                <div class="review-item-left col-4 col-lg-2">
                    <div class="review-stars">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="review-date">
                        <p>20/10/2021</p>
                    </div>
                </div>
                <div class="col">
                    <p class="review-para">Neque porro quisquameo est, qui dolorem ipsum quia dolor sit amet, eopsmiep consectetur, adipisci velit, seisud quia non numquam eius modi tempora incidunt ut labore et dolore wopeir
                        magnam aliquam quaerat voluptatem eoplmuriquisqu</p>
                </div>
            </div>
            <div class="review-item row">
                <div class="review-item-left col-4 col-lg-2">
                    <div class="review-stars">
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="review-date">
                        <p>20/10/2021</p>
                    </div>
                </div>
                <div class="col">
                    <p class="review-para">Extraordinary!!</p>
                </div>
            </div>
        </div>
    </div>
@endsection
