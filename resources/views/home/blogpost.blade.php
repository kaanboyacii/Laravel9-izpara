@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))


@section('content')
<section class="cryptos-video-area section-padding-25">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <a href="{{route('blog')}}" class="btn cryptos-btn m-2">Forum'a Dön</a>
                <hr>
                <div class="about-content mb-100">
                    <div class="section-heading">
                        <h3>{{$data->title}}</h3>
                        <h5>{{$data->subject}} | {{$data->created_at->format('m/d/Y')}} | {{$data->user->name}}</h5>
                        <p>{{$data->content}}</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="video-area mb-100">
                    <img src="img/bg-img/bg-4.jpg" alt="">
                    <div class="video-btn">
                        <img src="{{ Storage::url($data->image)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <h1>Yorumlar</h1>
                <hr>
                @foreach($blogpostcomment as $rs)
                <div class="about-content mb-100">
                    <div class="section-heading">
                        <h4>{{$rs->title}}</h4>
                        <h5>{{$rs->user->name}} | {{$rs->created_at->format('m/d/Y')}}</h5>
                        <p>{{$rs->comment}} </p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="col-12 col-md-6">
                <div class="contact-form-area mb-100">
                    <h2>Cevap Ekle</h2>
                    @include('home.messages')
                    <form action="{{route('storeblogpostcomment')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-control" name="blogpost_id" value="{{$data->id}}">
                        <input type="text" class="form-control" name="title" placeholder="Başlık" required>
                        <textarea name="comment" class="form-control" id="comment" cols="30" rows="10" placeholder="Cevabınız" required></textarea>
                        <button class="btn cryptos-btn btn-2 mt-30" type="submit">Gönder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection('content')