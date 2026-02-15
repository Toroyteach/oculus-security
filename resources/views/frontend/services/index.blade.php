@extends('layout.app')

@section('content')

    <!--== Start Page Header Area ==-->
    <div class="service-area-top parallax" data-parallax-speed="0.75" data-bg="{{ asset('frontend/assets/img/service/service-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title section-title--light">
                        <h2>Our Services</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Header Area ==-->

    <!--== Start Service Area Wrapper ==-->
    <div class="service-area-wrapper sp-y">
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
                        </div>
                        <!-- End Service Item -->
                    </div>

                    <div class="col-sm-6 col-lg-4">
                        <!-- Start Service Item -->
                        <div class="service-item">
                            <figure class="service-thumb">
                                <a href="{{ route('services.consultancy-training') }}"><img
                                        src="{{ asset('frontend/assets/img/about.jpg') }}" alt="Consultancy & Training" /></a>

                                <figcaption class="service-txt">
                                    <h5>Consultancy & Training</h5>
                                </figcaption>
                            </figure>

                            <div class="service-content">
                                <div class="service-content-inner">
                                    <h5><a href="{{ route('services.consultancy-training') }}" class="stretched-link">Consultancy & Training</a>
                                    </h5>
                                    <p>OSS Training Institute offers extensive in-house training based on a formal curriculum including Security Management, Crime Prevention, and more.</p>
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

@endsection
