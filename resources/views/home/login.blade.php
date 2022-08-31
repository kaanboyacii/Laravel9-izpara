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
            <div class="col-12 col-md-12">
                <div class="breadcumb-text text-center">
                    <h2>ÜYE GİRİŞ</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Breadcumb Area End ##### -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 col-md-7 order-md-1 order-1">
            @include('auth.login')
        </div>
    </div>
</div>

@endsection