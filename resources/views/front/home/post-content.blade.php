<div class="post-content-area mb-50">
    <!-- Catagory Area -->
    <div class="world-catagory-area">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="title">Don’t Miss</li>

            {{-- <li class="nav-item">
                <a class="nav-link active" id="tab1" data-toggle="tab" href="#world-tab-1" role="tab" aria-controls="world-tab-1" aria-selected="true">All</a>
            </li> --}}
            @foreach ($categories as $index => $category)

                <li class="nav-item">
                    <a class="nav-link  @if($index == 0) active @endif" id="tab{{$index+1}}" data-toggle="tab" href="#{{$category->slug}}" 
                        role="tab" aria-controls="{{$category->slug}}" aria-selected="@if($index == 0) true @else false @endif">{{$category->name}}</a>
                </li>
            @endforeach

            {{-- <li class="nav-item">
                <a class="nav-link" id="tab2" data-toggle="tab" href="#world-tab-2" role="tab" aria-controls="world-tab-2" aria-selected="false">Style hunter</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="tab3" data-toggle="tab" href="#world-tab-3" role="tab" aria-controls="world-tab-3" aria-selected="false">Vogue</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="tab4" data-toggle="tab" href="#world-tab-4" role="tab" aria-controls="world-tab-4" aria-selected="false">Health &amp; Fitness</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="tab5" data-toggle="tab" href="#world-tab-5" role="tab" aria-controls="world-tab-5" aria-selected="false">Travel</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="tab6" data-toggle="tab" href="#world-tab-6" role="tab" aria-controls="world-tab-6" aria-selected="false">Gadgets</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                <div class="dropdown-menu">
                    <a class="nav-link" id="tab7" data-toggle="tab" href="#world-tab-7" role="tab" aria-controls="world-tab-7" aria-selected="false">Sports</a>
                    <a class="nav-link" id="tab8" data-toggle="tab" href="#world-tab-8" role="tab" aria-controls="world-tab-8" aria-selected="false">Politices</a>
                    <a class="nav-link" id="tab9" data-toggle="tab" href="#world-tab-9" role="tab" aria-controls="world-tab-9" aria-selected="false">Features</a>
                </div>
            </li> --}}
        </ul>

        <div class="tab-content" id="myTabContent">

            {{-- <div class="tab-pane fade show" id="{{$category->slug}}" role="tabpanel" aria-labelledby="tab{{$category->slug}}">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">
                            <!-- Single Blog Post -->
                            <div class="single-blog-post">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="{{ asset('front/img/blog-img/b1.jpg') }}" alt="">
                                    <!-- Catagory -->
                                    <div class="post-cta"><a href="#">travel</a></div>
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="headline">
                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                    </a>
                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="{{ asset('front/img/blog-img/b2.jpg') }}" alt="">
                                    <!-- Catagory -->
                                    <div class="post-cta"><a href="#">travel</a></div>
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="headline">
                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                    </a>
                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="{{ asset('front/img/blog-img/b3.jpg') }}" alt="">
                                    <!-- Catagory -->
                                    <div class="post-cta"><a href="#">travel</a></div>
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="headline">
                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                    </a>
                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{ asset('front/img/blog-img/b10.jpg') }}" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{ asset('front/img/blog-img/b11.jpg') }}" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{ asset('front/img/blog-img/b12.jpg') }}" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.5s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{ asset('front/img/blog-img/b13.jpg') }}" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            @foreach ($categories as $index => $category)
                {{-- {{ dd($category->articles)}} --}}

                <div class="tab-pane fade @if($index== 0) show active @endif" id="{{$category->slug}}" role="tabpanel" aria-labelledby="tab{{$index+1}}">
                    <div class="row">
                        <div class="col-12 col-md-6">
                            {{-- <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s"> --}}
                                <!-- Single Blog Post -->
                                {{-- {{ dd($category->popularArticles()) }} --}}
                                @foreach ($category->popularArticles() as $article)
                                    @if ($category->name == "Şiir")
                                        {{-- {{ dd($category->popularArticles())}} --}}
                                    @endif
                                    <div class="single-blog-post">
                                        <!-- Post Thumbnail -->
                                        <div class="post-thumbnail">
                                            <img src="{{ $article->image }}" alt="">
                                            <!-- Catagory -->
                                            <div class="post-cta"><a href="#">{{$category->name}}</a></div>
                                        </div>
                                        <!-- Post Content -->
                                        <div class="post-content">
                                            <a href="#" class="headline">
                                                <h5>{{ $article->title }}</h5>
                                            </a>
                                            <p>{{ str_limit($article->content, 50, ' Devamına Bak...') }}</p>
                                            <!-- Post Meta -->
                                            <div class="post-meta">
                                                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">{{ $article->created_at->diffForHumans() }}</a></p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {{-- <div class="single-blog-post">
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="{{ asset('front/img/blog-img/b1.jpg') }}" alt="">
                                        <!-- Catagory -->
                                        <div class="post-cta"><a href="#">travel</a></div>
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                        <a href="#" class="headline">
                                            <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                        </a>
                                        <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                        <!-- Post Meta -->
                                        <div class="post-meta">
                                            <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                        </div>
                                    </div>
                                </div> --}}
                            {{-- </div> --}}
                        </div>
    
                        <div class="col-12 col-md-6">
                            <!-- Single Blog Post -->
                            @php
                                $wow = 2;
                            @endphp
                            @foreach ($category->limitArticles(4) as $article)

                                <div class="single-blog-post post-style-2 d-flex align-items-center @if($index== 0) wow fadeInUpBig @endif" @if($index== 0)  data-wow-delay="0.{{$wow}}s" @endif>
                                    <!-- Post Thumbnail -->
                                    <div class="post-thumbnail">
                                        <img src="{{ $article->image }}" alt="">
                                    </div>
                                    <!-- Post Content -->
                                    <div class="post-content">
                                    <a href="{{ route('front.article', [$category->slug, $article->slug]) }}" class="headline">
                                            <h5>{{ $article->title }}</h5>
                                        </a>
                                        <!-- Post Meta -->
                                        <div class="post-meta">
                                            <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">{{ $article->created_at->diffForHumans() }}</a></p>
                                        </div>
                                    </div>
                                </div>
                            @php
                                $wow++;
                            @endphp
                            @endforeach
                            {{-- <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="{{ asset('front/img/blog-img/b10.jpg') }}" alt="">
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="headline">
                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                    </a>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                    </div>
                                </div>
                            </div> --}}
    
                        </div>
                    </div>
                </div>

            @endforeach

            {{-- <div class="tab-pane fade show active" id="world-tab-1" role="tabpanel" aria-labelledby="tab1">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="world-catagory-slider owl-carousel wow fadeInUpBig" data-wow-delay="0.1s">

                            <!-- Single Blog Post -->
                            <div class="single-blog-post">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="{{ asset('front/img/blog-img/b1.jpg') }}" alt="">
                                    <!-- Catagory -->
                                    <div class="post-cta"><a href="#">travel</a></div>
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="headline">
                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                    </a>
                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="{{ asset('front/img/blog-img/b2.jpg') }}" alt="">
                                    <!-- Catagory -->
                                    <div class="post-cta"><a href="#">travel</a></div>
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="headline">
                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                    </a>
                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Single Blog Post -->
                            <div class="single-blog-post">
                                <!-- Post Thumbnail -->
                                <div class="post-thumbnail">
                                    <img src="{{ asset('front/img/blog-img/b3.jpg') }}" alt="">
                                    <!-- Catagory -->
                                    <div class="post-cta"><a href="#">travel</a></div>
                                </div>
                                <!-- Post Content -->
                                <div class="post-content">
                                    <a href="#" class="headline">
                                        <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                    </a>
                                    <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                    <!-- Post Meta -->
                                    <div class="post-meta">
                                        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{ asset('front/img/blog-img/b10.jpg') }}" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{ asset('front/img/blog-img/b11.jpg') }}" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{ asset('front/img/blog-img/b12.jpg') }}" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.5s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{ asset('front/img/blog-img/b13.jpg') }}" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="world-tab-2" role="tabpanel" aria-labelledby="tab2">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{ asset('img/blog-img/b1.jpg') }}" alt="">
                                <!-- Catagory -->
                                <div class="post-cta"><a href="#">travel</a></div>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{ asset('img/blog-img/b10.jpg') }}" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{ asset('img/blog-img/b11.jpg') }}" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{ asset('img/blog-img/b12.jpg') }}" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>

                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{ asset('img/blog-img/b13.jpg') }}" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

        </div>
    </div>

    <!-- Catagory Area -->
    {{-- <div class="world-catagory-area mt-50">
        <ul class="nav nav-tabs" id="myTab2" role="tablist">
            <li class="title">What's Trending</li>

            <li class="nav-item">
                <a class="nav-link active" id="tab10" data-toggle="tab" href="#world-tab-10" role="tab" aria-controls="world-tab-10" aria-selected="true">All</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="tab11" data-toggle="tab" href="#world-tab-11" role="tab" aria-controls="world-tab-11" aria-selected="false">Style hunter</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="tab12" data-toggle="tab" href="#world-tab-12" role="tab" aria-controls="world-tab-12" aria-selected="false">Vogue</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="tab13" data-toggle="tab" href="#world-tab-13" role="tab" aria-controls="world-tab-13" aria-selected="false">Health &amp; Fitness</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="tab14" data-toggle="tab" href="#world-tab-14" role="tab" aria-controls="world-tab-14" aria-selected="false">Travel</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" id="tab15" data-toggle="tab" href="#world-tab-15" role="tab" aria-controls="world-tab-15" aria-selected="false">Gadgets</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                <div class="dropdown-menu">
                    <a class="nav-link" id="tab16" data-toggle="tab" href="#world-tab-16" role="tab" aria-controls="world-tab-16" aria-selected="false">Sports</a>
                    <a class="nav-link" id="tab17" data-toggle="tab" href="#world-tab-17" role="tab" aria-controls="world-tab-17" aria-selected="false">Politices</a>
                    <a class="nav-link" id="tab18" data-toggle="tab" href="#world-tab-18" role="tab" aria-controls="world-tab-18" aria-selected="false">Features</a>
                </div>
            </li>
        </ul>

        <div class="tab-content" id="myTabContent2">

            <div class="tab-pane fade show active" id="world-tab-10" role="tabpanel" aria-labelledby="tab10">
                <div class="row">

                    <div class="col-12 col-md-6">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.2s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{ asset('front/img/blog-img/b2.jpg') }}" alt="">
                                <!-- Catagory -->
                                <div class="post-cta"><a href="#">travel</a></div>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post wow fadeInUpBig" data-wow-delay="0.3s">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="{{ asset('front/img/blog-img/b3.jpg') }}" alt="">
                                <!-- Catagory -->
                                <div class="post-cta"><a href="#">travel</a></div>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="world-catagory-slider2 owl-carousel wow fadeInUpBig" data-wow-delay="0.4s">
                            <!-- ========= Single Catagory Slide ========= -->
                            <div class="single-cata-slide">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="{{ asset('front/img/blog-img/b14.jpg') }}" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="{{ asset('front/img/blog-img/b15.jpg') }}" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="{{ asset('front/img/blog-img/b16.jpg') }}" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="{{ asset('front/img/blog-img/b17.jpg') }}" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ========= Single Catagory Slide ========= -->
                            <div class="single-cata-slide">
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="{{ asset('front/img/blog-img/b17.jpg') }}" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="{{ asset('front/img/blog-img/b15.jpg') }}" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="{{ asset('front/img/blog-img/b14.jpg') }}" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <!-- Single Blog Post -->
                                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                                            <!-- Post Thumbnail -->
                                            <div class="post-thumbnail">
                                                <img src="{{ asset('front/img/blog-img/b16.jpg') }}" alt="">
                                            </div>
                                            <!-- Post Content -->
                                            <div class="post-content">
                                                <a href="#" class="headline">
                                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                                </a>
                                                <!-- Post Meta -->
                                                <div class="post-meta">
                                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane fade" id="world-tab-11" role="tabpanel" aria-labelledby="tab11">
                <div class="row">

                    <div class="col-12 col-md-6">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b2.jpg" alt="">
                                <!-- Catagory -->
                                <div class="post-cta"><a href="#">travel</a></div>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b3.jpg" alt="">
                                <!-- Catagory -->
                                <div class="post-cta"><a href="#">travel</a></div>
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
                                </a>
                                <p>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in...</p>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b14.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b15.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b16.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6">
                        <!-- Single Blog Post -->
                        <div class="single-blog-post post-style-2 d-flex align-items-center mb-1">
                            <!-- Post Thumbnail -->
                            <div class="post-thumbnail">
                                <img src="img/blog-img/b17.jpg" alt="">
                            </div>
                            <!-- Post Content -->
                            <div class="post-content">
                                <a href="#" class="headline">
                                    <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most</h5>
                                </a>
                                <!-- Post Meta -->
                                <div class="post-meta">
                                    <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div> --}}

</div>
