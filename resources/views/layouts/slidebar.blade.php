        <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="{{url ('/Developers') }}"><img class="main-logo size-logo" src="{{ asset('img/cisco.png')}}" alt="" /></a>
                <strong><a href="index.html"><img class="size-logoSmall" src="{{ asset('img/CiscoSmall.png')}}" alt="" /></a></strong>
            </div><br>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                    <li class="active">
                            <a title="Landing Page" href="{{ url('/Developers') }}" aria-expanded="false"><i class="fas fa-user-tie icon-color" aria-hidden="true"></i> <span class="mini-click-non">Developers</span></a>
                        </li>

                        <li>
                            <a class="" href="{{ url('/inventary') }}">
                                <i class="fas fa-boxes icon-color"></i>
								   <span  class="mini-click-non">Inventary</span>
								</a>
                           
                        </li>
                       
                        <li>
                            <a class="" href="{{ url('/Channels') }}" aria-expanded="false"><span class="fas fa-network-wired icon-color"></span> <span class="mini-click-non">canales</span></a>
                          
                        </li>
                        <li>
                            <a class="" href="{{ url('/Loans') }}" aria-expanded="false"><span class="far fa-handshake icon-color"></span> <span class="mini-click-non">Prestamos</span></a>
                            
                        </li>
                        <li>
                            <a class="" href="{{ url('/Gallery') }}" aria-expanded="false"><span class="far fa-image icon-color"></span> <span class="mini-click-non">Galeria</span></a>
                        
                        </li>
                        
                        <li>
                            <a class="" href="{{ url('/Charts') }}" aria-expanded="false"><span class="far fa-chart-bar icon-color"></span> <span class="mini-click-non">Graficos</span></a>
                    
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li><a data-toggle="collapse" data-target="#Charts" href="#">Inicio <span class="fas fa-angle-left"></span></a>
                                    <ul class="collapse dropdown-header-top">
                                        <li><a href="index.html">Dashboard v.1</a></li>
                                        <li><a href="index-1.html">Dashboard v.2</a></li>
                                        <li><a href="index-3.html">Dashboard v.3</a></li>
                                        <li><a href="analytics.html">Analytics</a></li>
                                        <li><a href="widgets.html">Widgets</a></li>
                                    </ul>
                                </li>
                                <li><a href="events.html">Event</a></li>
                                <li><a data-toggle="collapse" data-target="#demoevent" href="#">Inventario <span class="fas fa-angle-left"></span></a>
                                    <ul id="demoevent" class="collapse dropdown-header-top">
                                        <li><a href="all-professors.html">inventario</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demopro" href="#">Canales <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demopro" class="collapse dropdown-header-top">
                                        <li><a href="all-students.html">Canal</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#democrou" href="#">Prestamos <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="democrou" class="collapse dropdown-header-top">
                                        <li><a href="all-courses.html">Prestamos</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#demolibra" href="#">Galeria <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="demolibra" class="collapse dropdown-header-top">
                                        <li><a href="library-assets.html">galeria</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Graficos <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="Chartsmob" class="collapse dropdown-header-top">
                                        <li><a href="bar-charts.html">graficos</a>
                                        </li>
                                    </ul>
                                </li>
                                
                                <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                    <ul id="Pagemob" class="collapse dropdown-header-top">
                                        <li><a href="login.html">Login</a>
                                        </li>
                                        <li><a href="register.html">Register</a>
                                        </li>
                                        <li><a href="lock.html">Lock</a>
                                        </li>
                                        <li><a href="password-recovery.html">Password Recovery</a>
                                        </li>
                                        <li><a href="404.html">404 Page</a></li>
                                        <li><a href="500.html">500 Page</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu end -->
