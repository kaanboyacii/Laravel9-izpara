@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))


@section('content')

<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-6">
                <div class="breadcumb-text">
                    <h2>Forum & Haber</h2>
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
        @include('home.messages')
        <a href="{{ route('createblogpost')}}" style="margin-bottom: 40px;" class="btn cryptos-btn btn-lg btn-block">Yeni Konu Ekle</a>
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="cryptos-blog-posts">
                    <div class="row">
                        <div class="col-12">
                            <div class="blog-section-heading">
                                <h3>Son Eklenen Konular</h3>
                            </div>
                        </div>

                        <div class="col-12">
                            @foreach($lastestblogpost as $rs)
                            <!-- Single Blog Area -->
                            <div class="single-blog-area d-flex align-items-start">
                                <!-- Thumbnail -->
                                <div class="blog-thumbnail">
                                    <img src="{{Storage::url($rs->image)}}"alt="">
                                </div>
                                <!-- Content -->
                                <div class="blog-content">
                                    <a href="#" class="post-title">{{$rs->title}}</a>
                                    <div class="meta-data">
                                        <a href="#">{{$rs->subject}}</a> |
                                        <a href="#"> {{$rs->created_at->format('m/d/Y')}}</a>
                                        
                                    </div>
                                    <p>{{$rs->content}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div class="cryptos-blog-sidebar-area">

                    <!-- Section Heading -->
                    <div class="blog-section-heading mb-50">
                        <h3>Son Haberler</h3>
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