@extends('layouts.frontbase')

@section('title', $setting->title)
@section('description', $setting->description)
@section('keywords', $setting->keywords)
@section('icon', Storage::url($setting->icon))


@section('content')

<section class="contact-area section-padding-100-0">
    <div class="container">
        <div class="row">

            <!-- Contact Information -->
            <div class="col-12 col-lg-4">
                <div class="contact-form-area mb-100">
                    <form action="{{route('userpanel.storebalance')}}" method="POST">
                        @csrf
                        <h2>Bakiye Yükle</h2>
                        <hr>
                        <input type="number" class="form-control" name="amount" id="amount" placeholder="Yüklenecek Miktar" required>
                        <button class="btn cryptos-btn btn-2 mt-2" type="submit">Yükle</button>
                    </form>
                </div>
            </div>

            <!-- Contact Form Area -->
            <div class="col-12 col-lg-8">
                <div class="contact-form-area mb-100">
                    <form action="{{route('userpanel.storecard')}}" method="POST">
                        @csrf
                        <h2>Kredi Kartı</h2>
                        <hr>
                        <input type="text" class="form-control" name="amount" name="cardNo" placeholder="Kart Numarası" required>
                        <input type="text" class="form-control" name="amount" name="cardExpiringMonth" placeholder="Kart Üzerindeki Ad Soyad" required>
                        <input type="text" class="form-control" name="amount" name="cardExpiringYear" placeholder="Son Kullanma Tarihi" required>
                        <input type="text" class="form-control" name="amount" name="cardCVV" placeholder="CVC" required>
                        <button class="btn cryptos-btn btn-2 mt-2" type="submit">Kaydet</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection('content')