@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))

@section('content')
<div class="breadcumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-12">
                <div class="breadcumb-text text-center">
                    <h2>404 Sayfa Bulunamadı</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection