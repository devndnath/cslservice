<div id="fb-root"></div>
    <div id="top_bar">
    <div class="header_top">
        <div class="container">
            <ul class="list-unstyled m-0">
                <li>
                    <a href="#">
                        <!-- <i class="fas fa-bullhorn me-1"></i> -->
                        <span class="d-none d-sm-inline-block hire">Hiring</span>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://maps.app.goo.gl/XWAZjfcgLhT8wYWR8">
                        <!-- <i class="fas fa-map-marker-alt me-1"></i> -->
                        <span class="d-none d-sm-inline-block">Office Location</span>
                    </a>
                </li>
                <li>
                    <a href="tel:+8801893115555">
                        <!-- <i class="bx bx-phone me-1"></i> -->
                        <span class="d-none d-sm-inline-block">+880 1893-115555</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <!-- <i class="bx bx-log-in-circle me-1"></i> -->
                        <span class="d-none d-sm-inline-block">Login</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

    <style>
        #ec {
            margin-top: 0 !important;
        }
    </style>
    <header class="shadow-sm">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="header_middle d-flex justify-content-between d-lg-none">
                    <div class="header_left">
                        <a class="" href="{{ Route('home') }}">
                            <div class="brand p-2">
                                <img class="img-fluid" loading="lazy"
                                   src="{{ url('build/assets/images/logo/cslservice.jpg') }}"
                                    alt="CSL Service" height="100" width="300"
                                    style="height: 50px;width: 200px;" title="CSL Service">
                            </div>
                        </a>
                    </div>
                    <div class="header_right d-flex align-items-center">
                    </div>
                </div>
            </div>
            <nav class="main_menu mt-2">
                <div class="brand sticky-brand">
                    <a class="" href="{{ Route('home') }}">
                        <img class="img-fluid" loading="lazy"
                             src="{{ url('build/assets/images/logo/cslservice.jpg') }}" 
                            alt="CSL Service" height="70" width="70"
                            style="height: 60px;width: 250px;">
                    </a>
                </div>
                <ul class="nav custom-nav" style="opacity: 0">
                    <div class="header_middle d-flex justify-content-between">
                        <div class="header_left">
                            <a class="" href="{{ Route('home') }}">
                                <div class="brand newheader" style="margin-right: 147px;">
                                    <img class="" loading="lazy"
                                    src="{{ url('build/assets/images/logo/cslservice.jpg') }}" 
                                        alt="CSL Service" height="100" width="300"
                                        style="height: 65px;width: 240px;"
                                        title="CSL Service">
                                </div>
                            </a>
                        </div>
                        <div class="header_right d-flex align-items-center">
                        </div>
                    </div>
                    <li class="nav-item" style="justify-content: center; align-items: center;">
                        <a class="nav-link" href="{{ Route('home') }}">
                            
                            <span class="">Home</span>
                        </a>
                    </li>
                    <li class="has_dropdown has_mega_menu" style="justify-content: center; align-items: center;">
                        <a class="nav-link" href="{{Route('About-Us')  }}">Company</a>
                        <ul class="nav_dropdown container">
                            <li class="nav-item">
                                <a class="nav-link newnav" href="{{Route('About-Us')}}">
                                    <div class="d-flex align-items-center">
                                        <div class="menu-item-icon">
                                            <img  src="{{ url('build/assets/images/company/aboutus.png') }}"
                                            
                                                alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-title">
                                                About Us
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link newnav" href="{{ Route('Why-us') }}">
                                    <div class="d-flex align-items-center">
                                        <div class="menu-item-icon">
                                            <img src="{{ url('build/assets/images/company/whyus.png')}}"
                                            
                                                alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-title">
                                                Why Us
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link newnav" href="{{ Route('clients') }}">
                                    <div class="d-flex align-items-center">
                                        <div class="menu-item-icon">
                                            <img 
                                            src="{{ url('build/assets/images/company/clients.png')}}"
                                            
                                                alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-title">
                                                Clients
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link newnav" href="{{ Route('partnars') }}">
                                    <div class="d-flex align-items-center">
                                        <div class="menu-item-icon">
                                            <img 
                                             src="{{ url('build/assets/images/company/partners.png')}}"
                                            
                                                alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-title">
                                                Partners
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link newnav" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="menu-item-icon">
                                            <img 
                                            src="{{ url('build/assets/images/company/awards.png')}}"
                                                alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-title">
                                                Award & Certificates
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li> -->
                            <!-- <li class="nav-item">
                                <a class="nav-link newnav" href="Teams.html">
                                    <div class="d-flex align-items-center">
                                        <div class="menu-item-icon">
                                            <img 
                                            src="{{ url('build/assets/images/company/teams.png')}}"
                                            
                                                alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-title">
                                                Teams
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>-->
                        </ul>
                    </li>
                    <li class="has_dropdown has_mega_menu" style="justify-content: center; align-items: center;">
                        <a class="nav-link" href="#">Solutions </a>
                        <ul class="nav_dropdown container">
                            <li class="nav-item">
                                <a class="nav-link newnav" href="https://cslitbd.com/">
                                    <div class="d-flex align-items-center">
                                        <div class="menu-item-icon">
                                            <img 
                                            src="{{ url('build/assets/images/solutionnavbar/software-development.png')}}"
                                            
                                                alt="" style="padding: 10px 0px 0px 10px;">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-title">Software Development</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link newnav" href="{{ Route('Structure-Local-Area-Network') }}">
                                    <div class="d-flex align-items-center">
                                        <div class="menu-item-icon">
                                            <img 
                                            src="{{ url('build/assets/images/solutionnavbar/local-area.png')}}"
                                                alt="" style="padding: 10px 0px 0px 10px;">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-title">Structure Local Area Network (LAN).</div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link newnav" href="maxhub.html">
                                    <div class="d-flex align-items-center">
                                        <div class="menu-item-icon">
                                        
                                            <img src="{{ url('build/assets/images/solutionnavbar/IFP.png')}}"
                                                alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-title">
                                                Interactive Display
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link newnav" href="{{ Route('Fiber-Optic-Backbone') }}">
                                    <div class="d-flex align-items-center">
                                        <div class="menu-item-icon">
                                            <img 
                                            src="{{ url('build/assets/images/solutionnavbar/wire.png')}}"
                                                alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-title">
                                                Fiber Optic Backbone
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link newnav" href="{{ Route('Automate-Ip-Surveillance-and-Cctv') }}">
                                    <div class="d-flex align-items-center">
                                        <div class="menu-item-icon">
                                            <img 
                                            src="{{ url('build/assets/images/solutionnavbar/cctv-camera-icon.png')}}"
                                            
                                                alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-title">Automated IP Surveillance & CCTV </div>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link newnav" href="{{ Route('Smart-ip-pabx') }}">
                                    <div class="d-flex align-items-center">
                                        <div class="menu-item-icon">
                                            <img 
                                            src="{{ url('build/assets/images/solutionnavbar/phone.png')}}"
                                            
                                                alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-title">
                                                Smart IP PABX
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link newnav" href="{{ Route('Smart-wireless') }}">
                                    <div class="d-flex align-items-center">
                                        <div class="menu-item-icon">
                                            <img src="{{ url('build/assets/images/solutionnavbar/smart-city.png')}}"
                                                alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-title">
                                                Smart Wireless
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <!-- <li class="nav-item">
                                <a class="nav-link newnav" href="#">
                                    <div class="d-flex align-items-center">
                                        <div class="menu-item-icon">
                                            <img src="{{ url('build/assets/images/solutionnavbar/data-center.png')}}"
                                                alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-title">
                                                AI Based Data Centre
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link newnav" href="{{ Route('Automated-Smart-Classroom-Lab') }}">
                                    <div class="d-flex align-items-center">
                                        <div class="menu-item-icon">
                                            <img src="{{ url('build/assets/images/solutionnavbar/student.png')}}"
                                                alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-title">
                                                Automated Smart Classroom /Lab
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link newnav" href="{{ route('enterprise-server-and-storage') }}">
                                    <div class="d-flex align-items-center">
                                        <div class="menu-item-icon">
                                            <img src="{{ url('build/assets/images/solutionnavbar/repair.png')}}"
                                                alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-title">
                                                Enterprise Server & Storage
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link newnav" href="{{ Route('Smart-Public-Addressing-System-Solution') }}">
                                    <div class="d-flex align-items-center">
                                        <div class="menu-item-icon">
                                            <img src="{{ url('build/assets/images/solutionnavbar/microphone.png')}}"
                                                alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-title">
                                                Smart Public Addressing (PA) System
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link newnav" href="{{ Route('Access-control-and-attendance-system') }}">
                                    <div class="d-flex align-items-center">
                                        <div class="menu-item-icon">
                                            <img src="{{ url('build/assets/images/solutionnavbar/login.png')}}"
                                                alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-title">
                                                Smart Access Control And Attendance System
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link newnav" href="{{ Route('enterprise-switching-and-routing') }}">
                                    <div class="d-flex align-items-center">
                                        <div class="menu-item-icon">
                                            <img src="{{ url('build/assets/images/solutionnavbar/routing.png')}}"
                                                alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-title">
                                                Enterprise Switching And Routing
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link newnav" href="BMS.html">
                                    <div class="d-flex align-items-center">
                                        <div class="menu-item-icon">
                                            <img src="{{ url('build/assets/images/solutionnavbar/enterprise-2.png')}}"
                                                alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-title">
                                                Building Management System (BMS)
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link newnav" href="{{ Route('ICT-Consultancy-And-Project-Management') }}">
                                    <div class="d-flex align-items-center">
                                        <div class="menu-item-icon">
                                            <img src="{{ url('build/assets/images/solutionnavbar/project-management-1.png')}}"
                                                alt="" style="padding: 10px 0px 0px 10px; height:35px;">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-title">
                                                ICT Consultancy And Project Management
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link" href="maintance.php">Projects </a>-->
                    <!--</li>-->
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="">Photos </a>
                    </li> -->
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link" href="maintance.php">News & Event </a>-->
                    <!--</li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('Contact-us') }}">Contact Us </a>
                    </li>

                    <!-- <li class="nav-item">
                        <a class="nav-link" target="_blank" href="#">Shop </a>
                    </li> -->
                </ul>
            </nav>
        </div>
    </div>
</header>