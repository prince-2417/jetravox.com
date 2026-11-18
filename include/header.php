    <!-- TAGLINE START-->
    <div class="tagline bg-slate-900">
        <div class="container relative">
            <div class="grid grid-cols-1">
                <div class="flex items-center justify-between">
                    <ul class="list-none">
                        <li class="inline-flex items-center">
                            <i data-feather="phone" class="text-red-500 size-4"></i>
                            <span class="ms-2 text-slate-300"><a href="tel:1-844-915-5436">1-844-915-5436</a></span>
                        </li>
                    </ul>

                    <ul class="list-none">
                        <li class="inline-flex items-center">
                            <i data-feather="mail" class="text-red-500 size-4"></i>
                            <a href="mailto:support@jetravox.com" class="ms-2 text-slate-300 hover:text-slate-200">support@jetravox.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- TAGLINE END-->

    <!-- Start Navbar -->
    <nav id="topnav" class="defaultscroll is-sticky tagline-height">
        <div class="container relative">
            <!-- Logo container-->
            <a class="logo" href="/">
                <span class="inline-block dark:hidden">
                    <img src="images/logo-dark.png" class="h-7 l-dark" alt="jetravox">
                    <img src="images/logo-light.png" class="h-7 l-light" alt="jetravox">
                </span>
                <img src="images/logo-white.png" class="hidden dark:inline-block" alt="">
            </a>
            <!-- End Logo container-->

            <!-- Start Mobile Toggle -->
            <div class="menu-extras">
                <div class="menu-item">
                    <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                        <div class="lines">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </a>
                </div>
            </div>
            <!-- End Mobile Toggle -->

            <div id="navigation">
                <!-- Navigation Menu-->
                <ul class="navigation-menu nav-right !justify-end nav-light">
                    <li><a href="/" class="sub-menu-item">Home</a></span></li>
                    <li><a href="flights" class="sub-menu-item">Flights</a></span></li>
                    <li><a href="cruiselines" class="sub-menu-item">Cruiselines</a></span></li>
                    <li class="has-submenu parent-menu-item">
                        <a href="javascript:void(0)">About</a><span class="menu-arrow"></span>
                        <ul class="submenu">
                            <li><a href="about-us" class="sub-menu-item">About Us</a></li>
                            <li><a href="legal-business-information" class="sub-menu-item">Legal Business Information</a></li>
                            <li><a href="how-we-book-issue-airline-tickets" class="sub-menu-item">How We Book & Issue Airline Tickets</a></li>
                            <li><a href="payment-transparency-disclosure" class="sub-menu-item">Payment & Transparency Disclosure</a></li>
                        </ul>
                    </li>

                    <li><a href="contact-us" class="sub-menu-item">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->