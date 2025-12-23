@extends('front.layouts.app')
@section('content')
    <!-- Title Bar -->
    <div class="pbmit-title-bar-wrapper">
        <div class="container">
            <div class="pbmit-title-bar-content">
                <div class="pbmit-title-bar-content-inner">
                    <div class="pbmit-tbar">
                        <div class="pbmit-tbar-inner">
                            <h1 class="pbmit-tbar-title">Roopyaa Conatct Us </h1>
                        </div>
                    </div>
                    <div class="pbmit-breadcrumb">
                        <div class="pbmit-breadcrumb-inner">
                            <span><a title="" href="{{ route('home.index') }}" class="home"><span>Home</span></a></span>
                            <span class="sep">-</span>
                            <span class="post-root post post-post current-item">Roopyaa Conatct Us </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Title Bar End-->
    @include('front.toastr')
    <!-- Contact Us Content -->
    <div class="page-content">

        <!-- Contact -->
        <section class="section-lg contact-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="pbmit-ihbox pbmit-ihbox-style-2 ">
                            <div class="pbmit-ihbox-box">
                                <div class="pbmit-ihbox-headingicon d-flex ">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper">
                                            <i class="pbmit-emphires-icon pbmit-emphires-icon-email"></i>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox-contents">
                                        <h2 class="pbmit-ihbox-heading">Email Address</h2>
                                        <div class="pbmit-ihbox-content">info@roopyaa.com<br>support@roopyaa.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pbmit-ihbox pbmit-ihbox-style-2 ">
                            <div class="pbmit-ihbox-box">
                                <div class="pbmit-ihbox-headingicon d-flex ">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper">
                                            <i class="pbmit-emphires-icon pbmit-emphires-icon-placeholder-1"></i>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox-contents">
                                        <h2 class="pbmit-ihbox-heading">Our Address</h2>
                                        <div class="pbmit-ihbox-content"> 702, Silicon Tower, Opp Axis Bank, Law Garden,
                                            EllisBridge Ahmedabad- 380006</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="pbmit-ihbox pbmit-ihbox-style-2 ">
                            <div class="pbmit-ihbox-box">
                                <div class="pbmit-ihbox-headingicon d-flex ">
                                    <div class="pbmit-ihbox-icon">
                                        <div class="pbmit-ihbox-icon-wrapper">
                                            <i class="pbmit-emphires-icon pbmit-emphires-icon-appointment"></i>
                                        </div>
                                    </div>
                                    <div class="pbmit-ihbox-contents">
                                        <h2 class="pbmit-ihbox-heading">Hours</h2>
                                        <div class="pbmit-ihbox-content">Mon - Sat: 9am - 7pm<br> Sun: closed</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-section-bottom-bg">
            <div class="container">
                <div class="contact-section-bottom-inner">
                    <div class="row g-0">
                        <div class="col-md-6">
                            <div class="contact-section-bottom-inner-left">
                                <div class="pbmit-heading-subheading">
                                    <h4 class="pbmit-subtitle">MESSAGE US</h4>
                                    <h2 class="pbmit-title">Have any questions? Feel free to contact us.
                                    </h2>
                                </div>
                                <p class="mb-4">We're here to assist you with any inquiries or concerns. Don't hesitate to
                                    reach out, and our team will respond promptly to provide the information you need.

                                </p>
                                <ul class="pbmit-social-links pt-3">
                                    <li class="pbmit-social-li pbmit-social-facebook ">
                                        <a href="#" target="_blank" rel="noopener">
                                            <span><i class="pbmit-base-icon-facebook-squared"></i></span>
                                        </a>
                                    </li>
                                    <li class="pbmit-social-li pbmit-social-twitter ">
                                        <a href="#" target="_blank" rel="noopener">
                                            <span><i class="pbmit-base-icon-twitter"></i></span>
                                        </a>
                                    </li>
                                    <li class="pbmit-social-li pbmit-social-linkedin ">
                                        <a href="#" target="_blank" rel="noopener">
                                            <span><i class="pbmit-base-icon-linkedin-squared"></i></span>
                                        </a>
                                    </li>
                                    <li class="pbmit-social-li pbmit-social-instagram ">
                                        <a href="#" target="_blank" rel="noopener">
                                            <span><i class="pbmit-base-icon-instagram"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <form class="contact-form" method="POST" action="{{ route('web.contact_store') }}">
                              @csrf
                                <div class="row mb-3 g-3">
                                    <div class="col-lg-6 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name" name="name">
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <input type="email" class="form-control" placeholder="Email Address"
                                            name="email" required>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <input type="number" class="form-control" placeholder="Phone Number"
                                            name="phone" required>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Subject"
                                            name="subject" required>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <textarea class="form-control" name="message" rows="5" placeholder="Write Message" required></textarea>
                                    </div>
                                    <div class="col-lg-12 col-sm-12 mt-4 pb-4">
                                        <button type="submit" class="pbmit-btn">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235013.74842920963!2d72.41492881144384!3d23.020474101422135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1735026940564!5m2!1sen!2sin"
                width="1040" height="450" style="border:0;" title="Ahmedabad" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </section>
        <!-- Contact End -->

    </div>
    <!-- Contact Us Content End -->
@endsection
