<div class="single-blog-content mb-100">
    <!-- Post Meta -->
    <div class="post-meta">
        <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">{{ $article->created_at->diffForHumans() }}</a> </p>
    </div>
    <!-- Post Content -->
    <div class="post-content">
        <p>
            {!! $article->content !!}
        </p>
        {{-- <h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis fringilla tortor. Phasellus eget purus id felis dignissim convallis. Suspendisse et augue dui. Morbi gravida sed justo vel venenatis. Ut tempor pretium maximus. Donec libero diam, faucibus vitae lectus nec, accumsan gravida dui. Nam interdum mi eget lacus aliquet, sit amet ultricies magna pharetra. In ut odio a ligula egestas pretium et quis sapien. Etiam faucibus magna eu porta vulputate. Aliquam euismod rhoncus malesuada. Nunc rutrum hendrerit semper.</h6>
        <h6>Maecenas vitae sem varius, imperdiet nisi a, tristique nisi. Sed scelerisque suscipit leo cursus accumsan. Donec vel turpis quam. Mauris non nisl nec nunc gravida ullamcorper id vestibulum magna. Donec non velit finibus, laoreet arcu nec, facilisis augue. Aliquam sed purus id erat accumsan congue. Mauris semper ullamcorper nibh non pellentesque. Aenean euismod purus sit amet quam vehicula ornare.</h6>
        <blockquote class="mb-30">
            <h6>Aliquam auctor lacus a dapibus pulvinar. Morbi in elit erat. Quisque et augue nec tortor blandit hendrerit eget sit amet sapien. Curabitur at tincidunt metus, quis porta ex. Duis lacinia metus vel eros cursus pretium eget.</h6>
            <div class="post-author">
                <p>Robert Morgan</p>
            </div>
        </blockquote>
        <h6>Donec orci dolor, pretium in luctus id, consequat vitae nibh. Quisque hendrerit, lorem sit amet mollis malesuada, urna orci volutpat ex, sed scelerisque nunc velit et massa. Sed maximus id erat vel feugiat. Phasellus bibendum nisi non urna bibendum elementum. Aenean tincidunt nibh vitae ex facilisis ultrices. Integer ornare efficitur ultrices. Integer neque lectus, venenatis at pulvinar quis, aliquet id neque. Mauris ultrices consequat velit, sed dignissim elit posuere in. Cras vitae dictum dui.</h6>
        <!-- Post Tags -->
        <ul class="post-tags">
            <li><a href="#">Manual</a></li>
            <li><a href="#">Liberty</a></li>
            <li><a href="#">Recommendations</a></li>
            <li><a href="#">Interpritation</a></li>
        </ul> --}}
        <!-- Post Meta -->
        <div class="post-meta second-part">
            <p><a href="#" class="post-author">Katy Liu</a> on <a href="#" class="post-date">{{ $article->created_at->diffForHumans() }}</a> </p>
            <span class="text-primary post-author">Okunma Sayısı : <b> {{ $article->hit}} </b></span>
        </div>
    </div>
</div>
