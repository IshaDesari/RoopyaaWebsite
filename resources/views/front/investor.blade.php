@extends('front.layouts.app')
@section('content')
    <!-- Title Bar -->
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner">
                            <h1 class="pbmit-tbar-title">Roopyaa Investors </h1>
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="{{ route('home.index') }}"
                                    class="home"><span>Home</span></a></span>
                            <span class="sep">-</span>
                            <span class="post-root post post-post current-item">Roopyaa Investors </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Title Bar End-->

    <!-- Page Content -->
    <div class="page-content">
        <section class="section-lgt section-lgb home-6-resource-saction">
            <div class="container">
                <div class="pbmit-heading-subheading text-center home-6">
                    <h4 class="pbmit-subtitle">Investor Benefits
                    </h4>
                    <h2 class="pbmit-title">Why Invest in<br> Roopyaa</h2>
                </div>
                <div class="row g-0">
                    <div class="col-md-3">
                        <div class="pbmit-ihbox pbmit-ihbox-style-20 ">
                            <div class="pbmit-ihbox-box">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper">
                                        <i class=""></i>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-ihbox-heading">Transparent Reporting</h2>
                                    <div class="pbmit-ihbox-content">Comprehensive updates on business performance.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="pbmit-ihbox pbmit-ihbox-style-20 ">
                            <div class="pbmit-ihbox-box">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper">
                                        <i class=""></i>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-ihbox-heading">High ROI Potential</h2>
                                    <div class="pbmit-ihbox-content">Opportunities for significant returns through growth
                                        initiatives.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="pbmit-ihbox pbmit-ihbox-style-20 ">
                            <div class="pbmit-ihbox-box">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper">
                                        <i class=""></i>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-ihbox-heading">Strategic Growth Focus</h2>
                                    <div class="pbmit-ihbox-content">Clear plans for scaling operations and entering new
                                        markets.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="pbmit-ihbox pbmit-ihbox-style-20 ">
                            <div class="pbmit-ihbox-box">
                                <div class="pbmit-ihbox-icon">
                                    <div class="pbmit-ihbox-icon-wrapper">
                                        <i class=""></i>
                                    </div>
                                </div>
                                <div class="pbmit-ihbox-contents">
                                    <h2 class="pbmit-ihbox-heading">Commitment to ESG</h2>
                                    <div class="pbmit-ihbox-content">Dedication to environmental, social, and governance
                                        standards.</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>


        <section class="home-2-team-section-top pbmit-bg-color-light">
            <div class="container">
                <div class="pbmit-heading-subheading text-center">
                    <h4 class="pbmit-subtitle">OUR TEAM</h4>
                    <h2 class="pbmit-title">Our Current
                        <em class=".pbmit-heading-subheading"> Investor's</em>
                    </h2>
                    <p class="pbmit-heading-desc">We are actively seeking investors who share our vision for growth and
                        innovation. If you're interested in partnering with us, please contact
                        <strong><em>support@roopyaa.com</em></strong> at <strong><em>+1 002-123-4567</em></strong> for more
                        information.</p>
                </div>
            </div>
        </section>
        <section class="section-lg our-advisers">
            <div class="container">
                <div class="row g-4">
                    <!-- Team-1 -->
                    <div class="col-md-4">
                        <article class="pbmit-team-style-1">
                            <div class="pbminfotech-post-item">
                                <div class="pbminfotech-team-image-box">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('front/images/our-advisers/team-01.jpg') }}" class="img-fluid"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbminfotech-box-content-inner">
                                        <div class="pbminfotech-box-team-position">
                                            <div class="pbminfotech-box-team-position">CEO/FOUNDER</div>
                                        </div>
                                        <h3 class="pbmit-team-title">
                                            <a href="#">Mr Patel</a>
                                        </h3>
                                    </div>

                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- Team-2 -->
                    <div class="col-md-4">
                        <article class="pbmit-team-style-1">
                            <div class="pbminfotech-post-item">
                                <div class="pbminfotech-team-image-box">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('front/images/our-advisers/team-01.jpg') }}" class="img-fluid"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbminfotech-box-content-inner">
                                        <div class="pbminfotech-box-team-position">
                                            <div class="pbminfotech-box-team-position">MANAGING DIRECTOR</div>
                                        </div>
                                        <h3 class="pbmit-team-title">
                                            <a href="#">Mrs Shah</a>
                                        </h3>
                                    </div>

                                </div>
                            </div>
                        </article>
                    </div>
                    <!-- Team-3 -->
                    <div class="col-md-4">
                        <article class="pbmit-team-style-1">
                            <div class="pbminfotech-post-item">
                                <div class="pbminfotech-team-image-box">
                                    <div class="pbmit-featured-wrapper">
                                        <img src="{{ asset('front/images/our-advisers/team-01.jpg') }}" class="img-fluid"
                                            alt="" />
                                    </div>
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbminfotech-box-content-inner">
                                        <div class="pbminfotech-box-team-position">
                                            <div class="pbminfotech-box-team-position">Investment Expert</div>
                                        </div>
                                        <h3 class="pbmit-team-title">
                                            <a href="#">Mr Ruparel</a>
                                        </h3>
                                    </div>

                                </div>
                            </div>
                        </article>
                    </div>

                </div>
            </div>
        </section>
    </div>
@endsection
