@extends('front.layouts.app')
@section('css')
<style>
    .post-item .pbmit-featured-container .pbmit-featured-wrapper img{
        height: 250px;
    }
</style>
@endsection
@section('content')
    <!-- Title Bar -->
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner">
                            <h1 class="pbmit-tbar-title"> IT Services</h1>
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="{{ route('home.index') }}"
                                    class="home"><span>Home</span></a></span>
                            <span class="sep">-</span>
                            <span class="post-root post post-post current-item"> IT Services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Title Bar End-->

    <!-- Page Content -->
    <div class="page-content">

        <!-- Blog -->
        <section class="section-lg home-7-resource-section pbmit-bg-color-light">
            <div class="container">
                <div class="pbmit-heading-subheading text-center home-6">
                    {{-- <h4 class="pbmit-subtitle">RECENT ARTICLES</h4> --}}
                    <h2 class="pbmit-title ">IT Services</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <article class="pbmit-blogbox-style-5">
                            <div class="post-item">
                                <div class="pbmit-featured-container">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('front/images/creative/customsoftware.png') }}" style="height:250px;"
                                            class="img-fluid w-100" alt="" />
                                    </div>
                                </div>
                                <div class="pbmit-meta-data">
                                    <h3 class="pbmit-post-title">
                                        <a href="#">Custom Software Development</a>
                                    </h3>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-box-content-wrapper">
                                        <h3 class="pbmit-post-title">
                                            <a href="#">Custom Software Development</a>
                                        </h3>
                                        <div class="pbminfotech-box-desc">
                                            <div class="pbminfotech-box-desc-text">
                                                Our custom software development services are designed to help you streamline
                                                workflows,
                                                enhance productivity, and drive long-term business growth.
                                            </div>
                                            {{-- <a href="#" class="top-link mb-0">
                                                <span class="about-us-button-text">Read Continue</span>
                                            </a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="pbmit-blogbox-style-5">
                            <div class="post-item">
                                <div class="pbmit-featured-container">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('front/images/creative/bullions.jpg') }}" class="img-fluid w-100"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="pbmit-meta-data">
                                    <h3 class="pbmit-post-title">
                                        <a href="#">Web Development</a>
                                    </h3>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-box-content-wrapper">
                                        <h3 class="pbmit-post-title">
                                            <a href="#">Web Development</a>
                                        </h3>
                                        <div class="pbminfotech-box-desc">
                                            <div class="pbminfotech-box-desc-text">
                                                We craft robust, scalable, and user-friendly web solutions tailored to your
                                                business
                                                needs.
                                            </div>
                                            {{-- <a href="#" class="top-link mb-0">
                                                <span class="about-us-button-text">Read Continue</span>
                                            </a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="pbmit-blogbox-style-5">
                            <div class="post-item">
                                <div class="pbmit-featured-container">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('front/images/creative/DigitalMarketing.webp') }}"
                                            class="img-fluid w-100" alt="" />
                                    </div>
                                </div>
                                <div class="pbmit-meta-data">
                                    <h3 class="pbmit-post-title">
                                        <a href="#">Digital Marketing</a>
                                    </h3>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-box-content-wrapper">
                                        <h3 class="pbmit-post-title">
                                            <a href="#">Digital Marketing</a>
                                        </h3>
                                        <div class="pbminfotech-box-desc">
                                            <div class="pbminfotech-box-desc-text">
                                                At Roopyaa, digital marketing isn't just about clicks and impressions—it's
                                                about
                                                building meaningful connections, strengthening brand trust, and driving
                                                sustainable
                                                growth.
                                            </div>
                                            {{-- <a href="#" class="top-link mb-0">
                                                <span class="about-us-button-text">Read Continue</span>
                                            </a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="pbmit-blogbox-style-5">
                            <div class="post-item">
                                <div class="pbmit-featured-container">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('front/images/creative/DevOps.png') }}" class="img-fluid w-100"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="pbmit-meta-data">
                                    <h3 class="pbmit-post-title">
                                        <a href="#">Devops</a>
                                    </h3>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-box-content-wrapper">
                                        <h3 class="pbmit-post-title">
                                            <a href="#">Devops</a>
                                        </h3>
                                        <div class="pbminfotech-box-desc">
                                            <div class="pbminfotech-box-desc-text">
                                                At Roopyaa, DevOps bridges development and operations to streamline the
                                                software
                                                lifecycle. It ensures faster, more reliable deployments through automation,
                                                continuous
                                                integration, and team collaboration.
                                            </div>
                                            {{-- <a href="#" class="top-link mb-0">
                                                <span class="about-us-button-text">Read Continue</span>
                                            </a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="pbmit-blogbox-style-5">
                            <div class="post-item">
                                <div class="pbmit-featured-container">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('front/images/creative/mobiledevelopment.png') }}"
                                            class="img-fluid w-100" alt="" />
                                    </div>
                                </div>
                                <div class="pbmit-meta-data">
                                    <h3 class="pbmit-post-title">
                                        <a href="#">Mobile Development</a>
                                    </h3>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-box-content-wrapper">
                                        <h3 class="pbmit-post-title">
                                            <a href="#">Mobile Development</a>
                                        </h3>
                                        <div class="pbminfotech-box-desc">
                                            <div class="pbminfotech-box-desc-text">
                                                At Roopyaa, Mobile Development centers on crafting fast, user-friendly apps
                                                for
                                                both Android and iOS. We leverage cutting-edge technologies to ensure smooth
                                                performance, elegant design, and robust functionality.
                                            </div>
                                            {{-- <a href="#" class="top-link mb-0">
                                                <span class="about-us-button-text">Read Continue</span>
                                            </a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="pbmit-blogbox-style-5">
                            <div class="post-item">
                                <div class="pbmit-featured-container">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('front/images/creative/graphic.jpg') }}"
                                            class="img-fluid w-100" alt="" />
                                    </div>
                                </div>
                                <div class="pbmit-meta-data">
                                    <h3 class="pbmit-post-title">
                                        <a href="#">Graphic Design</a>
                                    </h3>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-box-content-wrapper">
                                        <h3 class="pbmit-post-title">
                                            <a href="#">Graphic Design</a>
                                        </h3>
                                        <div class="pbminfotech-box-desc">
                                            <div class="pbminfotech-box-desc-text">
                                                Graphic Design at Panth Infinity brings ideas to life through visually
                                                compelling and
                                                brand-focused creatives. We craft everything from logos to digital assets
                                                with
                                                precision, creativity, and consistency.
                                            </div>
                                            {{-- <a href="#" class="top-link mb-0">
                                                <span class="about-us-button-text">Read Continue</span>
                                            </a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                </div>
            </div>
        </section>
        <!-- Blog End -->

    </div>
    <!-- Page Content End -->
@endsection
