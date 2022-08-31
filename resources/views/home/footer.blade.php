    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <!-- Main Footer Area -->
        <div class="main-footer-area section-padding-100-0 bg-img bg-overlay" style="background-image: url(img/bg-img/bg-1.jpg);">
            <div class="container">
                <div class="row">

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <a href="#"><img src="{{asset('assets')}}/img/core-img/logodark2.png" alt=""></a>
                            </div>
                            <p>{!! $setting->footerinfo !!}</p>
                            <div class="footer-social-info">
                                <a href="{{$setting->instagram}}"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                <a href="{{$setting->facebook}}"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="{{$setting->twitter}}"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="{{$setting->youtube}}"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Son Gönderiler</h6>
                            </div>
                            @foreach($lastestblogpost as $rs)
                            <!-- Single Blog Post -->
                            <div class="single--blog-post">
                                <a href="#">
                                    <p>{{$rs->title}}</p>
                                </a>
                                <span>{{$rs->created_at->format('m/d/Y')}}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- Footer Widget Area -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="footer-widget mb-100">
                            <div class="widget-title">
                                <h6>Hızlı Linkler</h6>
                            </div>
                            <nav>
                                <ul class="useful-links d-flex justify-content-between flex-wrap">
                                    <li><a href="{{route('home')}}">Anasayfa</a></li>
                                    <li><a href="{{route('about')}}">Hakkımızda</a></li>
                                    <li><a href="{{route('contact')}}">İletişim</a></li>
                                    <li><a href="{{route('blog')}}">Forum</a></li>
                                    <!-- home login -->
                                    <li> @guest
                                        <a href="/loginuser">Giriş Yap</a>
                                        <a href="/registeruser">Üye Ol</a>
                                        @endguest
                                        @auth
                                        <a href="{{route('userpanel.index')}}"><i class="fa fa-user"></i> {{Auth::user()->name}}</a>
                                        @endauth
                                    </li>
                                    <li>
                                        @auth
                                        <a href="/logoutuser">Çıkış Yap</a>
                                        @endauth
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | This template designed by <a href="https://github.com/kaanboyacii">Kaan Boyacı</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('assets')}}/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="{{asset('assets')}}/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('assets')}}/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="{{asset('assets')}}/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="{{asset('assets')}}/js/active.js"></script>