@extends('layout.app')

@section('content')

    <!--== Start Page Header Area ==-->
    <div class="service-area-top parallax" data-parallax-speed="0.75" data-bg="{{ asset('frontend/assets/img/service/service-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title section-title--light">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Header Area ==-->

    <!--== Start Contact Area ==-->
    <div class="contact-area-wrapper sp-y">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info-wrap">
                        <div class="contact-info-item mb-4">
                            <div class="icon">
                                <i class="mdi mdi-map-marker"></i>
                            </div>
                            <div class="content">
                                <h5>Location</h5>
                                <p>KP OFFICES Jakaya Kikwete rd suit 6</p>
                            </div>
                        </div>
                        <div class="contact-info-item mb-4">
                            <div class="icon">
                                <i class="mdi mdi-phone"></i>
                            </div>
                            <div class="content">
                                <h5>Phone</h5>
                                <p><a href="tel:0754708020">0754 708 020</a></p>
                                <p><a href="tel:0755708020">0755 708 020</a></p>
                                <p><a href="tel:0753708020">0753 708 020</a></p>
                            </div>
                        </div>
                        <div class="contact-info-item mb-4">
                            <div class="icon">
                                <i class="mdi mdi-email"></i>
                            </div>
                            <div class="content">
                                <h5>Email</h5>
                                <p><a href="mailto:info@csskenya.co.ke">info@csskenya.co.ke</a></p>
                                <p><a href="mailto:csskenya2@gmail.com">csskenya2@gmail.com</a></p>
                            </div>
                        </div>
                        <div class="contact-info-item">
                            <div class="icon">
                                <i class="mdi mdi-web"></i>
                            </div>
                            <div class="content">
                                <h5>Website</h5>
                                <p><a href="http://www.csskenya.com" target="_blank">www.csskenya.com</a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="contact-form-wrap">
                        <div class="section-title">
                            <h6>GET IN TOUCH</h6>
                            <h2>Send us a message</h2>
                        </div>
                        <form id="contact-form" action="assets/php/mail.php" method="post">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group mb-3">
                                        <input type="text" name="subject" class="form-control" placeholder="Subject">
                                    </div>
                                    <div class="form-group mb-3">
                                        <textarea name="message" class="form-control" rows="6" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-brand">Send Message</button>
                                    </div>
                                </div>
                            </div>
                            <div class="form-message"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Contact Area ==-->

    <!--== Start Map Area ==-->
    <div class="map-area-wrapper">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.819917806043!2d36.82194631475391!3d-1.2863893990614864!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d22f22f2c7%3A0x2b8e35c2c2c2c2c2!2sNairobi!5e0!3m2!1sen!2ske!4v1620000000000!5m2!1sen!2ske" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    <!--== End Map Area ==-->

@endsection
