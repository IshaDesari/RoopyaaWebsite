@extends('front.layouts.app')
@section('content')
    <!-- Title Bar -->
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner">
                            <h1 class="pbmit-tbar-title">Captial Raising Solution</h1>
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="{{ route('home.index') }}"
                                    class="home"><span>Home</span></a></span>
                            <span class="sep">-</span>
                            <span class="post-root post post-post current-item">Captial Raising Solution</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Title Bar End-->

    <!-- Page Content -->
    <div class="page-content">
        <!-- Service -->
        <section class="section-lg about-us-1-service-section pbmit-bg-color-light">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="image">
                            <img src="{{ asset('front/images/creative/whoweare.avif') }}" class="img-fluid w-90" alt="" />
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="pbmit-heading-subheading">
                            <h4 class="pbmit-subtitle">WHO WE ARE</h4>
                            <h2 class="pbmit-title">
                                {{-- We Choose a Human --}}
                                <em class="pbmit-heading-subheading">WHO WE ARE</em>
                            </h2>
                        </div>
                        {{-- <div class="para-title">
                            Train people quickly well with e-business.So they highly
                            efficient manufactured products.
                        </div> --}}
                        <p class="para-text">
                            Roopyaa is your ultimate gateway to accessing essential financial services in India. In a
                            country where entrepreneurship and business ambitions are thriving, Roopyaa emerges as a key
                            enabler by bridging the gap between deserving businesses and the right investors. The core
                            philosophy of Roopyaa is simple yet powerful: facilitate growth through strategic financial
                            solutions.
                        </p>
                        <p class="para-text">
                            We believe financial growth is a two-way journey — businesses need capital, and investors need
                            the right ventures. Roopyaa acts as a catalyst in creating this synergy.
                        </p>
                        <a href="{{ route('web.contact') }}" class="top-link mt-3">
                            <span class="about-us-button-text">Contact here</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Service End -->

        <!-- Blog Start -->
        <section class="section-lg home-4-story-section about-us pbmit-bg-color-light">
            <div class="container">
                <div class="pbmit-heading-subheading text-center">
                    <h4 class="pbmit-subtitle">Services</h4>
                    <h2 class="pbmit-title">
                        Our <em class=".pbmit-heading-subheading">Services</em>
                    </h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <article class="pbmit-blogbox-style-2">
                            <div class="post-item">
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-meta-date"><span> IPO</span></div>
                                    <h3 class="pbmit-post-title">
                                        <a href="#">Roopyaa assists companies in going public by offering their shares
                                            to the general public for the first time. This includes:</a>
                                    </h3>
                                    <div class="pbminfotech-box-desc">
                                        <div class="pbminfotech-box-desc-text">
                                            <div class="pbminfotech-ul-list pbmit-ul-type-icon">
                                                <ul>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Preparing the company for listing
                                                    </li>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Handling compliance and regulatory documentation
                                                    </li>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Coordinating with SEBI, stock exchanges, and underwriters
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>


                    <div class="col-md-4">
                        <article class="pbmit-blogbox-style-2">
                            <div class="post-item">
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-meta-date"><span> Right Issue</span></div>
                                    <h3 class="pbmit-post-title">
                                        <a href="#">A Right Issue allows existing shareholders to purchase additional
                                            shares at a discounted rate. Roopyaa helps with:</a>
                                    </h3>
                                    <div class="pbminfotech-box-desc">
                                        <div class="pbminfotech-box-desc-text">
                                            <div class="pbminfotech-ul-list pbmit-ul-type-icon">
                                                <ul>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Structuring the offering
                                                    </li>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Compliance with Companies Act and SEBI guidelines
                                                    </li>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Filing the Letter of Offer and managing timelines
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="pbmit-blogbox-style-2">
                            <div class="post-item">
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-meta-date"><span> Buy Back</span></div>
                                    <h3 class="pbmit-post-title">
                                        <a href="#">A Buy Back occurs <br> when a company repurchases its <br> own  shares to
                                            reduce <br> outstanding shares. Roopyaa <br> provides:</a>
                                    </h3>
                                    <div class="pbminfotech-box-desc">
                                        <div class="pbminfotech-box-desc-text">
                                            <div class="pbminfotech-ul-list pbmit-ul-type-icon">
                                                <ul>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Strategic advice on timing and pricing
                                                    </li>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Assistance with regulatory filings and approvals
                                                    </li>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Shareholder communication and reporting
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>


                    <div class="col-md-4">
                        <article class="pbmit-blogbox-style-2">
                            <div class="post-item">
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-meta-date"><span>Valuation</span></div>
                                    <h3 class="pbmit-post-title">
                                        <a href="#">Roopyaa offers independent business valuation services, crucial
                                            for mergers, funding, or internal planning. This includes:</a>
                                    </h3>
                                    <div class="pbminfotech-box-desc">
                                        <div class="pbminfotech-box-desc-text">
                                            <div class="pbminfotech-ul-list pbmit-ul-type-icon">
                                                <ul>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Start-up valuation
                                                    </li>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Fair market valuation for compliance
                                                    </li>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Valuation for ESOPs, mergers, acquisitions, or investment purposes
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="pbmit-blogbox-style-2">
                            <div class="post-item">
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-meta-date"><span> ESOP </span></div>
                                    <h3 class="pbmit-post-title">
                                        <a href="#">ESOPs motivate employees by giving them equity ownership.
                                            Roopyaa’s ESOP services include:</a>
                                    </h3>
                                    <div class="pbminfotech-box-desc">
                                        <div class="pbminfotech-box-desc-text">
                                            <div class="pbminfotech-ul-list pbmit-ul-type-icon">
                                                <ul>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Designing and structuring ESOP <br> schemes
                                                    </li>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Legal and regulatory documentation
                                                    </li>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Valuation and accounting treatment
                                                    </li>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Periodic compliance support
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="pbmit-blogbox-style-2">
                            <div class="post-item">
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-meta-date"><span> Delisting</span></div>
                                    <h3 class="pbmit-post-title">
                                        <a href="#">Roopyaa supports companies wishing to go private by delisting
                                            their shares from stock exchanges:</a>
                                    </h3>
                                    <div class="pbminfotech-box-desc">
                                        <div class="pbminfotech-box-desc-text">
                                            <div class="pbminfotech-ul-list pbmit-ul-type-icon">
                                                <ul>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Advisory on feasibility and impact
                                                    </li>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Pricing and shareholder approval processes
                                                    </li>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Compliance with SEBI (Delisting) Regulations
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <div class="col-md-4">
                        <article class="pbmit-blogbox-style-2">
                            <div class="post-item">
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-meta-date"><span>Transaction Advisory</span></div>
                                    <h3 class="pbmit-post-title">
                                        <a href="#">Roopyaa offers end-to-end transaction advisory for business deals
                                            such as:</a>
                                    </h3>
                                    <div class="pbminfotech-box-desc">
                                        <div class="pbminfotech-box-desc-text">
                                            <div class="pbminfotech-ul-list pbmit-ul-type-icon">
                                                <ul>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Fundraising (debt or equity)
                                                    </li>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Investment due diligence
                                                    </li>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Business restructuring
                                                    </li>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Transaction documentation and negotiation support
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>


                    <div class="col-md-4">
                        <article class="pbmit-blogbox-style-2">
                            <div class="post-item">
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-meta-date"><span>FCCB </span></div>
                                    <h3 class="pbmit-post-title">
                                        <a href="#">Roopyaa helps Indian companies raise capital internationally
                                            through FCCBs:</a>
                                    </h3>
                                    <div class="pbminfotech-box-desc">
                                        <div class="pbminfotech-box-desc-text">
                                            <div class="pbminfotech-ul-list pbmit-ul-type-icon">
                                                <ul>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Structuring the bond issuance
                                                    </li>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Ensuring compliance with FEMA, RBI, and SEBI
                                                    </li>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Advising on conversion and redemption mechanisms
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>


                    <div class="col-md-4">
                        <article class="pbmit-blogbox-style-2">
                            <div class="post-item">
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-meta-date"><span> Merger and Acquisition</span></div>
                                    <h3 class="pbmit-post-title">
                                        <a href="#">Roopyaa facilitates M&A deals by:</a>
                                    </h3>
                                    <div class="pbminfotech-box-desc">
                                        <div class="pbminfotech-box-desc-text">
                                            <div class="pbminfotech-ul-list pbmit-ul-type-icon">
                                                <ul>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Identifying strategic acquisition or merger targets
                                                    </li>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Financial and legal due diligence
                                                    </li>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Business valuation and deal <br> structuring
                                                    </li>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Negotiation and closure support
                                                    </li>
                                                </ul>
                                            </div>
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


        <!-- FAQ -->
        <section class="section-lgb section-faq m-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="pbmit-heading-subheading text-center">
                            <h3 class="pbmit-title">Frequently Asked Questions</h3>
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
                                        1. What types of businesses can approach Roopyaa for financial services?
                                    </button>
                                </h2>
                                <div id="collapsesix1" class="accordion-collapse collapse show"
                                    aria-labelledby="headingsix1" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>
                                            Roopyaa caters to a wide range of businesses — from startups and SMEs to large
                                            enterprises — looking for capital, strategic financial guidance, or corporate
                                            actions like IPOs, mergers, and buybacks. If your business seeks growth or
                                            restructuring, Roopyaa can help align the right financial strategies.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingseven1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseseven1" aria-expanded="false"
                                        aria-controls="collapseseven1">
                                        2. How does Roopyaa assist with IPO preparation and execution?
                                    </button>
                                </h2>
                                <div id="collapseseven1" class="accordion-collapse collapse"
                                    aria-labelledby="headingseven1" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>
                                            Roopyaa provides end-to-end IPO support, including financial restructuring,
                                            regulatory compliance, drafting offer documents, liaising with SEBI and stock
                                            exchanges, investor roadshows, and post-listing support.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingeight1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseeight1" aria-expanded="false"
                                        aria-controls="collapseeight1">
                                        3. What is the difference between a Right Issue and a Buy Back, and can Roopyaa help
                                        with both?
                                    </button>
                                </h2>
                                <div id="collapseeight1" class="accordion-collapse collapse"
                                    aria-labelledby="headingeight1" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>
                                            Yes, Roopyaa helps with both. A Right Issue allows existing shareholders to buy
                                            more shares at a discount, raising capital for the company. A Buy Back is when a
                                            company repurchases its own shares, often to boost shareholder value. Roopyaa
                                            manages compliance, valuation, and communication for both processes.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingnine1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapsenine1" aria-expanded="false"
                                        aria-controls="collapsenine1">
                                        4. Does Roopyaa help startups with valuation and funding?
                                    </button>
                                </h2>
                                <div id="collapsenine1" class="accordion-collapse collapse"
                                    aria-labelledby="headingnine1" data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>
                                            Absolutely. Roopyaa provides accurate and investor-ready valuations for
                                            startups, along with transaction advisory to secure funding from the right
                                            investors, whether through equity, debt, or convertible instruments.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingten1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseten1" aria-expanded="false"
                                        aria-controls="collapseten1">
                                        5. Is Roopyaa’s advisory limited to domestic services, or do you assist with
                                        international instruments like FCCBs?
                                    </button>
                                </h2>
                                <div id="collapseten1" class="accordion-collapse collapse" aria-labelledby="headingten1"
                                    data-bs-parent="#accordionExample2">
                                    <div class="accordion-body">
                                        <p>
                                            Roopyaa offers both domestic and international financial advisory. We assist
                                            with global instruments such as Foreign Currency Convertible Bonds (FCCBs),
                                            helping Indian companies raise funds from international markets while ensuring
                                            full regulatory compliance.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQ -->
    </div>
    <!-- Page Content End -->
@endsection
