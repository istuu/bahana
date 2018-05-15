@extends('frontend.layout.index')

@section('contents')
<div class="container">

    <div class="row">
        <div class="col-sm-12">

            <p>&nbsp;</p>
        </div>
    </div>

    <!-- Page-Title -->
    <div class="row">
        <div class="col-md-3">
            <!-- Simple card -->
            <div class="card m-b-20">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make
                        up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Button</a>
                </div>
            </div>
        </div><!-- end col -->

        <div class="col-md-6">

            <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleFade" data-slide-to="1"></li>
                    <li data-target="#carouselExampleFade" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img class="d-block img-fluid" src="{{ asset('frontend') }}/assets/images/big/1.jpg" alt="First slide" />
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-white">First slide label</h3>
                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{ asset('frontend') }}/assets/images/big/2.jpg" alt="Second slide" />
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-white">Second slide label</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{ asset('frontend') }}/assets/images/big/3.jpg" alt="Third slide" />
                        <div class="carousel-caption d-none d-md-block">
                            <h3 class="text-white">Third slide label</h3>
                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
@endsection
