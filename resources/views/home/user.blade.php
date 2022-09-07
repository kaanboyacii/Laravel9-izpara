@extends('layouts.frontbase')

@section('title', 'İzPara')

@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-6">
                <div class="breadcumb-text">
                    <h2>{{$data->name}}</h2>
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
<!-- ##### Breadcumb Area End ##### -->

<!-- ##### About Area Start ##### -->
<section class="cryptos-about-area section-padding-100-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="about-content mb-100">
                    <div class="section-heading">
                        <h2>Hesap Bilgileri</h2>
                        <hr>
                        <table class="table" style="padding-top: 200px;">
                            <tbody>
                                <tr>
                                    <th scope="row">E-posta Adresi</th>
                                    <td>{{$data->email}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">İsim</th>
                                    <td>{{$data->name}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Cüzdan</th>
                                    <td>$ {{$data->balance}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Üye Olduğu Tarih</th>
                                    <td>{{$data->created_at->format('m/d/Y')}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Forumda Açtığı Konu Sayısı</th>
                                    <td>{{ count($data->blogpost) }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="about-content mb-100">
                    <div class="section-heading">
                        <h2>Forum Gönderileri</h2>
                        <hr>
                        @foreach($blogposts as $rs)
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
                                    <a href="{{route('user',['id'=>$rs->id])}}"> {{$rs->user->name}}</a>
                                </div>
                                <p>{{ substr($rs->content, 0,  50) }}...</p>
                            </div>
                        </div>
                        <hr>
                        @endforeach
                        {{-- Pagination --}}
                        <div class="d-flex justify-content-center">
                            {!! $blogposts->links() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### About Area End ##### -->

@endsection('content')