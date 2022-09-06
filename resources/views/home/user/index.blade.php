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
</div>
<!-- ##### Breadcumb Area End ##### -->

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
                                    <a href="#" class="btn cryptos-btn btn-2 m-2">Cüzdana Bakiye Yükle</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab--3">
                            <div class="cryptos-tab-content">
                                <!-- Tab Text -->
                                <div class="cryptos-tab-text">
                                    <p>Integer nec bibendum lacus. Praesent malesuada congue, Suspendisse dictum enim sit amet libero malesu ada feugiat. Praesent malesuada congue magna at finibus. In hac habitasse platea dictumst. Curabitur rhoncus auctor eleifend. Praesent malesuada congue.</p>
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