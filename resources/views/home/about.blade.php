@extends('layouts.frontbase')

@section('title', 'İzPara')

@section('content')
    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12 col-md-6">
                    <div class="breadcumb-text">
                        <h2>Crypto Guide</h2>
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
                            <h3>Let’s change <br><span>the world</span> together</h3>
                            <h5>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget nisl.</h5>
                            <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget nisl. Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi.</p>
                            <a href="#" class="btn cryptos-btn mt-30">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ##### -->

    <div class="cryptos-guide-line section-padding-100 bg-img bg-overlay" style="background-image: url({{asset('assets')}}/img/bg-img/bg-3.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="section-heading white">
                        <h3 class="mb-4">Simple guide to buy <span>Cryptocurrencies</span></h3>
                        <h5 class="mb-2">Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget nisl.</h5>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="guideline-content">
                        <!-- Single Step -->
                        <div class="single-step d-flex">
                            <div class="quantity">01</div>
                            <div class="step-content">
                                <h6>Create Account</h6>
                                <p>Morbi vel arcu gravida, iaculis lacus vel, posuere ipsum. Sed faucibus mauris urna consectetur, sit amet maximus nisl.</p>
                            </div>
                        </div>
                        <!-- Single Step -->
                        <div class="single-step d-flex">
                            <div class="quantity">02</div>
                            <div class="step-content">
                                <h6>Deposit Fiat Money</h6>
                                <p>Vonsectetur, sit amet maximus nisl sagittis. Ut in iaculis enim, et pulvinar mauris. Etiam tristique magna eget velit consectetur.</p>
                            </div>
                        </div>
                        <!-- Single Step -->
                        <div class="single-step d-flex">
                            <div class="quantity">03</div>
                            <div class="step-content">
                                <h6>Buy Cryptocurrencies</h6>
                                <p>Vonsectetur, sit amet maximus nisl sagittis. Ut in iaculis enim, et pulvinar mauris. Etiam tristique magna eget velit consectetur.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="guideline-thumb">
                        <img src="{{asset('assets')}}/img/bg-img/device.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### About Area Start ##### -->
    <section class="cryptos-video-area section-padding-100-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="about-content mb-100">
                        <div class="section-heading">
                            <h3>The begginer’s guide to <span>Crypto</span></h3>
                            <h5>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget nisl.</h5>
                            <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget nisl. Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi.</p>
                            <a href="#" class="btn cryptos-btn mt-30">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="video-area mb-100">
                        <img src="img/bg-img/bg-4.jpg" alt="">
                        <div class="video-btn">
                            <a href="https://www.youtube.com/watch?v=f5BBJ4ySgpo" class="videobtn"><img src="{{asset('assets')}}/img/bg-img/video-btn.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### About Area End ##### -->
@endsection('content')