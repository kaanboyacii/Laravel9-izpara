@extends('layouts.frontbase')

@section('title', 'İzPara')

@section('content')
<!-- ##### Breadcumb Area Start ##### -->
<div class="breadcumb-area">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-md-6">
                <div class="breadcumb-text">
                    <h2>Contact</h2>
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

<div class="contact-map-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center mx-auto">
                    <h3>Get <span>in touch</span><br>with us</h3>
                    <p>Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod erat. Ut at erat et arcu pulvinar cursus a eget nisl. Cras vitae turpis lacinia, lacinia lacus non, fermentum nisi.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ##### Contact Area Start ##### -->
<section class="contact-area section-padding-100-0">
    <div class="container">
        <div class="row">

            <!-- Contact Information -->
            <div class="col-12 col-lg-6">
                <div class="contact-information mb-100">

                    <!-- Contact Logo -->
                    <div class="contact-logo mb-50">
                        <a href="#"><img src="{{asset('assets')}}/img/core-img/logo.png" alt=""></a>
                    </div>

                    <p>Morbi vel arcu gravida, iaculis lacus vel, posuere ipsum. Sed faucibus mauris vitae urna consectetur, sit amet maximus nisl sagittis. Ut in iaculis enim, et pulvinar mauris. Etiam tristique magna eget velit consectetur, a tincidunt velit dictum.</p>

                    <!-- Contact Social Info -->
                    <div class="contact-social-info d-flex mt-50 mb-50">
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>

                    <!-- Single Contact Info -->
                    <div class="single-contact-info d-flex">
                        <div class="contact-icon mr-15">
                            <i class="fa fa-map"></i>
                        </div>
                        <p>4127/ 5B-C Mislane Road, Gibraltar, UK</p>
                    </div>

                    <!-- Single Contact Info -->
                    <div class="single-contact-info d-flex">
                        <div class="contact-icon mr-15">
                            <i class="fa fa-phone"></i>
                        </div>
                        <p>Main: 203-808-8613 <br> Office: 203-808-8648</p>
                    </div>

                    <!-- Single Contact Info -->
                    <div class="single-contact-info d-flex">
                        <div class="contact-icon mr-15">
                            <i class="fa fa-envelope-o"></i>
                        </div>
                        <p>office@yourbusiness.com</p>
                    </div>
                </div>
            </div>

            <!-- Contact Form Area -->
            <div class="col-12 col-lg-6">
                <div class="contact-form-area mb-100">
                    <form action="#" method="post">
                        <input type="text" class="form-control" id="name" placeholder="Name">
                        <input type="email" class="form-control" id="email" placeholder="E-mail">
                        <textarea name="message" class="form-control" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                        <button class="btn cryptos-btn btn-2 mt-30" type="submit">Contact Us</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Contact Area End ##### -->
@endsection('content')