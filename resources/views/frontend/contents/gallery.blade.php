@extends('frontend.layout.index')

@section('contents')
<div class="container">

        @include('frontend.include.page-title')

        <div class="col-md-9">
            <div class="row">
                <div class="col-12">
                    <div class="portfolioFilter">
                        <a href="#" data-filter="*" class="current waves-effect waves-light">All</a>
                        <a href="#" data-filter=".natural" class="waves-effect waves-light">Natural</a>
                        <a href="#" data-filter=".creative" class="waves-effect waves-light">Creative</a>
                        <a href="#" data-filter=".personal" class="waves-effect waves-light">Personal</a>
                        <a href="#" data-filter=".photography" class="waves-effect waves-light">Photography</a>
                    </div>
                </div>
            </div>

            <div class="port text-center m-b-20">
                <div class="portfolioContainer">
                    <div class="gallery-box natural personal">
                        <div class="thumb">
                            <a href="{{ asset('frontend') }}/assets/images/gallery/12.jpg" class="image-popup" title="Screenshot-1">
                                <img src="{{ asset('frontend') }}/assets/images/gallery/12.jpg" class="thumb-img" alt="work-thumbnail">
                            </a>
                            <div class="gal-detail text-xs-center">
                                <h4 class="m-t-10">Nature Image</h4>
                                <p class="text-muted">
                                    Web Design , Graphic Design
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-box creative personal photography">
                        <div class="thumb">
                            <a href="{{ asset('frontend') }}/assets/images/gallery/2.jpg" class="image-popup" title="Screenshot-2">
                                <img src="{{ asset('frontend') }}/assets/images/gallery/2.jpg" class="thumb-img" alt="work-thumbnail">
                            </a>
                            <div class="gal-detail text-xs-center">
                                <h4 class="m-t-10">Nature Image</h4>
                                <p class="text-muted">
                                    Web Design , Graphic Design
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-box natural creative">
                        <div class=" thumb">
                            <a href="{{ asset('frontend') }}/assets/images/gallery/3.jpg" class="image-popup" title="Screenshot-3">
                                <img src="{{ asset('frontend') }}/assets/images/gallery/3.jpg" class="thumb-img" alt="work-thumbnail">
                            </a>
                            <div class="gal-detail text-xs-center">
                                <h4 class="m-t-10">Nature Image</h4>
                                <p class="text-muted">
                                    Web Design , Graphic Design
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-box personal photography">
                        <div class="thumb">
                            <a href="{{ asset('frontend') }}/assets/images/gallery/4.jpg" class="image-popup" title="Screenshot-4">
                                <img src="{{ asset('frontend') }}/assets/images/gallery/4.jpg" class="thumb-img" alt="work-thumbnail">
                            </a>
                            <div class="gal-detail text-xs-center">
                                <h4 class="m-t-10">Nature Image</h4>
                                <p class="text-muted">
                                    Web Design , Graphic Design
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-box creative photography">
                        <div class="thumb">
                            <a href="{{ asset('frontend') }}/assets/images/gallery/9.jpg" class="image-popup" title="Screenshot-5">
                                <img src="{{ asset('frontend') }}/assets/images/gallery/9.jpg" class="thumb-img" alt="work-thumbnail">
                            </a>
                            <div class="gal-detail text-xs-center">
                                <h4 class="m-t-10">Nature Image</h4>
                                <p class="text-muted">
                                    Web Design , Graphic Design
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-box natural photography">
                        <div class="thumb">
                            <a href="{{ asset('frontend') }}/assets/images/gallery/6.jpg" class="image-popup" title="Screenshot-6">
                                <img src="{{ asset('frontend') }}/assets/images/gallery/6.jpg" class="thumb-img" alt="work-thumbnail">
                            </a>
                            <div class="gal-detail text-xs-center">
                                <h4 class="m-t-10">Nature Image</h4>
                                <p class="text-muted">
                                    Web Design , Graphic Design
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-box personal photography creative">
                        <div class="thumb">
                            <a href="{{ asset('frontend') }}/assets/images/gallery/7.jpg" class="image-popup" title="Screenshot-7">
                                <img src="{{ asset('frontend') }}/assets/images/gallery/7.jpg" class="thumb-img" alt="work-thumbnail">
                            </a>
                            <div class="gal-detail text-xs-center">
                                <h4 class="m-t-10">Nature Image</h4>
                                <p class="text-muted">
                                    Web Design , Graphic Design
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-box creative photography natural">
                        <div class="thumb">
                            <a href="{{ asset('frontend') }}/assets/images/gallery/8.jpg" class="image-popup" title="Screenshot-8">
                                <img src="{{ asset('frontend') }}/assets/images/gallery/8.jpg" class="thumb-img" alt="work-thumbnail">
                            </a>
                            <div class="gal-detail text-xs-center">
                                <h4 class="m-t-10">Nature Image</h4>
                                <p class="text-muted">
                                    Web Design , Graphic Design
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-box natural personal">
                        <div class="thumb">
                            <a href="{{ asset('frontend') }}/assets/images/gallery/5.jpg" class="image-popup" title="Screenshot-9">
                                <img src="{{ asset('frontend') }}/assets/images/gallery/5.jpg" class="thumb-img" alt="work-thumbnail">
                            </a>
                            <div class="gal-detail text-xs-center">
                                <h4 class="m-t-10">Nature Image</h4>
                                <p class="text-muted">
                                    Web Design , Graphic Design
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-box photography creative">
                        <div class="thumb">
                            <a href="{{ asset('frontend') }}/assets/images/gallery/10.jpg" class="image-popup" title="Screenshot-10">
                                <img src="{{ asset('frontend') }}/assets/images/gallery/10.jpg" class="thumb-img" alt="work-thumbnail">
                            </a>
                            <div class="gal-detail text-xs-center">
                                <h4 class="m-t-10">Nature Image</h4>
                                <p class="text-muted">
                                    Web Design , Graphic Design
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-box creative photography">
                        <div class="thumb">
                            <a href="{{ asset('frontend') }}/assets/images/gallery/11.jpg" class="image-popup" title="Screenshot-11">
                                <img src="{{ asset('frontend') }}/assets/images/gallery/11.jpg" class="thumb-img" alt="work-thumbnail">
                            </a>
                            <div class="gal-detail text-xs-center">
                                <h4 class="m-t-10">Nature Image</h4>
                                <p class="text-muted">
                                    Web Design , Graphic Design
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="gallery-box natural creative personal">
                        <div class="thumb">
                            <a href="{{ asset('frontend') }}/assets/images/gallery/1.jpg" class="image-popup" title="Screenshot-12">
                                <img src="{{ asset('frontend') }}/assets/images/gallery/1.jpg" class="thumb-img" alt="work-thumbnail">
                            </a>
                            <div class="gal-detail text-xs-center">
                                <h4 class="m-t-10">Nature Image</h4>
                                <p class="text-muted">
                                    Web Design , Graphic Design
                                </p>
                            </div>
                        </div>
                    </div>

                </div><!-- end portfoliocontainer-->
            </div> <!-- End row -->
        </div>
    </div>
@endsection
@push('view-script')
<!-- isotope filter plugin -->
<script type="text/javascript" src="{{ url('frontend') }}/assets/plugins/isotope/js/isotope.pkgd.min.js"></script>

<!-- Magnific popup -->
<script type="text/javascript" src="{{ url('frontend') }}/assets/plugins/magnific-popup/js/jquery.magnific-popup.min.js"></script>

<script type="text/javascript">
    $(document).ready(function () {
        var $container = $('.portfolioContainer');
        $container.isotope({
            filter: '*',
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            }
        });

        $('.portfolioFilter a').click(function(){
            $('.portfolioFilter .current').removeClass('current');
            $(this).addClass('current');

            var selector = $(this).attr('data-filter');
            $container.isotope({
                filter: selector,
                animationOptions: {
                    duration: 750,
                    easing: 'linear',
                    queue: false
                }
            });
            return false;
        });

        $('.image-popup').magnificPopup({
            type: 'image',
            closeOnContentClick: true,
            mainClass: 'mfp-fade',
            gallery: {
                enabled: true,
                navigateByImgClick: true,
                preload: [0,1] // Will preload 0 - before current, and 1 after the current image
            }
        });
    });
</script>
@endpush
