@extends('front.layouts.app')
@section('content')
    <!-- Title Bar -->
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner">
                            <h1 class="pbmit-tbar-title">Roopyaa Freebies | Career </h1>
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="{{ route('home.index') }}"
                                    class="home"><span>Home</span></a></span>
                            <span class="sep">-</span>
                            <span class="post-root post post-post current-item">Roopyaa Freebies | Career </span>
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
                            <h2 class="pbmit-title">Join Our
                                <em> Team </em>
                            </h2>
                        </div>

                    </div>
                    <div class="col-md-7">
                        <div class="mb-5 text-justify">Are you ready to take the next step in your career? At Roopyaa we're
                            on the lookout for talented and passionate individuals to join our dynamic team.

                        </div>
                    </div>
                </div>




            </div>
        </section>
        <section class="section-lgt">
            <div class="container home-8-about-section-inner">
                <div class="row g-5 align-items-center">
                    <div class="col-md-4">
                        <div class="pbmit-ihbox pbmit-ihbox-style-22 ">
                            <div class="pbmit-ihbox-box">
                                <div class="pbmit-ihbox-contents">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                            <img src="{{ asset('front/images/icon-11.png') }}" class="img-fluid"
                                                alt="" />
                                        </div>
                                    </div>
                                    <h2 class="pbmit-ihbox-heading">Collaborative Environment:</h2>
                                    <div class="pbmit-ihbox-content">Be part of a team that values innovation, creativity,
                                        and teamwork.
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pbmit-ihbox pbmit-ihbox-style-22 ">
                            <div class="pbmit-ihbox-box">
                                <div class="pbmit-ihbox-contents">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                            <img src="{{ asset('front/images/icon-11.png') }}" class="img-fluid"
                                                alt="" />
                                        </div>
                                    </div>
                                    <h2 class="pbmit-ihbox-heading">Growth Opportunities:</h2>
                                    <div class="pbmit-ihbox-content">Advance your career with continuous learning and
                                        development programs.</div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pbmit-ihbox pbmit-ihbox-style-22 ">
                            <div class="pbmit-ihbox-box">
                                <div class="pbmit-ihbox-contents">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper pbmit-ihbox-icon-type-image">
                                            <img src="{{ asset('front/images/icon-11.png') }}" class="img-fluid"
                                                alt="" />
                                        </div>
                                    </div>
                                    <h2 class="pbmit-ihbox-heading">Inclusive Culture:</h2>
                                    <div class="pbmit-ihbox-content">Work in an environment where diversity and inclusion
                                        drive success.</div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text text-center">Whether you're just starting your career or looking to bring your
                        expertise to new challenges, Roopyaa offers opportunities to grow, learn, and thrive.
                    </div>
                </div>
            </div>

        </section>


        <section class="home-7-approach-saction-bg">
            <div class="container-fluid p-0">
                <div class="row g-0">
                    <div class="col-xl-6 home-7-approach-saction-col-left"></div>
                    <div class="col-xl-6 home-7-approach-saction-col-right">
                        <div class="pbmit-heading-subheading home-6">
                            <h2 class="pbmit-title">Join Our Team</h2>
                            <p class="pbmit-heading-desc">Are you ready to grow your career and make an impact? At Roopyaa,
                                we're expanding our team and looking for driven individuals in the following areas

                            </p>
                        </div>
                        <div class="accordion accordion-style-2" id="accordionExample">
                            <div class="accordion-item active">
                                <h2 class="accordion-header" id="heading-One">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-One" aria-expanded="false" aria-controls="collapse-One">
                                        Accounting
                                    </button>
                                </h2>
                                <div id="collapse-One" class="accordion-collapse collapse show fade"
                                    aria-labelledby="heading-One" data-bs-parent="#accordionExample" style="">
                                    <div class="accordion-body">
                                        <p>Manage financial processes with precision and efficiency.
                                        </p>
                                        <strong>Reach Us: info@roopyaa.com</strong>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading-Two">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-Two" aria-expanded="false" aria-controls="collapse-Two">
                                        Telecommunication
                                    </button>
                                </h2>
                                <div id="collapse-Two" class="accordion-collapse collapse" aria-labelledby="heading-Two"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Drive innovation and deliver seamless communication solutions.<br>
                                            <strong>Reach Us: info@roopyaa.com</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item mb-3">
                                <h2 class="accordion-header" id="heading-Three">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse-Three" aria-expanded="false"
                                        aria-controls="collapse-Three">
                                        Sales
                                    </button>
                                </h2>
                                <div id="collapse-Three" class="accordion-collapse collapse"
                                    aria-labelledby="heading-Three" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>
                                            Build strong relationships and deliver value to our clients.
                                            <br>
                                            <strong>Reach Us: info@roopyaa.com</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section class="section-lgb section-faq">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="pbmit-heading-subheading text-center">
                            <h3 class="pbmit-title">Frequently Asked Questions (FAQ)
                            </h3>

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="accordion accordion-style-1" id="accordionExample2">
                            <div class="accordion-item active">
                                <h2 class="accordion-header" id="headingsix1">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsesix1" aria-expanded="false"
                                        aria-controls="collapsesix1">
                                        1. What services do you offer?
                                    </button>
                                </h2>
                                <div id="collapsesix1" class="accordion-collapse collapse show"
                                    aria-labelledby="headingsix1" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>
                                            We provide a range of services, including <a
                                                href="{{ route('web.roopyaatradebizz') }}" class="bg-black text-white">
                                                &nbsp; Our Services &nbsp;</a>, designed to
                                            meet your business needs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingseven1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseseven1" aria-expanded="false"
                                        aria-controls="collapseseven1">
                                        2. How can I get started?
                                    </button>
                                </h2>
                                <div id="collapseseven1" class="accordion-collapse collapse"
                                    aria-labelledby="headingseven1" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>
                                            Getting started is easy! Contact us at support@roopyaa.com or +91 +1
                                            002-123-4567, and our team will guide you through the process.


                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingeight1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseeight1" aria-expanded="false"
                                        aria-controls="collapseeight1">
                                        3. Do you offer customizable solutions?
                                    </button>
                                </h2>
                                <div id="collapseeight1" class="accordion-collapse collapse"
                                    aria-labelledby="headingeight1" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>
                                            Yes, we tailor our solutions to match your unique requirements. Schedule a
                                            consultation to discuss your specific needs.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingnine1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsenine1" aria-expanded="false"
                                        aria-controls="collapsenine1">
                                        4. What are your operating hours?
                                    </button>
                                </h2>
                                <div id="collapsenine1" class="accordion-collapse collapse"
                                    aria-labelledby="headingnine1" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>
                                            Our team is available from 10:00 or 19:00 on Monday - Saturday. For urgent
                                            inquiries, feel free to email us at support@roopyaa.com.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingten1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseten1" aria-expanded="false"
                                        aria-controls="collapseten1">
                                        5. What industries do you work with?
                                    </button>
                                </h2>
                                <div id="collapseten1" class="accordion-collapse collapse" aria-labelledby="headingten1"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>
                                            We serve a wide range of industries. If you're unsure whether we can assist,
                                            please reach out, and we'd be happy to discuss.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingten11">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseten11" aria-expanded="false"
                                        aria-controls="collapseten11">
                                        6. How do you ensure data confidentiality?
                                    </button>
                                </h2>
                                <div id="collapseten11" class="accordion-collapse collapse"
                                    aria-labelledby="headingten11" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>
                                            We prioritize the security of your information with strict compliance protocols
                                            and state-of-the-art data protection measures.
                                        </p>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


    <!-- Page Content End -->
@endsection
