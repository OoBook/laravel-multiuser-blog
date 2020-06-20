
@extends('front.layouts.master')

@section('title', 'Anasayfa')

@section('content')
    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area">
        
        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel">
            @foreach ($data['articles'] as $index => $article)
                @if($index == 4)
                    @break;
                @endif

                <div class="single-hero-slide bg-img background-overlay" style="background-image: url('{{ $article->image }}');"></div>
            @endforeach
            <!-- Single Slide -->
            {{-- <div class="single-hero-slide bg-img background-overlay" style="background-image: url('{{ asset('front/img/blog-img/bg2.jpg') }}');"></div> --}}
            <!-- Single Slide -->
            {{-- <div class="single-hero-slide bg-img background-overlay" style="background-image: url('{{ asset('front/img/blog-img/bg1.jpg') }}');"></div> --}}
        </div>

        <!-- Hero Post Slide -->
        <div class="hero-post-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="hero-post-slide">
                            @foreach ($data['banners'] as $index => $article)
                                @if($index == 4)
                                    @break;
                                @endif
                                <!-- Single Slide -->
                                <div class="single-slide d-flex">
                                    <div class="post-number">
                                        <p>{{ $index+1 }}</p>
                                    </div>
                                    <div class="post-title">
                                        <a href="{{ route('front.page', [ $article->slug ]) }}"> {{ $article->title}} </a>
                                    </div>
                                </div>
                            @endforeach
                            <!-- Single Slide -->
                            {{-- <div class="single-slide d-flex align-items-center">
                                <div class="post-number">
                                    <p>1</p>
                                </div>
                                <div class="post-title">
                                    <a href="single-blog.html">How Did van Gogh’s Turbulent Mind Depict One of the Most Complex</a>
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->

    <div class="main-content-wrapper section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- ============= Post Content Area Start ============= -->
                <div class="col-12 col-lg-8">

                    @include('front.home.post-content', [
                        'categories' => $data['categories']
                    ])

                </div>

                <!-- ========== Sidebar Area ========== -->
                <div class="col-12 col-md-8 col-lg-4">

                    @include('front.home.side-info')

                </div>
            </div>

            <div class="row justify-content-center">
                <!-- ========== Single Blog Post ========== -->
                <div class="col-12 col-md-6 col-lg-4">


                    <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.2s">
                        <!-- Post Thumbnail -->

                        @include('front.home.thumbnail')

                    </div>
                </div>
                <!-- ========== Single Blog Post ========== -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.4s">
                        <!-- Post Thumbnail -->
                        @include('front.home.thumbnail')

                    </div>
                </div>
                <!-- ========== Single Blog Post ========== -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-blog-post post-style-3 mt-50 wow fadeInUpBig" data-wow-delay="0.6s">
                        <!-- Post Thumbnail -->
                        @include('front.home.thumbnail')

                    </div>
                </div>
            </div>

            <div class="world-latest-articles">
                <div class="row">
                    <div class="col-12 col-lg-8">

                        <div class="title">
                            <h5>Latest Articles</h5>
                        </div>

                        @foreach ($data['articles'] as $article)
                            <!-- Single Blog Post -->

                            @include('front.templates.post-widget', [
                                'article' => $article
                            ])
                            {{-- @if (! $loops->last)
                                <hr>
                            @endif --}}
                        @endforeach

                        <!-- Load More btn -->
                        <div class="row">
                            <div class="col-12">
                                <div class="load-more-btn mt-50 text-center d-flex justify-content-center">
                                    {{ $data['articles']->links() }}
                                    {{-- <a href="#" class="btn world-btn">Load More</a> --}}
                                </div>
                            </div>
                        </div>

                        {{-- @include('front.home.latest-article', [
                            'articles' => $data['articles']
                        ]) --}}

                    </div>

                    {{-- <div class="col-12 col-lg-4">
                        <div class="menu" style="margin-top: 125px;">
                            <div class="accordion">
                                <!-- Áreas -->
                                <div class="accordion-group">
                                    <!-- Área -->
                                    @foreach ($data['categories'] as $item)
                                    <div class="accordion-heading area">
                                            <a class="accordion-toggle" data-toggle="collapse" href=
                                                "#area1">{{  $item->name }}
                                                <span class="badge bg-dark float-right text-white">{{$item->articleCount() }}</span>
                                            </a>

                                        </div><!-- /Área -->
                                    @endforeach

                                </div>
                            </div><!-- /accordion -->
                        </div>
                        @include('front.home.new-videos')
                    </div> --}}
                </div>
            </div>




        </div>
    </div>


@endsection


