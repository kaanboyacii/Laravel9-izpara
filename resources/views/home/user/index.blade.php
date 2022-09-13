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
                    <h2>Hesabım</h2>
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
                        <img src="{{asset('assets')}}/img/bg-img/user.png" style="height: 200px;width: 200px;" alt="Kullanıcı Fotograf">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ####

<!-- ##### Blog Area Start ##### -->
<div class="blog-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-12">
                <div class="cryptos-tabs-content">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        @include('home.user.usermenu')
                    </ul>
                    <div class="tab-content mb-100" id="myTabContent">
                        <div class="tab-pane fade" id="tab1" role="tabpanel" aria-labelledby="tab--1">
                            <div class="cryptos-tab-content">
                                <!-- Tab Text -->
                                <div class="cryptos-tab-text">
                                    <a href="{{route('dashboard')}}" class="btn cryptos-btn btn-2 m-2">Dashboard</a>
                                    @include('profile.show')
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade active show" id="tab2" role="tabpanel" aria-labelledby="tab--2">
                            <div class="cryptos-tab-content">
                                <!-- Tab Text -->
                                <div class="cryptos-tab-text">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th scope="row">E-posta Adresi</th>
                                                <td>{{Auth::user()->email}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">İsim</th>
                                                <td>{{Auth::user()->name}}</td>
                                            </tr>
                                            <tr>
                                                <th scope="row">Cüzdan</th>
                                                <td>$ {{Auth::user()->balance}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a href="{{route('userpanel.balance')}}" class="btn cryptos-btn btn-2 m-2">Cüzdana Bakiye Yükle</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                            <div class="cryptos-tab-content">
                                <!-- Tab Text -->
                                <div class="cryptos-tab-text">
                                    <div class="col-12 col-lg-6">
                                        <div class="cryptos-blog-posts">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="blog-section-heading">
                                                        <h3>Forum Gönderilerim</h3>
                                                    </div>
                                                </div>
                                                @foreach ($blogposts as $rs)
                                                <div class="col-12" style="padding-bottom: 40px;">
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
                                                                <a href="#">{{$rs->content}}</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div class="cryptos-blog-sidebar-area">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="blog-section-heading">
                                                        <h3>Forum Yorumlarım</h3>
                                                    </div>
                                                </div>
                                                @foreach ($blogpostcomments as $rs)
                                                <div class="col-12" style="padding-bottom: 40px;">
                                                    <!-- Single Blog Area -->
                                                    <div class="single-blog-area d-flex align-items-start">
                                                        <!-- Content -->
                                                        <div class="blog-content">
                                                            <a href="{{route('blogpost',['id'=>$rs->blogpost_id])}}" class="post-title">{{$rs->title}}</a>
                                                            <div class="meta-data">
                                                                <a href="#">{{$rs->comment}}</a> | <br>
                                                                <a href="#">{{$rs->status}}</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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