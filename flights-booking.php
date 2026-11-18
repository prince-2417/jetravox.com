<?php
$utm = isset($_GET['utm_text']) ? $_GET['utm_text'] : 'flights-Booking';

// "flights-to-delhi" → "delhi"
$city = str_replace('flights-Booking-', '', $utm);

// Fix formatting
$city = ucwords(str_replace('-', ' ', $city));
?>
<!DOCTYPE html>
<html lang="en" class="light scroll-smooth" dir="ltr">

<head>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-TM43KFCZ');
    </script>
    <!-- End Google Tag Manager -->

    <script>
        gtag('config', 'AW-18036520657/VP2CCJTFmMIcENHtvZhD', {
            'phone_conversion_number': '1-844-915-5436'
        });
    </script>

    <meta charset="UTF-8">
    <title>Flight Booking Online | Cheap Domestic & International Flights - Jetravox</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Book flights online with Jetravox and grab the best deals on domestic and international airfare. Compare airlines, find low-cost tickets, and enjoy a smooth booking experience.">
    <meta name="keywords" content="flight booking online, cheap flights, book airline tickets, international flights, domestic flights, airfare deals, low cost airlines, Jetravox flights booking">
    <meta name="author" content="Jetravox">
    <meta name="website" content="https://jetravox.com/">
    <meta name="email" content="support@jetravox.com">
    <meta name="version" content="1.5.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Css -->
    <link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
    <link href="assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
    <!-- Main Css -->
    <link href="assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/tailwind.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="assets/css/search-form.css">
    <link rel="stylesheet" href="assets/css/my-css.css">
    <link rel="stylesheet" href="assets/css/airline.css">
    <link rel="stylesheet" href="assets/css/mobile-pop.css">
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Include flatpickr CSS & JS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

</head>

<body class="dark:bg-slate-900">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TM43KFCZ"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Flight Preloader -->
    <div id="flightPreloader">
        <div class="flight-loader">
            <div class="plane">✈</div>
            <p>Searching best flights for you...</p>
        </div>
    </div>

    <!-- Top Header Sechtion -->
    <div class="top-banner">
        <div class="container">
            <a href="tel:1-844-915-5436" class="dynamic-phone">
                <div class="banner-item left">
                    <span class="icon"><i class="fa-solid fa-phone"></i></span>
                    <span>CALL NOW & SAVE UP TO 60%</span>
                </div>
            </a>

            <div class="divider"></div>

            <div class="banner-item center">
                <span>24/7 FLIGHT BOOKING EXPERTS</span>
            </div>

            <div class="divider"></div>

            <a href="tel:1-844-915-5436" class="dynamic-phone">
                <div class="banner-item right">
                    <span class="icon"><i class="fa-solid fa-phone"></i></span>
                    <span>1-844-915-5436</span>
                </div>
            </a>

        </div>
    </div>
    <!-- Top Header Section -->

    <!-- Hero Section -->
    <section class="hero" style="  background: url('images/airlines/tour-img1.webp') no-repeat center/cover;">
        <div class="overlay"></div>

        <div class="content">

            <h1>Fly More, Pay Less – Global Deals</h1>

            <p class="subtitle">
                Save Up to <span class="highlight">60% OFF</span> on <br> Fly More, Pay Less – Global Deals
            </p>

            <p class="small-text">Limited-Time Phone-Only Deals!</p>

            <ul class="features">
                <li><i class="fa-solid fa-circle-check"></i> Instant Booking</li>
                <li><i class="fa-solid fa-circle-check"></i> No Hidden Fees</li>
                <li><i class="fa-solid fa-circle-check"></i> 24/7 Live Support</li>
            </ul>

            <div class="buttons">
                <a href="tel:1-844-915-5436" class="btn red dynamic-phone"
                    style="display: inline-flex; align-items: center; gap: 8px; text-decoration: none;">

                    <span style="display: inline-flex;">
                        <img src="images/airlines/white-call.png" alt="Call Now" style="width: 30px;">
                    </span>
                    CALL NOW – GET BEST DEAL </i>
                </a>

                <a href="tel:1-844-915-5436" class="dynamic-phone">
                    <button class="btn blue">
                        <i class="fa-solid fa-phone"></i> 1-844-915-5436
                    </button>
                </a>
            </div>

            <p class="trusted">Trusted by 10,000+ Travelers</p>

        </div>

        <img src="images/airlines/airplan.png" class="plane" alt="plane">

    </section>
    <!-- Hero Section -->

    <!-- ======== Search Form Start ======= -->
    <section class="relative table w-full items-center bg-center">
        <h1 style="color: #1a2a44; margin-top: 20px;" class="text-center">Fly More, Pay Less – Global Deals</h1>
        <div class="container relative">
            <div class="grid grid-cols-1">
                <div class="text-center">
                    <div class="mt-6">
                        <form action="flights-results" method="post">
                            <div class="booking-box">
                                <div class="tab-content1 active" id="flights">
                                    <div class="trip-type">
                                        <label>
                                            <input type="radio" name="tripType" value="roundtrip" checked> Round Trip
                                        </label>
                                        <label>
                                            <input type="radio" name="tripType" value="oneway"> One Way
                                        </label>
                                    </div>

                                    <div class="form-grid">
                                        <div class="input-box">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <input type="text" id="fromAirport" name="from_code" placeholder="From Where?">
                                        </div>
                                        <div class="input-box">
                                            <i class="fa-solid fa-location-dot"></i>
                                            <input type="text" id="toAirport" name="to_code" placeholder="To Where?">
                                        </div>
                                        <div class="date-box" id="departDateBox">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <input type="text" id="date1" name="depart_date" placeholder="YYYY-MM-DD">
                                        </div>

                                        <div class="date-box" id="returnDateBox">
                                            <i class="fa-solid fa-calendar-days"></i>
                                            <input type="text" id="date2" name="return_date" placeholder="YYYY-MM-DD">
                                        </div>
                                        <div class="traveler-wrapper">
                                            <input type="text" class="traveler-input" placeholder="1 Passenger, Economy" readonly>
                                        </div>
                                        <button class="search-btn1">Search</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ======== Search Form End ======= -->

    <!-- Why Call Us Section -->
    <div class="banner">
        <h2 class="banner-title">Why Call Us?</h2>

        <div class="features1">
            <div class="feature-box">
                <img src="images/airlines/deposit.png" alt="Lower Prices" loading="lazy">
                <h3><i class="fa-solid fa-check" style="color: red;"></i> Lower Prices</h3>
                <p>Guaranteed</p>
            </div>

            <div class="feature-box">
                <img src="https://cdn-icons-png.flaticon.com/512/2972/2972531.png" alt="No More Endless" loading="lazy">
                <h3><i class="fa-regular fa-circle" style="color: red;"></i> No More Endless</h3>
                <p>Searching</p>
            </div>

            <div class="feature-box">
                <img src="images/airlines/customer-service.png" alt="Talk to a" loading="lazy">
                <h3><i class="fa-solid fa-circle-user" style="color: red;"></i> Talk to a</h3>
                <p>Real Person!</p>
            </div>
        </div>
    </div>
    <!-- Why Call Us Section -->

    <!-- Benefits of Calling a Travel Expert -->
    <section class="benefits">
        <h1>Benefits of Calling a Travel Expert</h1>

        <div class="features-be">

            <div class="feature-be">
                <img src="images/airlines/discount.png" alt="Hidden Discounts" loading="lazy">
                <p>Hidden Discounts</p>
            </div>

            <div class="feature-be">
                <img src="https://cdn-icons-png.flaticon.com/512/4140/4140048.png" alt="Personalized Itineraries" loading="lazy">
                <p>Personalized Itineraries</p>
            </div>

            <div class="feature-be">
                <img src="images/airlines/transaction.png" alt="Easy Changes & Refunds" loading="lazy">
                <p>Easy Changes & Refunds</p>
            </div>

            <div class="feature-be">
                <img src="images/airlines/24-hours.png" alt="24/7 Assistance" loading="lazy">
                <p>24/7 Assistance</p>
            </div>

        </div>
    </section>
    <!-- Benefits of Calling a Travel Expert -->

    <!-- Limited Offer Section -->
    <div class="banner-limited" style="background: url('images/airlines/bg.jpg') no-repeat center/cover;">
        <div class="top-bar-limit"> LIMITED TIME OFFER </div>
        <div class="content-limit">
            <h1> Save Up To 60% <span>On Fly More, Pay Less – Global Deals!</span> </h1>
            <p>HURRY, SEATS ARE FILLING FAST!</p>

            <a href="tel:1-844-915-5436" class="cta-btn-limit dynamic-phone"
                style="display: inline-flex; align-items: center; gap: 8px; text-decoration: none;">

                <span style="display: inline-flex;">
                    <img src="images/airlines/brown-call.png" alt="Call Now" style="width: 30px;">
                </span>

                CALL NOW & SAVE BIG
            </a>
            <div class="reviews-limit">
                <div class="review-limit"> <span class="star">★</span> "Got a fantastic deal over the phone!" </div>
                <div class="review-limit"> <span class="star">★</span> "Quick and easy booking process!" </div>
            </div>
        </div>
    </div>
    <!-- Limited Offer Section -->

    <!-- Footer Section  -->
    <div class="banner-footer">
        <h2>Need to Fly? Call & Book Now</h2>

        <a href="tel:1-844-915-5436" class="cta-btn-footer dynamic-phone">

            <span class="phone-icon-footer">
                <i class="fa-solid fa-phone"></i>
            </span>

            <span class="phone-number">1-844-915-5436</span>

        </a>
    </div>
    <!-- Footer Section  -->

    <!-- Mobile Call footer -->
    <div class="footerttf">
        <div class="footerTfn intro">
            <a href="tel:1-844-915-5436" class="dynamic-phone">
                <i class="fa-solid fa-phone"></i>
                <div class="ftfnDiv">
                    <div class="footCont">
                        <span>Talk to our agents for quick help!</span>
                        <h3>1-844-915-5436</h3>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <!-- Mobile Call footer -->


    <script>
        // Mobile Footer Show Hide on Scroll
        let lastScrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const footer = document.querySelector('.footerttf');

        window.addEventListener('scroll', function() {
            let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

            if (scrollTop > lastScrollTop && scrollTop > 50) {
                // Scroll DOWN
                footer.classList.add('show');
            } else {
                // Scroll UP or near top
                footer.classList.remove('show');
            }

            lastScrollTop = scrollTop;
        });

        // Serach Form Js
        const roundTrip = document.getElementById("roundTrip");
        const oneWay = document.getElementById("oneWay");
        const returnDate = document.getElementById("return-date-group");
        const hiddenTrip = document.getElementById("hidden_triptype");

        oneWay.addEventListener("change", () => {
            returnDate.style.display = "none";
            hiddenTrip.value = "oneway";
        });

        roundTrip.addEventListener("change", () => {
            returnDate.style.display = "block";
            hiddenTrip.value = "round";
        });

        // Set today as min date
        window.addEventListener("load", () => {
            const depart = document.querySelector('input[name="depart_date"]');
            const today = new Date().toISOString().split("T")[0];
            depart.value = today;
            depart.min = today;
        });

        // Airport Autocomplete Js
        document.addEventListener("DOMContentLoaded", () => {

            let airportData = [];

            fetch("airport.json")
                .then(res => res.json())
                .then(data => airportData = data)
                .catch(err => console.error(err));

            const inputs = document.querySelectorAll(
                '.hero-search input[placeholder="From Destination"], .hero-search input[placeholder="To Destination"]'
            );

            inputs.forEach(input => {

                const list = document.createElement("ul");
                Object.assign(list.style, {
                    position: "absolute",
                    top: "100%",
                    left: "0",
                    right: "0",
                    background: "#fff",
                    border: "1px solid #ccc",
                    listStyle: "none",
                    padding: "0",
                    margin: "0",
                    maxHeight: "300px",
                    overflowY: "auto",
                    display: "none",
                    zIndex: "9999"
                });

                input.parentElement.style.position = "relative";
                input.parentElement.appendChild(list);

                input.addEventListener("input", () => {
                    const value = input.value.toLowerCase();
                    list.innerHTML = "";

                    if (value.length < 2) {
                        list.style.display = "none";
                        return;
                    }

                    const matches = airportData.filter(a =>
                        a.name?.toLowerCase().includes(value) ||
                        a.name_translations?.en?.toLowerCase().includes(value) ||
                        a.code?.toLowerCase().includes(value)
                    );

                    matches.slice(0, 10).forEach(a => {
                        const city = a.name_translations?.en || a.name;
                        const code = a.code;

                        const li = document.createElement("li");
                        li.style.padding = "8px";
                        li.style.cursor = "pointer";
                        li.innerHTML = `<strong>${city} (${code})</strong>`;

                        li.addEventListener("click", () => {
                            input.value = `${city} (${code})`;

                            if (input.placeholder === "From Destination") {
                                document.querySelector('input[name="from_code"]').value = code;
                            } else {
                                document.querySelector('input[name="to_code"]').value = code;
                            }

                            list.style.display = "none";
                        });

                        list.appendChild(li);
                    });

                    list.style.display = matches.length ? "block" : "none";
                });

                document.addEventListener("click", e => {
                    if (!input.parentElement.contains(e.target)) {
                        list.style.display = "none";
                    }
                });

            });
        });

        // preloader
        document.addEventListener("DOMContentLoaded", function() {

            const form = document.querySelector("form[action='flights-results']");
            const preloader = document.getElementById("flightPreloader");

            // show preloader on submit
            form.addEventListener("submit", function() {
                preloader.style.display = "flex";
            });

            // hide when page fully loads
            window.addEventListener("load", function() {
                preloader.style.display = "none";
            });

            // prevent loader on back button
            window.addEventListener("pageshow", function(event) {
                if (event.persisted) {
                    preloader.style.display = "none";
                }
            });

        });
    </script>

    <!-- ======= Mobile PoP ===== -->
    <div id="exampleModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">

                <div class="modal-header">

                    <div class="popup-header">

                        <a href="tel:1-844-915-5436">
                            <b style="color: #000;">JetRavox</b>
                        </a>

                        <div class="utmCall-wrap">
                            <img src="images/mobile-pop/utmCall.png" alt="utmCall">

                            <a href="tel:1-844-915-5436">
                                <b>1-844-915-5436</b>
                            </a>
                        </div>

                        <button type="button" class="close" id="closePopup" aria-label="Close">
                            <i class="fa-solid fa-x"></i>
                        </button>

                    </div>

                </div>

                <div class="modal-body">

                    <a href="tel:1-844-915-5436">

                        <h3>
                            <b>Airlines Reservation</b>
                        </h3>

                        <img src="images/mobile-pop/Airline-Ticket.png" alt="banner">

                        <div id="my-buttons">
                            <button>
                                <span class="text-white">
                                    <b>New Booking</b>
                                </span>
                            </button>

                            <button>
                                <span class="text-white">
                                    <b>Changes</b>
                                </span>
                            </button>

                            <button>
                                <span class="text-white">
                                    <b>Cancellation</b>
                                </span>
                            </button>

                            <button>
                                <span class="text-white">
                                    <b>Customer Support</b>
                                </span>
                            </button>
                        </div>

                        <img src="images/mobile-pop/Airline-Generic.png" alt="Airplane" class="airplane-img">

                        <div class="agent-container">
                            <img src="images/mobile-pop/callingGirl1.png" alt="Agent" class="agent-img">
                        </div>

                        <p class="my-3">
                            <b>No Hold - Call Answered in 5 Sec</b>
                        </p>

                    </a>

                    <div class="btnCall">

                        <a href="tel:1-844-915-5436">

                            <img src="images/mobile-pop/phoneRotate.png" alt="Call Icon" id="my-call" />

                            <span class="nbrs">
                                <b>1-844-915-5436</b>
                            </span>

                        </a>

                    </div>

                    <p class="my-3">
                        <b>24/7 HELPLINE</b>
                    </p>

                </div>

            </div>
        </div>
    </div>
    <!-- ======= End Mobile PoP ===== -->

    <!-- Jquery link -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">

    <script>
        $(window).on("load", function() {

            const params = new URLSearchParams(window.location.search);

            const defaultNumber = "1-844-915-5436";
            const specialNumber = "1-844-915-5436";

            const utmPh = params.get("utm_ph");

            // Dynamic Number
            const finalNumber = (utmPh === "5436") ? specialNumber : defaultNumber;

            // update ALL tel links
            $("a[href^='tel:']").each(function() {

                $(this).attr("href", "tel:" + finalNumber);

                // update visible text safely
                $(this).find("span, h3, button, b").each(function() {

                    let txt = $(this).text().replace(/\s+/g, "").trim();

                    if (
                        txt === defaultNumber.replace(/\s+/g, "") ||
                        txt === specialNumber.replace(/\s+/g, "")
                    ) {
                        $(this).text(finalNumber);
                    }

                });

            });

        });


        $(document).ready(function() {

            var $myModal = $("#exampleModal");
            var $myInput = $("#myInput");

            const params = new URLSearchParams(window.location.search);

            const defaultNumber = "1-844-915-5436";
            const specialNumber = "1-844-915-5436";

            const utmPh = params.get("utm_ph");

            // Final Dynamic Number
            const finalNumber = (utmPh === "5436") ? specialNumber : defaultNumber;

            // Popup Show Conditions
            const showPopup =
                (
                    params.get("utm_samp") === "samp1"
                );

            // Show popup ONLY on mobile
            if (
                showPopup &&
                window.innerWidth <= 576
            ) {

                // Update popup number also
                $("#exampleModal a[href^='tel:']").each(function() {

                    $(this).attr("href", "tel:" + finalNumber);

                    $(this).find("span, h3, button, b").each(function() {

                        let txt = $(this).text().replace(/\s+/g, "").trim();

                        if (
                            txt === defaultNumber.replace(/\s+/g, "") ||
                            txt === specialNumber.replace(/\s+/g, "")
                        ) {
                            $(this).text(finalNumber);
                        }

                    });

                });

                // Hide full website except modal & preloader
                $("body")
                    .children()
                    .not("#exampleModal")
                    .not("#flightPreloader")
                    .not(".modal-backdrop")
                    .not("script")
                    .not("style")
                    .hide();

                // Show modal properly
                $myModal.css("display", "block");
                $myModal.addClass("show");

                // Add backdrop manually
                $("body").append(
                    '<div class="modal-backdrop fade show"></div>'
                );

                // Prevent body scroll
                $("body").addClass("modal-open");

                // Focus input when modal opens
                $myModal.on("shown.bs.modal", function() {
                    $myInput.focus();
                });

                // CLOSE BUTTON WORKING
                $("#closePopup").on("click", function() {

                    // Hide modal
                    $myModal.hide();
                    $myModal.removeClass("show");

                    // Remove backdrop
                    $(".modal-backdrop").remove();

                    // Enable body scroll
                    $("body").removeClass("modal-open");

                    // Show website again
                    $("body")
                        .children()
                        .not("#exampleModal")
                        .not("#flightPreloader")
                        .not("script")
                        .not("style")
                        .show();

                });

            } else {

                // Remove modal on desktop/tablet
                $myModal.remove();

            }

        });
    </script>

    <script src="assets/js/search-form.js"></script>
    <!-- JAVASCRIPTS -->
    <script src="assets/libs/tobii/js/tobii.min.js"></script>
    <script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/plugins.init.js"></script>

    <!-- JAVASCRIPTS -->
</body>

</html>