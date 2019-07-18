@extends('layouts.frontend')
@section('content')
    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area owl-carousel">
        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(assets/frontend/img/bg-img/1.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#">{{date('d-m-Y')}}</a>
                                <a href="{{url('archive')}}">lifestyle</a>
                            </div>
                            <a href="{{url('video-post')}}" class="post-title" data-animation="fadeInUp" data-delay="300ms">Party Jokes Startling But Unnecessary</a>
                            <a href="{{url('video-post')}}" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(assets/frontend/img/bg-img/2.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#">{{date('d-m-Y')}}</a>
                                <a href="{{url('archive')}}">lifestyle</a>
                            </div>
                            <a href="{{url('video-post')}}" class="post-title" data-animation="fadeInUp" data-delay="300ms">Party Jokes Startling But Unnecessary</a>
                            <a href="{{url('video-post')}}" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Single Blog Post -->
        <div class="hero-blog-post bg-img bg-overlay" style="background-image: url(assets/frontend/img/bg-img/3.jpg);">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Post Contetnt -->
                        <div class="post-content text-center">
                            <div class="post-meta" data-animation="fadeInUp" data-delay="100ms">
                                <a href="#">{{date('d-m-Y')}}</a>
                                <a href="{{url('archive')}}">lifestyle</a>
                            </div>
                            <a href="{{url('video-post')}}" class="post-title" data-animation="fadeInUp" data-delay="300ms">Party Jokes Startling But Unnecessary</a>
                            <a href="{{url('video-post')}}" class="video-play" data-animation="bounceIn" data-delay="500ms"><i class="fa fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Mag Posts Area Start ##### -->
    <section class="mag-posts-area d-flex flex-wrap">
        <div class="container">
            <div class="row justify-content-center">
                    <!-- >>>>>>>>>>>>>>>>>>>>
                    Post Left Sidebar Area
                    <<<<<<<<<<<<<<<<<<<<< -->
                    <div class="post-sidebar-area left-sidebar mt-30 mb-30 box-shadow " >
                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30">
                            <!-- Social Followers Info -->
                            <div class="social-followers-info">
                                <!-- Facebook -->
                                <a href="#" class="facebook-fans"><i class="fa fa-facebook"></i> 4,360 <span>Fans</span></a>
                                <!-- Twitter -->
                                <a href="#" class="twitter-followers"><i class="fa fa-twitter"></i> 3,280 <span>Followers</span></a>
                                <!-- YouTube -->
                                <a href="#" class="youtube-subscribers"><i class="fa fa-youtube"></i> 1250 <span>Subscribers</span></a>
                                <!-- Google -->
                                <a href="#" class="google-followers"><i class="fa fa-google-plus"></i> 4,230 <span>Followers</span></a>
                            </div>
                        </div>

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30 kategorian">
                            <!-- Section Title -->
                            <div class="section-heading">
                                <h5>Categories</h5>
                            </div>

                            <!-- Catagory Widget -->

                        </div>

                        <!-- Sidebar Widget -->


                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30 berita-berita">
                            <!-- Section Title -->
                            <div class="section-heading">
                                <h5>Most Popular</h5>
                            </div>

                            {{-- Konten --}}

                        </div>

                        <!-- Sidebar Widget -->
                        <div class="single-sidebar-widget p-30 tambah-tag">
                            <!-- Section Title -->
                            <div class="section-heading">
                                <h5>Artikel Tags</h5>
                            </div>

                            {{-- Tag Content --}}

                        </div>
                    </div>

                    <!-- >>>>>>>>>>>>>>>>>>>>
                        Main Posts Area
                    <<<<<<<<<<<<<<<<<<<<< -->
                 <div class="col-12 col-xl-8">
                    <div class="  mt-30 mb-30 p-30 box-shadow " style="single-post" >

                                    <!-- Trending Now Posts Area -->
                                    <div class="trending-now-posts mb-30 kabaran-heula">
                                        <!-- Section Title -->
                                        <div class="section-heading">
                                            <h5>TRENDING NOW</h5>
                                        </div>

                                    </div>

                                    <!-- Feature Video Posts Area -->


                                    <!-- Most Viewed Videos -->
                                    {{-- <div class="most-viewed-videos mb-30">
                                        <!-- Section Title -->
                                        <div class="section-heading">
                                            <h5>Most Viewed Videos</h5>
                                        </div>

                                        <div class="most-viewed-videos-slide owl-carousel">

                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post style-4">
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('assets/frontend/img/bg-img/28.jpg')}}" alt="">
                                                    <a href="{{url('video-post')}}" class="video-play"><i class="fa fa-play"></i></a>
                                                    <span class="video-duration">09:27</span>
                                                </div>
                                                <div class="post-content">
                                                    <a href="{{url('single-post')}}" class="post-title">A Guide To Rocky Mountain Vacations</a>
                                                    <div class="post-meta d-flex">
                                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post style-4">
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('assets/frontend/img/bg-img/29.jpg')}}" alt="">
                                                    <a href="{{url('video-post')}}" class="video-play"><i class="fa fa-play"></i></a>
                                                    <span class="video-duration">09:27</span>
                                                </div>
                                                <div class="post-content">
                                                    <a href="{{url('single-post')}}" class="post-title">Dentists Are Smiling Over Painless Veneer Alternative</a>
                                                    <div class="post-meta d-flex">
                                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post style-4">
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('assets/frontend/img/bg-img/30.jpg')}}" alt="">
                                                    <a href="{{url('video-post')}}" class="video-play"><i class="fa fa-play"></i></a>
                                                    <span class="video-duration">09:27</span>
                                                </div>
                                                <div class="post-content">
                                                    <a href="{{url('single-post')}}" class="post-title">Become A Travel Pro In One Easy Lesson</a>
                                                    <div class="post-meta d-flex">
                                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post style-4">
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('assets/frontend/img/bg-img/28.jpg')}}" alt="">
                                                    <a href="{{url('video-post')}}" class="video-play"><i class="fa fa-play"></i></a>
                                                    <span class="video-duration">09:27</span>
                                                </div>
                                                <div class="post-content">
                                                    <a href="{{url('single-post')}}" class="post-title">A Guide To Rocky Mountain Vacations</a>
                                                    <div class="post-meta d-flex">
                                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post style-4">
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('assets/frontend/img/bg-img/29.jpg')}}" alt="">
                                                    <a href="{{url('video-post')}}" class="video-play"><i class="fa fa-play"></i></a>
                                                    <span class="video-duration">09:27</span>
                                                </div>
                                                <div class="post-content">
                                                    <a href="{{url('single-post')}}" class="post-title">Dentists Are Smiling Over Painless Veneer Alternative</a>
                                                    <div class="post-meta d-flex">
                                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Single Blog Post -->
                                            <div class="single-blog-post style-4">
                                                <div class="post-thumbnail">
                                                    <img src="{{ asset('assets/frontend/img/bg-img/30.jpg')}}" alt="">
                                                    <a href="{{url('video-post')}}" class="video-play"><i class="fa fa-play"></i></a>
                                                    <span class="video-duration">09:27</span>
                                                </div>
                                                <div class="post-content">
                                                    <a href="{{url('single-post')}}" class="post-title">Become A Travel Pro In One Easy Lesson</a>
                                                    <div class="post-meta d-flex">
                                                        <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                                        <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                                        <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div> --}}

                                    <!-- Sports Videos -->


                    </div>
                </div>


        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
            <div class="row justify-content-center">
        </div>
    </section>
    <!-- ##### Mag Posts Area End ##### -->
@endsection
@push('script')
{{-- ARTIKEL POPULER --}}
    <script>
        var url = 'api/most'
        $.ajax({
            url : url,
            dataType: ' json ',
            success: function(berhasil) {
                $.each(berhasil.data.artikel, function(key, value) {
                    console.log(berhasil)
                    $(".berita-berita").append(
                        `
                        <div class="single-blog-post d-flex">
                        <div class="post-thumbnail">
                        <img src="assets/img/artikel/${value.foto}" alt="">
                    </div>
                    <div class="post-content">
                        <a href="/blog/${value.slug}" class="post-title">${value.judul}</a>
                        <div class="post-meta d-flex justify-content-between">
                            <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 2569</a>
                            <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 1069</a>
                            <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                        </div>
                    </div>
                    </div>
                        `
                    )
                })
            },
            error: function(gagal){
                console.log(gagal)
            }
        })
    </script>

{{-- ARTIKEL TRENDING --}}
    <script>
        var url = 'api/trending'
        $.ajax({
            url : url,
            dataType: ' json ',
            success: function(berhasil) {
                $.each(berhasil.data.artikel, function(key, value) {
                    console.log(berhasil)
                    $(".kabaran-heula").append(
                        `
                     <div class="single-featured-post">
                        <!-- Thumbnail -->
                        <div class="post-thumbnail mb-50">
                            <img src="assets/img/artikel/${value.foto}" alt="">
                        </div>
                        <!-- Post Contetnt -->
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#">${value.created_at}</a>
                                <a href="#">lifestyle</a>
                            </div>
                            <a href="/blog/${value.slug}" class="post-title">${value.judul}</a>
                            <p >${value.konten}</p>
                        </div>
                        <!-- Post Share Area -->
                        <div class="post-share-area d-flex align-items-center justify-content-between">
                            <!-- Post Meta -->
                            <div class="post-meta pl-3">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>
                            <!-- Share Info -->
                            <div class="share-info">
                                <a href="#" class="sharebtn"><i class="fa fa-share-alt" aria-hidden="true"></i></a>
                                <!-- All Share Buttons -->
                                <div class="all-share-btn d-flex">
                                    <a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#" class="google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                    <a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                        `
                    )
                })
            },
            error: function(gagal){
                console.log(gagal)
            }
        })
    </script>

    {{-- CATEGORY --}}
    <script>
        var url = 'api/kategori'
        $.ajax({
            url : url,
            dataType: ' json ',
            success: function(berhasil) {
                $.each(berhasil.data.kategori, function(key, value) {
                    console.log(berhasil)
                    $(".kategorian").append(
                        `
                        <ul class="catagory-widgets">
                            <li><a href="/blog-kategori/${value.slug}"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> ${value.nama_kategori}</span></a></li>
                        </ul>
                        `
                    )
                })
            },
            error: function(gagal){
                console.log(gagal)
            }
        })
    </script>

    {{-- TAG --}}
    <script>
        var url = 'api/tag'
        $.ajax({
            url : url,
            dataType: ' json ',
            success: function(berhasil) {
                $.each(berhasil.data.tag, function(key, value) {
                    console.log(berhasil)
                    $(".tambah-tag").append(
                        `
                        <ul class="catagory-widgets">
                            <li><a href="/blog-tag/${value.slug}"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i> ${value.nama_tag}</span></a></li>
                        </ul>
                        `
                    )
                })
            },
            error: function(gagal){
                console.log(gagal)
            }
        })
    </script>
@endpush
