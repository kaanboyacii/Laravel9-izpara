@extends('layouts.frontbase')

@section('title', 'İzPara')

@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-6">
                <div class="breadcumb-text">
                    <h2>Hakkımızda</h2>
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

<!-- ##### About Area Start ##### -->
<section class="cryptos-about-area section-padding-100-0">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-12 col-md-6">
                <div class="about-thumbnail mb-100">
                    <img src="{{asset('assets')}}/img/bg-img/about.png" alt="">
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="about-content mb-100">
                    <div class="section-heading">
                        {!! $setting->aboutus !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### About Area End ##### -->

<div class="cryptos-guide-line section-padding-100 bg-img bg-overlay" style="background-image: url(img/bg-img/bg-3.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading white  text-center mx-auto" style="text-align: center;">
                    <h3 class="mb-4">Referanslarımız</h3>
                    {!! $setting->references !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection('content')