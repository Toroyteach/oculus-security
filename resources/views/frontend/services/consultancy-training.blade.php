@extends('layout.app')

@section('content')

    <!--== Start Page Header Area ==-->
    <div class="service-area-top parallax" data-parallax-speed="0.75" data-bg="{{ asset('frontend/assets/img/service/service-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title section-title--light">
                        <h2>Consultancy & Training</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Page Header Area ==-->

    <!--== Start Training Area Wrapper ==-->
    <div class="testimonial-area bg-offwhite sp-y">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title mb-0">
                        <h6>TRAINING PROGRAMME</h6>
                        <h2>OSS Training Institute</h2>
                        <p>OSS Training Institute is a subsidiary institution under Oculus security services Ltd. solely
                            focusing on the training of
                            security officers in an extensive in-house training based on a formal curriculum. The following
                            are some of the modules
                            covered for ideal security management.</p>
                    </div>
                </div>

                <div class="col-lg-6 ms-auto">
                    <div class="testimonial-content-wrap">
                        <div class="training-modules" style="background: #fff; padding: 30px; border-radius: 5px;">
                            <h4>Security Management and Guarding Modules</h4>
                            <ul style="list-style-type: disc; padding-left: 20px;">
                                <li>Security management</li>
                                <li>Crime Prevention</li>
                                <li>Access and Egress Control</li>
                                <li>Criminal law and criminal procedures</li>
                                <li>Counter-Terrorism</li>
                                <li>Public relations</li>
                                <li>Intelligence gathering</li>
                                <li>Communication skills</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-6 mb-4">
                    <div class="training-modules"
                        style="background: #fff; padding: 30px; border-radius: 5px; height: 100%;">
                        <h4><i class="mdi mdi-account-search"></i> RECRUITMENT & VETTING</h4>

                        <h5 class="mt-3">RECRUITMENT REQUIREMENTS:</h5>
                        <ul style="list-style: none; padding-left: 0;">
                            <li><i class="mdi mdi-check-circle-outline"></i> Oral and written interview test</li>
                            <li><i class="mdi mdi-check-circle-outline"></i> Background Checks</li>
                            <li><i class="mdi mdi-check-circle-outline"></i> Physical fitness test</li>
                            <li><i class="mdi mdi-check-circle-outline"></i> Medical fitness test</li>
                        </ul>

                        <h5 class="mt-3">Documents:</h5>
                        <ul style="list-style: none; padding-left: 0;">
                            <li><i class="mdi mdi-file-document"></i> 2 current Passport photos</li>
                            <li><i class="mdi mdi-file-document"></i> National ID</li>
                            <li><i class="mdi mdi-file-document"></i> Birth certificate</li>
                            <li><i class="mdi mdi-file-document"></i> 3 Referees</li>
                            <li><i class="mdi mdi-file-document"></i> Valid Certificate of good conduct</li>
                            <li><i class="mdi mdi-file-document"></i> KCPE & KCSE certificate</li>
                            <li><i class="mdi mdi-file-document"></i> School Leaving certificates</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="training-modules"
                        style="background: #fff; padding: 30px; border-radius: 5px; height: 100%;">
                        <h4><i class="mdi mdi-shield-account"></i> SECURITY OFFICER PROFILE</h4>

                        <p class="mt-3">We Recruit highly qualified Trainees with the following specifications:</p>
                        <ul style="list-style: none; padding-left: 0;">
                            <li><i class="mdi mdi-account-check"></i> 24-45 years</li>
                            <li><i class="mdi mdi-account-check"></i> Form 4, D+ and above</li>
                            <li><i class="mdi mdi-account-check"></i> Good written and spoken English & Kiswahili</li>
                            <li><i class="mdi mdi-account-check"></i> Well groomed and presentable</li>
                            <li><i class="mdi mdi-account-check"></i> Village sketch maps, nuclear and extended family
                                background, employment background, referee checks etc.</li>
                        </ul>

                        <p class="mt-3">Our security officers undergo 2 weeks basic Guarding Course (BGC) covering:</p>
                        <ul style="list-style: none; padding-left: 0;">
                            <li><i class="mdi mdi-security"></i> Security threats/ Protection of information</li>
                            <li><i class="mdi mdi-security"></i> Introduction to Criminal Offences</li>
                            <li><i class="mdi mdi-security"></i> Arrest and restrain by Private security Operatives</li>
                            <li><i class="mdi mdi-security"></i> Roles and duties of security officers</li>
                            <li><i class="mdi mdi-security"></i> Discipline</li>
                            <li><i class="mdi mdi-security"></i> Vetting/observations</li>
                            <li><i class="mdi mdi-security"></i> Customer care/public relations</li>
                            <li><i class="mdi mdi-security"></i> Occurrence book and report writing</li>
                            <li><i class="mdi mdi-security"></i> Patrolling techniques</li>
                            <li><i class="mdi mdi-security"></i> Handling of crime scenes</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== End Training Area Wrapper ==-->

@endsection
