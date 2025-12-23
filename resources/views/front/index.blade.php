@extends('front.layouts.app')
@section('content')
    <!-- page content -->
    <div class="page-content">

        <!-- About Start -->

        <!-- About End -->

        <!-- About Us Start -->
        <section class="home-3-about-section section-lg">
            <div class="container">
                <div class="row ">
                    <div class="col-xl-6 col-lg-12 home-3-about-section-left">
                        <div class="pbmit-heading-subheading">
                            <h4 class="pbmit-subtitle">WHO WE ARE</h4>
                            <h2 class="pbmit-title">Excellent services for <br>
                                <em class=".pbmit-heading-subheading">your success</em>
                            </h2>
                        </div>
                        <p class="text text-justify">We are on a mission to help the nation and its people create structured
                            wealth and scalable growth plans through smart trading and procurement, value-driven funding and
                            incubation, and free-of-cost tax management.

                        </p>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="pbmit-ihbox pbmit-ihbox-style-13 ">
                                    <div class="pbmit-ihbox-contents">
                                        <div class="pbmit-ihbox-headingicon d-flex align-items-center">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                                    <img src="{{ asset('front/images/icon-04.png') }}"
                                                        class="img-fluid w-100" alt="Startup Launchpad" />
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-ihbox-heading">Startup Launchpad</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="pbmit-ihbox pbmit-ihbox-style-13 ">
                                    <div class="pbmit-ihbox-contents">
                                        <div class="pbmit-ihbox-headingicon d-flex align-items-center">
                                            <div class="pbmit-ihbox-icon">
                                                <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                                    <img src="{{ asset('front/images/icon-03.png') }}"
                                                        class="img-fluid w-100" alt="Roopyaa Tradebizz" />
                                                </div>
                                            </div>
                                            <div class="pbmit-ihbox-contents">
                                                <h2 class="pbmit-ihbox-heading">Roopyaa Tradebizz</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <p class="text">We are good at what we do, we have been doing it for a decade now.

                        </p>
                        <a href="{{ route('web.roopyaatradebizz') }}" class="pbmit-btn pbmit-btn-global-outline mb-5">READ MORE</a>
                    </div>
                    <div class="col-xl-6 col-lg-12">
                        <div class="row g-3">
                            <div class="col-sm-12 ">
                                <img src="{{ asset('front/images/img-05.jpg') }}" class="img-fluid w-100 mb-3"
                                    alt="" />
                            </div>
                            <div class="col-md-6">
                                <img src="{{ asset('front/images/img-06.jpg') }}" class="img-fluid w-100 h-100 pe-2"
                                    alt="">
                            </div>
                            <div class="col-md-6">
                                <div class="pbmit-ihbox pbmit-ihbox-style-14">
                                    <div class="pbmit-ihbox-box">
                                        <div class="pbmit-ihbox-icon">
                                            <div class="pbmit-ihbox-icon-wrapper">
                                                <i class="pbmit-emphires-icon pbmit-emphires-icon-trophy"></i>
                                            </div>
                                        </div>
                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-ihbox-heading">Visit<br> Portal</h2>
                                            <div class="pbmit-ihbox-btn">
                                                <a href="https://www.tradvisor.in/" target="_blank">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us End -->

        <!-- Service Start -->

        <!-- Service End -->
        <section class="home-2-about-us-section">
            <div class="container-fluid p-0">
                <div class="row g-0 align-items-center">
                    <div class="col-xl-6">
                        <div class="image">
                            <img src="{{ asset('front/images/about.gif') }}" class="img-fluid w-100" alt="" />
                        </div>
                    </div>
                    <div class="col-xl-6 home-2-about-us-section-left-bg pbmit-bg-color-light">
                        <div class="home-2-about-us-section-left-inner">
                            <div class="pbmit-heading-subheading">
                                <h4 class="pbmit-subtitle">Where opportunity meets fruition
                                </h4>
                                <h2 class="pbmit-title">Meet Roopyaa
                                    <em class=".pbmit-heading-subheading"> Tradebizz</em>
                                </h2>
                                <p class="pbmit-heading-desc">A well-proliferated & well-connected Industrial Data and
                                    Trading Platform, catering exclusively to the B2B segment, while bringing together
                                    verified manufacturers and service providers, minus the middlemen.</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="pbmit-ihbox pbmit-ihbox-style-9">
                                        <div class="pbmit-ihbox-box">
                                            <div class="pbmit-ihbox-headingicon d-flex ">
                                                <div class="pbmit-ihbox-icon">
                                                    <div class="pbmit-ihbox-icon-wrapper">
                                                        <i class="pbmit-emphires-icon pbmit-emphires-icon-deal"></i>
                                                    </div>
                                                </div>
                                                <div class="pbmit-ihbox-contents">
                                                    <h2 class="pbmit-ihbox-heading">No resellers</h2>
                                                    <div class="pbmit-ihbox-content text-justify">Join a well-connected
                                                        network where businesses thrive together, backed by reliable
                                                        partnerships and opportunities tailored to your needs.

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="pbmit-ihbox pbmit-ihbox-style-9">
                                        <div class="pbmit-ihbox-box">
                                            <div class="pbmit-ihbox-headingicon d-flex ">
                                                <div class="pbmit-ihbox-icon">
                                                    <div class="pbmit-ihbox-icon-wrapper">
                                                        <i class="pbmit-emphires-icon pbmit-emphires-icon-supplier"></i>
                                                    </div>
                                                </div>
                                                <div class="pbmit-ihbox-contents">
                                                    <h2 class="pbmit-ihbox-heading">Real Businesses</h2>
                                                    <div class="pbmit-ihbox-content text-justify">No middlemen. No
                                                        resellers. Just genuine connections and opportunities that help
                                                        businesses grow and thrive in a well-connected industrial ecosystem
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Consultation Start-->
        <section class="home-3-consultant-section-bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="pbmit-heading-subheading">
                            <h4 class="pbmit-subtitle text-white">OUR SPECIALTIES</h4>
                            <h2 class="pbmit-title text-white">Get the best consult <br>from
                                <em class=".pbmit-heading-subheading"> your expert </em> <br> advisors
                            </h2>
                        </div>
                        <div class="input-button">
                            <a href="{{ route('web.contact') }}" id="submit"
                                class="input-form-control pbmit-btn pbmit-btn-white-outline">BOOK A
                                CONSULTATION</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="pbminfotech-fid-style-2 ">
                                    <div class="pbmit-fld-contents">
                                        <h4 class="pbmit-fid-inner">
                                            <span class="pbmit-number-rotate numinate"
                                                data-appear-animation="animateDigits" data-from="0" data-to="240000"
                                                data-interval="5" data-before="" data-before-style="" data-after=""
                                                data-after-style="">240000</span>
                                            <span class="pbmit-fid-sub"></span>
                                        </h4>
                                        <h3 class="pbmit-fid-title mb-2">
                                            <span>Active Vendors<br></span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="pbminfotech-fid-style-2 ">
                                    <div class="pbmit-fld-contents">
                                        <h4 class="pbmit-fid-inner">
                                            <span class="pbmit-number-rotate numinate"
                                                data-appear-animation="animateDigits" data-from="0" data-to="1000"
                                                data-interval="5" data-before="" data-before-style="" data-after=""
                                                data-after-style="">1000</span>
                                            <span class="pbmit-fid-sub"></span>
                                        </h4>
                                        <h3 class="pbmit-fid-title"><span>TRUSTED ADVISERS<br></span></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="pbminfotech-fid-style-2 ">
                                    <div class="pbmit-fld-contents">
                                        <h4 class="pbmit-fid-inner">
                                            <span class="pbmit-number-rotate numinate"
                                                data-appear-animation="animateDigits" data-from="0" data-to="245"
                                                data-interval="5" data-before="" data-before-style="" data-after=""
                                                data-after-style="">245</span>
                                            <span class="pbmit-fid-sub"></span>
                                        </h4>
                                        <h3 class="pbmit-fid-title">
                                            <span>HAPPY CLIENTS<br></span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="pbminfotech-fid-style-2 ">
                                    <div class="pbmit-fld-contents">
                                        <h4 class="pbmit-fid-inner">
                                            <span class="pbmit-number-rotate numinate"
                                                data-appear-animation="animateDigits" data-from="0" data-to="900000"
                                                data-interval="5" data-before="" data-before-style="" data-after=""
                                                data-after-style="">900000</span>
                                            <span class="pbmit-fid-sub"></span>
                                        </h4>
                                        <h3 class="pbmit-fid-title">
                                            <span>FINISHED PRODUCTS<br></span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Consultation End-->

        <section class="home-5-appointment-section-bg pbmit-bg-color-global">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-md-6 home-5-appointment-section-bg-left">
                        <div role="form" class="home-5-appointment-form bg-white">
                            <h4 class="mb-1">The Start-up Launchpad
                            </h4>
                            <h5>Where opportunity meets fruition
                            </h5>
                            <p class="text-justify">Our start-up wing is an empowering launchpad for new ideas/businesses
                                and their passionate founders, focused on funding and providing them the edge they need.
                                Alongside, we also provide them with necessary handholding through workspace,
                                infrastructure, and consultation, while ensuring their compliances.

                            </p>
                            <p class="footer-button m-0">
                                <a href="{{ route('web.investor') }}" class="pbmit-btn pbmit-btn-global-outline mb-5">Apply For
                                    Funding</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 p-0">
                        <div class="home-5-appointment-section-bg-right">

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- page content End -->
@endsection
