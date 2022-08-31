@extends('layouts.frontbase')

@section('title', 'İzPara')

@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-6">
                <div class="breadcumb-text">
                    <h2>İletişim</h2>
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

<div class="contact-map-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center mx-auto">
                    <h3>Bize <span>Ulaşın</span></h3>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ##### Contact Area Start ##### -->
<section class="contact-area section-padding-100-0">
    <div class="container">
        <div class="row">

            <!-- Contact Information -->
            <div class="col-12 col-lg-6">
                <div class="contact-information mb-100">

                    <!-- Contact Logo -->
                    <div class="contact-logo mb-50">
                        <a href="#"><img src="{{asset('assets')}}/img/core-img/logo.png" alt=""></a>
                    </div>

                    <!-- Contact Social Info -->
                    <div class="contact-social-info d-flex mt-50 mb-50">
                        <a href="{{$setting->instagram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="{{$setting->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="{{$setting->twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="{{$setting->youtube}}"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                    </div>

                    <!-- Single Contact Info -->
                    <div class="single-contact-info d-flex">
                        <div class="contact-icon mr-15">
                            <i class="fa fa-map"></i>
                        </div>
                        <p>{{$setting->adress}}</p>
                    </div>

                    <!-- Single Contact Info -->
                    <div class="single-contact-info d-flex">
                        <div class="contact-icon mr-15">
                            <i class="fa fa-phone"></i>
                        </div>
                        <p>{{$setting->phone}}</p>
                    </div>

                    <!-- Single Contact Info -->
                    <div class="single-contact-info d-flex">
                        <div class="contact-icon mr-15">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <p>{{$setting->email}}</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form Area -->
            <div class="col-12 col-lg-6">
                <div class="contact-form-area mb-100">
                    <form action="{{route('storemessage')}}" method="POST">
                        @csrf
                        <input type="text" class="form-control" id="name" name="name" placeholder="İsminiz">
                        <input type="email" class="form-control" id="email" name="email" placeholder="E-posta">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Telefon">
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Konu">
                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Mesajınız"></textarea>
                        <button class="btn cryptos-btn btn-2 mt-30" type="submit">Gönder</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->
@endsection('content')