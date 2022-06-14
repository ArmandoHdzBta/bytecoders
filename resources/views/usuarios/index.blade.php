@extends('layouts.layout')
@section('Nombre',"Inicio")
@section('contenido')
    <!-- revolution slider -->
    <div class="banner-slider">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <div id="slider_main" class="carousel slide" data-ride="carousel">
                        <!-- The slideshow -->
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="images/slider_1.png" alt="#" />
                            </div>
                            <div class="carousel-item">
                                <img src="images/slider_1.png" alt="#" />
                            </div>
                        </div>
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#slider_main" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                        </a>
                        <a class="carousel-control-next" href="#slider_main" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="full slider_cont_section">
                        <h4>More Featured in</h4>
                        <h3>Jack Blogger</h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look</p>
                        <div class="button_section">
                            <a href="about.html">Read More</a>
                            <a href="contact.html">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end revolution slider -->
    <!-- section -->
    <div class="section layout_padding dark_bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h3>Marketing</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="images/marketing_img.png" alt="#" />
                </div>
                <div class="col-md-6">
                    <div class="full blog_cont">
                        <h3 class="white_font">Where can I get some</h3>
                        <h5 class="grey_font">March 19 2019 5 READ</h5>
                        <p class="white_font">There are many variations of passages of Lorem Ipsum available, but the
                            majority have suffered alteration in some form, by injected humour, or randomised words which
                            don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need
                            to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                            generators on the Internet tend to repeat predefined chunks as necessary, making this the first
                            true generator on the Internet. It uses a dictionary of over 200 Latin words, combined g to use
                            a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the
                            middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks
                            as necessary, making this the first true generator..</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end section -->
@endsection
