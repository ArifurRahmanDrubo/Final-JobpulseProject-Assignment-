<header>
    <!-- Header Start -->
   <div class="header-area header-transparrent">
       <div class="headder-top header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="{{ url('/') }}"><img width="50%" src="{{ asset('assets') }}/images/jobPulse/jobpulse.png" alt=""></a>
                        </div>  
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="menu-wrapper">
                            <!-- Main-menu -->
                            <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                    <ul id="navigation">
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ url('/findJobs') }}">Find a Jobs </a></li>
                                        <li><a href="{{ url('/about') }}">About</a></li>
                                       
                                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>          
                            <!-- Header-btn -->
                            <div class="header-btn d-none f-right d-lg-block">
                                @auth
                                <a href="{{ url('/dashboard') }}" class=" btn" style="font-size: 14px; padding: 18px 28px; border-radius: 10px;">Go to Dashboard</a>  
                                @endauth
                                @guest
                                <div class="d-flex" class="header-btn d-none f-right d-lg-block">
                                    <div class="dropdown mr-2">
                                        <button class="btn btn-light btn-sm rounded-pill dropdown-toggle" style="font-size: 14px; padding: 18px 28px; border-radius: 10px;"  id="registerDropdown" data-toggle="dropdown">
                                            Register
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="registerDropdown" >
                                            <p class="mb-0 font-weight-normal float-left dropdown-header">Register As</p>
                                            <a class="dropdown-item" href="{{ url('/companyRegister') }}">Company</a>
                                            <a class="dropdown-item" href="{{ url('/candidateRegister') }}">Candidate</a>
                                        </div>
                                    </div>
                                    <div class="dropdown">
                                        <button class="btn head-btn1 dropdown-toggle" style="font-size: 14px; padding: 18px 28px; border-radius: 10px;" type="submit" id="loginDropdown" data-toggle="dropdown">
                                            Login
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="loginDropdown">
                                            <p class="mb-0 font-weight-normal float-left dropdown-header">Login As</p>
                                            <a class="dropdown-item" href="{{ url('/companyLogin') }}">Company</a>
                                            <a class="dropdown-item" href="{{url('/candidateLogin')}}">Candidate</a>
                                        </div>
                                    </div>
                                </div>
                                @endguest
                               
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
       </div>
   </div>
    <!-- Header End -->
</header>