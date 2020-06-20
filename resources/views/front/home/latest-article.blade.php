<div class="title">
    <h5>Latest Articles</h5>
</div>

@foreach ($articles as $article)
    <!-- Single Blog Post -->

    @include('front.templates.post-widget', [
        'article' => $article
    ])
    {{-- @if (! $loops->last)
        <hr>
    @endif --}}
@endforeach

{{-- <!-- Single Blog Post -->
<div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
    <!-- Post Thumbnail -->
    <div class="post-thumbnail">
        <img src="img/blog-img/b18.jpg" alt="">
    </div>
    <!-- Post Content -->
    <div class="post-content">
        <a href="#" class="headline">
            <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
        </a>
        <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
        <!-- Post Meta -->
        <div class="post-meta">
            <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
        </div>
    </div>
</div>

<!-- Single Blog Post -->
<div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.3s">
    <!-- Post Thumbnail -->
    <div class="post-thumbnail">
        <img src="img/blog-img/b19.jpg" alt="">
    </div>
    <!-- Post Content -->
    <div class="post-content">
        <a href="#" class="headline">
            <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
        </a>
        <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
        <!-- Post Meta -->
        <div class="post-meta">
            <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
        </div>
    </div>
</div>

<!-- Single Blog Post -->
<div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.4s">
    <!-- Post Thumbnail -->
    <div class="post-thumbnail">
        <img src="img/blog-img/b20.jpg" alt="">
    </div>
    <!-- Post Content -->
    <div class="post-content">
        <a href="#" class="headline">
            <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
        </a>
        <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
        <!-- Post Meta -->
        <div class="post-meta">
            <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
        </div>
    </div>
</div>

<!-- Single Blog Post -->
<div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.5s">
    <!-- Post Thumbnail -->
    <div class="post-thumbnail">
        <img src="img/blog-img/b21.jpg" alt="">
    </div>
    <!-- Post Content -->
    <div class="post-content">
        <a href="#" class="headline">
            <h5>How Did van Gogh’s Turbulent Mind Depict One of the Most Complex Concepts in Physics?</h5>
        </a>
        <p>Pick the yellow peach that looks like a sunset with its red, orange, and pink coat skin, peel it off with your teeth. Sink them into unripened...</p>
        <!-- Post Meta -->
        <div class="post-meta">
            <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">Sep 29, 2017 at 9:48 am</a></p>
        </div>
    </div>
</div> --}}
