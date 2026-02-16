@extends('layout.app')

@section('content')

    <!--== Start Page Header Area ==-->
    <div class="service-area-top parallax" data-parallax-speed="0.75"
        data-bg="{{ asset('frontend/assets/img/service/service-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title section-title--light">
                        <h2>Operational Procedures</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Header Area ==-->

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

    <!--== Start Security Operational Procedures Area Wrapper ==-->
    <div class="service-area-wrapper sp-y">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="section-title">
                        <h6>OUR SECURITY OPERATIONAL PROCEDURES</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="procedure-item">
                        <h5>Incident Detection & Reporting</h5>
                        <ul style="list-style: none; padding-left: 0; margin-bottom: 15px; font-weight: bold; color: #555;">
                            <li><i class="mdi mdi-check"></i> Guards Identify Incident</li>
                            <li><i class="mdi mdi-check"></i> Secure the Scene</li>
                            <li><i class="mdi mdi-check"></i> Report to Control Room</li>
                        </ul>
                        <p>All security incidents are immediately detected or identified by guards on duty, who prioritize
                            safety and secure the scene while promptly reporting to the control room. The guard provides
                            clear details on the nature, location, and severity of the incident, maintaining continuous
                            communication until further instructions are given.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="procedure-item">
                        <h5>Control Room & Backup Dispatch</h5>
                        <ul style="list-style: none; padding-left: 0; margin-bottom: 15px; font-weight: bold; color: #555;">
                            <li><i class="mdi mdi-check"></i> Log & Assess Incident</li>
                            <li><i class="mdi mdi-check"></i> Dispatch Backup Team</li>
                            <li><i class="mdi mdi-check"></i> Guide & Monitor Response</li>
                        </ul>
                        <p>Upon receipt of the report, the control room logs the incident, assesses its seriousness, and
                            initiates an appropriate response. This includes issuing real-time guidance to the guard,
                            notifying supervisors, and dispatching backup or rapid response teams to reinforce the site and
                            restore control where necessary.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="procedure-item">
                        <h5>Investigation & Police Reporting</h5>
                        <ul style="list-style: none; padding-left: 0; margin-bottom: 15px; font-weight: bold; color: #555;">
                            <li><i class="mdi mdi-check"></i> Engage Law Enforcement</li>
                            <li><i class="mdi mdi-check"></i> Handover Evidence</li>
                            <li><i class="mdi mdi-check"></i> Document & Review</li>
                        </ul>
                        <p>For major incidents or criminal cases, police are promptly engaged, and suspects, evidence, and
                            scene details are formally handed over. A detailed incident and investigation report is
                            prepared, reviewed by management, and shared with the client, with corrective actions
                            implemented to strengthen security and prevent recurrence.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Security Operational Procedures Area Wrapper ==-->

@endsection