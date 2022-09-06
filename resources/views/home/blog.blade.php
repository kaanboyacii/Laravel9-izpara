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
<section class="cryptos-blog-area section-padding-100">
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
                            @foreach($trendblogpost as $rs)
                            <!-- Single Blog Area -->
                            <div class="single-blog-area d-flex align-items-start">
                                <!-- Thumbnail -->
                                <div class="blog-thumbnail">
                                    <img src="{{Storage::url($rs->image)}}" alt="">
                                </div>
                                <!-- Content -->
                                <div class="blog-content">
                                    <a href="{{route('blogpost',['id'=>$rs->id])}}" class="post-title">{{$rs->title}}</a>
                                    <div class="meta-data">
                                        <a href="#">{{$rs->subject}}</a> |
                                        <a href="#"> {{$rs->created_at->format('m/d/Y')}}</a> |
                                        <a href="#"> {{$rs->user->name}}</a>
                                    </div>
                                    <p>{{ substr($rs->content, 0,  200) }}...</p>
                                </div>
                            </div>
                            @endforeach
                            {{-- Pagination --}}
                            <div class="d-flex justify-content-center">
                                {!! $trendblogpost->links() !!}
                            </div>
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
                    <!-- BAŞLA: TRT Haber Sitene Ekle -->
                    <div style="font: normal 11px Arial; width: 338px; border: solid 1px #ccc; background: #fff; border-radius: 3px; box-shadow: 1px 1px 3px #ccc;">
                        <iframe src="https://www.trthaber.com/sitene-ekle/ekonomi-7/?haberSay=10&renk=a&baslik=1&resimler=1" width="338" height="412" frameborder="0"></iframe>
                        <div style="text-align: center;line-height: 23px;border-top: solid 1px #ccc; color: #666; margin-top: 5px;box-shadow: 0 -1px 3px #ccc;">
                            <a style="text-decoration: none;color: #666; font: normal 11px Arial;" href="https://www.trthaber.com/">Son Dakika Haberleri</a> &nbsp;|&nbsp; <a style="text-decoration: none;color: #666; font: normal 11px Arial;" href="https://www.trthaber.com/haber/ekonomi/">Ekonomi Haberleri</a>
                        </div>
                    </div>
                    <!-- BİTİŞ: TRT Haber Sitene Ekle -->
                    <br><br>
                    <!-- Section Heading -->
                    <div class="blog-section-heading mb-50">
                        <h3>Trend Gönderiler</h3>
                    </div>
                    @foreach($popularblogpost as $rs)
                    <!-- Single Blog Area -->
                    <div class="single-blog-area blog-style-3 d-flex align-items-center mb-15">
                        <!-- Thumbnail -->
                        <div class="blog-thumbnail">
                            <img src="{{Storage::url($rs->image)}}" alt="">
                        </div>
                        <!-- Content -->
                        <div class="blog-content">
                            <a href="{{route('blogpost',['id'=>$rs->id])}}" class="post-title">{{$rs->title}}</a>
                            <div class="meta-data">
                                <a href="#">{{$rs->created_at->format('m/d/Y')}}</a> <br>
                                <a href="#"> {{$rs->user->name}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
</section>
@endsection('content')