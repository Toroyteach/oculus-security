@extends('layout.app')

@section('content')

    <!--== Start About Area Wrapper ==-->
    <div class="about-area-wrapper sp-y">
        <div class="container">
            <div class="row align-items-lg-center">
                <div class="col-md-6 col-lg-5">
                    <figure class="about-thumb">
                        <img src="{{ asset('frontend/assets/img/about.jpg') }}" alt="Businex-About" />
                    </figure>
                </div>

                <div class="col-md-6 col-lg-7">
                    <div class="about-content">
                        <h6>ABOUT US</h6>
                        <h2>Oculus Security <br> Services</h2>
                        <span class="about-since">Since 2010</span>
                        <p>The idea of building OSS was informed by the worrying gap existing due to the
                            failure or lack of reliable security outfit to complement and supplement
                            government efforts to provide adequate security to private entities. Oculus
                            Security Services (OSS) is a family of special breeds of operatives bringing
                            together retired Kenya Defense Forces officers and National Police Service
                            with world class training and thorough understanding of security, individuals
                            from other security agencies and high-end corporate world, all bound by a
                            common eagerness; thirst for security.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End About Area Wrapper ==-->

    <!--== Start Feature Area Wrapper ==-->
    <div class="feature-area-wrapper sp-y">
        <div class="container">
            <div class="row mtn-sm-60 mtn-md-5">
                <div class="col-md-4">
                    <div class="icon-box-item">
                        <div class="icon-box__icon">
                            <img src="{{ asset('frontend/assets/img/feature/01.png') }}" alt="Businex-Feature" />
                        </div>
                        <div class="icon-box__info">
                            <h5>Our Mission</h5>
                            <p>To protect as well as empower our local communities by
                                providing security that deters crime, keeps us safe and
                                provides work and revenue for the local economy whilst
                                striving to provide superior and exceptional security
                                services across the board; making you and your
                                property - private and business - are our first priority.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="icon-box-item">
                        <div class="icon-box__icon">
                            <img src="{{ asset('frontend/assets/img/feature/02.png') }}" alt="Businex-Feature" />
                        </div>
                        <div class="icon-box__info">
                            <h5>Our Vision</h5>
                            <p>To be the number ONE Security Company in Kenya
                                followed with an aggressive expansion into the remainder of
                                East and Central Africa by offering new and innovative
                                service options as well as providing service delivery that
                                exceeds the norm and expectations of our clients, resulting
                                in job creation and security.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="icon-box-item">
                        <div class="icon-box__icon">
                            <img src="{{ asset('frontend/assets/img/feature/03.png') }}" alt="Businex-Feature" />
                        </div>
                        <div class="icon-box__info">
                            <h5>Our Operatives</h5>
                            <p>Oculus Security Services (OSS) is a family of special breeds of operatives bringing
                                together retired Kenya Defense Forces officers and National Police Service
                                with world class training and thorough understanding of security.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Feature Area Wrapper ==-->

@endsection
