


    <div class="single-blog-post post-style-4 d-flex align-items-center wow fadeInUpBig" data-wow-delay="0.2s">
        <!-- Post Thumbnail -->
        <div class="post-thumbnail">
            <img src="{{ $article->image }}" alt="">
        </div>
        <!-- Post Content -->
        <div class="post-content">
            <a href="{{ route('front.article', [$article->getCategory->slug, $article->slug]) }}" class="headline">
                <h5>{{ $article->title }}</h5>
            </a>
            <p>{{ str_limit($article->content, 50, ' Devamına Bak...') }}</p>
            <!-- Post Meta -->
            <div class="post-meta">
                <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">{{ $article->created_at->diffForHumans() }}</a>
                <span class="float-right"> Kategori: <a href="#" class="post-date">{{ $article->getCategory->name }}</a> </span>
             </p>

            </div>
        </div>
    </div>
