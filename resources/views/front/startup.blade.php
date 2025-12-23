@extends('front.layouts.app')
@section('content')
    <!-- Title Bar -->
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner">
                            <h1 class="pbmit-tbar-title"> The Start-up Launchpad</h1>
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="{{ route('home.index') }}"
                                    class="home"><span>Home</span></a></span>
                            <span class="sep">-</span>
                            <span class="post-root post post-post current-item"> The Start-up Launchpad</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Title Bar End-->

    <!-- Page Content -->
    <div class="page-content">

        <!-- About -->
        <section class="section-lg about-us-section">
            <div class="container">
                <div class="pbmit-heading-subheading text-center">
                    <h4 class="pbmit-subtitle">WHY CHOOSE US</h4>
                    <h2 class="pbmit-title">ROOPYA – The Start-up Launchpad
                        <br>
                        <em class="pbmit-heading-subheading"> Where opportunity meets fruition </em>
                    </h2>
                </div>
                <div class="row justify-content-between">
                    <article class="pbmit-blogbox-style-2">
                        <div class="post-item ">
                            <div class="pbminfotech-box-content">

                                <div class="pbminfotech-box-desc">
                                    <div class="para-title p-2">ROOPYA is a dynamic initiative designed to empower budding
                                        entrepreneurs and their innovative ideas. It serves as a comprehensive launchpad for
                                        start-ups, providing them with the critical resources, guidance, and opportunities
                                        required to transform their visions into thriving businesses.

                                    </div>

                                </div>

                            </div>
                        </div>
                    </article>
                </div>
                <div class="row justify-content-between">
                    <div class="col-md-6">
                        <div class="pbmit-ihbox pbmit-ihbox-style-2 ">
                            <div class="pbmit-ihbox-box">
                                <div class="pbmit-ihbox-headingicon d-flex ">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper">
                                            <i class="pbmit-emphires-icon pbmit-emphires-icon-team"></i>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox-contents">
                                        <h2 class="pbmit-ihbox-heading">Funding and Financial Support
                                        </h2>
                                        <div class="pbmit-ihbox-content text-justify">ROOPYA ensures that promising
                                            start-ups receive the necessary financial backing to scale their operations. By
                                            connecting entrepreneurs with potential investors and offering direct funding
                                            options, ROOPYA helps alleviate one of the most significant challenges faced by
                                            new businesses—access to capital.

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pbmit-ihbox pbmit-ihbox-style-2 ">
                            <div class="pbmit-ihbox-box">
                                <div class="pbmit-ihbox-headingicon d-flex ">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper">
                                            <i class="pbmit-emphires-icon pbmit-emphires-icon-consultation"></i>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox-contents">
                                        <h2 class="pbmit-ihbox-heading">Workspace and Infrastructure</h2>
                                        <div class="pbmit-ihbox-content text-justify">Start-ups at ROOPYA gain access to
                                            state-of-the-art workspace solutions tailored to foster collaboration and
                                            innovation. These include:</div>

                                        <div class="pbminfotech-ul-list pbmit-ul-type-icon">
                                            <ul>
                                                <li>
                                                    <i
                                                        class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                    Fully equipped co-working spaces.
                                                </li>
                                                <li>
                                                    <i
                                                        class="pbmit-globalcolor pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                    High-speed internet and IT infrastructure.
                                                </li>
                                                <li>
                                                    <i
                                                        class="pbmit-globalcolor pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                    Meeting rooms and event spaces for networking and presentations.
                                                </li>
                                            </ul>
                                        </div>




                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="pbmit-ihbox pbmit-ihbox-style-2 ">
                            <div class="pbmit-ihbox-box">
                                <div class="pbmit-ihbox-headingicon d-flex ">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper">
                                            <i class="pbmit-emphires-icon pbmit-emphires-icon-trainee"></i>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox-contents">
                                        <h2 class="pbmit-ihbox-heading">Expert Consultation and Mentorship</h2>
                                        <div class="pbmit-ihbox-contents">
                                            <h2 class="pbmit-ihbox-heading">Workspace and Infrastructure</h2>
                                            <div class="pbmit-ihbox-content text-justify">Understanding that guidance is as
                                                crucial as funding, ROOPYA provides:

                                            </div>

                                            <div class="pbminfotech-ul-list pbmit-ul-type-icon">
                                                <ul>
                                                    <li>
                                                        <i
                                                            class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Access to a network of experienced mentors across various
                                                        industries.

                                                    </li>
                                                    <li>
                                                        <i
                                                            class="pbmit-globalcolor pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Regular workshops and training sessions on business development,
                                                        marketing, technology, and leadership.

                                                    </li>
                                                    <li>
                                                        <i
                                                            class="pbmit-globalcolor pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                        Strategic advice to help navigate market challenges and seize growth
                                                        opportunities.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="pbmit-ihbox pbmit-ihbox-style-2 ">
                            <div class="pbmit-ihbox-box">
                                <div class="pbmit-ihbox-headingicon d-flex ">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper">
                                            <i class="pbmit-emphires-icon pbmit-emphires-icon-goal"></i>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox-contents">
                                        <h2 class="pbmit-ihbox-heading"> Compliance Support
                                        </h2>
                                        <div class="pbmit-ihbox-content text-justify">Navigating the maze of regulatory and
                                            legal requirements can be daunting for start-ups. ROOPYA offers:

                                        </div>
                                        <div class="pbminfotech-ul-list pbmit-ul-type-icon">
                                            <ul>
                                                <li>
                                                    <i
                                                        class="pbmit-global-color pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                    Assistance in legal and financial compliance.


                                                </li>
                                                <li>
                                                    <i
                                                        class="pbmit-globalcolor pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                    Help with registrations, tax filings, and other necessary formalities.


                                                </li>
                                                <li>
                                                    <i
                                                        class="pbmit-globalcolor pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                    Advisory services to ensure start-ups remain compliant with local and
                                                    global regulations.
                                                </li>
                                                <li>
                                                    <i
                                                        class="pbmit-globalcolor pbmit-emphires-icon pbmit-emphires-icon-right-arrow"></i>
                                                    Participate in pitch events and competitions to showcase their ideas.

                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 text-center">
                        <a href="{{ route('web.contact') }}" class="pbmit-btn mt-4">CONTACT US</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- About End -->


        <!-- Blog Start -->
        <section class="section-lg home-4-story-section about-us pbmit-bg-color-light">
            <div class="container">
                <div class="pbmit-heading-subheading text-center">
                    <h4 class="pbmit-subtitle">OUR AIMS</h4>
                    <h2 class="pbmit-title">About <em class=".pbmit-heading-subheading">US</em></h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <article class="pbmit-blogbox-style-2">
                            <div class="post-item">
                                <div class="pbminfotech-box-content">
                                    <div class="pbmit-meta-date"><span>MISSION</span></div>

                                    <div class="pbminfotech-box-desc">
                                        <div class="pbminfotech-box-desc-text text-justify">ROOPYA's mission is to nurture
                                            and catalyze the growth of innovative start-ups, transforming raw ideas into
                                            successful enterprises that drive economic growth and societal impact.
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
                                    <div class="pbmit-meta-date"><span>VISION</span></div>

                                    <div class="pbminfotech-box-desc">
                                        <div class="pbminfotech-box-desc-text text-justify">ROOPYA envisions a world where
                                            every promising idea has the support to flourish, every passionate founder has a
                                            guiding hand, and every start-up becomes a catalyst for change.
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
                                    <div class="pbmit-meta-date"><span>VALUES</span></div>

                                    <div class="pbminfotech-box-desc">
                                        <div class="pbminfotech-box-desc-text text-justify">We believe in the power of
                                            partnerships and teamwork, creating a vibrant ecosystem where founders, mentors,
                                            and investors work together to achieve shared goals.




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
