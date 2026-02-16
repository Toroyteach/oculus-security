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
                            OCULUS SECURITY <br> SERVICES
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
                                Your Safety, Our Priority. We provide reliable security to complement government efforts and protect private entities.

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
                                data-paddingleft="[40,40,40,30]"><a href="{{ route('about') }}" style="color: inherit;">Learn More</a>
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
                                EXPERT <br> SECURITY TEAM
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
                                A family of special breeds of operatives bringing together retired Kenya Defense Forces and National Police Service officers.

                            </div>

                            <!-- LAYER NR. 6 -->
                            <div class="tp-caption Button-Outline-Secondary rev-btn" data-x="['left','left','left','left']"
                                data-hoffset="['135','135','45','40']" data-y="['top','top','top','top']"
                                data-voffset="['490','470','490','465']" data-width="none" data-height="none"
                                data-whitespace="nowrap" data-type="button" data-responsive_offset="on" data-responsive="off"
                                data-frames='[{"delay":650,"speed":500,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"350","ease":"Linear.easeNone","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255,255,255,1);bg:rgb(8, 11, 26);"}]'
                                data-textAlign="['center','center','center','center']" data-paddingtop="[0,0,0,0]"
                                data-paddingright="[40,40,40,30]" data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[40,40,40,30]"><a href="{{ route('services') }}" style="color: inherit;">Our Services</a>
                            </div>
                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom"></div>
                </div>
            </div>
        </div>
        <!--== End Slider Area Wrapper ==-->

        <!--== Start About Area Wrapper ==-->
        <div class="about-area-wrapper sm-top">
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
                            <p>The idea of building OSS was informed by the worrying gap existing due to the failure or lack of reliable security outfit to complement and supplement government efforts to provide adequate security to private entities. Oculus Security Services (OSS) is a family of special breeds of operatives bringing together retired Kenya Defense Forces officers and National Police Service with world class training.</p>
                            <a href="{{ route('about') }}" class="btn-about">MORE DETAILS <i class="mdi mdi-chevron-double-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End About Area Wrapper ==-->

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
                                <p>To protect and empower our local communities by providing security that deters crime and keeps us safe.</p>
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
                                <p>To be the number ONE Security Company in Kenya followed with an aggressive expansion into East and Central Africa.</p>
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
                                <p>Retired Kenya Defense Forces officers and National Police Service with world class training.</p>
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
                                <h2 class="mb-0">Comprehensive Security Solutions</h2>
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
                                    <a href="{{ route('services.manned-guarding') }}"><img src="{{ asset('frontend/assets/img/service/01.jpg') }}"
                                            alt="Businex-Service" /></a>

                                    <figcaption class="service-txt">
                                        <h5>Manned Services</h5>
                                    </figcaption>
                                </figure>
                                <div class="service-content">
                                    <div class="service-content-inner">
                                        <h5><a href="{{ route('services.manned-guarding') }}" class="stretched-link">Manned Services</a></h5>
                                        <p>Specialized Manned guarding, Security supervisors, CCTV Controllers, Event Trained Security Officers.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Service Item -->
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <!-- Start Service Item -->
                            <div class="service-item">
                                <figure class="service-thumb">
                                    <a href="{{ route('services.special-services') }}"><img src="{{ asset('frontend/assets/img/service/02.jpg') }}"
                                            alt="Businex-Service" /></a>

                                    <figcaption class="service-txt">
                                        <h5>Special Services</h5>
                                    </figcaption>
                                </figure>

                                <div class="service-content">
                                    <div class="service-content-inner">
                                        <h5><a href="{{ route('services.special-services') }}" class="stretched-link">Special Services</a></h5>
                                        <p>Covert Covers, VIP Protection, Investigations & Risk Management, Escorts, Specialized security training.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Service Item -->
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <!-- Start Service Item -->
                            <div class="service-item">
                                <figure class="service-thumb">
                                    <a href="{{ route('services.k9-unit') }}"><img src="{{ asset('frontend/assets/img/service/03.jpg') }}"
                                            alt="Businex-Service" /></a>

                                    <figcaption class="service-txt">
                                        <h5>K-9 Services</h5>
                                    </figcaption>
                                </figure>

                                <div class="service-content">
                                    <div class="service-content-inner">
                                        <h5><a href="{{ route('services.k9-unit') }}" class="stretched-link">K-9 Services</a></h5>
                                        <p>Guard Dogs, Explosive Detection Dogs (EDD), Narcotics Detection Dogs (NDD).</p>
                                    </div>
                                </div>
                                <!-- End Service Item -->
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <!-- Start Service Item -->
                            <div class="service-item">
                                <figure class="service-thumb">
                                    <a href="{{ route('services.consultancy-training') }}"><img src="{{ asset('frontend/assets/img/service/04.jpg') }}"
                                            alt="Businex-Service" /></a>

                                    <figcaption class="service-txt">
                                        <h5>Consultancy & Training</h5>
                                    </figcaption>
                                </figure>
                                <div class="service-content">
                                    <div class="service-content-inner">
                                        <h5><a href="{{ route('services.consultancy-training') }}" class="stretched-link">Consultancy & Training</a></h5>
                                        <p>OSS Training Institute offers extensive in-house training based on a formal curriculum.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Service Item -->
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <!-- Start Service Item -->
                            <div class="service-item">
                                <figure class="service-thumb">
                                    <a href="{{ route('services.technology-solutions') }}"><img src="{{ asset('frontend/assets/img/service/05.jpg') }}"
                                            alt="Businex-Service" /></a>

                                    <figcaption class="service-txt">
                                        <h5>Technology Solutions</h5>
                                    </figcaption>
                                </figure>

                                <div class="service-content">
                                    <div class="service-content-inner">
                                        <h5><a href="{{ route('services.technology-solutions') }}" class="stretched-link">Technology Solutions</a></h5>
                                        <p>CCTV, Alarms, Access control, Fire Systems, Electric fences, Vehicle tracking, Home Automation.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Service Item -->
                        </div>

                        <div class="col-sm-6 col-lg-4">
                            <!-- Start Service Item -->
                            <div class="service-item">
                                <figure class="service-thumb">
                                    <a href="{{ route('services.special-services') }}"><img src="{{ asset('frontend/assets/img/service/06.jpg') }}"
                                            alt="Businex-Service" /></a>

                                    <figcaption class="service-txt">
                                        <h5>Investigations</h5>
                                    </figcaption>
                                </figure>

                                <div class="service-content">
                                    <div class="service-content-inner">
                                        <h5><a href="{{ route('services.special-services') }}" class="stretched-link">Investigations</a></h5>
                                        <p>Professional investigations and risk management services for corporate and private clients.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End Service Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Service Area Wrapper ==-->

        <!--== Start Testimonial Area Wrapper ==-->
        <div class="testimonial-area bg-offwhite sp-y sm-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="section-title mb-0">
                            <h6>TESTIMONIALS</h6>
                            <h2>Our Customer <br>Loves What we do</h2>
                            <p><strong>Oculus Security</strong> is dedicated to providing top-tier security solutions. Our clients trust us to protect their assets and ensure their safety with professionalism and integrity.</p>
                        </div>

                        <div class="testimonial-carousel-dots"></div>
                    </div>

                    <div class="col-lg-6 ms-auto">
                        <div class="testimonial-content-wrap">
                            <div class="testimonial-content">
                                <!-- Start Testimonial Item -->
                                <div class="testimonial-item">
                                    <div class="testimonial-thumb">
                                        <img src="{{ asset('frontend/assets/img/testimonial/client-01.jpg') }}" alt="Businex" />
                                    </div>

                                    <div class="testimonial-txt">
                                        <img src="{{ asset('frontend/assets/img/icons/quote.png') }}" alt="Businex" />
                                        <p>Very much happy with the professional security services provided. They are sharp and reliable.</p>
                                        <h5 class="client-name">David Loyed</h5>
                                    </div>
                                </div>
                                <!-- End Testimonial Item -->

                                <!-- Start Testimonial Item -->
                                <div class="testimonial-item">
                                    <div class="testimonial-thumb">
                                        <img src="{{ asset('frontend/assets/img/testimonial/client-02.jpg') }}" alt="Businex" />
                                    </div>

                                    <div class="testimonial-txt">
                                        <img src="{{ asset('frontend/assets/img/icons/quote.png') }}" alt="Businex" />
                                        <p>The K-9 unit is exceptional. I feel much safer knowing Oculus is on the job.</p>
                                        <h5 class="client-name">Alex Tuntuni</h5>
                                    </div>
                                </div>
                                <!-- End Testimonial Item -->

                                <!-- Start Testimonial Item -->
                                <div class="testimonial-item">
                                    <div class="testimonial-thumb">
                                        <img src="{{ asset('frontend/assets/img/testimonial/client-03.jpg') }}" alt="Businex" />
                                    </div>

                                    <div class="testimonial-txt">
                                        <img src="{{ asset('frontend/assets/img/icons/quote.png') }}" alt="Businex" />
                                        <p>Their technology solutions for home automation and CCTV are top notch.</p>
                                        <h5 class="client-name">John Fault</h5>
                                    </div>

                                </div>
                                <!-- End Testimonial Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Testimonial Area Wrapper ==-->

        <!--== Start Team Area Wrapper ==-->
        <div class="team-area-wrapper bg-img sp-y" data-bg="{{ asset('frontend/assets/img/team/team-bg.jpg') }}">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <div class="section-title section-title--light mb-lg-0">
                            <h6>MEET OUR TEAM</h6>
                            <h2>Quality Management <br>Team</h2>
                            <p><strong>Oculus Security</strong> Quality Management Team is committed to ensuring that every service we deliver consistently meets and exceeds client expectations.
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-8">
                        <div class="team-content-wrap slick-dots--light mtn-md-5">
                            <div class="team-mem-item">
                                <figure class="member-pic">
                                    <img src="{{ asset('frontend/assets/img/team/01.jpg') }}" alt="Team-Businex" />
                                </figure>
                                <div class="member-info">
                                    <h5><a href="{{ route('about') }}" class="stretched-link">Brian Ngetich</a></h5>
                                    <span class="designation">Managing Director</span>
                                </div>
                            </div>

                            <div class="team-mem-item">
                                <figure class="member-pic">
                                    <img src="{{ asset('frontend/assets/img/team/02.jpg') }}" alt="Team-Businex" />
                                </figure>
                                <div class="member-info">
                                    <h5><a href="{{ route('about') }}" class="stretched-link">Fred Soita</a></h5>
                                    <span class="designation">Operations Director</span>
                                </div>
                            </div>

                            <div class="team-mem-item">
                                <figure class="member-pic">
                                    <img src="{{ asset('frontend/assets/img/team/03.jpg') }}" alt="Team-Businex" />
                                </figure>
                                <div class="member-info">
                                    <h5><a href="{{ route('about') }}" class="stretched-link">Rebecca Kathure</a></h5>
                                    <span class="designation">Finance Director</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Team Area Wrapper ==-->

        <!--== Start Blog Area Wrapper ==-->
        <div class="blog-area-wrapper sm-top">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section-title">
                            <h6>OPERATIONS</h6>
                            <h2 class="mb-0">Security Operational <br>Procedures</h2>
                        </div>
                    </div>
                </div>

                <div class="row mtn-35">
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog-content">
                                <h2 class="h5"><a href="{{ route('operations') }}">Incident Detection</a></h2>
                                <p>All security incidents are immediately detected or identified by guards on duty, who prioritize safety and secure the scene while promptly reporting to the control room.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog-content">
                                <h2 class="h5"><a href="{{ route('operations') }}">Control Room Dispatch</a></h2>
                                <p>The control room logs the incident, assesses its seriousness, and initiates an appropriate response, including dispatching backup or rapid response teams.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog-content">
                                <h2 class="h5"><a href="{{ route('operations') }}">Investigation & Reporting</a></h2>
                                <p>For major incidents, police are engaged. A detailed incident and investigation report is prepared, reviewed by management, and shared with the client.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Blog Area Wrapper ==-->

        <!--== Start Brand Logo Area Wrapper ==-->
        <div class="brand-logo-area sm-top">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="brand-logo-content slick-row-20">
                            <div class="brand-logo-item">
                                <a href="#"><img src="{{ asset('frontend/assets/img/brand-logo/01.png') }}"
                                        alt="Businex-Logo" /></a>
                            </div>

                            <div class="brand-logo-item">
                                <a href="#"><img src="{{ asset('frontend/assets/img/brand-logo/02.png') }}"
                                        alt="Businex-Logo" /></a>
                            </div>

                            <div class="brand-logo-item">
                                <a href="#"><img src="{{ asset('frontend/assets/img/brand-logo/03.png') }}"
                                        alt="Businex-Logo" /></a>
                            </div>

                            <div class="brand-logo-item">
                                <a href="#"><img src="{{ asset('frontend/assets/img/brand-logo/04.png') }}"
                                        alt="Businex-Logo" /></a>
                            </div>

                            <div class="brand-logo-item">
                                <a href="#"><img src="{{ asset('frontend/assets/img/brand-logo/05.png') }}"
                                        alt="Businex-Logo" /></a>
                            </div>

                            <div class="brand-logo-item">
                                <a href="#"><img src="{{ asset('frontend/assets/img/brand-logo/03.png') }}"
                                        alt="Businex-Logo" /></a>
                            </div>

                            <div class="brand-logo-item">
                                <a href="#"><img src="{{ asset('frontend/assets/img/brand-logo/01.png') }}"
                                        alt="Businex-Logo" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End Brand Logo Area Wrapper ==-->

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