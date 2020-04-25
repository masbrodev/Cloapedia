<div class="row">
             <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h3 class="color-aqua"><a href="/Gaya Hidup" title="">Gaya Hidup</a></h3>
                </div><!-- end title -->

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    @foreach($slides as $slide)
                    @if($loop->index < 2 AND $slide->kategori = 'Gaya Hidup') 
                        <div class="blog-box">
                            <div class="post-media">
                                <a href="single.html" title="">
                                    <img src="assets/img/{{$slide->foto}}" alt="" class="img-fluid">
                                    <div class="hovereffect">
                                        <span></span>
                                    </div><!-- end hover -->
                                </a>
                            </div><!-- end media -->
                            <div class="blog-meta big-meta">
                                <h4><a href="{{$slide->path}}" title="">{{$slide->judul}}</a></h4>
                                <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                <small><a href="blog-category-01.html" title="">{{$slide->kategori}}</a></small>
                                <small><a href="single.html" title="">{{$slide->created_at}}</a></small>
                                <small><a href="blog-author.html" title="">by Amanda</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->
                         <hr class="invis">
                                @endif 
                                @endforeach
                    </div><!-- end col -->
                </div><!-- end row -->
        </div><!-- end col -->

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <div class="section-title">
                <h3 class="color-pink"><a href="/Fashion" title="">Fashion</a></h3>
            </div><!-- end title -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                @foreach($slides as $slide)
                    @if($slide->kategori = 'Fashion')
                    @endif 
                    @endforeach
                    <div class="blog-box">
                        <div class="post-media">
                            <a href="single.html" title="">
                                <img src="assets/img/{{$slide->foto}}" alt="" class="img-fluid"  style="height:377px">
                                <div class="hovereffect">
                                    <span></span>
                                </div><!-- end hover -->
                            </a>
                        </div><!-- end media -->
                        <div class="blog-meta">
                            <h4><a href="{{$slide->path}}" title="">{{$slide->judul}} uo iuoi uo iu o iu</a></h4>
                            <small><a href="blog-category-01.html" title="">{{$slide->kategori}}</a></small>
                            <small><a href="blog-category-01.html" title="">{{$slide->created_at}}</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="blog-box">
                        <div class="post-media">
                            <a href="single.html" title="">
                                <img src="assets/upload/blog_02.jpg" alt="" class="img-fluid">
                                <div class="hovereffect">
                                    <span></span>
                                </div><!-- end hover -->
                            </a>
                        </div><!-- end media -->
                        <div class="blog-meta">
                            <h4><a href="single.html" title="">Is summer, have you bought a cane</a></h4>
                            <small><a href="blog-category-01.html" title="">Fashion</a></small>
                            <small><a href="blog-category-01.html" title="">11 July, 2017</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->
                </div><!-- end col -->

                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="blog-box">
                        <div class="post-media">
                            <a href="single.html" title="">
                                <img src="assets/upload/blog_03.jpg" alt="" class="img-fluid">
                                <div class="hovereffect">
                                    <span></span>
                                </div><!-- end hover -->
                            </a>
                        </div><!-- end media -->
                        <div class="blog-meta">
                            <h4><a href="single.html" title="">This year's fashionable long beard</a></h4>
                            <small><a href="blog-category-01.html" title="">Fashion</a>, <a href="blog-category-01.html" title="">Man</a></small>
                            <small><a href="blog-category-01.html" title="">08 July, 2017</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    <hr class="invis">

                    <div class="blog-box">
                        <div class="post-media">
                            <a href="single.html" title="">
                                <img src="assets/upload/blog_04.jpg" alt="" class="img-fluid">
                                <div class="hovereffect">
                                    <span></span>
                                </div><!-- end hover -->
                            </a>
                        </div><!-- end media -->
                        <div class="blog-meta">
                            <h4><a href="single.html" title="">How to be more cool with clothing</a></h4>
                            <small><a href="blog-category-01.html" title="">Fashion</a>, <a href="blog-category-01.html" title="">Style</a></small>
                            <small><a href="blog-category-01.html" title="">04 July, 2017</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end col -->
    </div><!-- end row -->