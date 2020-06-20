@extends('front.layouts.master')

@section('title', $page->title)


@section('content')

    <!-- ********** Hero Area Start ********** -->
    <div class="hero-area height-400 bg-img background-overlay" style="background-image: url('{{ $page->image }}');"></div>

    <section class="contact-area section-padding-100">
        <div class="container">
            <div class="row justify-content-center">
                <!-- Contact Form Area -->
                <div class="col-12 col-md-10 col-lg-8">
                    <div class="contact-form">
                        {{-- <h5>Get in Touch</h5> --}}

                        <p>
                            {!! $page->content !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
