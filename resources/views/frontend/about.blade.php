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

    <!--== Start Team Area Wrapper ==-->
    <div class="team-area-wrapper sp-y" style="background-color: #fff;">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-10 m-auto text-center">
                    <div class="section-title">
                        <h6>MEET OUR TEAM</h6>
                        <h2>Quality Management Team</h2>
                        <p style="color: #333;">Our Quality Management Team is committed
                            to ensuring that every service we deliver
                            consistently meets and exceeds client
                            expectations. Through robust quality control
                            systems, regular audits, and continuous
                            improvement initiatives, the team upholds
                            the highest standards of professionalism,
                            compliance, and service excellence. By
                            closely monitoring performance, engaging
                            clients for feedback, and proactively
                            addressing gaps, our Quality Management
                            Team ensures reliability, consistency, and
                            value in all our operations-reinforcing our
                            commitment to quality, trust, and long-term
                            partnerships.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Member 1 -->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div style="display: flex; align-items: flex-start;">
                        <div style="flex-shrink: 0; margin-right: 20px;">
                            <img src="{{ asset('frontend/assets/img/team/01.jpg') }}" alt="Brian Ngetich"
                                style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; border: 1px solid #333;">
                        </div>
                        <div>
                            <h5
                                style="text-transform: uppercase; font-weight: bold; font-family: sans-serif; border-bottom: 2px solid #000; padding-bottom: 5px; margin-bottom: 5px; font-size: 16px; color: #000;">
                                MANAGING DIRECTOR
                            </h5>
                            <div style="font-weight: bold; color: #666; font-size: 14px; margin-bottom: 10px;">
                                Brian Ngetich
                            </div>
                            <p
                                style="text-align: left; font-family: sans-serif; line-height: 1.5; font-size: 13px; color: #333;">
                                Mr Ngetich provides visionary leadership founded on integrity, industry expertise, and an
                                unwavering commitment to excellence in security services. With a strong understanding of
                                risk management, operational discipline, and client-focused service delivery, He drives
                                strategic growth while ensuring the highest standards of professionalism and compliance.
                                Under this leadership,
                                the company has built a reputation for reliability, innovation, and ethical
                                conduct-fostering a strong organizational culture that prioritizes safety,
                                accountability, and long-term client partnerships.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Member 2 -->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div style="display: flex; align-items: flex-start;">
                        <div style="flex-shrink: 0; margin-right: 20px;">
                            <img src="{{ asset('frontend/assets/img/team/02.jpg') }}" alt="Fred Soita"
                                style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; border: 1px solid #333;">
                        </div>
                        <div>
                            <h5
                                style="text-transform: uppercase; font-weight: bold; font-family: sans-serif; border-bottom: 2px solid #000; padding-bottom: 5px; margin-bottom: 5px; font-size: 16px; color: #000;">
                                OPERATIONS DIRECTOR
                            </h5>
                            <div style="font-weight: bold; color: #666; font-size: 14px; margin-bottom: 10px;">
                                Fred Soita
                            </div>
                            <p
                                style="text-align: left; font-family: sans-serif; line-height: 1.5; font-size: 13px; color: #333;">
                                Fred brings over 25 years of extensive experience in the private security industry,
                                providing seasoned leadership grounded in deep operational knowledge and practical field
                                expertise. With a proven track record in managing complex security operations, personnel
                                deployment, and risk mitigation strategies, the Director ensures seamless service delivery
                                across all
                                assignments. This wealth of experience translates into strong command
                                structures, disciplined teams, and efficient operational systems-guaranteeing
                                consistency, responsiveness, and high standards of security performance for
                                our clients.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Member 3 -->
                <div class="col-md-6 col-lg-4 mb-5">
                    <div style="display: flex; align-items: flex-start;">
                        <div style="flex-shrink: 0; margin-right: 20px;">
                            <img src="{{ asset('frontend/assets/img/team/03.jpg') }}" alt="Rebecca Kathure"
                                style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; border: 1px solid #333;">
                        </div>
                        <div>
                            <h5
                                style="text-transform: uppercase; font-weight: bold; font-family: sans-serif; border-bottom: 2px solid #000; padding-bottom: 5px; margin-bottom: 5px; font-size: 16px; color: #000;">
                                FINANCE DIRECTOR
                            </h5>
                            <div style="font-weight: bold; color: #666; font-size: 14px; margin-bottom: 10px;">
                                Rebecca Kathure
                            </div>
                            <p
                                style="text-align: left; font-family: sans-serif; line-height: 1.5; font-size: 13px; color: #333;">
                                Our Finance Director is a Certified Accountant with over 15 years of solid experience in
                                accounting, financial management, and regulatory compliance. Bringing strong financial
                                discipline and strategic insight to the organization, the Director oversees budgeting,
                                payroll, audits, and financial reporting with
                                accuracy and transparency. This expertise ensures sound financial controls,
                                timely statutory compliance, and sustainable growth-providing clients and
                                partners with confidence in the company's stability, accountability, and
                                professional governance.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Team Area Wrapper ==-->

@endsection
