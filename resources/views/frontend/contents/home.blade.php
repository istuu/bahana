@extends('frontend.layout.index')

@section('contents')
<div class="container">

        @include('frontend.include.page-title')

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

            <div class="card m-t-20">
                <h6 class="card-header">News</h6>
                <div class="card-body">
                    <div class="well">
                        <div class="media">
                            <a class="pull-left" href="#">
                        		<img class="media-object" src="http://placekitten.com/150/150">
                      		</a>
                            <div class="card-body ">
                                <p class="card-title"><strong>Card title of news using as title</strong></p>
                                <p class="card-text">This is a wider card with supporting text below as a
                                    natural lead-in to additional content. <a href="">Read More</a></p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr/>
                    <div class="well">
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="http://placekitten.com/150/150">
                            </a>
                            <div class="card-body ">
                                <p class="card-title"><strong>Card title of news using as title 2 sample text</strong></p>
                                <p class="card-text">This is a wider card with supporting text below as a
                                    natural lead-in to additional content. <a href="">Read More</a></p>
                                <p class="card-text">
                                    <small class="text-muted">Last updated 3 mins ago</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-3">
            <div class="card m-b-20 card-inverse text-white">
                <img class="card-img img-fluid" src="{{ asset('frontend') }}/assets/images/gallery/3.jpg" alt="Card image">
                <!-- <div class="card-img-overlay">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a
                        natural lead-in to additional content. This content is a little bit
                        longer.</p>
                </div> -->
            </div>
        </div>
    </div>
@endsection
