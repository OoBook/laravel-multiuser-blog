@extends('front.layouts.master')

@section('title', $page->title)


@section('content')
    <!-- ********** Hero Area Start ********** -->
    {{-- <div class="hero-area height-400 bg-img background-overlay" style="background-image: url(img/blog-img/bg4.jpg);"></div> --}}
    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-400 bg-img background-overlay" style="background-image: url('{{ $page->image }}');">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center">
                <div class="col-12 col-md-8 col-lg-6">
                    <div class="single-blog-title text-center">
                        <!-- Catagory -->
                        {{-- <div class="post-cta"><a href="#">travel</a></div> --}}
                        <h3>{{ $page->title }}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** Hero Area End ********** -->

    <section class="contact-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Contact Form Area -->
                <div class="col-12 col-md-10 col-lg-8">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{session('success')}}
                        </div>
                    @elseif($errors->any())

                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $err)
                                    <li>{{$err}} </li>
                                @endforeach
                            </ul>
                        </div>


                    @endif
                    <div class="contact-form">
                        <h5>İletişime Geçin</h5>
                        <!-- Contact Form -->
                        <form action="{{ route('front.post.contact') }}" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input value="{{old('name')}}" type="text" name="name" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your name</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input value="{{old('email')}}" type="email" name="email" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="message" id="message" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Enter your message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn world-btn">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
