@extends('front.layouts.app')
@section('content')
    <!-- Title Bar -->
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner">
                            <h1 class="pbmit-tbar-title"> Roopyaa Tradebizz</h1>
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="{{ route('home.index') }}"
                                    class="home"><span>Home</span></a></span>
                            <span class="sep">-</span>
                            <span class="post-root post post-post current-item"> Roopyaa Tradebizz</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Title Bar End-->

    <!-- Page Content -->
    <div class="page-content">

        <section class="home-1-service-section section-lg pbmit-bg-color-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="pbmit-heading-subheading">
                            <h4 class="pbmit-subtitle">Roopyaa </h4>
                            <h2 class="pbmit-title">Tradebizz<em> Service </em></h2>
                        </div>

                    </div>
                    <div class="col-md-7">
                        <div class="mb-5 text-justify">Roopyaa Tradebizz appears to be an innovative platform dedicated to
                            streamlining B2B interactions by directly connecting manufacturers and service providers. The
                            absence of middlemen emphasizes its focus on transparency and efficiency in trading and
                            industrial data management. By fostering verified partnerships, it likely aims to ensure trust
                            and reliability within its network.</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <article class="pbmit-service-style-3">
                            <div class="pbminfotech-post-item">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('front/images/service/service-01.jpg') }}" class="img-fluid w-100"
                                        alt="" />
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbminfotech-box-content-inner">
                                        <div class="pbmit-service-cat">
                                            <a rel="tag">Outsourcing</a>
                                        </div>
                                        <h3 class="pbmit-service-title">
                                            <a>F & A Outsourcing</a>
                                        </h3>
                                        <div class="pbmit-service-content">
                                            <p class="text-justify">In today's dynamic business environment, focusing on
                                                your core competencies is the key to sustainable growth and success. At
                                                Roopyaa Tradebizz, we offer Finance and Accounting (F&A) Outsourcing
                                                Services designed to empower businesses by delegating their financial
                                                operations to a team of seasoned experts. </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="pbmit-service-style-3">
                            <div class="pbminfotech-post-item">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('front/images/service/service-02.jpg') }}" class="img-fluid w-100"
                                        alt="" style="    height: 325px;" />
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbminfotech-box-content-inner">
                                        <div class="pbmit-service-cat">
                                            <a rel="tag">Reporting</a>
                                        </div>
                                        <h3 class="pbmit-service-title">
                                            <a>Financial Reporting Suite</a>
                                        </h3>
                                        <div class="pbmit-service-content">
                                            <p class="text-justify">Unlock the power of data-driven decision-making with our
                                                Financial Reporting Suite, a comprehensive solution designed to provide
                                                accurate, timely, and insightful financial reports. Whether you're tracking
                                                performance, ensuring compliance, or planning for the future, our suite
                                                offers:

                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="pbmit-service-style-3">
                            <div class="pbminfotech-post-item">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('front/images/service/serv-3.jpg') }}" class="img-fluid w-100"
                                        alt="" />
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbminfotech-box-content-inner">
                                        <div class="pbmit-service-cat">
                                            <a rel="tag">Consulting</a>
                                        </div>
                                        <h3 class="pbmit-service-title">
                                            <a>Individual Tax Consulting</a>
                                        </h3>
                                        <div class="pbmit-service-content">
                                            <p class="text-justify">Navigate the complexities of personal taxation with
                                                confidence through our Individual Tax Consulting services. Our expert
                                                consultants provide tailored guidance to help you optimize your tax
                                                strategy, minimize liabilities, and ensure full compliance with
                                                ever-evolving tax regulations.

                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="pbmit-service-style-3">
                            <div class="pbminfotech-post-item">
                                <div class="pbmit-featured-wrapper">
                                    <img src="{{ asset('front/images/service/serv-4.jpg') }}" class="img-fluid w-100"
                                        alt="" />
                                </div>
                                <div class="pbminfotech-box-content">
                                    <div class="pbminfotech-box-content-inner">
                                        <div class="pbmit-service-cat">
                                            <a rel="tag">Establishment</a>
                                        </div>
                                        <h3 class="pbmit-service-title">
                                            <a>New Business Establishment</a>
                                        </h3>
                                        <div class="pbmit-service-content">
                                            <p class="text-justify">Turn your entrepreneurial vision into reality with our
                                                New Business Establishment Services. We provide end-to-end support to help
                                                you lay a strong foundation for your business, ensuring a seamless setup
                                                process and compliance with all legal and regulatory requirements.

                                            </p>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="text text-center">Get the Roopyaa Tradebizz Service's.
                    <a href="{{ route('web.contact') }}" class="link "> Book an appointment!</a>
                </div>
            </div>
        </section>

    </div>
    <!-- Page Content End -->
@endsection
