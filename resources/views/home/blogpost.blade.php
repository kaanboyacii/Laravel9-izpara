@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))


@section('content')
<section class="cryptos-video-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
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
        </div>
    </section>
@endsection('content')