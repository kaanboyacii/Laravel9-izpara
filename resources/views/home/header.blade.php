    <!-- ##### Preloader ##### -->
    <!-- <div id="preloader">
        <i class="circle-preloader"></i>
    </div> -->

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="top-header-content h-100 d-flex align-items-center justify-content-between">
                            <!-- Top Headline -->
                            <div class="top-headline">
                                <p><span>İzPara'ya</span> Hoşgeldiniz</p>
                            </div>
                            <!-- Top Login & Faq & Earn Monery btn -->
                            <div class="login-faq-earn-money">
                                @guest
                                <a href="/loginuser">Giriş Yap</a>
                                <a href="/registeruser">Üye Ol</a>
                                @endguest
                                @auth
                                <a href="{{route('userpanel.index')}}"><i class="fa fa-user"></i> {{Auth::user()->name}}</a>
                                @endauth
                                @auth
                                <a href="/logoutuser">Çıkış Yap</a>
                                @endauth
                                <a href="https://www.coinbase.com/tr/earn" class="active">Para kazan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="cryptos-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="cryptosNav">

                        <!-- Logo -->
                        <a class="nav-brand" href="/anasayfa"><img src="{{asset('assets')}}/img/core-img/logo.png" alt=""></a>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="/anasayfa">Anasayfa</a></li>
                                    <li><a href="/hakkimizda">Hakkımızda</a></li>
                                    <li><a href="/forum">Forum</a></li>
                                    <li><a href="/iletisim">İletişim</a></li>                                
                                    <li><a href="#">Mega Menu</a>
                                        <div class="megamenu">
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">- Home</a></li>
                                                <li><a href="#">- About us</a></li>
                                                <li><a href="#">- Services</a></li>
                                                <li><a href="#">- Testimonials</a></li>
                                                <li><a href="#">- News</a></li>
                                                <li><a href="#">- About us</a></li>
                                            </ul>
                                            <ul class="single-mega cn-col-4">
                                                <li><a href="#">- Contact</a></li>
                                                <li><a href="#">- Faq</a></li>
                                                <li><a href="#">- Terms &amp; Conditions</a></li>
                                                <li><a href="#">- Careers</a></li>
                                                <li><a href="#">- Newsletter &amp; Exchange</a></li>
                                                <li><a href="#">- Terms &amp; Conditions</a></li>
                                            </ul>
                                            <div class="single-mega cn-col-4">
                                                <div class="megamenu-slides owl-carousel">
                                                    <img src="{{asset('assets')}}/img/bg-img/bg-1.jpg" alt="">
                                                    <img src="{{asset('assets')}}/img/bg-img/bg-1.jpg" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->