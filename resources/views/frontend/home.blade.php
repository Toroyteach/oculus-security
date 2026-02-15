@extends('layout.app')

@section('content')

    <!--== Start Slider Area Wrapper ==-->
    <div class="slider-area-wrapper">
        <div id="rev_slider_11_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="business-classic"
            data-source="gallery">
            <div id="rev_slider_11_1" class="rev_slider fullwidthabanner" data-version="5.4.7">
                <ul>
                    <!-- SLIDE  -->
                    <li data-index="rs-27" data-transition="random-premium" data-slotamount="default" data-hideafterloop="0"
                        data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default"
                        data-thumb="{{ asset('frontend/assets/img/slider/01_thumb.jpg') }}" data-rotate="0"
                        data-saveperformance="off" data-title="Slide">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('frontend/assets/img/slider/01.jpg') }}" alt="Businex"
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="15" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-resizeme slide-heading" data-x="['left','left','left','left']"
                            data-hoffset="['135','135','40','40']" data-y="['top','top','top','top']"
                            data-voffset="['250','204','200','201']" data-fontsize="['60','60','50','30']"
                            data-fontweight="['600']" data-lineheight="['70','70','60','40']"
                            data-width="['650','650','600','320']" data-height="none" data-whitespace="normal"
                            data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":10,"split":"lines","splitdelay":0.1,"speed":600,"split_direction":"forward","frame":"0","from":"x:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['left']">
                            YOUR SAFETY <br> OUR PRIORITY
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme slide-txt" data-x="['left','left','left','left']"
                            data-hoffset="['135','135','40','40']" data-y="['top','top','top','top']"
                            data-voffset="['400','370','370','300']" data-fontsize="['16','20','20','20']"
                            data-fontweight="['400','400','400','400']" data-width="['600','600','600','320']"
                            data-height="none" data-whitespace="normal" data-visibility="['on','on','on','on']"
                            data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":360,"split":"lines","splitdelay":0.1,"speed":500,"split_direction":"forward","frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                            Bridging the security gap with disciplined expertise and proven operatives.

                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption Button-Outline-Secondary rev-btn" id="slide-27-layer-11"
                            data-x="['left','left','left','left']" data-hoffset="['135','135','45','40']"
                            data-y="['top','top','top','top']" data-voffset="['490','470','490','465']" data-width="none"
                            data-height="none" data-whitespace="nowrap" data-type="button" data-responsive_offset="on"
                            data-responsive="off"
                            data-frames='[{"delay":650,"speed":500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"350","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgb(8, 11, 26);"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[40,40,40,30]" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[40,40,40,30]">Learn More
                        </div>
                    </li>

                    <!-- SLIDE  -->
                    <li data-index="rs-28" data-transition="slidingoverlayvertical,slidingoverlayleft,slideoverup"
                        data-slotamount="default,default,default" data-hideafterloop="0" data-hideslideonmobile="off"
                        data-easein="default,default,default" data-easeout="default,default,default"
                        data-masterspeed="default,default,default"
                        data-thumb="{{ asset('frontend/assets/img/slider/02_thumb.jpg') }}" data-rotate="0,0,0"
                        data-saveperformance="off" data-title="Slide">
                        <!-- MAIN IMAGE -->
                        <img src="{{ asset('frontend/assets/img/slider/02.jpg') }}" alt="Businex"
                            data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat"
                            data-bgparallax="15" class="rev-slidebg" data-no-retina>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-resizeme slide-heading" data-x="['left','left','left','left']"
                            data-hoffset="['135','135','40','40']" data-y="['top','top','top','top']"
                            data-voffset="['250','204','200','201']" data-fontsize="['60','60','50','30']"
                            data-fontweight="['600']" data-lineheight="['70','70','60','40']"
                            data-width="['650','650','600','320']" data-height="none" data-whitespace="normal"
                            data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":10,"split":"chars","splitdelay":0.1,"speed":1000,"split_direction":"forward","frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['left']">
                            INVEST MONEY <br> WITH US
                        </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption tp-resizeme slide-txt" data-x="['left','left','left','left']"
                            data-hoffset="['135','135','40','40']" data-y="['top','top','top','top']"
                            data-voffset="['400','370','370','300']" data-fontsize="['16','20','20','20']"
                            data-fontweight="['400','400','400','400']" data-width="['600','600','600','320']"
                            data-height="none" data-whitespace="normal" data-visibility="['on','on','on','on']"
                            data-type="text" data-responsive_offset="on"
                            data-frames='[{"delay":360,"split":"lines","splitdelay":0.1,"speed":500,"split_direction":"forward","frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,0,0,0]">
                            Businex always try to provide the best Business Solutions for Clinets to grow up their Business
                            very sharply and smoothly.

                        </div>

                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption Button-Outline-Secondary rev-btn" data-x="['left','left','left','left']"
                            data-hoffset="['135','135','45','40']" data-y="['top','top','top','top']"
                            data-voffset="['490','470','490','465']" data-width="none" data-height="none"
                            data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off"
                            data-frames='[{"delay":650,"speed":500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"350","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgb(8, 11, 26);"}]'
                            data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                            data-paddingright="[40,40,40,30]" data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[40,40,40,30]">Learn More
                        </div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom"></div>
            </div>
        </div>
    </div>
    <!--== End Slider Area Wrapper ==-->

    <!--== Start Feature Area Wrapper ==-->
    <div class="feature-area-wrapper sm-top">
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

    <!--== Start Service Area Wrapper ==-->
    <div class="service-area-wrapper sm-top-wt">
        <div class="service-area-top parallax" data-parallax-speed="0.75"
            data-bg="{{ asset('frontend/assets/img/service/service-bg.jpg') }}">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-xl-5 m-auto text-center">
                        <div class="section-title section-title--light">
                            <h6>OUR SERVICES</h6>
                            <h2>We make it simple, providing best solutions</h2>
                            <p>Our strategy for delivery against our mission statement is rooted on our
                                thorough understanding of the markets needs and dynamics with ability
                                to formulate and deliver practical solutions par excellence By bringing
                                together a strong team of former disciplined forces and experienced
                                entrepreneurial leaders with diverse competencies and great mindsets,
                                CSS creates an excellent avenue for attainment of strategic objectives
                                with keen execution against specific client requirements.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="service-content-area">
            <div class="container">
                <div class="row mtn-30">
                    <div class="col-sm-6 col-lg-4">
                        <!-- Start Service Item -->
                        <div class="service-item">
                            <figure class="service-thumb">
                                <a href="{{ route('services.manned-guarding') }}"><img
                                        src="{{ asset('frontend/assets/img/service/01.jpg') }}" alt="Manned Services" /></a>

                                <figcaption class="service-txt">
                                    <h5>Manned Services</h5>
                                </figcaption>
                            </figure>
                            <div class="service-content">
                                <div class="service-content-inner">
                                    <h5><a href="{{ route('services.manned-guarding') }}" class="stretched-link">Manned
                                            Services</a></h5>
                                    <p>Specialized Manned guarding, Security supervisors, CCTV Controllers, Event Trained
                                        Security Officers(ETSOs), Front Trained Security Officers(FTSOs)</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <!-- Start Service Item -->
                        <div class="service-item">
                            <figure class="service-thumb">
                                <a href="{{ route('services.special-services') }}"><img
                                        src="{{ asset('frontend/assets/img/service/02.jpg') }}"
                                        alt="Special Services" /></a>

                                <figcaption class="service-txt">
                                    <h5>Special Services</h5>
                                </figcaption>
                            </figure>

                            <div class="service-content">
                                <div class="service-content-inner">
                                    <h5><a href="{{ route('services.special-services') }}" class="stretched-link">Special
                                            Services</a></h5>
                                    <p>Covert Covers(undercover), VIP Protection / Close Client Protection, Investigations &
                                        Risk Management, Security Based Journey Management, Escorts(armed/unarmed),
                                        Specialized security training, Specialized Security tech solutions</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Service Item -->
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <!-- Start Service Item -->
                        <div class="service-item">
                            <figure class="service-thumb">
                                <a href="{{ route('services.k9-unit') }}"><img
                                        src="{{ asset('frontend/assets/img/service/03.jpg') }}" alt="K-9 Services" /></a>

                                <figcaption class="service-txt">
                                    <h5>K-9 Services</h5>
                                </figcaption>
                            </figure>

                            <div class="service-content">
                                <div class="service-content-inner">
                                    <h5><a href="{{ route('services.k9-unit') }}" class="stretched-link">K-9 Services</a>
                                    </h5>
                                    <p>Guard Dogs, Explosive Detection Dogs (EDD), Narcotics Detection Dogs (NDD)</p>
                                </div>
                            </div>
                            <!-- End Service Item -->
                        </div>
                        <!-- End Service Item -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Service Area Wrapper ==-->

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

    <!--== Start Security Policy Area Wrapper ==-->
    <div class="blog-area-wrapper sm-top" style="background-color: #f8f9fa; padding-bottom: 70px; padding-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h6>OUR SECURITY POLICY</h6>
                        <p style="max-width: 800px; margin: auto;">Oculus security services Ltd had fully studied and
                            understood the information of security risks assignment and all challenges faces risk assessment
                            to enables us execute and deliver good services to our client's. This plan ensures that
                            appropriate mitigation strategies are implemented correctly as per our recommendations. Oculus
                            security services Ltd will work with you hand in hand to assess Tree Shade policies, processes,
                            and technologies to identify weaknesses, categorize risks, and recommend improvements. This
                            service helps to secure your environment and improve compliance by providing a comprehensive
                            assessment of each important aspect of your compound' security program to include but not
                            limited to:</p>
                    </div>
                </div>
            </div>

            <div class="row mtn-35">
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-content">
                            <h2 class="h5 text-center">Internal Controls</h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-content">
                            <h2 class="h5 text-center">External Controls</h2>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-content">
                            <h2 class="h5 text-center">Physical security</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-content">
                            <h2 class="h5 text-center">Policies and procedures</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-content">
                            <h2 class="h5 text-center">Vulnerabilities and threats</h2>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="blog-item">
                        <div class="blog-content">
                            <h2 class="h5 text-center">Tour of duty.</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Security Policy Area Wrapper ==-->

    <!--== Start Technical Services Area Wrapper ==-->
    <div class="technical-services-area-wrapper sm-top" style="background-color: #f8f9fa; padding: 70px 0;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h6>TECHNICAL SERVICES</h6>
                        <h2>Technology Solutions</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <ul style="list-style: none; padding-left: 0; font-size: 16px;">
                        <li style="margin-bottom: 15px;">📹 CCTV installation & monitoring</li>
                        <li style="margin-bottom: 15px;">🚨 Alarms installation & response</li>
                        <li style="margin-bottom: 15px;">🚪 Access control, biometrics & turnstiles</li>
                        <li style="margin-bottom: 15px;">🔥 Fire Alarm systems, Fire Suppression Systems</li>
                        <li style="margin-bottom: 15px;">⚡ Electric and razor fences</li>
                        <li style="margin-bottom: 15px;">🚶‍♂️ Walk through detectors</li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul style="list-style: none; padding-left: 0; font-size: 16px;">
                        <li style="margin-bottom: 15px;">🚗 Vehicle tracking</li>
                        <li style="margin-bottom: 15px;">🚚 Fleet Management & Tagging</li>
                        <li style="margin-bottom: 15px;">💣 Bomb detectors</li>
                        <li style="margin-bottom: 15px;">☢️ X-ray machines</li>
                        <li style="margin-bottom: 15px;">🛰️ Tracking Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--== End Technical Services Area Wrapper ==-->

    <!--== Start Clients Area Wrapper ==-->
    <div class="brand-logo-area sm-top" style="padding-bottom: 70px;">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h6>SOME OF OUR CLIENTS</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h5>International Organizations</h5>
                    <p>Grupotec plant in Eldoret, Walter Reed US Army Research Centre Kericho and Kisumu, CDC Kisumu,
                        African Population and Research Centre, African Technology and Research Centre, Red Cross, Coca Cola
                        Industries, Voltalia Kenya Limited.</p>

                    <h5>Hospitality/Freight Industry</h5>
                    <p>Mapping Itd (Ruiru-eastern bypass), East Africa Terminals Ltd (EATL-Mombasa). Sports view hotel
                        kasarani, White sands Hotel (Security Consultancy), Lambada (Security Consultancy) Group Hotel,
                        Shaza Plaza (Consultancy), Master Garden Hotel (All these are stationed in Mombasa), the Kenya Red
                        Cross Training School, Bounty Hotels Nairobi, The BOMA Hotels (Kenya Red Cross), Sunshine Medical
                        and Diagnostic Hospital, Bonds Hotel Upper Hill, Sultan group of hotels, - Nairobi etc.</p>

                    <h5>Learning Institutions</h5>
                    <p>Markuz-udul(Athi River) Silver gate Academy, CITAM Institutions, Kapkong High School, Kapkeben High
                        School, Rongo University (Security Consultancy), Kabianga University -(Security Consultancy) Gifted
                        hands kilelesha.</p>
                </div>
                <div class="col-lg-6">
                    <h5>Commercial/Residential Properties</h5>
                    <p>Golden Miles(allsorps), Princess park, (Lavingtone),Lynwood (Mlolongo), RiverPark Estate (Athi
                        River), Sidai Village(Athi River), Great Wall Apartments (Mlolongo), Spring Ville Apartments
                        (Syokimau), Adrian group (Kikuyu),Lifestyle Apartments, Kantaria Properties, Jasmin center, Lanyavu
                        Gardens Ltd, Amara Apartments, Great wall Shangai Road, Hass Consultants Estate Developers, Mac
                        Gardens, Shade Acres, Rangers Court (South C), Cobra Apartments (South B), Daidai Residence (South
                        B), Zainulabidin Shariff (South B)</p>

                    <h5>Industries</h5>
                    <p>GOLDEN Africa Kenya Itd (Athi River), BOBMIL Industries, Maxam Heineken Distributors, Equator
                        Bottlers (Coca Cola), Mamba Tanks, Samura Engineers, Jeet Motors Ltd among others</p>

                    <h5>Construction Firms</h5>
                    <p>Nipsan Construction Company, Mark Properties Constructions, Erdermann Constructions, Lake Basin Mall
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--== End Clients Area Wrapper ==-->

    <!--== Start Fun Fact Area Wrapper ==-->
    <div class="fun-fact-area sm-top parallax" data-parallax-speed="0.70"
        data-bg="{{ asset('frontend/assets/img/fun-fact-bg.jpg') }}">
        <div class="container">
            <div class="row mtn-40">
                <div class="col-6 col-md-3 text-center">
                    <div class="counter-item">
                        <h2 class="counter-number"><span class="counter">2654</span></h2>
                        <h6 class="counter-txt">Happy Clients</h6>
                    </div>
                </div>

                <div class="col-6 col-md-3 text-center">
                    <div class="counter-item">
                        <h2 class="counter-number"><span class="counter">1520</span></h2>
                        <h6 class="counter-txt">Project Done</h6>
                    </div>
                </div>

                <div class="col-6 col-md-3 text-center">
                    <div class="counter-item">
                        <h2 class="counter-number"><span class="counter">120</span></h2>
                        <h6 class="counter-txt">Awards Win</h6>
                    </div>
                </div>


                <div class="col-6 col-md-3 text-center">
                    <div class="counter-item">
                        <h2 class="counter-number"><span class="counter">3580</span></h2>
                        <h6 class="counter-txt">Cups Coffee</h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Fun Fact Area Wrapper ==-->

@endsection