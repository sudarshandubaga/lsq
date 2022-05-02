@extends('layouts.page')

@section('page_title', 'Shop')

@section('page_content')
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="card product-box">
                    <div class="card-body">
                        <div class="mb-4">
                            <img src="{{ url('images/box.png') }}" class="img-fluid" alt="">
                        </div>
                        <div>
                            <h3>LSQ Hair Kit</h3>
                            <h4>
                                <small><s>₹ 1599</s></small>
                                ₹ 1499
                            </h4>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary round-btn"><i class="fa-solid fa-shopping-cart"></i> Add To Cart</button>
                            <button class="btn btn-outline-dark round-btn"><i class="fa-solid fa-shopping-cart"></i> Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card product-box">
                    <div class="card-body">
                        <div class="mb-4">
                            <img src="{{ url('images/Blade-oil.png') }}" class="img-fluid" alt="">
                        </div>
                        <div>
                            <h3>Wahl Hair Clipper Blade Oil 4 oz.</h3>
                            <h4>
                                <small><s>₹ 1599</s></small>
                                ₹ 1499
                            </h4>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button class="btn btn-primary round-btn"><i class="fa-solid fa-shopping-cart"></i> Add To Cart</button>
                            <button class="btn btn-outline-dark round-btn"><i class="fa-solid fa-shopping-cart"></i> Buy Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection