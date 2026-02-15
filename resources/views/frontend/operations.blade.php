@extends('layout.app')

@section('content')

    <!--== Start Page Header Area ==-->
    <div class="service-area-top parallax" data-parallax-speed="0.75" data-bg="{{ asset('frontend/assets/img/service/service-bg.jpg') }}">
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
