    <header class="header">
        <div class="logo-wrapper">
            <a href="index.html" class="logo">
                <img src="{{ asset('img/logo.png') }}" alt="Wafi Admin Dashboard" />
            </a>
            <a href="#" class="quick-links-btn" data-toggle="tooltip" data-placement="right" title="" data-original-title="Quick Links">
                <i class="icon-menu1"></i>
            </a>
        </div>
        <div class="header-items">
            <!-- Custom search start -->
            <div class="custom-search">
                <input type="text" class="search-query" placeholder="Search here ...">
                <i class="icon-search1"></i>
            </div>
            <!-- Custom search end -->

            <!-- Header actions start -->
            <ul class="header-actions">
                <li class="dropdown">
                    <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                        <i class="icon-box"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
                        <div class="dropdown-menu-header">
                            Tasks (05)
                        </div>	
                        <ul class="header-tasks">
                            <li>
                                <p>#48 - Dashboard UI<span>90%</span></p>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                        <span class="sr-only">90% Complete (success)</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <p>#95 - Alignment Fix<span>60%</span></p>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                        <span class="sr-only">60% Complete (success)</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <p>#7 - Broken Button<span>40%</span></p>
                                <div class="progress">
                                    <div class="progress-bar bg-secondary" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Complete (success)</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" id="notifications" data-toggle="dropdown" aria-haspopup="true">
                        <i class="icon-bell"></i>
                        <span class="count-label">8</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right lrg" aria-labelledby="notifications">
                        <div class="dropdown-menu-header">
                            Notifications (40)
                        </div>
                        <ul class="header-notifications">
                            <li>
                                <a href="#">
                                    <div class="user-img away">
                                        <img src="img/user21.png" alt="User" />
                                    </div>
                                    <div class="details">
                                        <div class="user-title">Abbott</div>
                                        <div class="noti-details">Membership has been ended.</div>
                                        <div class="noti-date">Oct 20, 07:30 pm</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="user-img busy">
                                        <img src="img/user10.png" alt="User" />
                                    </div>
                                    <div class="details">
                                        <div class="user-title">Braxten</div>
                                        <div class="noti-details">Approved new design.</div>
                                        <div class="noti-date">Oct 10, 12:00 am</div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="user-img online">
                                        <img src="img/user6.png" alt="User" />
                                    </div>
                                    <div class="details">
                                        <div class="user-title">Larkyn</div>
                                        <div class="noti-details">Check out every table in detail.</div>
                                        <div class="noti-date">Oct 15, 04:00 pm</div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" id="userSettings" class="user-settings" data-toggle="dropdown" aria-haspopup="true">
                        <span class="user-name">Zyan Ferris</span>
                        <span class="avatar">ZF<span class="status busy"></span></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userSettings">
                        <div class="header-profile-actions">
                            <div class="header-user-profile">
                                <div class="header-user">
                                    <img src="img/user.png" alt="Admin Template" />
                                </div>
                                <h5>Zyan Ferris</h5>
                                <p>Admin</p>
                            </div>
                            <a href="user-profile.html"><i class="icon-user1"></i> My Profile</a>
                            <a href="account-settings.html"><i class="icon-settings1"></i> Account Settings</a>
                            <a href="login.html"><i class="icon-log-out1"></i> Sign Out</a>
                        </div>
                    </div>
                </li>
                <li>
                    <a href="#" class="quick-settings-btn" data-toggle="tooltip" data-placement="left" title="" data-original-title="Quick Settings">
                        <i class="icon-list"></i>
                    </a>
                </li>
            </ul>						
            <!-- Header actions end -->
        </div>
    </header>