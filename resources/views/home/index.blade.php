@extends('layouts.frontbase')

@section('title', 'İzPara')

@section('content')

    <!-- ##### Course Area Start ##### -->
    <div class="cryptos-feature-area section-padding-100-0">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto">
                        <h3>Let’s change <br><span>the world</span> together</h3>
                        <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget nisl. Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi.</p>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <!-- Single Course Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-feature-area mb-100 text-center">
                        <i class="icon-safebox"></i>
                        <h3>Fast &amp; Easy</h3>
                        <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget nisl. Cras vitae turpis lacinia, lacinia lacus non, fermentum.</p>
                        <a href="#" class="btn cryptos-btn">Read More</a>
                    </div>
                </div>

                <!-- Single Course Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-feature-area active mb-100 text-center">
                        <i class="icon-bitcoin"></i>
                        <h3>No strigs attached</h3>
                        <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget nisl. Cras vitae turpis lacinia, lacinia lacus non, fermentum.</p>
                        <a href="#" class="btn cryptos-btn">Read More</a>
                    </div>
                </div>

                <!-- Single Course Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-feature-area mb-100 text-center">
                        <i class="icon-exchange"></i>
                        <h3>Small Commisions</h3>
                        <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget nisl. Cras vitae turpis lacinia, lacinia lacus non, fermentum.</p>
                        <a href="#" class="btn cryptos-btn">Read More</a>
                    </div>
                </div>

                <!-- Single Course Area -->
                <div class="col-12 col-md-6 col-xl-3">
                    <div class="single-feature-area mb-100 text-center">
                        <i class="icon-wallet"></i>
                        <h3>10% Secure</h3>
                        <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget nisl. Cras vitae turpis lacinia, lacinia lacus non, fermentum.</p>
                        <a href="#" class="btn cryptos-btn">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Course Area End ##### -->

    <!-- ##### About Area Start ##### -->
    <section class="cryptos-about-area">
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

    <!-- ##### Currency Area Start ##### -->
    <section class="currency-calculator-area section-padding-100 bg-img bg-overlay" style="background-image: url({{asset('assets')}}/img/bg-img/bg-2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center white mx-auto">
                        <h3 class="mb-4">Cryptocurrency Calculator</h3>
                        <h5 class="mb-2">Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget nisl.</h5>
                        <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget nisl. Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="currency-calculator mb-15 clearfix">
                        <form action="#" method="post" class="d-flex align-items-center justify-content-center">
                            <!-- Calculator Part -->
                            <div class="calculator-first-part d-flex align-items-center">
                                <input type="text" name="inputNumber" placeholder="1">
                                <select>
                                    <option>BTC</option>
                                    <option>USD</option>
                                    <option>INR</option>
                                    <option>BDT</option>
                                </select>
                            </div>

                            <!-- Equal Sign -->
                            <div class="equal-sign">=</div>

                            <!-- Calculator Part -->
                            <div class="calculator-sec-part d-flex align-items-center">
                                <input type="text" name="inputNumber" placeholder="940045">
                                <select>
                                    <option>EUR</option>
                                    <option>USD</option>
                                    <option>INR</option>
                                    <option>BDT</option>
                                </select>
                            </div>
                        </form>
                    </div>

                    <div class="currency-calculator mb-15">
                        <form action="#" method="post" class="d-flex align-items-center justify-content-center">
                            <!-- Calculator Part -->
                            <div class="calculator-first-part d-flex align-items-center">
                                <input type="text" name="inputNumber" placeholder="10400">
                                <select>
                                    <option>USD</option>
                                    <option>BTC</option>
                                    <option>INR</option>
                                    <option>BDT</option>
                                </select>
                            </div>

                            <!-- Equal Sign -->
                            <div class="equal-sign">=</div>

                            <!-- Calculator Part -->
                            <div class="calculator-sec-part d-flex align-items-center">
                                <input type="text" name="inputNumber" placeholder="1.02">
                                <select>
                                    <option>BTC</option>
                                    <option>USD</option>
                                    <option>INR</option>
                                    <option>BDT</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Currency Area End ##### -->

    <!-- ##### Blog Area Start ##### -->
    <section class="cryptos-blog-area section-padding-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-7">
                    <div class="blog-area">
                        <!-- Single Blog Area -->
                        <div class="single-blog-area d-flex align-items-start">
                            <!-- Thumbnail -->
                            <div class="blog-thumbnail">
                                <img src="img/blog-img/1.jpg" alt="">
                            </div>
                            <!-- Content -->
                            <div class="blog-content">
                                <a href="#" class="post-title">This Platform Aims to Disrupt the Market</a>
                                <div class="meta-data">
                                    <a href="#">Crypto News</a> |
                                    <a href="#">March 18, 2018</a>
                                </div>
                                <p>Morbi vel arcu gravida, iaculis lacus vel, posuere ipsum. Sed faucibus mauris vitae urna consectetur, sit amet maximus nisl sagittis.</p>
                            </div>
                        </div>
                        <!-- Single Blog Area -->
                        <div class="single-blog-area d-flex align-items-start">
                            <!-- Thumbnail -->
                            <div class="blog-thumbnail">
                                <img src="{{asset('assets')}}/img/blog-img/2.jpg" alt="">
                            </div>
                            <!-- Content -->
                            <div class="blog-content">
                                <a href="#" class="post-title">New Hedge Funds invests in Crypto</a>
                                <div class="meta-data">
                                    <a href="#">Crypto News</a> |
                                    <a href="#">March 18, 2018</a>
                                </div>
                                <p>Iaculis lacus vel, posuere ipsum. Sed faucibus mauris vitae urna consectetur, sit amet maximus nisl sagittis. Ut in iaculis enim.</p>
                            </div>
                        </div>
                        <!-- Single Blog Area -->
                        <div class="single-blog-area d-flex align-items-start">
                            <!-- Thumbnail -->
                            <div class="blog-thumbnail">
                                <img src="{{asset('assets')}}/img/blog-img/3.jpg" alt="">
                            </div>
                            <!-- Content -->
                            <div class="blog-content">
                                <a href="#" class="post-title">This Platform Aims to Disrupt the Market</a>
                                <div class="meta-data">
                                    <a href="#">Crypto News</a> |
                                    <a href="#">March 18, 2018</a>
                                </div>
                                <p>Morbi vel arcu gravida, iaculis lacus vel, posuere ipsum. Sed faucibus mauris vitae urna consectetur, sit amet maximus nisl sagittis.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-5">
                    <div class="cryptos-prices-table">

                        <!-- Single Price Table -->
                        <div class="single-price-table d-flex align-items-center justify-content-between">
                            <div class="p-content d-flex align-items-center">
                                <span>01</span>
                                <img src="{{asset('assets')}}/img/bg-img/bitcoin.png" alt="">
                                <p>Bitcoin <span>BTC</span></p>
                            </div>
                            <div class="price increase">
                                <p>$12 456.78</p>
                            </div>
                        </div>

                        <!-- Single Price Table -->
                        <div class="single-price-table d-flex align-items-center justify-content-between">
                            <div class="p-content d-flex align-items-center">
                                <span>02</span>
                                <img src="{{asset('assets')}}/img/bg-img/ethereum.png" alt="">
                                <p>Ethereum <span>ETH</span></p>
                            </div>
                            <div class="price increase">
                                <p>$1051.98</p>
                            </div>
                        </div>

                        <!-- Single Price Table -->
                        <div class="single-price-table d-flex align-items-center justify-content-between">
                            <div class="p-content d-flex align-items-center">
                                <span>03</span>
                                <img src="{{asset('assets')}}/img/bg-img/bitcoin-cash.png" alt="">
                                <p>Bitcoin Cash <span>BCH</span></p>
                            </div>
                            <div class="price decrease">
                                <p>$2256.78</p>
                            </div>
                        </div>

                        <!-- Single Price Table -->
                        <div class="single-price-table d-flex align-items-center justify-content-between">
                            <div class="p-content d-flex align-items-center">
                                <span>04</span>
                                <img src="{{asset('assets')}}/img/bg-img/ripple.png" alt="">
                                <p>Ripple <span>XRP</span></p>
                            </div>
                            <div class="price increase">
                                <p>$2.03</p>
                            </div>
                        </div>

                        <!-- Single Price Table -->
                        <div class="single-price-table d-flex align-items-center justify-content-between">
                            <div class="p-content d-flex align-items-center">
                                <span>05</span>
                                <img src="{{asset('assets')}}/img/bg-img/litecoin.png" alt="">
                                <p>Litecoin <span>LTC</span></p>
                            </div>
                            <div class="price increase">
                                <p>$321.98</p>
                            </div>
                        </div>

                        <!-- Single Price Table -->
                        <div class="single-price-table d-flex align-items-center justify-content-between">
                            <div class="p-content d-flex align-items-center">
                                <span>06</span>
                                <img src="{{asset('assets')}}/img/bg-img/cardano.png" alt="">
                                <p>Cardano <span>ADA</span></p>
                            </div>
                            <div class="price increase">
                                <p>$0.75</p>
                            </div>
                        </div>

                        <!-- Single Price Table -->
                        <div class="single-price-table d-flex align-items-center justify-content-between">
                            <div class="p-content d-flex align-items-center">
                                <span>07</span>
                                <img src="{{asset('assets')}}/img/bg-img/nem.png" alt="">
                                <p>NEM <span>XEM</span></p>
                            </div>
                            <div class="price increase">
                                <p>$0.89</p>
                            </div>
                        </div>

                        <!-- Single Price Table -->
                        <div class="single-price-table d-flex align-items-center justify-content-between">
                            <div class="p-content d-flex align-items-center">
                                <span>08</span>
                                <img src="{{asset('assets')}}/img/bg-img/neo.png" alt="">
                                <p>NEO <span>NEO</span></p>
                            </div>
                            <div class="price decrease">
                                <p>$123.90</p>
                            </div>
                        </div>

                        <!-- Single Price Table -->
                        <div class="single-price-table d-flex align-items-center justify-content-between">
                            <div class="p-content d-flex align-items-center">
                                <span>09</span>
                                <img src="{{asset('assets')}}/img/bg-img/stellar.png" alt="">
                                <p>Stellar <span>XLM</span></p>
                            </div>
                            <div class="price increase">
                                <p>$0.67</p>
                            </div>
                        </div>

                        <!-- Single Price Table -->
                        <div class="single-price-table d-flex align-items-center justify-content-between">
                            <div class="p-content d-flex align-items-center">
                                <span>10</span>
                                <img src="{{asset('assets')}}/img/bg-img/iota.png" alt="">
                                <p>IOTA <span>IOT</span></p>
                            </div>
                            <div class="price increase">
                                <p>$3.55</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        
        <!-- Newsletter Area -->
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="newsletter-area mt-100">
                        <div class="section-heading text-center mx-auto">
                            <h3>Subscribe to <span>Newsletter</span></h3>
                            <h6>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget nisl.</h6>
                        </div>
                        <form action="#" method="post">
                            <input type="email" name="email" placeholder="Subscribe to newsletter">
                            <button type="submit">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Blog Area End ##### -->


@endsection('content')