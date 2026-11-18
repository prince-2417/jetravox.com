 <!-- Start Navbar -->
 <nav id="topnav" class="defaultscroll is-sticky">
     <div class="container relative">
         <!-- Logo container-->
         <a class="logo" href="/">
             <div>
                 <img src="images/logo-dark.png" class="h-7 inline-block dark:hidden" alt="jetravox">
                 <img src="images/logo-white.png" class="h-7 hidden dark:inline-block" alt="jetravox">
             </div>
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
             <ul class="navigation-menu nav-right !justify-end">
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