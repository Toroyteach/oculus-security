@extends('layout.app')

@section('content')

    <!--== Start Page Header Area ==-->
    <div class="service-area-top parallax" data-parallax-speed="0.75" data-bg="{{ asset('frontend/assets/img/service/service-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title section-title--light">
                        <h2>Special Services</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Header Area ==-->

    <!--== Start Service Details Area Wrapper ==-->
    <div class="service-details-area-wrapper sp-y">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="service-details-content">
                        <figure class="service-details-thumb mb-4">
                            <img src="{{ asset('frontend/assets/img/service/02.jpg') }}" alt="Special Services" class="w-100"/>
                        </figure>
                        <h3>Special Services</h3>
                        <p>Covert Covers(undercover), VIP Protection / Close Client Protection, Investigations &
                            Risk Management, Security Based Journey Management, Escorts(armed/unarmed),
                            Specialized security training, Specialized Security tech solutions</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Service Details Area Wrapper ==-->

@endsection
