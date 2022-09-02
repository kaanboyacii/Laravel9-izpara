@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))


@section('content')

<div class="contact-form-area mb-100">
    <div class="container">
        <form action="{{route('storeblogpost')}}" method="POST" enctype="multipart/form-data" >
            @csrf
            <h2>Yeni Konu Ekle</h2>
            <input type="text" class="form-control" name="title" placeholder="Başlık" required>
            <input type="text" class="form-control" name="subject" placeholder="Konu" required>
            <textarea name="content" class="form-control" id="content" cols="30" rows="10" placeholder="İçerik" required></textarea>
            <input class="form-control" type="file" id="formFile" name="image">
            <button class="btn cryptos-btn btn-2 mt-30" type="submit">Gönder</button>
        </form>
        @include('home.messages')
    </div>
</div>
@endsection('content')