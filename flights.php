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
    <title>Jetravox - Book Cheap Flights & International Airfare</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Find the best flight deals on Jetravox. Search, compare, and book cheap airline tickets for domestic and international travel with ease. Your journey starts here.">
    <meta name="keywords" content="Flights, flight booking, cheap airfare, airline tickets, Jetravox, book flights online, travel deals, low cost carriers, international flights, domestic travel">
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

    <!-- ====== Header Section Start ======= -->
    <?php include('include/header.php'); ?>
    <!-- ====== Header Section End ======= -->

    <?php include('include/mobile-pop.php'); ?>

    <!-- ======== Search Form Start ======= -->
    <section class="relative py-36 table w-full items-center bg-center" id="home" style="background-image: url('images/bg/6.jpg');">
        <div class="absolute inset-0 bg-slate-900/40"></div>
        <div class="container relative">
            <div class="grid grid-cols-1">
                <div class="text-center">
                    <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-6xl mb-6 mt-5">
                        The world is calling. Fly for less.
                    </h1>
                    <p class="text-white/70 text-xl mx-auto">
                        Search millions of airfares in seconds. Compare the best deals from top airlines and take off with Jetravox today!
                    </p>
                    <div class="mt-6">
                        <!-- Tabs -->
                        <div class="tabs">
                            <button class="tab active" data-tab="flights">
                                <i class="fa-solid fa-plane"></i> Flights
                            </button>

                            <a href="cruiselines">
                                <button class="tab">
                                    <i class="fa-solid fa-ship"></i> Cruiselines
                                </button>
                            </a>
                        </div>
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

    <!-- ======= Start Content ====== -->
    <section class="relative md:py-24 py-16 overflow-hidden">
        <!-- Why Book With Us Start -->
        <div class="container relative ">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Why book with us?</h3>
            </div>
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
                <div class="group rounded-md shadow-sm dark:shadow-gray-700">
                    <div class="md:flex md:items-center">
                        <div class="p-4 w-full">
                            <a class="text-lg font-medium hover:text-primary duration-500 ease-in-out"><i class="fa-solid fa-paper-plane"></i> Simple & Fast Flight Booking</a>
                            <p class="flex items-center text-slate-400 font-medium mb-2"> Finding the perfect flight shouldn't be a chore. Simply enter your departure and destination, and let Jetravox do the heavy lifting. Our advanced search engine scans thousands of routes in real-time to bring you the best options at the most competitive prices. From instant confirmation to a seamless checkout, we’ve built a hassle-free experience tailored to your schedule. What are you waiting for? Your next adventure is just a click away with Jetravox.</p>
                        </div>
                    </div>
                </div>

                <div class="group rounded-md shadow-sm dark:shadow-gray-700">
                    <div class="md:flex md:items-center">
                        <div class="p-4 w-full">
                            <a class="text-lg font-medium hover:text-primary duration-500 ease-in-out"><i class="fa-solid fa-paper-plane"></i> Best Flight Options & Global Value</a>
                            <p class="flex items-center text-slate-400 font-medium mb-2"> Access real-time data from hundreds of airlines and discover the web's best flight deals—all in one powerful interface. With Jetravox, you can compare live pricing, filter by your preferred schedule, and secure your seat in seconds. Experience a smarter way to fly with competitive fares, flexible booking tools, and a seamless checkout every time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Why Book With Us End -->

        <!-- Destinations Start -->
        <div class="container relative md:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Popular Flight Destinations</h3>

                <p class="text-slate-400 max-w-xl mx-auto">Explore the world with Jetravox. We find the most affordable routes to the globe's most iconic cities!</p>
            </div>

            <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 relative mt-6 gap-6">
                <div class="group relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-800">
                    <img src="images/listing/1.jpg" class="scale-125 group-hover:scale-100 duration-500" alt="Flights to Rome">
                    <div class="absolute inset-0 bg-gradient-to-b to-slate-900 from-transparent opacity-0 group-hover:opacity-100 duration-500"></div>
                    <div class="absolute p-4 bottom-0 start-0">
                        <a class="text-lg font-medium text-white hover:text-red-500 duration-500 ease-in-out">Rome, Italy</a>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-800">
                    <img src="images/listing/2.jpg" class="scale-125 group-hover:scale-100 duration-500" alt="Flights to Singapore">
                    <div class="absolute inset-0 bg-gradient-to-b to-slate-900 from-transparent opacity-0 group-hover:opacity-100 duration-500"></div>
                    <div class="absolute p-4 bottom-0 start-0">
                        <a class="text-lg font-medium text-white hover:text-red-500 duration-500 ease-in-out">Singapore</a>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-800">
                    <img src="images/listing/3.jpg" class="scale-125 group-hover:scale-100 duration-500" alt="Flights to Paris">
                    <div class="absolute inset-0 bg-gradient-to-b to-slate-900 from-transparent opacity-0 group-hover:opacity-100 duration-500"></div>
                    <div class="absolute p-4 bottom-0 start-0">
                        <a class="text-lg font-medium text-white hover:text-red-500 duration-500 ease-in-out">Paris, France</a>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-800">
                    <img src="images/listing/4.jpg" class="scale-125 group-hover:scale-100 duration-500" alt="Flights to Goa">
                    <div class="absolute inset-0 bg-gradient-to-b to-slate-900 from-transparent opacity-0 group-hover:opacity-100 duration-500"></div>
                    <div class="absolute p-4 bottom-0 start-0">
                        <a class="text-lg font-medium text-white hover:text-red-500 duration-500 ease-in-out">Goa, India</a>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-800">
                    <img src="images/listing/5.jpg" class="scale-125 group-hover:scale-100 duration-500" alt="Flights to Whistler">
                    <div class="absolute inset-0 bg-gradient-to-b to-slate-900 from-transparent opacity-0 group-hover:opacity-100 duration-500"></div>
                    <div class="absolute p-4 bottom-0 start-0">
                        <a class="text-lg font-medium text-white hover:text-red-500 duration-500 ease-in-out">Whistler, Canada</a>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-800">
                    <img src="images/listing/6.jpg" class="scale-125 group-hover:scale-100 duration-500" alt="Flights to Kuala Lumpur">
                    <div class="absolute inset-0 bg-gradient-to-b to-slate-900 from-transparent opacity-0 group-hover:opacity-100 duration-500"></div>
                    <div class="absolute p-4 bottom-0 start-0">
                        <a class="text-lg font-medium text-white hover:text-red-500 duration-500 ease-in-out">Kuala Lumpur</a>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-800">
                    <img src="images/listing/7.jpg" class="scale-125 group-hover:scale-100 duration-500" alt="Flights to Sydney">
                    <div class="absolute inset-0 bg-gradient-to-b to-slate-900 from-transparent opacity-0 group-hover:opacity-100 duration-500"></div>
                    <div class="absolute p-4 bottom-0 start-0">
                        <a class="text-lg font-medium text-white hover:text-red-500 duration-500 ease-in-out">Sydney, Australia</a>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-800">
                    <img src="images/listing/8.jpg" class="scale-125 group-hover:scale-100 duration-500" alt="Flights to Virginia Beach">
                    <div class="absolute inset-0 bg-gradient-to-b to-slate-900 from-transparent opacity-0 group-hover:opacity-100 duration-500"></div>
                    <div class="absolute p-4 bottom-0 start-0">
                        <a class="text-lg font-medium text-white hover:text-red-500 duration-500 ease-in-out">Virginia Beach</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Destinations End -->

        <!-- How It Works for You Start -->
        <div class="container relative md:mt-24 mt-16 ">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">How It Works for You</h3>
            </div>
            <div class="grid lg:grid-cols-3 grid-cols-1 gap-6">
                <div class="group rounded-md shadow-sm dark:shadow-gray-700">
                    <div class="md:flex md:items-center">
                        <div class="p-4 w-full">
                            <a class="text-lg font-medium hover:text-primary duration-500 ease-in-out"><i class="fa-solid fa-1"></i> Find the Best Flight Deals with JetRavox</a>
                            <p class="flex items-center text-slate-400 font-medium mb-2"> At JetRavox, we connect you with trusted booking systems and reliable travel partners to bring you the best flight prices available. Our platform makes it easy to compare options, book quickly, and travel with confidence. Enjoy smooth, simple, and dependable flight planning every time you fly.</p>
                        </div>
                    </div>
                </div>

                <div class="group rounded-md shadow-sm dark:shadow-gray-700">
                    <div class="md:flex md:items-center">
                        <div class="p-4 w-full">
                            <a class="text-lg font-medium hover:text-primary duration-500 ease-in-out"><i class="fa-solid fa-2"></i> Get FREE Flight Quotes</a>
                            <p class="flex items-center text-slate-400 font-medium mb-2"> Connect with our travel specialists to discover the best flight options for your journey. Review your personalized itinerary and confirm when you're ready—your booking will only be processed after your approval with a secure payment system.</p>
                        </div>
                    </div>
                </div>
                <div class="group rounded-md shadow-sm dark:shadow-gray-700">
                    <div class="md:flex md:items-center">
                        <div class="p-4 w-full">
                            <a class="text-lg font-medium hover:text-primary duration-500 ease-in-out"><i class="fa-solid fa-3"></i> Secure Payment</a>
                            <p class="flex items-center text-slate-400 font-medium mb-2"> Confirm your flight and complete your booking with confidence. JetRavox offers multiple secure payment options while ensuring your personal and payment information remains fully protected at every step.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- How It Works for You End -->

        <!-- Featured Flight Deals Start -->
        <div class="container relative md:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">Featured Flight Deals</h3>

                <p class="text-slate-400 max-w-xl mx-auto">Ready for takeoff? Jetravox finds the most affordable airfares to the world’s top destinations, tailored to your budget!</p>
            </div>

            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 mt-6 gap-6">
                <div class="group rounded-md shadow-sm dark:shadow-gray-700">
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 mx-2 mt-2">
                        <img src="images/listing/11.jpg" class="scale-125 group-hover:scale-100 duration-500" alt="travel">
                    </div>

                    <div class="p-3">
                        <p class="flex items-center text-slate-400 font-medium mb-2"><i data-feather="map-pin" class="text-red-500 size-4 me-1"></i> Dubai</p>
                        <a href="#home" class="text-lg font-medium hover:text-red-500 duration-500 ease-in-out">Cuba Sailing Adventure</a>

                        <div class="mt-3 pt-3 flex justify-between items-center border-t border-slate-100 dark:border-gray-800">

                            <a href="#home" class="text-slate-400 hover:text-red-500">Explore Now <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="group rounded-md shadow-sm dark:shadow-gray-700">
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 mx-2 mt-2">
                        <img src="images/listing/12.jpg" class="scale-125 group-hover:scale-100 duration-500" alt="travel">
                    </div>

                    <div class="p-3">
                        <p class="flex items-center text-slate-400 font-medium mb-2"><i data-feather="map-pin" class="text-red-500 size-4 me-1"></i> Italy</p>
                        <a href="#home" class="text-lg font-medium hover:text-red-500 duration-500 ease-in-out">Tour in New York</a>
                        <div class="mt-3 pt-3 flex justify-between items-center border-t border-slate-100 dark:border-gray-800">

                            <a href="#home" class="text-slate-400 hover:text-red-500">Explore Now <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="group rounded-md shadow-sm dark:shadow-gray-700">
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 mx-2 mt-2">
                        <img src="images/listing/10.jpg" class="scale-125 group-hover:scale-100 duration-500" alt="travel">
                    </div>

                    <div class="p-3">
                        <p class="flex items-center text-slate-400 font-medium mb-2"><i data-feather="map-pin" class="text-red-500 size-4 me-1"></i> Maldivas</p>
                        <a href="#home" class="text-lg font-medium hover:text-red-500 duration-500 ease-in-out">Discover Greece</a>


                        <div class="mt-3 pt-3 flex justify-between items-center border-t border-slate-100 dark:border-gray-800">
                            <a href="#home" class="text-slate-400 hover:text-red-500">Explore Now <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="group rounded-md shadow-sm dark:shadow-gray-700">
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 mx-2 mt-2">
                        <img src="images/listing/9.jpg" class="scale-125 group-hover:scale-100 duration-500" alt="travel">
                    </div>

                    <div class="p-3">
                        <p class="flex items-center text-slate-400 font-medium mb-2"><i data-feather="map-pin" class="text-red-500 size-4 me-1"></i> USA</p>
                        <a href="#home" class="text-lg font-medium hover:text-red-500 duration-500 ease-in-out">Museum of Modern Art</a>
                        <div class="mt-3 pt-3 flex justify-between items-center border-t border-slate-100 dark:border-gray-800">
                            <a href="#home" class="text-slate-400 hover:text-red-500">Explore Now <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="group rounded-md shadow-sm dark:shadow-gray-700">
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 mx-2 mt-2">
                        <img src="images/listing/8.jpg" class="scale-125 group-hover:scale-100 duration-500" alt="travel">
                    </div>

                    <div class="p-3">
                        <p class="flex items-center text-slate-400 font-medium mb-2"><i data-feather="map-pin" class="text-red-500 size-4 me-1"></i> Bali</p>
                        <a href="#home" class="text-lg font-medium hover:text-red-500 duration-500 ease-in-out">Peek Mountain View</a>
                        <div class="mt-3 pt-3 flex justify-between items-center border-t border-slate-100 dark:border-gray-800">
                            <a href="#home" class="text-slate-400 hover:text-red-500">Explore Now <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="group rounded-md shadow-sm dark:shadow-gray-700">
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 mx-2 mt-2">
                        <img src="images/listing/1.jpg" class="scale-125 group-hover:scale-100 duration-500" alt="travel">
                    </div>

                    <div class="p-3">
                        <p class="flex items-center text-slate-400 font-medium mb-2"><i data-feather="map-pin" class="text-red-500 size-4 me-1"></i> Bangkok</p>
                        <a href="#home" class="text-lg font-medium hover:text-red-500 duration-500 ease-in-out">Hot Baloon Journey</a>
                        <div class="mt-3 pt-3 flex justify-between items-center border-t border-slate-100 dark:border-gray-800">
                            <a href="#home" class="text-slate-400 hover:text-red-500">Explore Now <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="group rounded-md shadow-sm dark:shadow-gray-700">
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 mx-2 mt-2">
                        <img src="images/listing/7.jpg" class="scale-125 group-hover:scale-100 duration-500" alt="travel">
                    </div>

                    <div class="p-3">
                        <p class="flex items-center text-slate-400 font-medium mb-2"><i data-feather="map-pin" class="text-red-500 size-4 me-1"></i> Singapore</p>
                        <a href="#home" class="text-lg font-medium hover:text-red-500 duration-500 ease-in-out">Orca Camp Kayaking Trip</a>
                        <div class="mt-3 pt-3 flex justify-between items-center border-t border-slate-100 dark:border-gray-800">
                            <a href="#home" class="text-slate-400 hover:text-red-500">Explore Now <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="group rounded-md shadow-sm dark:shadow-gray-700">
                    <div class="relative overflow-hidden rounded-md shadow-sm dark:shadow-gray-700 mx-2 mt-2">
                        <img src="images/listing/3.jpg" class="scale-125 group-hover:scale-100 duration-500" alt="travel">
                    </div>

                    <div class="p-3">
                        <p class="flex items-center text-slate-400 font-medium mb-2"><i data-feather="map-pin" class="text-red-500 size-4 me-1"></i> Thailand</p>
                        <a href="#home" class="text-lg font-medium hover:text-red-500 duration-500 ease-in-out">Caño Cristales River Trip</a>
                        <div class="mt-3 pt-3 flex justify-between items-center border-t border-slate-100 dark:border-gray-800">
                            <a href="#home" class="text-slate-400 hover:text-red-500">Explore Now <i class="mdi mdi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured Flight Deals End -->

        <!-- How Booking Works At Jetravox Start -->
        <div class="container relative  md:mt-24 mt-16 ">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-semibold">How Booking Works at Jetravox</h3>
            </div>
            <div class="grid lg:grid-cols-2 grid-cols-1 gap-6">
                <div class="group rounded-md shadow-sm dark:shadow-gray-700">
                    <div class="md:flex md:items-center">
                        <div class="p-4 w-full">
                            <p class="flex items-center text-slate-400 font-medium mb-2">JetRavox helps you book flights easily through trusted booking systems and verified travel partners. Our goal is to make your travel planning simple, convenient, and reliable.</p>
                        </div>
                    </div>
                </div>

                <div class="group rounded-md shadow-sm dark:shadow-gray-700">
                    <div class="md:flex md:items-center">
                        <div class="p-4 w-full">
                            <p class="flex items-center text-slate-400 font-medium mb-2"> Before payment, we clearly share all important details including fares, airline policies, refund terms, and service fees. Once your booking is confirmed, your e-tickets are issued electronically and delivered directly to your email.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- How Booking Works At Jetravox End -->
    </section>
    <!-- ======= End Content ======== -->

    <!-- Insta Post Start -->
    <div class="container-fluid relative">
        <div class="grid grid-cols-1 relative">
            <div class="tiny-twelve-item">
                <div class="tiny-slide">
                    <a href="images/listing/1.jpg" class="lightbox d-inline-block">
                        <img src="images/listing/1.jpg" class="sm:size-40 object-cover" alt="travel">
                    </a>
                </div>

                <div class="tiny-slide">
                    <a href="images/listing/2.jpg" class="lightbox d-inline-block">
                        <img src="images/listing/2.jpg" class="sm:size-40 object-cover" alt="travel">
                    </a>
                </div>

                <div class="tiny-slide">
                    <a href="images/listing/3.jpg" class="lightbox d-inline-block">
                        <img src="images/listing/3.jpg" class="sm:size-40 object-cover" alt="travel">
                    </a>
                </div>

                <div class="tiny-slide">
                    <a href="images/listing/4.jpg" class="lightbox d-inline-block">
                        <img src="images/listing/4.jpg" class="sm:size-40 object-cover" alt="travel">
                    </a>
                </div>

                <div class="tiny-slide">
                    <a href="images/listing/5.jpg" class="lightbox d-inline-block">
                        <img src="images/listing/5.jpg" class="sm:size-40 object-cover" alt="travel">
                    </a>
                </div>

                <div class="tiny-slide">
                    <a href="images/listing/6.jpg" class="lightbox d-inline-block">
                        <img src="images/listing/6.jpg" class="sm:size-40 object-cover" alt="travel">
                    </a>
                </div>

                <div class="tiny-slide">
                    <a href="images/listing/7.jpg" class="lightbox d-inline-block">
                        <img src="images/listing/7.jpg" class="sm:size-40 object-cover" alt="travel">
                    </a>
                </div>

                <div class="tiny-slide">
                    <a href="images/listing/8.jpg" class="lightbox d-inline-block">
                        <img src="images/listing/8.jpg" class="sm:size-40 object-cover" alt="travel">
                    </a>
                </div>

                <div class="tiny-slide">
                    <a href="images/listing/9.jpg" class="lightbox d-inline-block">
                        <img src="images/listing/9.jpg" class="sm:size-40 object-cover" alt="travel">
                    </a>
                </div>

                <div class="tiny-slide">
                    <a href="images/listing/10.jpg" class="lightbox d-inline-block">
                        <img src="images/listing/10.jpg" class="sm:size-40 object-cover" alt="travel">
                    </a>
                </div>

                <div class="tiny-slide">
                    <a href="images/listing/11.jpg" class="lightbox d-inline-block">
                        <img src="images/listing/11.jpg" class="sm:size-40 object-cover" alt="travel">
                    </a>
                </div>

                <div class="tiny-slide">
                    <a href="images/listing/12.jpg" class="lightbox d-inline-block">
                        <img src="images/listing/12.jpg" class="sm:size-40 object-cover" alt="travel">
                    </a>
                </div>

                <div class="tiny-slide">
                    <a href="images/listing/5.jpg" class="lightbox d-inline-block">
                        <img src="images/listing/5.jpg" class="sm:size-40 object-cover" alt="travel">
                    </a>
                </div>

                <div class="tiny-slide">
                    <a href="images/listing/8.jpg" class="lightbox d-inline-block">
                        <img src="images/listing/8.jpg" class="sm:size-40 object-cover" alt="travel">
                    </a>
                </div>

                <div class="tiny-slide">
                    <a href="images/listing/4.jpg" class="lightbox d-inline-block">
                        <img src="images/listing/4.jpg" class="sm:size-40 object-cover" alt="travel">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Insta Post End -->

    <!-- ===== Footer Start ======== -->
    <?php include('include/footer.php'); ?>
    <!-- ===== Footer End ======== -->

    <script>
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

    <!-- Jquery link -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="assets/js/mobile-pop.js"></script>
    <script src="assets/js/search-form.js"></script>
    <!-- JAVASCRIPTS -->
    <script src="assets/libs/tobii/js/tobii.min.js"></script>
    <script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
    <script src="assets/libs/feather-icons/feather.min.js"></script>
    <script src="assets/js/plugins.init.js"></script>
    <script src="assets/js/app.js"></script>
    <!-- JAVASCRIPTS -->
</body>

</html>