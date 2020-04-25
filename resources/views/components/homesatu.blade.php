<section class="section first-section">
    <div class="container-fluid">
        <div class="masonry-blog clearfix">
            @foreach($slides as $slide)
            @endforeach
            <div class="left-side">
                <div class="masonry-box post-media">
                    <!-- <img src="assets/upload/blog_masonry_01.jpg" alt="" class="img-fluid"> -->
                    <img src="assets/img/{{ $slides[0]->foto }}" alt="" class="img-fluid" style="height:384px;">
                    <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-aqua"><a href="blog-category-01.html" title="">{{ $slides[0]->kategori }}</a></span>
                                <h4><a href="{{ $slides[0]->path }}" title="">{{ $slides[0]->judul }}</a></h4>
                                <small><a href="single.html" title="">{{ $slides[0]->created_at }}</a></small>
                                <small><a href="blog-author.html" title="">by Amanda</a></small>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->
            </div><!-- end left-side -->

            <div class="center-side">
                <div class="masonry-box post-media">
                    <img src="assets/img/{{ $slides[1]->foto }}" alt="" class="img-fluid" style="height:214px;">
                    <!-- <img src="assets/upload/blog_masonry_02.jpg" alt="" class="img-fluid"> -->
                    <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-green"><a href="blog-category-01.html" title="">{{ $slides[1]->kategori }}</a></span>
                                <h4><a href="{{ $slides[1]->path }}" title="">{{ $slides[1]->judul }}</a></h4>
                                <small><a href="single.html" title="">{{ $slides[1]->created_at }}</a></small>
                                <small><a href="blog-author.html" title="">by Amanda</a></small>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->

                <div class="masonry-box small-box post-media">
                    <img src="assets/img/{{ $slides[2]->foto }}" alt="" class="img-fluid">
                    <!-- <img src=" assets/upload/blog_masonry_03.jpg" alt="" class="img-fluid"> -->
                    <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-green"><a href="{{ $slides[2]->kategori }}" title="">{{ $slides[2]->kategori }}</a></span>
                                <h4><a href="{{ $slides[2]->path }}" title="">{{ $slides[2]->judul }}</a></h4>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->

                <div class="masonry-box small-box post-media">
                    <img src="assets/img/{{ $slides[1]->foto }}" alt="" class="img-fluid">
                    <!-- <img src="assets/upload/blog_masonry_04.jpg" alt="" class="img-fluid"> -->
                    <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-green"><a href="{{ $slides[3]->kategori }}" title="">{{ $slides[3]->kategori }}</a></span>
                                <h4><a href="{{ $slides[3]->judul }}" title="">{{ $slides[3]->judul }}</a></h4>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->
            </div><!-- end left-side -->

            <div class="right-side hidden-md-down">
                <div class="masonry-box post-media">
                    <img src="assets/img/{{ $slides[4]->foto }}" alt="" class="img-fluid" style="height:384px;">
                    <!-- <img src="assets/upload/blog_masonry_05.jpg" alt="" class="img-fluid"> -->
                    <div class="shadoweffect">
                        <div class="shadow-desc">
                            <div class="blog-meta">
                                <span class="bg-aqua"><a href="{{ $slides[4]->kategori }}" title="">{{ $slides[4]->kategori }}</a></span>
                                <h4><a href="{{ $slides[4]->path }}" title="">{{ $slides[4]->judul }}</a></h4>
                                <small><a href="single.html" title="">{{ $slides[4]->created_at }}</a></small>
                                <small><a href="blog-author.html" title="">by Jessica</a></small>
                            </div><!-- end meta -->
                        </div><!-- end shadow-desc -->
                    </div><!-- end shadow -->
                </div><!-- end post-media -->
            </div><!-- end right-side -->
        </div><!-- end masonry -->
    </div>
</section>