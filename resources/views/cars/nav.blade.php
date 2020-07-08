
    <aside class="page-sidebar"  style="width:20%!important;">
                    <!-- BEGIN PRIMARY NAVIGATION -->
        <nav id="js-primary-nav" class="primary-nav" role="navigation">
            <!-- <div class="nav-filter">
                <div class="position-relative">
                    <input type="text" id="nav_filter_input" placeholder="Filter menu" class="form-control" tabindex="0">
                    <a href="#" onclick="return false;" class="btn-primary btn-search-close js-waves-off" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar">
                        <i class="fal fa-chevron-up"></i>
                    </a>
                </div>
            </div> -->

            <div class="info-card">
                <img  src="{{ URL::asset('img/demo/avatars/avatar-h.png') }}"class="profile-image rounded-circle"alt="Administartor">
                <div class="info-card-text">
                    <a class="d-flex align-items-center text-white">
                       <span class="text-truncate text-truncate-sm d-inline-block">Administrator</span>
                    </a>
                    <span class="d-inline-block text-truncate text-truncate-sm">Sky High Aviation</span>
                </div>

                <img src="{{ URL::asset('img/card-backgrounds/cover-1-lg.png') }}" class="cover" alt="cover">
                    <!-- <a href="#" onclick="return false;" class="pull-trigger-btn" data-action="toggle" data-class="list-filter-active" data-target=".page-sidebar" data-focus="nav_filter_input">
                        <i class="fal fa-angle-down"></i>
                    </a> -->
            </div>
           
            <ul id="js-nav-menu" class="nav-menu">
                <li class="active">
                    <a  href="{{ url('dashboard') }}" title="Dashboard">
                        <i class="fas fa-home-lg-alt"></i>
                        <span class="nav-link-text">Dashboard</span>
                    </a>
                </li>
                <!-- Example of open and active states -->
                 <li class="open active">
                    <a href="#" title="Category" data-filter-tags="category">
                        <i class="fas fa-cog"></i>
                        <span class="nav-link-text" data-i18n="nav.category">Admin Options</span>
                    </a>

                    <ul>
                        <li>
                            <a href="javascript:void(0);" title="Menu child" data-filter-tags="utilities menu child">
                                <span class="nav-link-text" data-i18n="nav.utilities_menu_child">Students</span>
                            </a>

                            <ul>
                                <li class="">
                                    <a href="{{ url('student') }}" >
                                      <i class="fas fa-user"></i>
                                        <span class="menu-item-parent">Add student</span>
                                    </a>
                                </li>

                                <li class="">
                                    <a href="{{ url('all_students') }}" >
                                        <i class="fas fa-users"></i>
                                        <span class="menu-item-parent">View all students</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript:void(0);" title="Menu child" data-filter-tags="utilities menu child">
                                <span class="nav-link-text" data-i18n="nav.utilities_menu_child">Fees</span>
                            </a>

                            <ul>
                                <li class="">
                                     <a href="{{ url('getID') }}" >
                                        <i class="fas fa-money-bill"></i>
                                        <span class="menu-item-parent">Add a fee payment</span>
                                    </a>
                                </li>

                                <li class="">
                                     <a href="{{ url('all_payments') }}" >
                                        <i class="fas fa-money-bill-wave"></i>
                                        <span class="menu-item-parent">View all fee details</span>
                                    </a>
                                </li>
                            </ul>
                        </li>


                    </ul>
                </li>
                
           
            <div class="filter-message js-filter-message bg-success-600"></div>
        </nav>

        <!-- END PRIMARY NAVIGATION -->
     
    </aside>
                <!-- END Left Aside -->