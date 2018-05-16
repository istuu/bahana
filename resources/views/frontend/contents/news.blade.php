@extends('frontend.layout.index')

@section('contents')
<div class="container">

        @include('frontend.include.page-title')

        <div class="col-md-9">
            <div class="row">
                
                <div class="col-lg-4">
                    <div class="card m-b-20">
                        <img class="card-img-top img-fluid" src="{{ asset('frontend') }}/assets/images/gallery/9.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a
                                natural lead-in to additional content. This content is a little bit
                                longer.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card m-b-20">
                        <img class="card-img-top img-fluid" src="{{ asset('frontend') }}/assets/images/gallery/9.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a
                                natural lead-in to additional content. This content is a little bit
                                longer.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card m-b-20">
                        <img class="card-img-top img-fluid" src="{{ asset('frontend') }}/assets/images/gallery/9.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a
                                natural lead-in to additional content. This content is a little bit
                                longer.</p>
                            <p class="card-text">
                                <small class="text-muted">Last updated 3 mins ago</small>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
