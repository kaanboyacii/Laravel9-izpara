@extends('layouts.frontbase')

@section('title', 'İzPara')

@section('content')

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-6">
                <div class="breadcumb-text">
                    <h2>Crypto News</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcumb Thumb Area -->
    <div class="breadcumb-thumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-thumb">
                        <img src="{{asset('assets')}}/img/bg-img/breadcumb.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### Blog Area Start ##### -->
<div class="blog-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="cryptos-blog-posts">
                    <div class="row">

                        <!-- Single Blog Area -->
                        <div class="col-12">
                            <div class="single-blog-area blog-style-2 mb-100">
                                <!-- Thumbnail -->
                                <div class="blog-thumbnail">
                                    <img src="{{asset('assets')}}/img/blog-img/blog1.jpg" alt="">
                                </div>
                                <!-- Content -->
                                <div class="blog-content">
                                    <a href="#" class="post-title">This Platform Aims to Disrupt the Market</a>
                                    <div class="meta-data">
                                        <a href="#">Crypto News</a> |
                                        <a href="#">March 18, 2018</a>
                                    </div>
                                    <p>Morbi vel arcu gravida, iaculis lacus vel, posuere ipsum. Sed faucibus mauris vitae urna consectetur, sit amet maximus nisl sagittis.</p>
                                    <a href="#" class="btn cryptos-btn mt-50">Read More</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="blog-section-heading">
                                <h3>Today’s News</h3>
                            </div>
                        </div>

                        <div class="col-12">

                            <!-- Single Blog Area -->
                            <div class="single-blog-area d-flex align-items-start">
                                <!-- Thumbnail -->
                                <div class="blog-thumbnail">
                                    <img src="{{asset('assets')}}/img/blog-img/1.jpg" alt="">
                                </div>
                                <!-- Content -->
                                <div class="blog-content">
                                    <a href="#" class="post-title">This Platform Aims to Disrupt the Market</a>
                                    <div class="meta-data">
                                        <a href="#">Crypto News</a> |
                                        <a href="#">March 18, 2018</a>
                                    </div>
                                    <p>Morbi vel arcu gravida, iaculis lacus vel, posuere ipsum. Sed faucibus mauris vitae urna consectetur, sit amet maximus nisl sagittis.</p>
                                </div>
                            </div>

                            <!-- Single Blog Area -->
                            <div class="single-blog-area d-flex align-items-start">
                                <!-- Thumbnail -->
                                <div class="blog-thumbnail">
                                    <img src="{{asset('assets')}}/img/blog-img/2.jpg" alt="">
                                </div>
                                <!-- Content -->
                                <div class="blog-content">
                                    <a href="#" class="post-title">New Hedge Funds invests in Crypto</a>
                                    <div class="meta-data">
                                        <a href="#">Crypto News</a> |
                                        <a href="#">March 18, 2018</a>
                                    </div>
                                    <p>Iaculis lacus vel, posuere ipsum. Sed faucibus mauris vitae urna consectetur, sit amet maximus nisl sagittis. Ut in iaculis enim.</p>
                                </div>
                            </div>

                            <!-- Single Blog Area -->
                            <div class="single-blog-area d-flex align-items-start">
                                <!-- Thumbnail -->
                                <div class="blog-thumbnail">
                                    <img src="{{asset('assets')}}/img/blog-img/3.jpg" alt="">
                                </div>
                                <!-- Content -->
                                <div class="blog-content">
                                    <a href="#" class="post-title">This Platform Aims to Disrupt the Market</a>
                                    <div class="meta-data">
                                        <a href="#">Crypto News</a> |
                                        <a href="#">March 18, 2018</a>
                                    </div>
                                    <p>Morbi vel arcu gravida, iaculis lacus vel, posuere ipsum. Sed faucibus mauris vitae urna consectetur, sit amet maximus nisl sagittis.</p>
                                </div>
                            </div>

                            <!-- Single Blog Area -->
                            <div class="single-blog-area d-flex align-items-start">
                                <!-- Thumbnail -->
                                <div class="blog-thumbnail">
                                    <img src="{{asset('assets')}}/img/blog-img/4.jpg" alt="">
                                </div>
                                <!-- Content -->
                                <div class="blog-content">
                                    <a href="#" class="post-title">This Platform Aims to Disrupt the Market</a>
                                    <div class="meta-data">
                                        <a href="#">Crypto News</a> |
                                        <a href="#">March 18, 2018</a>
                                    </div>
                                    <p>Morbi vel arcu gravida, iaculis lacus vel, posuere ipsum. Sed faucibus mauris vitae urna consectetur, sit amet maximus nisl sagittis.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="cryptos-blog-sidebar-area">

                    <!-- Section Heading -->
                    <div class="blog-section-heading mb-50">
                        <h3>Recent News</h3>
                    </div>

                    <div class="single-blog-area blog-style-2 mb-50">
                        <!-- Thumbnail -->
                        <div class="blog-thumbnail">
                            <img src="{{asset('assets')}}/img/blog-img/blog3.jpg" alt="">
                        </div>
                        <!-- Content -->
                        <div class="blog-content">
                            <a href="#" class="post-title">This Platform Aims to Disrupt the Market</a>
                            <div class="meta-data">
                                <a href="#">Crypto News</a> |
                                <a href="#">March 18, 2018</a>
                            </div>
                            <p>Morbi vel arcu gravida, iaculis lacus vel, posuere ipsum. Sed faucibus mauris vitae urna consectetur, sit amet maximus nisl sagittis.</p>
                        </div>
                    </div>

                    <div class="single-blog-area blog-style-2 mb-100">
                        <!-- Thumbnail -->
                        <div class="blog-thumbnail">
                            <img src="{{asset('assets')}}/img/blog-img/blog4.jpg" alt="">
                        </div>
                        <!-- Content -->
                        <div class="blog-content">
                            <a href="#" class="post-title">This Platform Aims to Disrupt the Market</a>
                            <div class="meta-data">
                                <a href="#">Crypto News</a> |
                                <a href="#">March 18, 2018</a>
                            </div>
                            <p>Morbi vel arcu gravida, iaculis lacus vel, posuere ipsum. Sed faucibus mauris vitae urna consectetur, sit amet maximus nisl sagittis.</p>
                        </div>
                    </div>

                    <!-- Section Heading -->
                    <div class="blog-section-heading mb-50">
                        <h3>Trending Posts</h3>
                    </div>

                    <!-- Single Blog Area -->
                    <div class="single-blog-area blog-style-3 d-flex align-items-center mb-15">
                        <!-- Thumbnail -->
                        <div class="blog-thumbnail">
                            <img src="{{asset('assets')}}/img/blog-img/5.jpg" alt="">
                        </div>
                        <!-- Content -->
                        <div class="blog-content">
                            <a href="#" class="post-title">FunFacts about Bitcoin</a>
                            <div class="meta-data">
                                <a href="#">March 18, 2018</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Area -->
                    <div class="single-blog-area blog-style-3 d-flex align-items-center mb-15">
                        <!-- Thumbnail -->
                        <div class="blog-thumbnail">
                            <img src="{{asset('assets')}}/img/blog-img/6.jpg" alt="">
                        </div>
                        <!-- Content -->
                        <div class="blog-content">
                            <a href="#" class="post-title">BLockchain tips</a>
                            <div class="meta-data">
                                <a href="#">March 18, 2018</a>
                            </div>
                        </div>
                    </div>

                    <!-- Single Blog Area -->
                    <div class="single-blog-area blog-style-3 d-flex align-items-center mb-15">
                        <!-- Thumbnail -->
                        <div class="blog-thumbnail">
                            <img src="{{asset('assets')}}/img/blog-img/7.jpg" alt="">
                        </div>
                        <!-- Content -->
                        <div class="blog-content">
                            <a href="#" class="post-title">March Price Analisys</a>
                            <div class="meta-data">
                                <a href="#">March 18, 2018</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    @endsection('content')