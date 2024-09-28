@extends('frontend.layout')

@section('content')

<div id="home" class="content active">
    <div class="container">
        <h3 class="text-center mb-4">Our Available Cars</h3>
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="Frontend/assets/range-rover.jpg" class="card-img-top" alt="Car Image">
                    <div class="card-body text-center">
                        <h5 class="card-title">Range Rover</h5>
                        <p class="card-text">$1,200/month</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="Frontend/assets/bmw-3-series.png" class="card-img-top" alt="Car Image">
                    <div class="card-body text-center">
                        <h5 class="card-title">BMW 3 Series</h5>
                        <p class="card-text">$950/month</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="Frontend/assets/cla.png" class="card-img-top" alt="Car Image">
                    <div class="card-body text-center">
                        <h5 class="card-title">Mercedes CLA</h5>
                        <p class="card-text">$1,100/month</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="Frontend/assets/tesla-s.jpg" class="card-img-top" alt="Car Image">
                    <div class="card-body text-center">
                        <h5 class="card-title">Tesla S</h5>
                        <p class="card-text">$1,500/month</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endSection